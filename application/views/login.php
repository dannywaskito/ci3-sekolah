
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $title ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url() ?>template/back-end/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url() ?>template/back-end/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url() ?>template/back-end/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url() ?>template/back-end/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="<?php echo base_url() ?>template/back-end/images/login-icons-png-5.png">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Silahkan Login</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-sm-12 text-center">
                            <img src="<?php echo base_url() ?>template/back-end/images/user.png" width="100px"alt=""><br><br>

                            <?php echo form_open ('login'); 
                            if ($this->session->flashdata('pesan')) {
                            echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                            echo $this->session->flashdata('pesan');
                            echo '</div>';
                            }
                              if ($this->session->flashdata('error')) {
                            echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                            echo $this->session->flashdata('error');
                            echo '</div>';
                            }
                               if ($this->session->flashdata('warning')) {
                            echo '<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                            echo $this->session->flashdata('warning');
                            echo '</div>';
                            }
                            ?>
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="username" type="text">
                                        <?php echo form_error('username','<div class="text-danger small ml-3">','</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                        <?php echo form_error('password','<div class="text-danger small ml-3">','</div>') ?>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <div class="col-sm-12 text-center">
                                    	<button class="btn btn-success" type="submit"><i class="fa fa-sign-in"></i> Login</button>
                                    	  <a href="<?php echo base_url() ?>" class="btn btn-warning"> <i class="fa fa-backward fa-fw"></i> Halaman Utama</a>
                                    </div>
                                  
                                </fieldset>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url() ?>template/back-end/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url() ?>template/back-end/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url() ?>template/back-end/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url() ?>template/back-end/js/startmin.js"></script>

    </body>
</html>
<style>
    body{
       background: url('<?php echo base_url() ?>template/back-end/images/background-2203989_1920.jpg');
       height: 500px; /* You must set a specified height */
       background-position: center; /* Center the image */
       background-repeat: no-repeat; /* Do not repeat the image */
       background-size: cover; /* Resize the background image to cover the entire container */
    }
</style>
