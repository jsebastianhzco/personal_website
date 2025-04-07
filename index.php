<?php
require_once 'view.php';

$page = $_GET['page'] ?? 'home';



$allowed_pages = ['home', 'portfolio'];

View::render('head');
View::render('header');

if (in_array($page, $allowed_pages)) {
    View::render($page);
    if($page == "portfolio"){
        echo "<script>alert('Note: This portfolio is currently under construction. Some features may not work as expected, and certain sections may contain incomplete content. Thank you for your understanding!');</script>";
    }
} else {
    View::render('home'); 
}

View::render('scripts');
