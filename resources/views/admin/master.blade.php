<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('adminAsset') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />


    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="{{ asset('adminAsset') }}/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('adminAsset') }}/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminAsset') }}/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('adminAsset') }}/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('adminAsset') }}/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ asset('adminAsset') }}/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset('adminAsset') }}/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Date Picker -->
    <link href="{{ asset('adminAsset') }}/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{ asset('adminAsset') }}/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{ asset('adminAsset') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">

    <link href="{{asset('assets/admin/css/product.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/admin/css/jquery.Jcrop.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/admin/css/Jcrop-style.css')}}" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    @include('admin.include.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.include.slideber')
    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- /.content-wrapper -->

 @include('admin.include.footer')

    <!-- Control Sidebar -->
    @include('admin.include.right-sideber')
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('adminAsset') }}/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="{{ asset('adminAsset') }}/dist/js/jquery.min.js" type="text/javascript"></script>

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
{{--<script type="text/javascript">--}}
{{--    $.widget.bridge('uibutton', $.ui.button);--}}
{{--</script>--}}
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('adminAsset') }}/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->
<script src="{{ asset('adminAsset') }}/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="{{ asset('adminAsset') }}/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('adminAsset') }}/plugins/morris/morris.min.js" type="text/javascript"></script>
<!-- Sparkline -->
<script src="{{ asset('adminAsset') }}/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- jvectormap -->
<script src="{{ asset('adminAsset') }}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="{{ asset('adminAsset') }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('adminAsset') }}/plugins/knob/jquery.knob.js" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
<script src="{{ asset('adminAsset') }}/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- datepicker -->
<script src="{{ asset('adminAsset') }}/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('adminAsset') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<!-- Slimscroll -->
<script src="{{ asset('adminAsset') }}/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="{{ asset('adminAsset') }}/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminAsset') }}/dist/js/app.min.js" type="text/javascript"></script>
<script src="{{ asset('adminAsset') }}/dist/js/select2.min.js" type="text/javascript"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('adminAsset') }}/dist/js/pages/dashboard.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminAsset') }}/dist/js/demo.js" type="text/javascript"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

<script>
    $('#summernote').summernote({
        placeholder: 'Description',
        tabsize: 1,
        height: 200,
        width:884,
    });
</script>

<script>
        function validateImage() {
            var formData = new FormData();
            var file = document.getElementById("img").files[0];
            formData.append("Filedata", file);
            var t = file.type.split('/').pop().toLowerCase();
            if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
                alert('Please select a valid image file');
                document.getElementById("img").value = '';
                return false;
            }
            if (file.size > 1024000) {
                alert('Max Upload size is 2MB only');
                document.getElementById("img").value = '';
                return false;
            }
            return true;
        }
</script>

<script type="text/javascript">
    function validateImage() {
        var formData = new FormData();
        var file = document.getElementById("img2").files[0];
        formData.append("Filedata", file);
        var t = file.type.split('/').pop().toLowerCase();
        if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
            alert('Please select a valid image file');
            document.getElementById("img2").value = '';
            return false;
        }
        if (file.size > 1024000) {
            alert('Max Upload size is 1MB only');
            document.getElementById("img2").value = '';
            return false;
        }
        return true;
    }
</script>
<script type="text/javascript">
    function validateImage() {
        var formData = new FormData();
        var file = document.getElementById("img3").files[0];
        formData.append("Filedata", file);
        var t = file.type.split('/').pop().toLowerCase();
        if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
            alert('Please select a valid image file');
            document.getElementById("img3").value = '';
            return false;
        }
        if (file.size > 1024000) {
            alert('Max Upload size is 1MB only');
            document.getElementById("img3").value = '';
            return false;
        }
        return true;
    }
</script>

<script type="text/javascript">
    function validateImage() {
        var formData = new FormData();
        var file = document.getElementById("img4").files[0];
        formData.append("Filedata", file);
        var t = file.type.split('/').pop().toLowerCase();
        if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
            alert('Please select a valid image file');
            document.getElementById("img4").value = '';
            return false;
        }
        if (file.size > 1024000) {
            alert('Max Upload size is 1MB only');
            document.getElementById("img4").value = '';
            return false;
        }
        return true;
    }
