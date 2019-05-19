<?php
class Bootstrap{
    public function __construct(){

        $url = $_GET['url'];
        $url = explode("/", $url);

        //어떤 페이지로 이동해야 할지 모르는 경우
        if(empty($url[0])){
            require_once ("controller/students.php");
            (new Students())->get();
            return false;
        }
        $file_name = "controller." . $url[0] . ".php";
echo $file_name;
        //파일이 존재하지 않는 경우
        if(!file_exists($file_name)){
            //404 페이지로 이동
            echo "File does not exists";
            return false;
        }

        require_once ($file_name);
        $ct_name = ucfirst($url[0]);
        $controller = new $ct_name;

        if(empty($url[1])){
            $controller->get();
            return false;
        }

        $action_name = isset($url[1]) ? $url[1] : NULL;

        if($action_name && method_exists($controller, $action_name)){
            if(empty($url[2])){
                $controller->{
                    $url[1]
                }
                ();
            }else{
                $controller->{
                    $url[1]
                }
                ($url[2]);
            }
        }else {
            //액션(메소드)가 존재하지 않는 경우
            echo "Action does not exist";
        }
    }
}