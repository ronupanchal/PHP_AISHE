<?php 
	
	include("header.php");
	$eid=$_GET['edit'];
	$slect=mysql_query("SELECT * FROM panchal_samaj_events WHERE ID='$eid'");
 $res=mysql_fetch_array($slect);
  
   
?>
<link href="dist/css/jquery.datetimepicker.css" rel="stylesheet" type="text/css"/>
         <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
Advertisement            <small>Details</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index1.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="eventdetail.php">Advertisement</a></li>
            <li class="active">Edit</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <!-- /.box -->

<div id="formdiv">
<div class="box box-info">
       <div class="box-header with-border">
            <h3 class="box-title">Advertisement Form</h3>
                </div><!-- /.box-header -->
    <form class="form-horizontal" action="eventAdd.php" enctype="multipart/form-data" method="post" name="formv" id="formv">
                  
                    <div class="box-body">
										
                    				<div class="form-group">
                     				 	<label class="col-sm-2 control-label">Name<span style="color:#FF0000;font-size:24px;">*</span></label>
                      					<div class="col-sm-10">
										<input type="text" name="title" value="<?php echo $res['EVENTNAME']; ?>" 
										placeholder="Title for Photo" data-bvalidator="required" 
													data-bvalidator-msg="Please enter Title for Photo">	
												<input type="hidden" name="iidm" value="<?php echo $res['ID']; ?>" >				
										</div>
									</div>
					
									<div class="form-group">
								  		<label for="mid" class="col-sm-2 control-label">Description<span style="color:#FF0000;font-size:24px;">*</span></label>
								  		<div class="col-sm-10">
										<br/>
								   					   <input type="text" name="edes" value="<?php echo $res['EVENTDESCRIPTION']; ?>" placeholder="Event Description" data-bvalidator="required" data-bvalidator-msg="Please enter the event description">
								 		 </div>
									</div>
							 <div class="form-group">
                      <label class="col-sm-2 control-label">Contact</label>
                      <div class="col-sm-10">
					     <input type="text" value="<?php echo $res['EVENTCONTACT']; ?>" name="eventnum"/>
					  </div></div>
								  <div class="form-group">
									  <label class="col-sm-2 control-label">Upload One Photo<span style="color:#FF0000;font-size:24px;">*</span></label>
									  <div class="col-sm-10">
									  <br/>
									    <input type="hidden" name="imgn" value="<?php echo $res['EVENTIMAGENAME']; ?>" />
									    <input type="hidden" name="img" value="<?php echo $res['EVENTIMAGE']; ?>" />
									  <img src="<?php echo $res['EVENTIMAGE']; ?>" height="100" width="100" />
									  <a href="eventDelete.php?imgname=<?php echo $res['EVENTIMAGE']; ?>&ie=<?php echo $res['ID']; ?>">delete from folder</a>
									  <input type="file" name="filess"/>
										
									  </div></div>
					  
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                   <a href="eventdetail.php" type="reset" class="btn btn-default">Cancel</a>
                    <input type="submit" class="btn btn-info pull-right" name="submitedit" value="Submit">
                  </div><!-- /.box-footer -->
                </form>
				<script type="text/javascript">
$(document).ready(function(){
	 $('#formv').bValidator();
});
</script>
				 </div><!-- /.box -->
</div>
              
			   </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	      <?php
	 include("footer.php");
	 ?>