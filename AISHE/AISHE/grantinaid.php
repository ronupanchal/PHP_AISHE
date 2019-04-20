<?php 
	include("connection.php");
	include("header.php");
	$slect=mysql_query("SELECT * FROM college WHERE management_of_college='' and FLAG=1");
?>
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>Grant In Aid College</h3>
          <!--<h5>Title description, <span class="w3-opacity">April 7, 2016</span></h5>-->
        </div>

        <div class="w3-justify">
          <!--<img src="/w3images/runway.jpg" alt="Runway" style="width:100%" class="w3-padding-16">-->
          <div class="w3-container">
			<div class="w3-responsive">
			 <table class="w3-table-all" id="tbluni">
			<tr>
			<!--name_of_college	aishe_code	postal_address_line1	postal_address_line2	country	state	district	pin_code	web_site	year_of_establishment	name_of_principal	principal_contactno	principal_email_id	name_of_collage_nodal_officer_for_aishe	designation_of_nodel_officer	telephone_no_of_nodel_officer	mobile_no_of_nodel_officer	email_id_of_nodel_officer	name_of_university_to_which_affiliated	university_type	-->
			  <th>Code Of College</th>
			  <th>Name Of College</th>
			  <th>AISHE Code</th>
			  <th>Management Of College</th>
			 <!-- <th>Map</th>-->
			 
			</tr>
			<?php while($row=mysql_fetch_object($slect)) 
					 {?>
					    
			<tr>
			 <th><?php echo $row->code_of_college; ?></th>
			 <th><?php echo $row->name_of_college; ?></th>
			 <th><?php echo $row->aishe_code; ?></th>
			  <th><?php echo $row->management_of_college; ?></th>
			  <!--<th><button <a href="longilati.php?longi=$row->longi&lati=$row->lati" class="w3-circle">GO TO MAP</button></th>-->
			</tr>
			
					 <?php } ?>
	  		</table>
	    </div>
    
</div>
<br/>
 <center><input type="button" id="btnExport" value="Export in PDF" /></center>

</div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
            $("body").on("click", "#btnExport", function () {
                html2canvas($('#tbluni')[0], {
                    onrendered: function (canvas) {
                        var data = canvas.toDataURL();
                        var docDefinition = {
                            content: [{
                                image: data,
                                width: 500
                            }]
                        };
                        pdfMake.createPdf(docDefinition).download("Table.pdf");
                    }
                });
            });
    </script>

<?php include("footer.php"); ?>