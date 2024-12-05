<?php
include '../commons/sessions.php';
if (!isset($_GET["status"])) {
    ?>
    <script>
        window.location="../index.php";
    </script>
    <?php
}

$status = $_GET["status"];

include '../model/login_model.php';
$resultObj = new Login();

switch($status){
    case 'login':
        $login_username = $_POST["loginusername"]; 
        $login_password = $_POST["loginpassword"];
        
        try {
            if ($login_username == "") {
                throw new Exception("Username Can not be empty");   
            }
            if ($login_password=="") {
                throw new Exception("Password Cannot Be Empty!");   
            }
            $loginResult = $resultObj ->validateUser($login_username,$login_password);
            if ($loginResult->num_rows>0) {
                $userrow = $loginResult -> fetch_assoc();

                $_SESSION["user"]=$userrow;

                ?>
                    <script>
                        window.location="../view/item.php";
                    </script>
                <?php
                
            }else {
                throw new Exception("Invalid Credentials"); 
            }
        } catch (Exception $ex) {
            $msg = $ex -> getMessage();
            $msg = base64_encode($msg);
            ?>
                <script>
                    window.location="../index.php?msg=<?php echo $msg ?>";
                </script>
            <?php
        }
        break;
}
