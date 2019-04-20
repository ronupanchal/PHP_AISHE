<?php
    /**
     * Making a SPARQL SELECT query
     *
     * This example creates a new SPARQL client, pointing at the
     * dbpedia.org endpoint. It then makes a SELECT query that
     * returns all of the countries in DBpedia along with an
     * english label.
     *
     * Note how the namespace prefix declarations are automatically
     * added to the query.
     *
     * @package    EasyRdf
     * @copyright  Copyright (c) 2009-2013 Nicholas J Humfrey
     * @license    http://unlicense.org/
     */

    set_include_path(get_include_path() . PATH_SEPARATOR . '../lib/');
    require_once "EasyRdf.php";
    require_once "html_tag_helpers.php";

    // Setup some additional prefixes for DBpedia
    EasyRdf_Namespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
    EasyRdf_Namespace::set('owl', 'http://www.w3.org/2002/07/owl#');
    EasyRdf_Namespace::set('my', 'https://drronakpanchal.wordpress.com/');

    $sparql = new EasyRdf_Sparql_Client('http://localhost:3030/Uni/sparql');
?>
<html>
<head>
  <title>EasyRdf Basic Sparql Example</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<h1>EasyRdf Basic Sparql Example</h1>

<h2>List of University</h2>
<ul>
<?php
    $result = $sparql->query(
             'SELECT  ?indv ?un WHERE  { 
  ?indv rdf:type my:University .
   ?indv my:nameOfUni ?un .
} ORDER BY ?un'
    );
    foreach ($result as $row) {
        echo "<li>".link_to($row->un, $row->indv)."</li>\n";
    }
?>
</ul>
<p>Total number of countries: <?= $result->numRows() ?></p>

</body>
</html>
