<?php

$SEVERNAME = servername;
$USERNAMEBD = username;
$PASSWORDBD = password;
$DATABASENAME = database;

//data
$usaname_data = usernamedata;
$password_data = passdata;

$bd_conn = new mysqli ($SEVERNAME, $USERNAMEBD, $PASSWORDBD, $DATABASENAME);


if (!$bd_conn){
    die ('ERROR'. mysqli_connect_error());    
}

$query = "SELECT username, pass
 from users where username ='$username_data' 
 AND pass = '$password_data";

$result = $bd_conn->query($query);

if ($result0->num_rows > 0){
    echo "< type ='text/javascript> alert('Usuário ja cadastrado!');</script>";

}else { 
    $sql = "INSERT INTO users (Username, Pass) VALUES ('$username_data', '$password_data')";

    echo 'Usuário cadastrado com sucesso!';
}
?>
