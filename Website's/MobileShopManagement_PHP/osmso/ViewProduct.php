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
    <title>OSMS | View Product</title>
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

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
     <!-- END HEAD -->
     <!-- BEGIN BODY -->
<body class="padTop53 " >

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
                 <li class="panel active">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#Product">
                        <i class="icon-list-alt"></i> Product
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">2</span>&nbsp;
                    </a>
                    <ul class="in" id="Product">
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


                        <h2> View Product </h2>



                    </div>
                </div>

                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Details Info about Product
                      </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Brand Name</th>
                                            <th>Purchasing Price</th>
                                            <th>Quantity</th>
                                            <th>Total Price</th>
                                            <th>Selling Price</th>
                                            <th>Action</th>

                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
									if($role=="Manager")
								{   
					//$idd=$_SESSION["CName"];       
					$query= $dbo->query("SELECT * FROM product ORDER by productid DESC");
					foreach ($query as $product) {
 	
					?>
                                        <tr class="odd gradeX">
                                        	<td><?php echo $product['productid'];?></td>
                                            <td><?php echo $product['product_name'];?></td>
                                            <td><?php echo $product['brand'];?></td>
                                            <td><?php echo $product['price'];?></td>
                                            <td class="center"><?php echo $product['quantity'];?></td>
                                            <td class="center"><?php echo $product['TotalPrice'];?></td>
                                            <td>
                                            <?php 
												$IDProduct=$product['productid'];
                                           		 $quer= mysql_query("SELECT DISTINCT Price FROM price where IDProduct='$IDProduct'");
												 while($i = mysql_fetch_array($quer))
														{
													$Price=$i['Price'];
													}
											?>
											<?php echo $Price;?>
                                            
                                            </td> 
                                            <td class="center">
                                            <button class="btn" data-toggle="modal" data-target="#NewInvoiceNumber"><i class="icon-eye-open"></i> </button>
                                            <button class="btn btn-danger"><i class="icon-remove icon-white"></i> </button>
                                            
                                            </td>
                                            
                                        </tr>
                                    <?php } }
									 
									else
								{  
					//$idd=$_SESSION["CName"];       
					$query= $dbo->query("SELECT * FROM product WHERE IDBranch='$IDBranch' ORDER by productid DESC");
					foreach ($query as $product) {
 	
					?>   
					<tr class="odd gradeX">
                                        	<td><?php echo $product['productid'];?></td>
                                            <td><?php echo $product['product_name'];?></td>
                                            <td><?php echo $product['brand'];?></td>
                                            <td><?php echo $product['price'];?></td>
                                            <td class="center"><?php echo $product['quantity'];?></td>
                                            <td class="center"><?php echo $product['TotalPrice'];?></td>
                                            <td>
                                            <?php 
												$IDProduct=$product['productid'];
                                           		 $quer= mysql_query("SELECT DISTINCT Price FROM price where IDProduct='$IDProduct'");
												 while($i = mysql_fetch_array($quer))
														{
													$Price=$i['Price'];
													}
											?>
											<?php echo $Price;?>
                                            
                                            </td> 
                                            <td class="center">
                                            <button class="btn" data-toggle="modal" data-target="#NewInvoiceNumber"><i class="icon-eye-open"></i> </button>
                                            <button class="btn btn-danger"><i class="icon-remove icon-white"></i> </button>
                                            
                                            </td>
                                            
                                        </tr>
										<?php } }?> 
                                  </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
          

            </div>




        </div>
       <!--END PAGE CONTENT -->


    </div>

     <!--END MAIN WRAPPER -->
     <div class="col-lg-12">
                        <div class="modal fade" id="NewInvoiceNumber" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="width:500px">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4"> Add New Invoice Number</h4>
                                        </div>
                                        <div class="modal-body">
                                           <form role="form" action="" method="post">
                                          
                                           <div class="form-group">
                                            <label>The Current Invoice Number</label>
                                            <input type="text" name="InvoiceNumber" class="form-control"  value="" readonly />
                                            
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Product Name</label>
                                            
                                                <input type="text" id="ProductName" name="ProductName" class="form-control" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="">Brand Name</label>
                                            
                                                <input type="text" id="BrandName" name="BrandName" class="form-control" />
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class=""> Purchasing Price</label>
                                                <input type="text" id="ProductPrice" name="ProductPrice" class="form-control" />
                                           
                                        </div>
                                        <div class="form-group">
                                            <label class=""> Quantity</label>
                                                <input type="text" id="Quantity" name="Quantity" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label class=""> Total Price</label>
                                                <input type="text" id="TotalPrice" name="TotalPrice" class="form-control" readonly />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="">Display Size</label>

                                                <input type="text" id="DisplaySize" name="DisplaySize" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label class="">Operating System</label>
                                                <input type="text" id="OperatingSystem" name="OperatingSystem" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label class="">Processor</label>

                                                <input type="text" id="Processor" name="Processor" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label class="">Internal Memory </label>
                                                <input type="text" id="InternalMemory" name="InternalMemory" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label class="">RAM</label>
                                                <input type="text" id="RAM" name="RAM" class="form-control" />
                                        </div>
                                         <div class="form-group">
                                            <label class="">Camera Description</label>
                                                <input type="text" id="CameraDescription" name="CameraDescription" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label class="">Battery Life</label>
                                                <input type="text" id="BatteryLife" name="BatteryLife" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label class="">Weight</label>
                                                <input type="text" id="Weight" name="Weight" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label class="">Model</label>
                                                <input type="text" id="Model" name="Model" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label class="">Dimension</label>
                                                <input type="text" id="Dimension" name="Dimension" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label class="">ASIN</label>
                                                <input type="text" id="ASIN" name="ASIN" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label class="">Product Image</label>
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/demoUpload.jpg" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="ProductImage" /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                            </div>
                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="">Date</label>
                                                <input type="date" id="date2" name="date2" class="form-control" />
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="control-label ">Description</label>

                                            <div class="">
                                              
                                                 <textarea id="wysihtml5" class="form-control" rows="10" name="Description"></textarea>
                                            </div>
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
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
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
     <!-- END PAGE LEVEL SCRIPTS -->
</body>
     <!-- END BODY -->
</html>
<?php
}
else{
echo "<script>location.href='index.php'</script>";
} ?>