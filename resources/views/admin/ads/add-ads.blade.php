@extends('admin.master')
@section('content')
    <!-- Content Header (Page header) -->
    <style>
        :-ms-input-placeholder{
            text-align: center;
        }
    </style>
    <section class="content-header">
        <h1>

            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('ads')}}">Add-Ads</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12 ">
                @include("admin.include.messages")
                <!-- Horizontal Form -->
                <div class="box box-info " style="border-top-color: #3c8dbc">
                    <div class="box-header with-border">

                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{route('add-ads')}}" method="post"  enctype="multipart/form-data" onSubmit="return validate();" >
                        @csrf
                        <div class="box-header with-border">
                            <h3 class="box-title" style="margin-left: 467px">ADD-ADS</h3>
                            {{--                        <button style="position: relative;left: 700px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">--}}
                            {{--                            ADD SUPPLIER--}}
                            {{--                        </button>--}}
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="form-group "style="position: relative;top: 10px;">
                                <label for="exampleFormControlFile1"style="position: absolute;left: 120px;">positon</label>
                               <div class="" style="padding-left: 200px;">
                                   <label for="age1">Header</label>
                                   <input type="radio" name="positon" value="1" onclick="selectheader(this.value);" ><br>
                                   <label for="age1">Slider</label>
                                   <input type="radio" name="positon" value="2" onclick="selectslider(this.value);"style="position: absolute;left: 248px;" ><br>
                                   <label for="age1">Left</label>
                                   <input type="radio" name="positon" value="3" onclick="selectleft(this.value);" style="position: absolute;left: 248px;"><br>
                                   <label for="age1">Right</label>
                                   <input type="radio" name="positon" value="4" onclick="selectright(this.value)" style="position: absolute;left: 249px;"><br>
                               </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label"> Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group" id="subRes">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Popup Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="popup_image" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label"> Url</label>
                                <div class="col-sm-10">
                                    <input type="text" name="url" class="form-control" id="inputEmail3" placeholder="Url">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Publication Status</label>
                                <div class="col-sm-10">
                                    <select name="publication_status" id="selection" class="form-control">
                                        <option value="1" >Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                    <p style="color: deeppink" id="message"></p>
                                </div>
                            </div>
                            <div class="form-group" style="position: relative;left: 198px;top: 9px;">
                                <input  placeholder="START ADS" class="textbox-n p" type="text" onfocus="(this.type='date')" name="start_ads">
                                <input  placeholder="END ADS" class="textbox-n" type="text" onfocus="(this.type='date')" name="end_ads">
                                <div class="col-sm-10">
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-info pull-right submit-btn" style="background-color: #3c8dbc;">ADS SUBMIT</button>
                        </div><!-- /.box-footer -->
                    </form>
                </div>
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>
    <!-- Main content -->
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
    <script>
        function selectheader(positon) {
            var xmlHttp = new XMLHttpRequest();
            var serverPage='/newsportal/public/select-ads/'+positon;
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
        function selectslider(positon) {
            var xmlHttp = new XMLHttpRequest();
            var serverPage='/newsportal/public/select-ads2/'+positon;
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
        function selectleft(positon) {
            var xmlHttp = new XMLHttpRequest();
            var serverPage='/newsportal/public/select-ads3/'+positon;
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
        function selectright(positon) {
            var xmlHttp = new XMLHttpRequest();
            var serverPage='/newsportal/public/select-ads4/'+positon;
            xmlHttp.open("GET", serverPage);
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    document.getElementById('subRes').innerHTML = xmlHttp.responseText;
                }
            }
            xmlHttp.send(null);
        }
    </script>

@endsection
