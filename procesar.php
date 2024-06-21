<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        
        $nombre="";
        $mensaje="";
        $correo="";

        if( !empty($_POST['name']))
        {
            $nombre=$_POST['name'];
        }else{
            $nombre="vacio";
        }

        $correo = !empty($_POST['email']) ? $_POST['email'] : "vacio";
        $mensaje=!empty($_POST['mensaje']) ?$_POST['mensaje'] : "vacio";

        if($nombre=="vacio" || $correo=="vacio" || $mensaje=="vacio"){
            echo "Existen campos no validos";
        }else{
            echo "Gracias por contactarnos ". $nombre . "<br> en breve te contactaremos a ". $correo;
        }

    }else{
        echo "algo no esta del todo bien ". $_SERVER['REQUEST_METHOD'];
    }
    

    //php conceptos basicos 
    //variables 
    //C# public int x=0;
    //js var x=0; x="hola"
    //php $x=0; $_POST[], $_GET[]
    //arreglos en php y sus diferencias $a= array(6,8,3,4)
    //estructuras de control selectivas repetitivas 
    //selectivas if  if-else shwich operador ternario
    //iterativas for while foreach
?>