<!--
Name: Mia Ehrlich
Final Project
Purpose: This is the header template for a mobile first responsive site using bootstrap and jquery
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="icon" href="favicon.gif" type="image/gif">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark mx-0 px-0 my-0 py-0 fixed-top">
        <button type="button" class="navbar-toggler mr-2" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav nav-fill w-100">
                <li class="nav-item">
                    <a href="home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="stories" class="nav-link">Stories</a>
                </li>
                <li class="nav-item">
                    <a href="news" class="nav-link">Search News</a>
                </li>
                <li class="nav-item">
                    <a href="contact" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <div class="container-fluid">
