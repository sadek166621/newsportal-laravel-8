@extends('admin.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>

            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('manage-ads')}}">Manage-Ads</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    @include("admin.include.messages")
                    <div class="box-header with-border">
                        <h3 class="box-title" style="margin-left: 467px">MANAGE-ADS</h3>
                        {{--                        <button style="position: relative;left: 700px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">--}}
                        {{--                            ADD SUPPLIER--}}
                        {{--                        </button>--}}
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr >
                                <th width="5%" >Sl</th>
                                <th width="5%">Postion</th>
                                <th width="10%">Name</th>
                                <th width="5%" >Image</th>
                                <th width="5%" >Popup Image</th>
                                <th width="10%">Url</th>
                                <th width="10%">Publication Status</th>
                                <th width="10%">Start Ads</th>
                                <th width="10%">End Ads</th>
                                <th width="20%">Action</th>
                            </tr>
                            <?php $i=1 ?>
                            @foreach($ads as $ads)
                                <tr >
                                    <td>{{$i}}</td>
                                    <td>
                                        @if($ads->positon==1)
                                            <p>
                                                Header
                                            </p>
                                            @elseif($ads->positon==2)
                                            <p>
                                                Slider
                                            </p>
                                            @elseif($ads->positon==3)
                                            <p>
                                                Left
                                            </p>
                                            @else
                                            <p>
                                                Right
                                            </p>
                                            @endif
                                    </td>
                                    <td>{{$ads->name}}</td>
                                    <td>
                                        <img src="{{asset($ads->image)}}" alt="image" height="30" width="30" style="text-align: center">
                                    </td>
                                    <td>
                                        <img src="{{asset($ads->popup_image)}}" alt="image" height="30" width="30" style="text-align: center">
                                    </td>
                                    <td>{{$ads->url}}</td>
{{--                                    <td>{{$ads->publication_status==1 ?'Published' :'Unpublished'}}</td>--}}
                                    <td>
                                        @if($ads->publication_status==1)
                                            <span class="badge bg-green">Published</span>
                                            @else
                                            <span class="badge bg-yellow">Unpublished</span>
                                            @endif
                                    </td>
                                    <td>{{$ads->start_ads}}</td>
                                    <td>
                                        @if($ads->end_ads >= \Carbon\Carbon::now())
                                            <span class="badge bg-green">
                                                {{$ads->end_ads}}
                                            </span>
                                            @elseif($ads->end_ads <= \Carbon\Carbon::now())
                                            <span class="badge bg-red">
                                                {{$ads->end_ads}}
                                            </span>
                                            @endif
                                        </td>

                                    <td>
                                        @if($ads->publication_status==1)
                                            <a href="{{route('publication-ads',['id'=>$ads->id])}}" class="btn btn-warning "><i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
                                            </a>
                                        @else
                                            <a href="{{route('unpublication-ads',['id'=>$ads->id])}}" class="btn btn-success"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i>
                                            </a>
                                        @endif
                                        <a href="{{url('/edit-ads',['id'=>$ads->id])}}"class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a href="{{route('delete-ads',['id'=>$ads->id])}}" onclick="alert('Are you sure?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>

                                </tr>
                                <?php $i++ ?>

                            @endforeach
                        </table>
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection
