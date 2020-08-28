<?php
    $firstname=$_POST['Fname'];
    $lastname=$_POST['Lname'];
    $mobilenum=$_POST['Mnumber'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
    $dob=$_POST['Dob'];
    $gender=$_POST['Gender'];


    $severname='localhost';
    $username='root';
    $password='';
    $database='register';


    $conn=new mysqli('localhost','root','','register');

    if($conn->connect_error){
        die('connection failed :' .$conn->connect_error);
    }else{
        
       

        $stmt=$conn->prepare("insert into registration(Fname,Lname,Mnumber,Email,Password,Dob,Gender) values(?,?,?,?,?,?,?)");
        $stmt->bind_param("ssissis",$firstname,$lastname,$mobilenum,$email,$password,$dob,$gender);
        $stmt->execute();
        echo "Registration successfully...";
        $stmt->close();
        $conn->close();
        

    }
?>