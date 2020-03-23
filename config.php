<?php

if(isset($_POST["submit"])){

$firstName=$_POST['firstName'];
$lastName = $_POST["lastName"];

$fp = fopen('data.txt', 'a');

fwrite($fp, $firstName);
fwrite($fp, $lastName);

fclose($fp);


}
?>