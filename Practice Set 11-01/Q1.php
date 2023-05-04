<?php
    require ('vendor/autoload.php');

    $faker = Faker\Factory::create('en_PH');
    $conn = mysqli_connect('localhost','root','','faker1');
    if(!$conn)
    {   
    die(mysqli_error());
    }  
    
    $faker = Faker\Factory::create();
    for  ($i=0; $i<100; $i++) {
    $email = mysqli_real_escape_string($conn, $faker->email);
    $lastName = mysqli_real_escape_string($conn, $faker->lastName);
    $firstName = mysqli_real_escape_string($conn, $faker->firstName);
    $userName = mysqli_real_escape_string($conn, $faker->userName);
    $password = mysqli_real_escape_string($conn, $faker->password);
    $sql = "INSERT INTO faker1.userAccount(email, lastname, firstname, username, password) VALUES ('$email','$lastName','$firstName','$userName', '$password')";
     mysqli_query($conn, $sql);
    }   
?>