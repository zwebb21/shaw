<?php  


//this pulls what the user submits and the htmlspecialchars makes sure that harmful html code cant be submitted to the form. 
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);


<<<<<<< HEAD
if (empty($firstname)){

exit();
header("Location: ./index.php");
=======
if (empty($name)){

exit();
header("Location: ../shaw-master/index.html");
>>>>>>> 2af64a878dce9015e373429a55c86b652d0568c3

}


echo "These are the data, that the user submitted";
echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $message;


?>