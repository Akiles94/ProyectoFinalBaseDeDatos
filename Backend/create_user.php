<?php
    
    $conexion = new PDO('mysql:host=localhost;dbname=phpmysql',"root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $password1= hash("md5", "12345678");
    $password2= hash("md5", "123456");
    $password3= hash("md5", "1234");
    $sql = "INSERT INTO usuarios (nombres, fechaNacimiento, correo,password)
    VALUES ('Oscar Vinueza', '1994-12-14', 'os.vinueza94@gmail.com','".$password1."')";
    $conexion->exec($sql);
    echo 'Usuario creado';
    $sql = "INSERT INTO usuarios (nombres, fechaNacimiento, correo,password)
    VALUES ('Jose Luna', '1998-05-10', 'josluna@gmail.com','".$password2."')";
    $conexion->exec($sql);
    echo 'Usuario creado';
    $sql = "INSERT INTO usuarios (nombres, fechaNacimiento, correo,password)
    VALUES ('Jurgen Huerlo', '1997-09-20', 'jurgen97@gmail.com','".$password3."')";
    $conexion->exec($sql);
    echo 'Usuario creado';
 ?>