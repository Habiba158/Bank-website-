<?php
$conn=mysqli_connect('localhost','root','','my_bank');
if(!$conn){
    echo'   Error:'.mysqli_connect_error();
}



$firstName=   $_REQUEST['fname'];
$lastName=    $_REQUEST['lname'];
$email=       $_REQUEST['email'];
$password=    $_REQUEST['pass'];
$gender=      $_REQUEST['gen'];

if(isset($_POST['submit']))
{ 
    $host="localhost";
    $user="root";
    $db="mybank";
    $conn=mysqli_connect($host,$user,$db);
    $insert="insert into users values ('$fname','$lname','$email','$pass','$gen')";
    mysqli_query($conn,$insert);
    if ($conn){
        echo("<h1 style='color:green;'>your registration is done</h1>");
    }
    else{
        echo("<h1 style='color:red;'>your registration is faild</h1>");
    }

}

?>