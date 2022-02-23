<?php
    require_once "includes/session_include.php";
    $_SESSION["page_title"] = "About Page";
    $_SESSION["current_page"] = "about";

    // Including the header
    include "includes/header.php"; 
?>

About Page
<?php 
    print_r($_SESSION);
?>
<?php
    // Including the footer
    include "includes/footer.php"; 
?>