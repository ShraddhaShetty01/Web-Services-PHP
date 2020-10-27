<?php

// if($_SERVER['REQUEST_METHOD'] == "GET"){

// 	$json = array("status" => 0, "msg" => "hi");

// 	header('Content-type: application/json');
// 	echo json_encode($json);
// }



if($_SERVER['REQUEST_METHOD'] == "POST"){

	// $name = isset($_POST['name']) ? mysql_real_escape_string($_POST['name']) : "";
	// $password = isset($_POST['pwd']) ? mysql_real_escape_string($_POST['pwd']) : "";

	$inputJSON = file_get_contents("php://input");

	$data = json_decode($inputJSON);

	print_r($data->pwd);



	$link = mysqli_connect("localhost", "root", "root", "practice");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO register (username, password) VALUES ('$data->name', '$data->pwd')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// $stmt= $link->prepare($sql);
// $stmt->bind_param("ss", (string)$data->name, (string) $data->pwd);
// $stmt->execute();
 


// Close connection
mysqli_close($link);
		// $stmt = $mysqli->prepare($sql);
		// $stmt->bind_param("ss", $data->name, $data->pwd);
		// $stmt->execute();


 
}




// if(!empty($_GET['name'])){

// 	$name = $_GET['name'];
// 	$age = get_names($name);


// 	if(empty($age)){
// 		// user not found 

// 		deliver_response(200, "user not found", NULL);

// 		else 

// 			// respond with age 
// 					deliver_response(200, "user  found", $age);


// 	}
// else
// {
// 	// invalid request

// 			deliver_response(400, "Invalid Request", NULL);

// }


// function deliver_response($status, $status_message, $data)

// {
// 	header("HTTP/1.1 $status $status_message");


// 	$response['status'] = $status;
// 		$response['status-message'] = $status-message;
// 			$response['data'] = $data;

// 			$json_response = json_encode($response);
// 			echo $json_response;


// }


// }




?>