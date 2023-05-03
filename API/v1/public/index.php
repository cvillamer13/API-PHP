<?php
//     $serverHost = $_SERVER["HTTP_HOST"];
//     header("Access-Control-Allow-Origin: https://$serverHost/API/v1/public/");
//     header("Content-Type: application/json; charset=UTF-8");
//     header("Access-Control-Allow-Methods: GET");
//     header("Access-Control-Max-Age: 3600");
//     header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    require_once '../app/init.php';
//     $APIKey = $_SERVER["HTTP_KEY"];
//     $intHandle = myOpenDB(0);
//     $CheckerKey = APIKeyChecker($intHandle, $APIKey);
     $app = new App;
// echo $CheckerKey; exit;
//     if($CheckerKey ==  true){
//         if($_SERVER["REQUEST_METHOD"] == "GET"){
//             $app = new App;
//         }else{
//             $arrData["error"] = "Please check your method";
//             print_r(json_encode($arrData["error"]));
//         }
//     }else{
//         $arrData = array( "404" => "Please Contact Datamobility Corporation.");
//          print_r(json_encode($arrData));
//     
//     }
    
    
