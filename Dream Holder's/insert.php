<?php
$server = "localhost" ;
$username = "root" ;
$password = "#harley@1618" ;
$dbname = "insert" ;

$conn = mysqli_connect($server , $username , $password , $dbname) ;

if(isset($_POST['submit'])){
  if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])){
    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $phone = $_POST['phone'] ;

    $query = "insert into form(name,email,phone) values('$name' , '$email' , '$phone')" ;

    $run = mysqli_query($conn,$query) or die(mysqli_error()) ;
    if($run){
      echo "Form submitted successfully" ;
    }
    else "Form not submitted" ;
  }
    else{
      echo "all fields required" ;
    }
  }

?>