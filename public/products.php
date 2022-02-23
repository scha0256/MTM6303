<?php
    // Including the header
    require_once "includes/session_include.php";
    $_SESSION["page_title"] = "Product Page";
    $_SESSION["current_page"] = "products";
    include "includes/header.php"; 
?>

Product Page
<?php print_r($_SESSION); ?>

<?php
    // Including the footer
    include "includes/footer.php"; 
?>