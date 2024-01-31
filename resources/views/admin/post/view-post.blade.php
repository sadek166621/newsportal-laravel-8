@extends("admin.master")
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title" style="margin-left: 477px">View-Post</h3>
                                {{--                        <button style="position: relative;left: 700px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">--}}
                                {{--                            ADD SUPPLIER--}}
                                {{--                        </button>--}}
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Sl</th>
                                        <td>{{$post->id}}</td>
                                    </tr>
                                        <tr>
                                            <th>Name</th>
                                            <td>
                                                {{$post->name}}
                                            </td>
                                        </tr>
                                    <tr>
                                        <th>Category Name</th>
                                        <td>{{$category->category_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>SubCategory Name</th>
                                        @foreach($subcats as $subcat)
                                        <td>
                                            {{$subcat->subcategory_name}}
                                        </td>
                                            @endforeach
                                    </tr>
                                    <tr>
                                        <th>title</th>
                                        <td>
                                            {{$post->title}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>slug</th>
                                        <td>
                                            {{$post->slug}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>description</th>
                                        <td>
                                            {!! $post->description !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>video_link</th>
                                        <td>
                                            {{$post->video_link}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>publication status</th>
                                        <td>
                                            {{$post->publication_status==true ?'Published':'Unpublished'}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>image</th>
                                        <td >
                                            <img src="{{asset($post->image)}}" alt="" style="height: 50px;width: 50px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>breaking news</th>
                                        <td>
                                            {{$post->breaking_news==true ?'Yes' :'No'}}
                                        </td>
                                    </tr>
                                </table>


                            </div><!-- /.box-body -->
                        </div><!-- /.box -->

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section><!-- /.content -->
        </div>
    </div>
@endsection
