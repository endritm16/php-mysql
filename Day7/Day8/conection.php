<?php
try{
$pdo = new PDO("mysql:host=localhost;dbname=endriit","root","");

//$username = "Endriti";
//$password = password_hash("my password", PASSWORD_DEFAULT);
//$email = "test@gmail.com";



//$sql = "INSERT INTO users(username,password,email) VALUES ('$username', '$password', 'email')";
//$sql = "ALTER table users ADD email VARCHAR(255)";

$sql = "ALTER table users DROP COLUMN email";

//$sql = "DROP TABLE PRODUCTS";

$pdo->exec($sql);

echo "New record created sucessfully";
}catch(DOExepction $e){
    echo $e->getMessage();
}


?>