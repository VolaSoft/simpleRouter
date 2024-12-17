<?php
$request = $_SERVER["REQUEST_URI"];

echo "request= ".$request;
echo "</br></br>";

//$request = str_replace($subFolder, "", $request);

// echo "request= ".$request;
// echo "</br></br>";

switch ($request){
    case $subFolder:
    case "/":
    case "":
        $filename = __DIR__ . "/views/" . "home.php";
        echo "FileName Home: ".$filename;
       // require __DIR__ . "/views/home.php";
        break;
    
    default:
        $filename = __DIR__ . "/views" . $request . ".php";
        echo "FileName Default: ".$filename;

        if(file_exists($filename)){
           // require $filename;
            break;
        }

        http_response_code(404);
        require __DIR__ . "/views/404.php";
        break;
}
?>