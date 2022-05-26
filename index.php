<?php require_once "block/head.php" ?>

<?php
$page = htmlspecialchars($_GET['page']);

if (file_exists("pages/" . $page . ".php")) {
    if ($page == "landing") {
        include_once "./pages/landing.php";
    }
    else {
        require_once "block/header.php";
        require_once "pages/" . $page . ".php";
    }
}
else include_once "./pages/landing.php";

require_once "block/footer.php";
?>