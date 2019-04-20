<?php 
	
	include("header.php");
	$slect=mysqli_query($con,"SELECT * FROM panchal_events WHERE FLAG=0");

 
?>
<link href="dist/css/jquery.datetimepicker.css" rel="stylesheet" type="text/css"/>
<link href="dist/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>  
   
<script src="dist/js/jquery.dataTables.js" type="text/javascript"></script>
    <script language="javascript">
        function showdiv(formdiv)
		{
			var f=document.getElementById("formdiv");
			
			if(f.style.display == 'none')
			{
				f.style.display="block";
				
			}
			
			
		}
		  function disdiv(formdiv)
		{
			var ef=document.getElementById("formdiv");
			
			if(ef.style.display == 'block')
			{
				ef.style.display="none";
				
			}
			
			
		}
			</script>    
<script type="text/javascript">
$(document).ready(function() {
    $('#example').dataTable( {
	 "sScrollX": "100%",
	 "bScrollCollapse": true
     } );
} );
</script>	
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Event
            <small>Details</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index1.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="eventdetail.php">Event</a></li>
            <li class="active">Detail</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <!-- /.box -->
<button id="addRow" onclick="showdiv('formdiv');" class="btn btn-block btn-primary" style="width:120px;padding:10px;">Add Event</button>
<br/>
</p>
<div id="formdiv" style="display:none;" >
<div class="box box-info">
       <div class="box-header with-border">
            <h3 class="box-title">Event Form</h3>
                </div><!-- /.box-header -->
    <form class="form-horizontal" enctype="multipart/form-data" action="eventAdd.php" method="post" name="formv" id="formv">
                  <div class="box-body">
                    
				
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Name</label>
                      <div class="col-sm-10">
					
			  <input type="text" name="ename"  placeholder="Event Name" data-bvalidator="required" data-bvalidator-msg="Please enter the event name">
		      
					
					</div></div>
					
					<div class="form-group">
                      <label for="mid" class="col-sm-2 control-label">Description</label>
                      <div class="col-sm-10">
					     <input type="text" name="edes"  placeholder="Event Description" data-bvalidator="required" data-bvalidator-msg="Please enter the event description">
					  </div></div>
					  
					  		  
					    
					  <div class="form-group">
                      <label for="mid" class="col-sm-2 control-label">Event Banner Image</label>
                      <div class="col-sm-10">
					<input type="file" name="files[]" multiple /> <p><span ><font color="red">Select One Or More Banner For Event</font></span> <br/>
</p>
					  </div></div>
					 				 				  
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="reset" onclick="disdiv('formdiv');" class="btn btn-default">Cancel</button>
                    <input type="submit" class="btn btn-info pull-right" name="submit" value="Submit">
                  </div><!-- /.box-footer -->
                </form>
				<script type="text/javascript">
$(document).ready(function(){
	 $('#formv').bValidator();
});
</script>
				 </div><!-- /.box -->
</div>
              
			  <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Event Information</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
				<form method="post" action="eventDelete.php">
				  
				 <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
                      <tr>
                        <th>Select<br/><button type="submit" name="deleteall" title="Delete All"/><img src="images/delete.png" width="20" alt="Delete"></button></th>
                        <th>Sr. No.</th>
                        <th> Name</th>
                        <th> Description</th>
                        
						<th>Image</th>
						<th>Status</th>
                        <th>Edit</th>
						<th>Delete</th>
                      </tr>
                    </thead>
                   <?php  $i=0;
 			while($data=mysqli_fetch_assoc($slect))
			 {
 				 $s=$data['STATUS'];
 				?>	 <tbody>
        <tr>
                        <td><input type="checkbox" id="id" name="id[]" value="<?php echo $data['EVENTIMAGE']; ?>" /></td>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $data['EVENTNAME']; ?></td>
                        <td><?php echo $data['EVENTDESCRIPTION']; ?></td>
						
						<td><img src="<?php echo $data['EVENTIMAGE']; ?>" height="40" width="100"/></td>
						<td><?php if($s==0){?><a href="eventDelete.php?status=<?php echo $data['ID']; ?>" class="btn btn-block btn-info">Deactive</a><?php }else{ ?><a href="eventDelete.php?statusd=<?php echo $data['ID']; ?>" class="btn btn-block btn-info">Active</a><?php } ?></td>
						<td><a href="eventEdit.php?edit=<?php echo $data['ID']; ?>" class="btn btn-block btn-success">Edit</a></td>
						<td>
						<a href="eventDelete.php?delet=<?php echo $data['ID']; ?>&imgname1=<?php echo $data['EVENTIMAGE']; ?>" onclick="return confirm('Are you sure to delete this record?')" class="btn btn-block btn-danger">Delete</a>
						</td>
                      </tr>
                      
                    </tbody>
					<?php 
					$i++;
					}?>
                    
                  
</table>
	  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	   
     <?php
	 include("footer.php");
	 ?>