<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title><?php echo $meta_title; ?></title>
  <meta name="description" content="<?php echo $meta_description; ?>" />
  <meta name="keywords" content="<?php echo $meta_keywords; ?>" />
  <meta name="author" content="Rafael V. de Oliveira - www.elrafael.net" />
  <meta name="copyright" content="© <?php echo date('Y'); ?> Rafael V. de Oliveira - www.elrafael.net" />
  <meta http-equiv="content-language" content="pt" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/admin.min.css'); ?>" />
</head>

<body>

  <!-- Conteúdos INICIO -->
  <div class="grid_11">
    <?php echo $contents; ?>
  </div>
  <div class="clear"></div>
  <!-- Conteúdos FIM -->


  <!-- JQuery -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2/jquery.min.js"></script>
  <script type="text/javascript">
    var base_url = '<?php echo base_url(); ?>';
  </script>
  <!--<script type="text/javascript" src="<?php echo base_url('js/admin.min.js'); ?>"></script>-->


</body>
</html>
