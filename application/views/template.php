<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="id">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <?php if (empty($title)): ?>
        <title>No Title</title>
        <?php else: ?>
        <title><?= $title ?></title>
        <?php endif ?>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url('/assets/vendor/'); ?>images/favicon.ico">

		<!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/bootstrap-3.4.1/css/bootstrap.css?r='.rand());?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/bootstrap-3.4.1/css/bootstrap.min.css?r='.rand());?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/jquery/jquery-ui.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/toastr/toastr.min.css'); ?>">
    	<link rel="stylesheet" href="<?php echo base_url('/assets/css/my_style.css?r='.rand());?>">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script> const url = "<?php echo base_url() ?>"</script>
        <script src="<?php echo base_url('/assets/vendor/jquery/jquery-1.12.4.min.js');?>"></script>
        <script src="<?php echo base_url('/assets/vendor/bootstrap-3.4.1/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('/assets/vendor/jquery/jquery-ui.min.js'); ?>"></script>

        <script src="<?php echo base_url('/assets/vendor/toastr/toastr.min.js'); ?>"></script>
        <script src="<?php echo base_url('/assets/vendor/toastr/toastr.init.js'); ?>"></script>
        <script src="<?php echo base_url('/assets/vendor/jquery/jquery.validate.min.js'); ?>"></script>
    </head>


    <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" style="display: none;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page -->
    <div class="container-fluid text-center">  
        <?php $this->load->view($page);?>



    </div>














  </body>
</html>










