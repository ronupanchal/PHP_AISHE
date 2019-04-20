<?php
    /**
     * Store and retrieve data from a SPARQL 1.1 Graph Store
     *
     * This example adds a triple containing the current time into
     * a local graph store. It then fetches the whole graph out
     * and displays the contents.
     *
     * Note that you will need a graph store, for example RedStore,
     * running on your local machine in order to test this example.
     *
     * @package    EasyRdf
     * @copyright  Copyright (c) 2009-2013 Nicholas J Humfrey
     * @license    http://unlicense.org/
     */

   set_include_path(get_include_path() . PATH_SEPARATOR . '../lib/');
    require_once "EasyRdf.php";

	
	    // Setup some additional prefixes for DBpedia
    EasyRdf_Namespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
    EasyRdf_Namespace::set('owl', 'http://www.w3.org/2002/07/owl#');
    EasyRdf_Namespace::set('my', 'http://www.AISHEOntology1.org/');
    //EasyRdf_Namespace::set('dbp', 'http://dbpedia.org/property/');
$endpoint = new EasyRdf_Sparql_Client('http://localhost:3030/AISHE/query','http://localhost:3030/AISHE/update');

?>
<html>
<head>
  <title>GraphStore example</title>
</head>
<body>

<?php
  // Use a local SPARQL 1.1 Graph Store (eg RedStore)
  $gs = new EasyRdf_GraphStore('http://localhost:8080/SemanticWeb/easyrdf/');
/*
insert data".
	" { ".
		 "my:GTU rdf:type my:University . ".
         "my:GTU rdf:type owl:NamedIndividual . ".
		 "my:GTU my:nameOfUni 'Gujarat Technology University' . ".
		 "my:GTU my:codeOfUni 1 . ".
    "}"*/
  // Add the current time in a graph
  $graph1 = new EasyRdf_Graph();
  $graph1->add('my:PNU', 'rdfs:type', 'my:University');
  $graph1->add('my:PNU', 'rdfs:type', 'owl:NamedIndividual');
  $graph1->add('my:PNU', 'my:nameOfUni', 'Panjab National University');
  $graph1->add('my:PNU', 'my:codeOfUni', 1);
  
  
  //$graph1->add('http://www.AISHEOntology1.org/test', 'dc:date', time());
  $endpoint->insert($graph1, 'b.owl');

  // Get the graph back out of the graph store and display it
  $graph2 = $gs->get('b.owl');
  print $graph2->dump();
?>

</body>
</html>
