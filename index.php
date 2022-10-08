<?php
    $host="localhost";
    $user="root";
    $passward="";
    $dbname="form";

    $conn=mysqli_connect( $host, $user, $passward,$dbname);

    if($conn)
    {
        echo("connected");
    }
    else{
        die("error1");
    }


    $name=$_POST["name"];
    $email=$_POST["email"];
    $passward=$_POST["passward"];

    $sql="INSERT INTO bootstrap(name,email,passward)values('$name','$email','$passward')";
    
    if(mysqli_query($conn,$sql))
    {
        echo("data inserted");

    }
    else{
        echo("not inserted");
    }


?>