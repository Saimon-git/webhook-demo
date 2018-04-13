<?php 

$method = $_SERVER['REQUEST_METHOD'];

$data = json_decode(file_get_contents('php://input'), true);
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
