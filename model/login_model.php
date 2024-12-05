<?php 
include '../commons/db_connection.php';
$dbconn = new Db_Connection;

class Login {

    public function validateUser($login_username, $login_password){
        $conn = $GLOBALS["conn"];
        $login_password = sha1($login_password);
        $sql = "SELECT u.user_id FROM user u WHERE u.user_name = '$login_username' AND u.password = '$login_password'";
    
        $result = $conn -> query($sql) or die($conn->error);
        return $result;
    }

}