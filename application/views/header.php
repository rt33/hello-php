<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title><?php echo (!empty($page_title)) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?></title>
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">

</head>
<body>

<div class="navbar navbar-inverse navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="/">Hello World</a>
      <?php loadWidget('navigation'); ?>
    </div>
  </div>
</div>

<div class="container">
