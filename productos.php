<?php
    header("Access-Control-Allow-Origin: *");


    // $cn y $rs  : es una variable cualqiera 
//  $row : representa cada fila a la hora que examine los datos de mi consulta
    $cn = new mysqli("localhost","root","","matias2022");  //acceso a la base de datos empresa1045 

    //vamos a recuperar la informacion de la tabla categorias
    $rs =$cn -> query("select * from productos"); 

    // vamos a recuperar cada una de las filas de la tabla categorias 

    while($row = $rs ->fetch_assoc()){
        $res[] =$row ; 
    }
    echo json_encode($res,JSON_UNESCAPED_UNICODE);
    $cn->close(); //para cerrar la conexion 



?>