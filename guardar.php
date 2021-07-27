<?php
        //Conectamos con el servidor

        $conectar = @mysqli_connect('localhost', 'root', '');


        //Verificamos la conexion

        if(!$conectar){

            echo "No se pudo conectar con el servidor";



        }else{

            $base=mysqli_select_db($conectar, 'topicos');
            if(!$base){

            echo "No se pudo encontrar la base de datos";

        }
    }
//Vamos a guardar la variable nombre


$nombre = $_POST['nombre'];

//Sql
$sql = "INSERT INTO datos VALUES ('$nombre')";


//Ejecutar la sentencia

$ejecutar=mysqli_query($conectar, $sql);

//Se verifica la ejecución

if(!$ejecutar){

        echo  "Hubo algun error";

}else{

echo "Datos guardados correctamente <br> <a href = 'index.html'> Volver </a>";


}


?>