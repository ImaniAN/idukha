<?php
session_start();
?>
<?php
if($_SESSION){

$userid =$_SESSION["Id"];
$IDBranch=$_SESSION["IDBranch"];
$role=$_SESSION["role"];

include 'Config/config.php';
include 'Config/config1.php';
include 'Config/connect.php';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
      <meta charset="UTF-8" />
    <title>OSMS | User Profile</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css" />

    <!--END GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
    
 <link href="assets/css/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/plugins/uniform/themes/default/css/uniform.default.css" />
<link rel="stylesheet" href="assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
<link rel="stylesheet" href="assets/plugins/chosen/chosen.min.css" />
<link rel="stylesheet" href="assets/plugins/colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href="assets/plugins/tagsinput/jquery.tagsinput.css" />
<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css" />
<link rel="stylesheet" href="assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />
   
    <!-- END PAGE LEVEL  STYLES -->

    <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="assets/plugins/validationengine/css/validationEngine.jquery.css" />
    <!-- END PAGE LEVEL  STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
     <!-- END HEAD -->

     <!-- BEGIN BODY -->
<body class="padTop53 ">

   <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand">
                    <img src="assets/img/logo.png" alt="" /></a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                              <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                        
                            <li><a href="UserProfile.php? id=<?php echo $userid; ?>"><i class="icon-user"></i> My Profile </a>
                            </li>
                            <?php
							if($role=="Manager")
								{
								?>
                            <li><a href="Settings.php"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <?php }?>
                            <li class="divider"></li>
                            
                            <li><a href="Execute/ExDestroySession.php"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/Profile_Uploaded/<?php echo $_SESSION["profilepicture"] ?>" / style="width:64px; height:64px">
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> <?php echo $_SESSION["name"] ?></h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> <?php echo $_SESSION["role"] ?>
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel">
                    <a href="dashboard.php" >
                        <i class="icon-table"></i> Dashboard
	   
                       
                    </a>                   
                </li>
                 <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#Product">
                        <i class="icon-list-alt"></i> Product
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="Product">
                        <li class=""><a href="AddNewProduct.php"><i class="icon-angle-right"></i> Add Product </a></li>
                        <li class=""><a href="ViewProduct.php"><i class="icon-angle-right"></i> View Product </a></li>
                       
                    </ul>
                </li>
                <?php
				if($role=="Manager")
				{
				?>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#Purchase">
                        <i class="icon-pencil"></i> Purchase
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-warning">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="Purchase">
                        <li class=""><a href="ViewProductToPurchase.php"><i class="icon-angle-right"></i> Add Purchase </a></li>
                        <li class=""><a href="ViewPurchase.php"><i class="icon-angle-right"></i> View Purchase </a></li>
                       
                    </ul>
                </li>
				<?php } ?>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#Sales">
                        <i class="icon-shopping-cart"></i> Sales
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-info">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="Sales">
                        <li><a href="ViewProductToSale.php"><i class="icon-angle-right"></i> Add Sales </a></li>
                        <li><a href="ViewSales.php"><i class="icon-angle-right"></i> View Sales </a></li>
                    </ul>
                </li>
                <li class="active"><a href="ViewInvoice.php"><i class="icon-list "></i> Invoice </a></li>
                <li><a href="gallery.php"><i class="icon-picture"></i> Gallery </a></li>
				<?php
				if($role=="Manager")
				{
				?>
                <li><a href="Settings.php"><i class="icon-cogs"></i> Settings </a></li>
                
                 <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#Users">
                        <i class="icon-user"></i> Users
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         &nbsp; <span class="label label-success">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="Users">
                       
                        <li><a href="AddNewUser.php"><i class="icon-angle-right"></i> Add User  </a></li>
                        <li><a href="ViewUser.php"><i class="icon-angle-right"></i> View User  </a></li>
                    </ul>
                </li>
                <?php } ?>
                <li><a href="Execute/ExDestroySession.php"><i class="icon-signin"></i> Login Page </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->

        <!--PAGE CONTENT -->
        <div id="content">
           
                <div class="inner">
                    <div class="row">
                    <div class="col-lg-12">
                            
                               
                                    <h1 > User Profile </h1>
                                  
                                
                                
                            </div>
                    </div>
                          <hr />
                       <?php
      $idd=$_GET['id'];
	  //$_SESSION["Idpro"]=$idd;

      $query= $dbo->query("SELECT * FROM user where userid='$idd'");
      foreach ($query as $user) {
	  	$IDUser=$user['userid'];
        $name=$user['name'];
        $address=$user['address'];
		$email=$user['e-mail'];
        $role=$user['role'];
		$activate=$user['activate'];
        $profilepicture=$user['profilepicture'];
		$IDBranch=$user['IDBranch'];
 } 
 ?> 

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                  <h5>User Profile</h5>
                              

                              </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
                                    <form action="Execute/ExUserProfile.php" class="form-horizontal" id="Profile-validate" method="post">
                                       
                                        <div class="form-group">
                                            
                                            <div class="col-lg-4">
                                                <input type="text" value="<?php echo $IDUser; ?>" id="" name="IDUser" class="form-control" / style="visibility:hidden">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">Names</label>
                                            <div class="col-lg-4">
                                                <input type="text" value="<?php echo $name; ?>" id="Names" name="Names" class="form-control" <?php if($role=="Manager")
				{ ?>readonly <?php } ?> />
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">Address</label>
                                            <div class="col-lg-4">
                                                <input type="text" value="<?php echo $address; ?>" id="Address" name="Address" class="form-control" <?php if($role=="Manager")
				{ ?>readonly <?php } ?> />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">E-mail</label>

                                            <div class="col-lg-4">
                                                <input type="email" value="<?php echo $email; ?>" id="Email" name="Email" class="form-control" <?php if($role=="Manager")
				{ ?>readonly <?php } ?> />
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">Role</label>

                                            <div class="col-lg-4">
                                                <select name="Role" id="Role" class="form-control" <?php if($role=="Seller")
				{ ?>readonly <?php } ?> >
                                                    <option value="<?php echo $role; ?>"><?php echo $role; ?></option>
                                                    <option value="Seller">Saller</option>
                                                    <option value="Manager">Manager</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Activate</label>

                                            <div class="col-lg-4">
												<select name="Activate" id="Activate" class="form-control" <?php if($role=="Seller")
				{ ?>readonly <?php } ?>>
                                                    <option value="<?php echo $activate; ?>"><?php echo $activate; ?></option>
                                                    <option value="Activate">Activate</option>
                                                    <option value="Desactivate">Desactivate</option>
                                                </select>
											</div>
                                        </div>
                                        
                                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="Save The change" class="btn btn-primary btn-lg " />
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                  <h5>Change Password</h5>
                             

                              </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
                                    <form action="Execute/ExChangePassword.php" class="form-horizontal" id="ChangePassword-validate" method="post">

                                        <div class="form-group">
                                            
                                            <div class="col-lg-4">
                                                <input type="text" value="<?php echo $IDUser; ?>" id="" name="IDUser" class="form-control" / style="visibility:hidden">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">Current Password</label>

                                            <div class="col-lg-4">
                                                <input type="password" id="CurrentPassword" name="CurrentPassword" class="form-control" />
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">New Password</label>

                                            <div class="col-lg-4">
                                                <input type="password" id="NewPassword" name="NewPassword" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Confirm Password</label>

                                            <div class="col-lg-4">
                                                <input type="password" id="ConfirmPassword" name="ConfirmPassword" class="form-control" />
                                            </div>
                                        </div>
                                        
                                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="Save" class="btn btn-primary btn-lg " />
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
					       <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                  <h5>Change Profile Picture</h5>
                             

                              </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
                                    <form action="Execute/ExChangePicture.php" class="form-horizontal" id="ChangePassword-validate" method="post" enctype="multipart/form-data">

                                        <div class="form-group">
                                            
                                            <div class="col-lg-4">
                                                <input type="text" value="<?php echo $IDUser; ?>" id="" name="IDUser" class="form-control" style="visibility:hidden" / > 
                                            </div>
                                        </div>
										
                                        <div class="form-group">
                       <label class="control-label col-lg-4">Profile Picture</label>
                        <div class="col-lg-8">
						
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/Profile_Uploaded/<?php echo $profilepicture; ?>" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
								<?php if($role=="Seller") { ?>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="Image" accept="image/*" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
									<?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="alert alert-warning"><strong>Notice!</strong> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead.</div>
					<div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="Save Change" class="btn btn-primary btn-lg " / <?php if($role=="Manager") { ?> style=" visibility:hidden" <?php } ?>>
                    </div>
                

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                    
                    
                    

                </div>
          <!--END PAGE CONTENT -->
        </div>
    
     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <?php
	include 'Footer.php';
	?>
    <!--END FOOTER -->


     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
    
     <!-- PAGE LEVEL SCRIPT-->
 <script src="assets/js/jquery-ui.min.js"></script>
 <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
<script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="assets/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
       <script src="assets/js/formsInit.js"></script>
        <script>
            $(function () { formInit(); });
        </script>
        
     <!--END PAGE LEVEL SCRIPT-->

    <!-- PAGE LEVEL SCRIPTS -->

     <script src="assets/plugins/validationengine/js/jquery.validationEngine.js"></script>
    <script src="assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js"></script>
    <script src="assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
    <script src="assets/js/validationInit.js"></script>
	 <script src="assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
    <script>
        $(function () { formValidation(); });
        </script>
     <!--END PAGE LEVEL SCRIPTS -->
     
</body>
     <!-- END BODY -->
</html>
<?php
}
else{
echo "<script>location.href='index.php'</script>";
} ?>