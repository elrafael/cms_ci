
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $meta_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>" />
    <meta name="keywords" content="<?php echo $meta_keywords; ?>" />
    <meta name="author" content="Rafael V. de Oliveira - www.elrafael.net" />
    <meta name="copyright" content="© <?php echo date('Y'); ?> Rafael V. de Oliveira - www.elrafael.net" />
    <meta http-equiv="content-language" content="pt" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/admin.min.css'); ?>" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <section class="login_form">
      <?php echo $contents; ?><?php echo PHP_EOL; ?>
    </section>


    <!-- Scripts -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script type="text/javascript">
      var base_url = '<?php echo base_url(); ?>';
    </script>
    <!--<script type="text/javascript" src="<?php echo base_url('js/admin.min.js'); ?>"></script>-->
  </body>
  <!-- Done in {elapsed_time}s -->
</html>