</script>

<script>
    /**
     * Check all the permissions
     */
    $("#checkPermissionAll").click(function(){
        if($(this).is(':checked')){
            // check all the checkbox
            $('input[type=checkbox]').prop('checked', true);
        }else{
            // un check all the checkbox
            $('input[type=checkbox]').prop('checked', false);
        }
    });
    function checkPermissionByGroup(className, checkThis){
        const groupIdName = $("#"+checkThis.id);
        const classCheckBox = $('.'+className+' input');
        if(groupIdName.is(':checked')){
            classCheckBox.prop('checked', true);
        }else{
            classCheckBox.prop('checked', false);
        }
    }
</script>

<script>

</script>

<script>
    function checkSinglePermission(groupClassName, groupID, countTotalPermission) {
        const classCheckbox = $('.'+groupClassName+ ' input');
        const groupIDCheckBox = $("#"+groupID);
        // if there is any occurance where something is not selected then make selected = false
        if($('.'+groupClassName+ ' input:checked').length == countTotalPermission){
            groupIDCheckBox.prop('checked', true);
        }else{
            groupIDCheckBox.prop('checked', false);
        }
        implementAllChecked();
    }
</script>
<script src="{{asset('assets/admin/js/jquery.Jcrop.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.SimpleCropper.js')}}"></script>


<script type="text/javascript">
    // Gallery Section Insert

    $(document).on('click', '.remove-img', function () {
        var id = $(this).find('input[type=hidden]').val();
        $('#galval' + id).remove();
        $(this).parent().parent().remove();
    });

    $(document).on('click', '#prod_gallery', function () {
        $('#uploadgallery').click();
        $('.selected-image .row').html('');
        $('#geniusform').find('.removegal').val(0);
    });


    $("#uploadgallery").change(function () {
        var total_file = document.getElementById("uploadgallery").files.length;
        for (var i = 0; i < total_file; i++) {
            $('.selected-image .row').append('<div class="col-sm-6">' +
                '<div class="img gallery-img">' +
                '<span class="remove-img"><i class="fas fa-times"></i>' +
                '<input type="hidden" value="' + i + '">' +
                '</span>' +
                '<a href="' + URL.createObjectURL(event.target.files[i]) + '" target="_blank">' +
                '<img src="' + URL.createObjectURL(event.target.files[i]) + '" alt="gallery image">' +
                '</a>' +
                '</div>' +
                '</div> '
            );
            $('#geniusform').append('<input type="hidden" name="galval[]" id="galval' + i +
                '" class="removegal" value="' + i + '">')
        }

    });

    // Gallery Section Insert Ends
</script>
<script type="text/javascript">
    $('.cropme').simpleCropper();
</script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#ckeditor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script src="{{asset('assets/admin/js/product.js')}}"></script>
@yield("script")
<script>
    imagevalidation = () => {
        const fi = document.getElementById('file');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {

                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 4096) {
                    alert(
                        "File too Big, please select a file less than 4mb");
                    document.getElementById("file").value = '';
                    return false;
                } else if (file < 500) {
                    alert(
                        "File too small, please select a file greater than 1mb");
                    document.getElementById("file").value = '';
                    return false;
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                        + file + '</b> KB';
                }
                return true;
            }
        }
    }
</script>

<script>
    Filevalidation = () => {
        const fi = document.getElementById('file2');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {

                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 4096) {
                    alert(
                        "File too Big, please select a file less than 4mb");
                    document.getElementById("file2").value = '';
                    return false;
                } else if (file < 500) {
                    alert(
                        "File too small, please select a file greater than 1mb");
                    document.getElementById("file2").value = '';
                    return false;
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                        + file + '</b> KB';
                }
                return true;
            }
        }
    }
</script>

<script>
    picturevalidation = () => {
        const fi = document.getElementById('file3');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {

                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 4096) {
                    alert(
                        "File too Big, please select a file less than 4mb");
                    document.getElementById("file3").value = '';
                    return false;
                } else if (file < 500) {
                    alert(
                        "File too small, please select a file greater than 1mb");
                    document.getElementById("file3").value = '';
                    return false;
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                        + file + '</b> KB';
                }
                return true;
            }
        }
    }
</script>
</body>
</html>
