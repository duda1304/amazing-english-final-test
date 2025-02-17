<?php

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get posted data
$data = json_decode(file_get_contents("php://input"));
 
$states = json_decode(file_get_contents('data/states.json'), true);

$state = $states[$data->id];

echo json_encode(
            array(
                "code" => 200,
                "content" => $state
            )
        );
?>