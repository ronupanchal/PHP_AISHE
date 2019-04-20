<?php
set_include_path(get_include_path() . PATH_SEPARATOR . '../lib/');
    require_once "EasyRdf.php";
    require_once "html_tag_helpers.php";

    // Setup some additional prefixes for DBpedia
    EasyRdf_Namespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
    EasyRdf_Namespace::set('owl', 'http://www.w3.org/2002/07/owl#');
    EasyRdf_Namespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
    EasyRdf_Namespace::set('xsd', 'http://www.w3.org/2001/XMLSchema#');
    EasyRdf_Namespace::set('ex', 'http://www.ronuphdswaishe.org/');

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
<ul>
<?php
    $result = $sparql->query(
             'SELECT  ?indv ?un WHERE  { 
  ?indv rdf:type ex:Institution .
   ?indv ex:nameOfInstitution ?un .
} ORDER BY ?un'
    );
    foreach ($result as $row) {
        echo "<li>".link_to($row->un, $row->indv)."</li>\n";
    }
?>
</ul>
<p>Total number of Institution : <?= $result->numRows() ?></p>

</body>
</html>
