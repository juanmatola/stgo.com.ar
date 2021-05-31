<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/admin/css/login.css'; ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <main class="login">
        <div class="container h-100 d-flex flex-column justify-content-center align-items-center">
            <div class="login__container fade">
                <img src="<?php echo base_url().'/assets/admin/img/athomic_logo.png'; ?>" alt="" class="login__container--img">
                <?php echo form_open('/admin/login') ?>
                
                    <div class="form-group">
                        <?php echo form_input(array('name'=>'username','type'=>'text','class'=>'form-control', 'placeholder'=>'Usuario', 'autocomplete'=>'on'))?>
                        <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
                    </div>
                    <div class="form-group">
                        <?php echo form_input(array('name'=>'password','type'=>'password','class'=>'form-control', 'placeholder'=>'Contraseña', 'autocomplete'=>'on'))?>
                    </div>
                    <div class="text-center form__buttons">
                        <a href="/">Regresar</a>
                        <?php echo form_submit(array('type'=>'submit','class'=>'btn btn-primary','value'=>'Ingresar'))?>
                    </div>
                
                <?php echo form_close() ?>
            </div>
        </div>
    </main>

    <!-- Custom JS -->
    <script src="<?php echo base_url().'/assets/admin/js/login.js' ?>"></script>
</body>
</html>