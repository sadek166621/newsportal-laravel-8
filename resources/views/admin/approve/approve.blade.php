@extends('admin.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>

            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('manage-post')}}">Approve-Post</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    @include("admin.include.messages")
                    <div class="box-header with-border">
                        <h3 class="box-title" style="margin-left: 467px">Approve-Post</h3>
                        {{--                        <button style="position: relative;left: 700px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">--}}
                        {{--                            ADD SUPPLIER--}}
                        {{--                        </button>--}}
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr >
                                <th  >Sl</th>
                                <th >Title</th>
                                <th >Is Approved</th>
                                <th >Publicaiton_Status</th>
                                <th >Image</th>
                                <th >Breaking News</th>
                                <th >Action</th>
                            </tr>
                            @foreach($posts as $post)
                                <tr >
                                    <td>{{$posts->firstItem()+$loop->index}}</td>
                                    {{--                                    <td>{{$post->category_name}}</td>--}}
                                    <td>{{$post->title}}</td>
                                    {{--                                    <td>{{$post->subcategory_name}}</td>--}}
                                    {{--                                    <td>{{$post->slug}}</td>--}}
                                    {{--                                    <td>...</td>--}}
                                    {{--                                    <td>{{$post->video_link}}</td>--}}
                                    <td>
                                        @if($post->is_approve==true)
                                            <span class="badge bg-blue">Approved</span>
                                        @else
                                            <span class="badge bg-pink">Pending</span>
                                        @endif
                                    </td>
                                    <td> @if($post->publication_status==true)
                                            <span class="badge bg-green">Published</span>
                                        @else
                                            <span class="badge bg-yellow">Unpublished</span>
                                        @endif</td>
                                    <td>
                                        <img src="{{asset($post->image)}}" alt="image" height="30" width="30" style="text-align: center">
                                    </td>
                                    <td>{{$post->breaking_news==1 ?'Yes' :'No' }}</td>

                                    <td width="250">
                                        @if($post->is_approve==false)
                                            <a href="{{route('approve-post',['id'=>$post->id])}}" onclick="return confirm('Are you sure you want to Approve this item?');" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        @endif
                                      @if($post->publication_status==1)
                                     <a href="{{route('publication-post',['id'=>$post->id])}}" class="btn btn-warning"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></a>
                                     @else
                                     <a href="{{route('unpublication-post',['id'=>$post->id])}}" class="btn btn-success"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></a>
                                         @endif
                                        <a href="{{route('view-post',['id'=>$post->id])}}"class="btn btn-default"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="{{route('edit-post',['id'=>$post->id])}}"class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a href="{{route('delete-post',['id'=>$post->id])}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li>{{$posts->links()}}</li>
                        </ul>
                    </div>
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection
