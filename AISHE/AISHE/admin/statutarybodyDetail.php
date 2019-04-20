<?php
  include("connection.php");
	
	$res = mysql_query("SELECT (MAX(st_id)+1) as st_code from statutory_body WHERE FLAG=1");
	
	$slect=mysql_query("SELECT * FROM statutory_body WHERE FLAG=1");
	
?>
<?php include('header.php'); ?>
<?php include('menu.php'); ?>
<!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.min.css">
 
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Statutary Master</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
              <li class="breadcrumb-item active">STATUTORY DETAIL</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
		
          <button id="addRow" onclick="showdiv('formdiv');" 
					class="btn btn-block btn-primary"
					style="width:120px;padding:10px;">Add Statutory</button><br/>
					
			<div id="formdiv" style="display:none;" >
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Statutory Detail</h3>
              </div>
              <!-- /.card-header -->
			  
              <!-- form start -->
              <form role="form" action="statutarybodyAdd.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Statutory Code</label>
					  <?php while($row=mysql_fetch_object($res))
 { 
					    if($row->st_code == null)
						{
							?>
							<input type="text" class="form-control" name="stcode" value="1" readonly placeholder="Enter Statutary Code" >
							<?php
						}
						else
						{
					  ?>
                    <input type="text" class="form-control" name="stcode" value="<?php echo $row->st_code; ?>" readonly placeholder="Enter statutary Code">
					  <?php 
					  }
					  } ?>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Statutary Name</label>
                    <input type="text" class="form-control" name="stname" placeholder="Enter statutory Name" required>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="reset" name="btncancel"  onclick="disdiv('formdiv');" class="btn btn-primary">Cancel</button><button type="submit" name="stadd"  class="btn btn-primary pull-right">Submit</button>
                </div>
              </form>
			  <!-- form end -->
			  
            </div>
            <!-- /.card -->
             </div>
          </div>		

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Table With Full Features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Statutary Code</th>
                  <th>Statutary Name</th>
                 <th>Edit</th>
						<th>Delete</th>
                </tr>
                </thead>
                <tbody>
				
                <?php
    //$result = $sparql->query('SELECT ?x ?code ?name WHERE { ?x a ex:StatutoryBody . ?x ex:codeOfStatutoryBody ?code . ?x ex:nameOfStatutoryBody ?name .}');
    while($data=mysql_fetch_assoc($slect))
 {
		?>
		<tr>
        <td><?php echo $data['st_id']; ?></td>
        <td><?php echo $data['st_name']; ?></td>		
		<td><a href="statutarybodyEdit.php?edit=<?php echo $data['st_id']; ?>" class="btn btn-block btn-success">Edit</a></td>
		<td><a href="statutarybodyDelete.php?delet=<?php echo $data['st_id']; ?>" onclick="return confirm('Are you sure to delete this record?')" class="btn btn-block btn-danger">Delete</a></td>
		</tr>
    <?php }
?>				
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Statutary Code</th>
                  <th>Statutary Name</th>
				  <th>Edit</th>
						<th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
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
</body>
</html>
