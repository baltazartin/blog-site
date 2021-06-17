<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;900&family=Roboto:wght@300;900&family=Staatliches&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <?php wp_head(); ?>
        <title>Tin B's Blogs</title>
    </head>
    <body>
        <div class="header"> 
            <h1>tinb.</h1>
        </div>
    <header class="home-header">
        <nav class="main-nav">
            <ul>
                <li><a href="<?php echo site_url() ?>">Home</a></li>
                <li><a href="<?php echo site_url('/about') ?>">About</a></li>
            </ul>
        </nav>
    </header>
