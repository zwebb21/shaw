<?php  


//this pulls what the user submits and the htmlspecialchars makes sure that harmful html code cant be submitted to the form. 
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);


if (empty($name)){

exit();
header("Location: ../shaw-master/index.html");

}


echo "These are the data, that the user submitted";
echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $message;


?>