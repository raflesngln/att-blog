<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/assets_admin/monster/images/favicon.png">
    <title>Monster Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/assets_admin/monster/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets_admin/monster/plugins/html5-editor/bootstrap-wysihtml5.css" />

    <!-- chartist CSS -->
    <link href="<?php echo base_url();?>assets/assets_admin/monster/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/assets_admin/monster/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/assets_admin/monster/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/assets_admin/monster/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo base_url();?>assets/assets_admin/monster/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/assets_admin/monster/plugins/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/assets_admin/monster/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url();?>assets/assets_admin/monster/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

	
<style>
.card-no-border .page-wrapper {
    background: #e5e8e9;
}
.topbar .navbar-header {
    background: #4c5965;
}
.page-titles {
    padding-bottom: 20px;
    background: #eceeef;
    margin-bottom: 7px;
    width: 100%;
    margin-left: 0px;
    border-radius: 3px;
}
.navbar-light .navbar-brand, .navbar-light .navbar-toggler{
	color:white;
}
.topbar .top-navbar .mailbox {
    margin-left: -250px !important;
}
.card-no-border .left-sidebar, .card-no-border .sidebar-nav {
    background: #2a3844;
}
.card-no-border .sidebar-footer {
    background: #1d2934;
}
.sidebar-nav ul li a {
    color: #fafafa;
}
.sidebar-nav > ul > li > a.active {
    font-weight: 400;
    background: #2a3844 !important;
    color: #fafafa;
}
#sidebarnav li a:hover{
	color:#0275d8;
}
.sidebar-nav > ul > li > a.active i, .sidebar-nav > ul > li > a:hover i {
    color: #90a4ae;
}

/* CSS QUERY */
@media only screen and (max-width: 768px) {
  /* For mobile: */
  .topbar .top-navbar .mailbox {
		margin-left: -5px !important;
	}
  
}

</style>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
		
		<!-- HEADER -->
		<?php echo $this->load->view('adm/layout/header');?>

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
		
		<!-- SIDEBAR -->
		<?php echo $this->load->view('adm/layout/sidebar');?>

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
				<!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
									<!-- SIDEBAR -->
									<?php echo $this->load->view($content);?>
							</div>
						</div>
					</div>
				</div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 ATT-Group Company
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>assets/assets_admin/monster/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>assets/assets_admin/monster/plugins/bootstrap/js/tether.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets_admin/monster/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>assets/assets_admin/monster/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>assets/assets_admin/monster/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>assets/assets_admin/monster/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url();?>assets/assets_admin/monster/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>assets/assets_admin/monster/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="<?php echo base_url();?>assets/assets_admin/monster/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets_admin/monster/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url();?>assets/assets_admin/monster/plugins/echarts/echarts-all.js"></script>
    <script src="<?php echo base_url();?>assets/assets_admin/monster/plugins/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url();?>assets/assets_admin/monster/js/dashboard1.js"></script>
    <script src="<?php echo base_url();?>assets/assets_admin/monster/js/toastr.js"></script>

    <!-- WYSIWYG -->
    <script src="<?php echo base_url();?>assets/assets_admin/monster/plugins/tinymce/tinymce.min.js"></script>

    <!-- Magnific popup JavaScript -->
    <script src="<?php echo base_url();?>assets/assets_admin/monster/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets_admin/monster/plugins/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>


    <script>
        $.toast({
            heading: 'Welcome to Monster admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'info',
            hideAfter: 3000, 
            stack: 6
        });

        // tinymce
        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        }
        
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <!-- <script src="<?php echo base_url();?>assets/assets_admin/monster/plugins/styleswitcher/jQuery.style.switcher.js"></script> -->
</body>

</html>
