<?php
    function intro(){
        $parametreSayisi=func_num_args();
        if($parametreSayisi==0){
            echo "parametre yok."."<br>";
        }else{
            //echo func_get_arg(0);
            $parametreler=func_get_args();
            foreach($parametreler as $parametre){
                echo $parametre."<br>";
            }
        }
    }

    intro();
    intro("asli","yilmaz",2000);
?>