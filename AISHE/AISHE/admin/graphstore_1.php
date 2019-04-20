<?php
set_include_path(get_include_path() . PATH_SEPARATOR . '../lib/');
    require_once "EasyRdf.php";

	
	    // Setup some additional prefixes for DBpedia
    EasyRdf_Namespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
    EasyRdf_Namespace::set('owl', 'http://www.w3.org/2002/07/owl#');
    EasyRdf_Namespace::set('my', 'http://www.AISHEOntology1.org/');
    //EasyRdf_Namespace::set('dbp', 'http://dbpedia.org/property/');
$endpoint = new EasyRdf_Sparql_Client('http://localhost:3030/AISHE/query','http://localhost:3030/AISHE/update');


function insert_data() {
    global $endpoint;
    $result = $endpoint->update("insert data".
	" { ".
		 "my:GTU rdf:type my:University . ".
         "my:GTU rdf:type owl:NamedIndividual . ".
		 "my:GTU my:nameOfUni 'Gujarat Technology University' . ".
		 "my:GTU my:codeOfUni 1 . ".
    "}"
    );
}
function insert_where() {
    global $endpoint;
    $result = $endpoint->update ("
        PREFIX : <http://www.AISHEOntology1.org/> 
        INSERT {?s :loves ?o}
        WHERE {?s :name 'bob'. ?o :name 'alice'}"
    );
}
function select_where() {
    global $endpoint;
    $result = $endpoint->query("
        SELECT * WHERE {?s ?p ?o}"
    );
    print ($result->numRows()); 
}

insert_data();   select_where();
//insert_where();  select_where();

?>