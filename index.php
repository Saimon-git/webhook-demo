<?php 

$method = $_SERVER['REQUEST_METHOD'];
// detalles de la conexion
$conn_string = "host=ec2-54-75-239-237.eu-west-1.compute.amazonaws.com dbname=d8smd3t2n4dmq0 user=uqimauzdvpykbo port=5432 password=331313e8d38e7fc622232b901448a571ef9d399a3746bd52db652f3d0c658576 options='--client_encoding=UTF8'";

// establecemos una conexion con el servidor postgresSQL
$dbconn = pg_connect($conn_string);

// Revisamos el estado de la conexion en caso de errores. 
if(!$dbconn) {
echo "Error: No se ha podido conectar a la base de datos\n";
} else {
echo "Conexión exitosa\n";
}

// Close connection
pg_close($dbconn);

$data = json_decode(file_get_contents('php://input'), true);
var_dump($data);
	foreach($data['messages'] as $message){ // Echo every message
		// Handle every message here
		// Add to the database or generate a response
		var_dump($message);
	}

// Process only when method is POST

/*if($method == 'POST')
{
	 $requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);

	$text = $json->result->parameters->text;

	switch ($text) {
		case 'hi':
			$speech = "Hi, Nice to meet you";
			break;

		case 'bye':
			$speech = "Bye, good night";
			break;

		case 'anything':
			$speech = "Yes, you can type anything here.";
			break;
		
		default:
			$speech = "Sorry, I didnt get that. Please ask me something else.";
			break;
	}

	$response = new \stdClass();
	$response->speech = $speech;
	$response->displayText = $speech;
	$response->source = "webhook";
	echo json_encode($response); 
}
else
{
	echo "Method not allowed";
}*/

?>
