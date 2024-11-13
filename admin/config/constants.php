<?php
session_start();
define("ROOT_URL", "https://vivek-blog-4b851a72a738.herokuapp.com/");
define('DB_HOST', 'ou6zjjcqbi307lip.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('DB_USER', 'u36znupx188lhbpn');
define('DB_PASS', 'nkpn566oor479rsf');
define('DB_NAME', 'wno4hk1v0otlgosf');
if (!isset($_SESSION['user-id'])) {
    header("location: " . ROOT_URL . "logout.php");
    //destroy all sessions and redirect user to login page
    session_destroy();
    die();
    header("location: " . ROOT_URL . "signin.php");
}
