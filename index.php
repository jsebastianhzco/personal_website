<?php
require_once 'view.php';

$page = $_GET['page'] ?? 'home';

$allowed_pages = ['home', 'portfolio'];

View::render('head');
View::render('header');

if (in_array($page, $allowed_pages)) {
    View::render($page);
} else {
    View::render('home'); 
}

View::render('scripts');
