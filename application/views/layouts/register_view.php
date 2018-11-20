<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rejestracja</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css'); ?>">
</head>

<body>
    <div class='container' style='margin-top: 40px;'>
        <div class='row'>
            <div class='col-md-4'>
            </div>
            <div class='col-md-4'>
                <div class='panel panel-default'>
                    <div class='panel-body'>
                        <!-- validation message for a successful registration -->
                        <?php if ($this->session->flashdata('success')) {?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                          <?php  } ?>

                        <!-- validation messages for taking inputs -->
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>','</div>');
                        ?>

                        <?php echo form_open('Register/registerUser') ?>
                           
                            <div class="form-group">
                                <label for="fname">Imie</label>
                                <input type="text" class="form-control" name="Imie" id="Imie" placeholder="Imie">
                            </div>                       
                            <div class="form-group">
                                <label for="contact">Telefon</label>
                                <input type="phone" class="form-control" name="Telefon" id="Telefon" placeholder="Telefon">
                            </div>
                            <div class="form-group">
                                <label for="password">Hasło</label>
                                <input type="password" class="form-control" name="Hasło" id="Hasło" placeholder="Hasło">
                            </div>      
                            <div class="form-group">
                                <label for="text">Adres</label>
                                <input type="text" class="form-control" name="Adres" id="Adres" placeholder="Adres">
                            </div> 
                        
                            <button class="btn btn-primary" name='reg'>REGISTER</button>
                            <a href="<?php echo site_url('login/loginUser') ?>" class="btn btn-link">Sign In</a>

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
