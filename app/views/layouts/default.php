<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$this->siteTitle(); ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=SROOT?>css/bootstrap.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?=SROOT?>css/main.css" media="screen" title="no title" charset="utf-8">

    <script src="<?=SROOT?>js/jquery-3.4.1.min.js"></script>
    <script src="<?=SROOT?>js/bootstrap.js"></script>

    <?= $this->content('head'); ?>

  </head>
  <body>

  <?=$this->content('body'); ?>
  </body>
</html>
