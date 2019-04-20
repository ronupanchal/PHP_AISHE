<?php
	session_start();
	error_reporting(0);
	include("connection.php");
 include("header.php"); 
	 include("menu.php"); 
	/*if(!(isset($_SESSION["login"]) &&  $_SESSION["login"]!=NULL))
	{
		
		$log="<a href='index.php'></a>";
		$cp=" ";
	}
	else
	{
	
		
		$username=$_SESSION["login"];
		$sel="SELECT * FROM user WHERE u_email='$username'";
		$ress=mysql_query($sel);
		$data=mysql_fetch_assoc($ress);
		$emailid=$data['u_email'];
		//$fnamemain=explode(" ",$emailid);
		$log="Welcome, ".$emailid;
		$cp="<li><a href='changePassword.php'>Change Password</a></li>";
	}*/
	
	if(isset($_POST['submitadd']))
		{
			$q="select * from user where 
				u_email like '".$_SESSION['login']."'
				and u_password like '".$_POST['cpwd']."'
			";
			$res=mysql_query($q);
			$c=mysql_num_rows($res);
			if($c>0)
			{
					$u="update user set u_password='".$_POST['cpwd']."'
					where u_email like '".$_SESSION['login']."'
					";
					mysql_query($u);
					echo "<script>alert('Password Change Successfully..!');</script>";
					echo "<script>window.location.href='adminhome.php';</script>";
					//echo "<script>window.location.href='logout.php';</script>";
				
			}
			else
					$u="Incorrect Old Password";
		}
?>
<section id="container">
	<!--header start-->	
	<?php //include("header.php"); ?>
	<!--header end-->
	<!--sidebar start-->
	<?php //include("menu.php"); ?>
	<!--sidebar end-->
	<!--main content start-->
	 <div class="content-wrapper">
	<section id="main-content">
		<!--<section class="wrapper">-->
		<!-- gallery -->
		<!-- gallery -->
		<!--<div class="gallery">
			<section class="content-header">
				<h1>
					ChangePassword
					<small>Details</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="adminhome.php"><i class="fa fa-dashboard"></i> Home</a></li>
					<li><a href="changepassword.php">ChangePassword</a></li>
					<li class="active">Detail</li>
				   
				</ol>
			</section>
		</div>-->
		<div id="formdiv" style="width:60%;margin-left:100px;" > 
			<div class="box box-info">
				<div class="box-header with-border">
								<h3 class="box-title">Change Password Form</h3>
               	</div><!-- /.box-header -->
   											<form class="form-horizontal" method="post" name="formv" id="formv" action="changepwdcode.php">
                  				<div class="box-body">
								 <div class="form-group">
                     			 </div>
                   					 			
                    				<div class="form-group">
                     				 	<label for="mid" class="col-sm-2 control-label">Current Password<span style="color:#FF0000;font-size:24px;">*</span></label>
                      					<div class="col-sm-10">
			 									<input type="text" name="cpwd" id="cpwd" placeholder="Current Password"
												 	data-bvalidator="alpha,required" 
												 	data-bvalidator-msg="Please enter the current Password" required>
		      									
					
										</div>
									</div>
											<div class="form-group">
                     				 	<label for="mid" class="col-sm-2 control-label">New Password<span style="color:#FF0000;font-size:24px;">*</span></label>
									<div class="col-sm-10">
		 									<input type="text" name="npwd" id="npwd" placeholder="New Password"
												 	data-bvalidator="alpha,required" 
												 	data-bvalidator-msg="Please enter the New Password" required>
		      									
					
										</div>
									</div>
									
								  
                  </div><!-- /.box-body -->
                 
				  <div class="box-footer">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <input type="submit" class="btn btn-info pull-right" name="submitadd" value="Submit">
                  </div><!-- /.box-footer -->
                </form>
   </section>             
   </div>
 <!-- footer -->
<?php include("footer.php"); ?>
  <!-- / footer -->
  


<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- gallery -->

</body>
</html>
