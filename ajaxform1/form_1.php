<?php
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$age = $_GET['age'];
$email = $_GET['email'];
echo "<h2>ResponsDemo Formulier</h2><h3>";
echo "U hebt de volgende informatie ingediend<br><ul>";
echo "<li>Naam: <strong> $firstName $lastName</strong></li>";
echo "<li>Leeftijd: <strong> $age</strong></li>";
echo "<li>E-mail: $email</li>";
echo "</li></ul></h3>";
 ?>
