<?php
set_include_path(get_include_path() . PATH_SEPARATOR . '../lib/');
    require_once "EasyRdf.php";
    require_once "html_tag_helpers.php";

    // Setup some additional prefixes for DBpedia
    EasyRdf_Namespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
    EasyRdf_Namespace::set('owl', 'http://www.w3.org/2002/07/owl#');
    EasyRdf_Namespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
    EasyRdf_Namespace::set('xsd', 'http://www.w3.org/2001/XMLSchema#');
    EasyRdf_Namespace::set('ex', 'http://www.ronakpanchal.in/PHD/');

    $sparql = new EasyRdf_Sparql_Client('http://72.9.104.172:3030/aishephd/sparql');
	
	//$res = $sparql->query('SELECT (MAX(?instcode)+1 AS ?icode) WHERE { ?s a ex:Institution . ?s ex:codeOfInstitution ?instcode . }');
?>
<html>
<head>
  <title>...:: AISHE Institution ::...</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<h1>AISHE Institution</h1>

<h2>List of Institution</h2>
<form>
<input type="text" name="txtsearch"></input>
<input type="submit" value="Search" name="btnsearch"></input>
<input type="submit" value="Show All" name="btnshowall"></input>
<ul>
<?php

if(isset($_REQUEST['btnsearch']))
{
	if($_REQUEST['txtsearch']!="")
	{
	    $result = $sparql->query(
             'SELECT ?x ?cinst ?iname ?nameofp  ?prep WHERE { 
              ?x a ex:Institution .
               ?x ex:codeOfInstitution ?cinst .
               ?x ex:nameOfInstitution ?iname .
              ?x ex:nameOfPrincipal ?nameofp .
 
               ?x ex:preRequestingCourse ?prep .
               FILTER regex(str(?prep),".*'.$_REQUEST['txtsearch'].'*")
           }');

        $cnt = $result->numRows();

        if($cnt>0)
	     {
		
            foreach ($result as $row) {
                  echo "<li>".link_to($row->iname, $row->x)."</li>\n";
            }
			
			?>
			</ul>
<p>Total number of Institution : <?= $result->numRows() ?></p>
<?php
	     }
	     else
	     {
		      echo "<li>No Record Found!!!</li>";
	     }
  }
 else
 {
	echo "Please enter something in textbox!!!";
 }

}
else
{
	$result = $sparql->query(
             'SELECT ?x ?cinst ?iname ?nameofp  ?prep WHERE { 
               ?x a ex:Institution .
               ?x ex:codeOfInstitution ?cinst .
               ?x ex:nameOfInstitution ?iname .
               ?x ex:nameOfPrincipal ?nameofp .
 
               ?x ex:preRequestingCourse ?prep .
  
            }');
     $cnt = $result->numRows();

    if($cnt>0)
	{
		
    foreach ($result as $row) {
        echo "<li>".link_to($row->iname, $row->x)."</li>\n";
       } ?>
	   </ul>
<p>Total number of Institution : <?= $result->numRows() ?></p>
<?php
	}
	else
	{
		echo "<li>No Record Found!!!</li>";
	}
}	
 ?>


</form>
</body>
</html>
