@extends('admin.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Tables
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('manage-post')}}">Edit-Post</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">

                    </div><!-- /.box-header -->
                    <h4 class="text-center"></h4>
                    <!-- form start -->
                    <form id="editform" class="form-horizontal" action="{{route('update.post')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12 text-center"><h4>ADD POST</h4> <hr/></div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Category Name</label>
                                    <div class="col-sm-8">
                                        <select name="category_id" class="form-control" onclick="selectSubCategory(this.value); ">
                                            {{--                                                <option value="">--- Select Sub Category ---</option>--}}
                                            @foreach($categorys as $category)
                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">Title</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="title" value="{{$post->title}}" class="form-control" placeholder="Title" required/>
                                        <input type="hidden" name="post_id" value="{{$post->id}}" />

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group" id="subRes">
                                    <label for="inputEmail3"  class="col-sm-3 control-label">Sub-Cat Name</label>
                                    <div class="col-sm-9">
                                        <select name="subcategory_id" class="form-control" >
                                            @foreach($subcats as $subcat)
                                                <option value="{{$subcat->id}}"></option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3"  class="col-sm-3 control-label">Slug</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="slug" value="{{$post->slug}}" class="form-control" placeholder="Slug" required/>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Post Description</label>
                            <div class="col-sm-10">
                                <textarea name="description"  id="ckeditor" rows="3" class="form-control">
                                    {{substr($post->description,0)}}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Video Link</label>
                            <div class="col-sm-10">
                                <input type="text" name="video_link" value="{{$post->video_link}}"  class="form-control" placeholder="Video link" required/>
                            </div>
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label for="inputEmail3" class="col-sm-2 control-label">Publication Status</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <select name="publication_status" class="form-control">--}}
{{--                                    <option value="1">Published</option>--}}
{{--                                    <option value="0">Unpublished</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Breaking News</label>
                            <div class="col-sm-10">
                                <input type="checkbox" name="breaking_news" value="1" id="custom7">
                                <input type="hidden" value="0" name="breaking_news" id="hdncustom7" />
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" name="btn" class="btn btn-info pull-right" onclick="validate();">Submit</button>
                        </div><!-- /.box-footer -->
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>

        function selectSubCategory(category_id) {
            var xmlHttp = new XMLHttpRequest();
            var serverPage='/newsportal/public/select-sub-category/'+category_id;
            xmlHttp.open("GET", serverPage);
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    document.getElementById('subRes').innerHTML = xmlHttp.responseText;
                }
            }
            xmlHttp.send(null);
        }
    </script>
    <script>
        document.forms['editform'].elements['category_id'].value='{{$category->id}}';
        {{--document.forms['editform'].elements['subcategory_id'].value='{{$subcat->id}}';--}}
        document.forms['editform'].elements['publication_status'].value='{{$post->publication_status}}';
        document.forms['editform'].elements['breaking_news'].value='{{$post->breaking_news}}';
    </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $('#custom7').on('change', function(){
            $('#hdncustom7').val(this.checked ? 1 : 0);
        });
    </script>
@endsection
