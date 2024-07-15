<?php
//username, password, and database name.
$conn = new mysqli("localhost", "moonwalk_user", "Emakulate1@", " management_db");
if(mysqli_connect_errno()){
    printf("connnect failed: %s\n", mysqli_connect_errno());
    exit();
}
?>