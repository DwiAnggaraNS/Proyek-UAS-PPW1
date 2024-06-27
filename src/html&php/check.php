<?php
//check if user not login yet
// require "config.php";

if(isset($_SESSION['log'])){

}
else{
    header('Location: login.php');
}

?>