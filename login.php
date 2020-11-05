<?php
    session_start();

    $name=$_POST['name'];
    $password=$_POST['password'];
    // echo('Hello');

    $connection = mysqli_connect('localhost','root','');

    mysqli_select_db($connection,'record');

    $s="Select * from login where name='$name' && password='$password'";
    $r=mysqli_query($connection,$s);

    $n=mysqli_num_rows($r);
    if($n==1)
    {
        header('location:home.php');
    }
    else
    {    
        // $register="Insert into login(name,password) values('$name','$password')";
        // mysqli_query($connection,$register);
        // echo('Registered successfully');
        header('location:home.php');
    }
?>