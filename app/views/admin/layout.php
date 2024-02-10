<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?=$this->e($title)?></title>

    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/admin/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="assets/admin/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="assets/admin/css/animate.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <?=$this->insert('admin/includes/nav')?>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <?=$this->insert('admin/includes/nav_header')?>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <?=$this->insert('admin/includes/nav_links')?>
            </ul>
            
        </nav>
    </div>
    <div class="wrapper wrapper-content">
        <?=$this->section('content')?>
        
    </div>
    <div class="footer">
            <?=$this->insert('admin/includes/footer')?>
        </div>
    </div>
    <div id="right-sidebar">
            <?=$this->insert('admin/includes/right_sidebar')?>
    </div>
    </div>

    <!-- Mainly scripts -->
    <script src="assets/admin/js/jquery-2.1.1.js"></script>
    <script src="assets/admin/js/bootstrap.min.js"></script>
    <script src="assets/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="assets/admin/js/plugins/flot/jquery.flot.js"></script>
    <script src="assets/admin/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="assets/admin/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="assets/admin/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/admin/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="assets/admin/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="assets/admin/js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="assets/admin/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="assets/admin/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="assets/admin/js/inspinia.js"></script>
    <script src="assets/admin/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="assets/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="assets/admin/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="assets/admin/js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="assets/admin/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="assets/admin/js/demo/sparkline-demo.js"></script>
    <!-- SUMMERNOTE -->
    <script src="assets/admin/js/plugins/summernote/summernote.min.js"></script>
    <script>
        $(document).ready(function(){

            $('.summernote').summernote();

       });
        var edit = function() {
            $('.click2edit').summernote({focus: true});
        };
        var save = function() {
            var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
        };
    </script>
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:12:28 GMT -->
</html>
