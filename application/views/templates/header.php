<!DOCTYPE html>
<html lang="en">

<head>
    <title>Damri Profile | <?php echo $title ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="sebuah websites yang mendeskripsikan tentang damri">
    <meta name="keywords" content="damri">
    <meta name="author" content="risyandi">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css">
    
    <?php if ($title == "Home") : ?>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/home.css">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css">

    <?php if ($title == "Dashboard" || $title == "Edit") : ?>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dashboard.css">
    <?php elseif ($title == "Login") : ?>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/login.css">
    <?php endif; ?>

</head>

<body>