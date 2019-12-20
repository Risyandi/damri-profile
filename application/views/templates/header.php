<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Damri Profile | <?php echo $title ?></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

    <?php if ($title == "Dashboard") : ?>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dashboard.css">
    <?php elseif ($title == "Login") : ?>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/login.css">
    <?php endif; ?>
</head>

<body>