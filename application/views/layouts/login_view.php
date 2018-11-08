<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Logowanie</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css'); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css'); ?>">
</head>

<body>
    <div class='container' style='margin-top: 100px;'>
        <div class='row'>
            <div class='col-md-4'>
            </div>
            <div class='col-md-4'>
                <div class='panel panel-default'>
                    <div class='panel-body'>
                        <!-- validation message for a successful login -->
                        <?php if ($this->session->flashdata('error')) {?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo $this->session->flashdata('error'); ?>
                            </div>
                        <?php  } ?>
                        <!-- validation messages for taking inputs -->
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>','</div>');
                        ?>

                        <?php echo form_open('Login/loginUser') ?>

                            <div class="form-group">
                                <label for="username">Telefon</label>
                                <input type="phone" class="form-control" name="Telefon" id="Telefon" placeholder="Telefon">
                            </div>
                            <div class="form-group">
                                <label for="password">Hasło</label>
                                <input type="password" class="form-control" name="Hasło" id="Hasło" placeholder="Hasło">
                            </div>                       						
                        
                            <div class="form-group">
                                <label for="sel1">Typ konta:</label>
                                    <select class="form-control" id="Typ">
                                        <option>Klient</option>
                                        <option>Admin</option>
 
                                    </select>
                            </div>
                        
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                            <a href="<?php echo site_url('Register\registerUser') ?>" class="btn btn-link">Register</a>
                            <a href="<?php echo site_url('dashboard') ?>" class="btn btn-link">guest</a>
                        <?php echo form_close() ?>

                    </div>
                </div>
            </div>
        </div>

    </div>

<!-- jQuery 3 -->
<script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
</body>
</html>
