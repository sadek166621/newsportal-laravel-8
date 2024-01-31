<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public $user;


    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }
    public function admins(){
        if (is_null($this->user) || !$this->user->can('admin.view')) {
            abort(403, 'Sorry !! You are Unauthorized to View any Admins !');
        }

        $roles = Role::all();
        return view('admin.admins.add-admins',compact('roles'));
    }
    public function addadmins(Request $request){
        if (is_null($this->user) || !$this->user->can('admin.create')) {
            abort(403, 'Sorry !! You are Unauthorized to Add any Admins !');
        }

        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:100|email|unique:admins',
            'username' => 'required|max:100|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create New admin
        $admin = new admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->username = $request->username;
        $admin->password = Hash::make($request->password);
        $admin->save();

        if ($request->roles) {
            $admin->assignRole($request->roles);
        }

        session()->flash('success', 'admin has been created !!');
        return redirect('/manage-admins');
    }
    public function manageadmins(){
        $admins = admin::all();
        return view('admin.admins.manage-admins', compact('admins'));
    }
    public function editadmins($id){
        if (is_null($this->user) || !$this->user->can('admin.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to Edit any Admins !');
        }
        $admin = admin::find($id);
        $roles  = Role::all();
        return view('admin.admins.edit-admins', compact('admin', 'roles'));
    }
    public function updateadmins(Request $request){
        if (is_null($this->user) || !$this->user->can('admin.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to Update any Admins !');
        }
        $admin = admin::find($request->admins_id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:100|email|',
            'username' => 'required|max:100|',
            'password' => 'nullable|min:6|confirmed',
        ]);


        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->username = $request->username;
        if ($request->password) {
            $admin->password = Hash::make($request->password);
        }
        $admin->save();

        $admin->roles()->detach();
        if ($request->roles) {
            $admin->assignRole($request->roles);
        }

        session()->flash('success', 'admin has been updated !!');
        return redirect('/manage-admins');
    }
    public function deleteadmins($id){
        if (is_null($this->user) || !$this->user->can('admin.delete')) {
            abort(403, 'Sorry !! You are Unauthorized to Delete any Admins !');
        }
        $admin = admin::find($id);
        $admin-> delete();
        session()->flash('success', 'admin has been deleted !!');
        return back();
    }
}
