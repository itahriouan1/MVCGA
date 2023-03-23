<?php

namespace lib\View;

class View {

    public function render($viewFile){
        if(func_num_args()==2){
            $params = func_get_arg(1);
            extract($params);
        }
        $path = __DIR__."/../../src/View/".$viewFile.".php";
        if(file_exists($path)){
            include $path;
        }
        else{
            echo "View file not found";
        }
    }

}