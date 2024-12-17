$request = $_SERVER["REQUEST_URI"];

switch ($request){
    case "/":
    case "":
        require __DIR__ . "/views/home.php";
        break;

    case "/about":
        require __DIR__ . "/views/about.php";
        break;
    
    default:
        http_response_code(404);
        break;
}