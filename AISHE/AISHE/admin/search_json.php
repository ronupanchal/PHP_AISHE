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
$response=array();

	$result = $sparql->query(
             'SELECT ?x ?cinst ?iname ?nameofp  ?prep WHERE { 
               ?x a ex:Institution .
               ?x ex:codeOfInstitution ?cinst .
               ?x ex:nameOfInstitution ?iname .
               ?x ex:nameOfPrincipal ?nameofp .
 
               ?x ex:preRequestingCourse ?prep .
  
            }');
     
if ($result->numRows() > 0) {
    // output data of each row
	foreach ($result as $row) {
                  array_push($response,array("cinst"=>val($row->cinst),"membername"=>val($row->iname)));
            }
   
} else {
    echo "0 results";
}

	
echo json_encode(array("Server_Response"=>$response));
 ?>
