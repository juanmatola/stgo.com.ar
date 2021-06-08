<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | STGO estudio de arquitectura | Rosario, Santa Fe, Argentina</title>
    <meta name="description" content="Description">
    <link rel="shortcut icon" href="<?= base_url() ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= base_url() ?>/favicon.ico" type="image/x-icon">

    <!-- Og metas -->
    <meta property="og:url"                content="<?= base_url() ?>" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Proyectos | STGO estudio de arquitectura | Rosario, Santa Fe, Argentina"/>
    <meta property="og:description"        content="Description" />
    <meta property="og:image"              content="<?= base_url() ?>/assets/img/ogimage.jpg" />

    <!-- Css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">                                              
    <link rel="stylesheet" href="<?= base_url() ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">                 

<?php if($page == 'index'): ?>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/index-animation.css">                                   
<?php endif; ?>
<?php if($page == 'about'): ?>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/about.css">                                              
<?php endif; ?>
<?php if($page == 'project' || $page == 'simple-project'): ?>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/projecs.css">                                            
<?php endif; ?> 
<?php if($page == 'simple-project'): ?>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/simple-project.css">                                      
    <!-- Carousel Css -->   
    <link rel="stylesheet" href="<?= base_url() ?>/node_modules/swiper/swiper-bundle.min.css"/>                         
    <!-- Light Box Css -->
    <link rel="stylesheet" href="<?= base_url() ?>/node_modules/glightbox/dist/css/glightbox.min.css">                     
<?php endif; ?> 
    <!-- Fontawesome kit -->
    <script src="https://kit.fontawesome.com/4657d46491.js" crossorigin="anonymous"></script>           
</head>
<body>