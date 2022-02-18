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
    <title>OSMS | Add Sales</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css" />
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->
     <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
     <link rel="stylesheet" href="assets/plugins/wysihtml5/dist/bootstrap-wysihtml5-0.0.2.css" />
    <link rel="stylesheet" href="assets/css/Markdown.Editor.hack.css" />
    <link rel="stylesheet" href="assets/plugins/CLEditor1_4_3/jquery.cleditor.css" />
    <link rel="stylesheet" href="assets/css/jquery.cleditor-hack.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-wysihtml5-hack.css" />
     <style>
                        ul.wysihtml5-toolbar > li {
                            position: relative;
                        }
                    </style>

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
                        
                            <li><a href="UserProfile.php"><i class="icon-user"></i> My Profile </a>
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
                <li class="panel active">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#Sales">
                        <i class="icon-shopping-cart"></i> Sales
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-info">2</span>&nbsp;
                    </a>
                    <ul class="in" id="Sales">
                        <li><a href="ViewProductToSale.php"><i class="icon-angle-right"></i> Add Sales </a></li>
                        <li><a href="ViewSales.php"><i class="icon-angle-right"></i> View Sales </a></li>
                    </ul>
                </li>
                
               
                

                <li><a href="ViewInvoice.php"><i class="icon-list "></i> Invoice </a></li>
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
                            
                               
                                    <h1 > Add Sales </h1>
                                  
                                
                                
                            </div>
                    </div>
                          <hr />
                       

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Add new Sales</h5>
                                    <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                <div class="btn-group">
                                                    <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                        href="#collapseOne">
                                                        <i class="icon-chevron-up"></i>
                                                    </a>
                                                    <button class="btn btn-xs btn-danger close-box">
                                                        <i class="icon-remove"></i>
                                                    </button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <?php

      $idd=$_GET['id'];
	  $_SESSION["Idpro"]=$idd;

      $query= $dbo->query("SELECT * FROM product where productid='$idd'");
      foreach ($query as $product) {
        $productid=$product['productid'];
        $quantity=$product['quantity'];
        $product_name=$product['product_name'];
 } 
 
 
 ?> 
 <?php
 $query= $dbo->query("SELECT MAX(InvoiceNumber) AS max_inv FROM invoice");
      foreach ($query as $invoice) {
        $InvoiceNo=$invoice['max_inv'];
 }
 ?>
 
 <?php
      //$idd=$_GET['id'];
	  //$_SESSION["Idpro"]=$idd;

      $query= $dbo->query("SELECT * FROM price where IDProduct='$idd'");
      foreach ($query as $price) {
        $IDProduct=$price['IDProduct'];
        $Price=$price['Price'];
 } 
 ?> 
                                <div id="collapseOne" class="accordion-body collapse in body">
                                    <form action="Execute/ExSaling.php" method="post" class="form-horizontal" id="product-validate" enctype="multipart/form-data" >

                                        <div class="form-group">
                                            <label class="control-label col-lg-4"> Invoice Number</label>

                                            <div class="col-lg-4 ">
                                                <div class="input-group bootstrap-timepicker">
                                <input type="text" id="InvoiceNumber" name="InvoiceNumber" class="form-control" readonly value="<?php echo $InvoiceNo; ?>" />
                                <span class="input-group-addon add-on" data-toggle="modal" data-target="#NewInvoiceNumber"><i class=" icon-plus"></i></span>
                            </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">ID Product</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="IDProduct" name="IDProduct" class="form-control" readonly value="<?php echo $productid ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Product Name</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="ProductName" name="ProductName" class="form-control" readonly value="<?php echo $product_name ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Quatity In Store</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="QuatityInStore" name="QuatityInStore" class="form-control" readonly value="<?php echo $quantity ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4"> Price</label>
                                            <div class="col-lg-4 ">
                                              <input type="text" id="Price" name="Price" class="form-control" value="<?php echo $Price ?>" readonly />
                                              
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4"> Quantity Sold</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="Quantity2" name="Quantity2" class="form-control" />
                                                <span id="qtyerror" style="display:none;color:red; font-size:12px;">Quantity sold must be less or equal to Quantity in store</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4"> Total Price</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="TotalPrice2" name="TotalPrice2" class="form-control" readonly />
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4"> Amount Paid</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="AmountPaid" name="AmountPaid" class="form-control" />
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4"> Balance</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="Balance" name="Balance" class="form-control" readonly />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Client Name</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="ClientName" name="ClientName" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Client Phone Number</label>

                                            <div class="col-lg-4">
                                            <div class="input-group">
                                                <input type="text" id="ClientPhone" name="ClientPhone" class="form-control" data-mask="+250 999 999 999"/>
                                                <span class="input-group-addon">+250 999 999 999</span>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Date</label>

                                            <div class="col-lg-4">
                                                <input type="date" id="date2" name="date2" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="Save" class="btn btn-primary btn-lg " />
                                            <a href="Invoice.php? id=<?php echo $InvoiceNo; ?>"> <input type="button" value="Invoice" class="btn btn-success btn-lg " /></a>
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
          <div class="col-lg-12">
                        <div class="modal fade" id="NewInvoiceNumber" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="width:315px">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4"> Add New Invoice Number</h4>
                                        </div>
                                        <div class="modal-body">
                                           <form role="form" action="" method="post">
                                          
                                           <div class="form-group">
                                            <label>The Current Invoice Number</label>
                                            <input type="text" name="InvoiceNumber" class="form-control"  value="<?php echo $InvoiceNo; ?>" readonly />
                                            <p class="help-block">Save To Increment the Invoice Number.</p>
                                        </div>
                                            
                                            <button type="submit" name="SaveInvoice" class="btn btn-primary">Save</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        
                                       
                                    		</form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                    </div>
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

    <!-- PAGE LEVEL SCRIPTS -->
  <script src="assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
     <script src="assets/plugins/validationengine/js/jquery.validationEngine.js"></script>
    <script src="assets/plugins/validationengine/js/languages/jquery.validationEngine-en.js"></script>
    <script src="assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
    <script src="assets/js/validationInit.js"></script>
    <script>
        $(function () { formValidation(); });
        </script>
     <!--END PAGE LEVEL SCRIPTS -->
     
      <!-- PAGE LEVEL SCRIPTS -->
     <script src="assets/plugins/wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="assets/plugins/bootstrap-wysihtml5-hack.js"></script>
    <script src="assets/plugins/CLEditor1_4_3/jquery.cleditor.min.js"></script>
    <script src="assets/plugins/pagedown/Markdown.Converter.js"></script>
    <script src="assets/plugins/pagedown/Markdown.Sanitizer.js"></script>
    <script src="assets/plugins/Markdown.Editor-hack.js"></script>
    <script src="assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
    <script src="assets/js/editorInit.js"></script>
    <script>
        $(function () { formWysiwyg(); });
        </script>
     
</body>
     <!-- END BODY -->
</html>
<?php
if (isset($_POST['SaveInvoice'])){

$InvoiceNumber = ($_POST["InvoiceNumber"]);
$NewInvoiceNumber = $InvoiceNumber+1;

$query ="INSERT INTO invoice(`InvoiceNumber`) VALUES ('$NewInvoiceNumber')";
 $row="mysql_num_rows($query)";

 mysql_query($query)or die(mysql_error());
 if(mysql_affected_rows()>=1){
	echo "<script>alert('The INVOICE INCREMETED')</script>";
	echo "<script>location.href='AddNewSales.php?id=$idd'</script>";

 }else{
	echo "<script>alert('the INVOICE is not successfully INCREMETED')</script>";
	echo "<script>location.href='AddNewSales.php?id=$idd'</script>";

 }
 //echo "treasure will be set if the form has been submitted (to TRUE, I believe)";
 
}
?>
<?php
}
else{
echo "<script>location.href='index.php'</script>";
} ?>