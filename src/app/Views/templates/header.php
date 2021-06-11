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
<?php if($page == 'projects' || $page == 'simple-project'): ?>
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
<body style="<?php echo ($page == 'index') ? "padding-top:0px" : "" ; ?>" >

<?php if($page != 'index'): ?>                       
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="<?= base_url() ?>">
          <div class="navbar-logo">
            <img src="<?= base_url() ?>/assets/img/logo-menu.png" alt="Stgo Estudio" class="img-fluid" id="navLogo">
          </div>
        </a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 25 25"><path d="M4 6H20V8H4zM4 11H20V13H4zM4 16H20V18H4z"></path></svg>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link <?php echo $page === 'about' ? 'active' : ''; ?>" href="<?= base_url() ?>/estudio">Estudio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $page === 'projects' ? 'active' : ''; ?>" href="<?= base_url() ?>/proyectos">Proyectos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contacto</a>
            </li>
          </ul>
        </div>
    </nav>
<?php endif; ?>