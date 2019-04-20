<?php
set_include_path(get_include_path() . PATH_SEPARATOR . '../lib/');
    require_once "EasyRdf.php";

	
	    // Setup some additional prefixes for DBpedia
    EasyRdf_Namespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
    EasyRdf_Namespace::set('owl', 'http://www.w3.org/2002/07/owl#');
    EasyRdf_Namespace::set('my', 'https://drronakpanchal.wordpress.com/');
    //EasyRdf_Namespace::set('dbp', 'http://dbpedia.org/property/');
$endpoint = new EasyRdf_Sparql_Client('http://localhost:3030/Uni/query','http://localhost:3030/Uni/update');


function insert_data() {
    global $endpoint;
    $result = $endpoint->update("insert data".
	" { ".
		 "my:CTU rdf:type my:University . ".
         "my:CTU rdf:type owl:NamedIndividual . ".
		 "my:CTU my:nameOfUni 'Calorx Teachers\' University' . ".
		 "my:CTU my:codeOfUni 3 . ".
    "}"
    );
}
function insert_where() {
    global $endpoint;
    $result = $endpoint->update ("
        PREFIX : <https://drronakpanchal.wordpress.com/> 
        INSERT {?s :isAffiliatedTo ?o}
        WHERE {?s :nameOfInstitution 'Calorx Education'. ?o :nameOfUni 'CTU'}"
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
insert_where();  select_where();

?>