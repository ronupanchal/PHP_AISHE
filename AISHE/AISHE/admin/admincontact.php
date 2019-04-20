<?php
include("connection.php");
include("header.php");
include("menu.php");
?>  
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
            <h1>Contact Master</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
              <li class="breadcrumb-item active">CONTACT DETAIL</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
   <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
       <!-- <div class="w3-center">
          <h3>Contact to All India Survey Of Higher Education</h3>
          <!--<h5>Title description, <span class="w3-opacity">April 7, 2016</span></h5>
        </div>-->
        <div class="w3-justify">
          <!--<img src="/w3images/runway.jpg" alt="Runway" style="width:100%" class="w3-padding-16">-->
          <div class="w3-container">
  
  <!--<p>If you want a specific hover color, add any of the w3-hover-classes to each li element:</p>-->
  <p>
	<strong>Mr. Kirpalsinh V. Mahida </strong> <br/> <br/>
	<strong>Mr. Jenil B. Vansiya.</strong> <br/> <br/>
	<strong>Miss. Nidhi P. Gajjar.</strong>
        
  <p><strong>Address</strong> : At & Po :- Umrakh , Dist : Surat , Gujarat , INDIA. - 394 602</p> 
        
  <p><strong>Web Site</strong> : www.aishe.gov.in</p>
        
  <p><strong>Email</strong> : info@aishenic@gmail.com, aishe2010@yahoo.com </p>
    <p><strong>Phone</strong> : +91-2622-220581, 222581.</p>
      <p><strong>Mobile</strong> : 	+91-98982-67744 (Mr. Kirpalsinh V. Mahida) &nbsp;<br/><br/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									+91-98241-58857 (Mr. Jenil B. Vansiya) &nbsp;<br/><br/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									+91-94260-16405 (Miss. Nidhi P. Gajjar)</p>
      <p><strong>Fax</strong> : +91-2622-225458</p>
</div>
</div>


</section>    
  
 </div>

<?php include("footer.php"); ?>		  
</body>
</html>