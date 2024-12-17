<?php
$request = $_SERVER["REQUEST_URI"];

$request = str_replace($subFolder, "", $request);

switch ($request){
    case $subFolder:
    case "/":
    case "":
        $filename = __DIR__ . "/views/" . "home.php";
        require __DIR__ . "/views/home.php";
        break;
    
    default:
        $filename = __DIR__ . "/views/" . $request . ".php";

        if(file_exists($filename)){
           require $filename;
           break;
        }

        http_response_code(404);
        require __DIR__ . "/views/404.php";
        break;
}
?>