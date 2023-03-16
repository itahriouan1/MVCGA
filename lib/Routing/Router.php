<?php

namespace lib\Routing;

class Router {

    public function request(){
        $path = __DIR__.'\\..\\..\\config\\Routing\\Routes.json';
        $content = file_get_contents($path);
        $Routes = json_decode($content);
        $controllerString = "";
        if(isset($_GET['action'])){
            foreach($Routes as $route){
                if($_GET['action']==$route->action){
                    $controllerString = $route->Controller;
                }
            }
        }
        else{
            foreach($Routes as $route){
                if('/'==$route->action){
                    $controllerString = $route->Controller;
                }
            }

        }
        if($controllerString==""){
            echo 'Route not found';
        }
        else{
            $controllerTable = explode("::",$controllerString);
            $ClassName = $controllerTable[0];
            $methode = $controllerTable[1];
            $classFullName =  "src\\Controller\\".$ClassName;
            $Objet = new $classFullName();
            $Objet->$methode();
            return $Objet;

        }
    }

}