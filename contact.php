<?php
// $name = $_POST["name"];
// $visitor_email = $_POST["email"];
// $mbl = $_POST['mobile'];
// $message = $_POST["message"];
// $connection=mysqli_connect("localhost" ,"root","","contact_information")or die("connection failed" );
// $sql="INSERT INTO user_info( name ,Mobile,Email,Message) VALUES('{$name}'  , '{$mbl}' , '{$visitor_email}', '{$message}' )";
// $result=mysqli_query($connection,$sql)or die("query failed!");
// header("location: http://localhost/contact from/contact.php");
// $mysqli_close($connection)







//name
$name = strlen(trim($_REQUEST['name']));



if($name < 100){
    echo "Name = ".$_REQUEST["name"];
}else{
echo "kaj korbe na";
}
echo "<br>";


// email


$email = strlen(filter_var($_REQUEST['email'],FILTER_VALIDATE_EMAIL));

if($email < 100){
    echo "Email = ".$_REQUEST["email"];
}else{
echo "kaj korbe na";
}
echo "<br>";


//mobile


if (strlen($_REQUEST['mobile'])>13){
    echo "phn num 11 digit lagbe";
}elseif(!is_numeric($_REQUEST['mobile'])){
    echo"enter a number";
}elseif(!preg_match("/^(?:\+88)?(01[3-9]\d{8})$/", $_REQUEST["mobile"])){
    echo "invalid";
}else{
    echo "Mobile No =".$_REQUEST["mobile"];
}
echo "<br>";


//message
$message = strlen(trim($_REQUEST['message']));
if($name < 200){
    echo "Message = ".$_REQUEST["message"];
}else{
echo "kaj korbe na";
}
echo "<br>";

?>

