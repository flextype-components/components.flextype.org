<?php
    namespace Flextype;
    use Flextype\Component\{Event\Event, Http\Http, Registry\Registry};
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<?php Event::dispatch('onThemeMeta'); ?>

	<link rel="shortcut icon" href="<?php echo Http::getBaseUrl(); ?>/favicon.ico">

	<title><?php echo Registry::get('site.title'); ?> | <?php echo $page['title']; ?></title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
	<link href="<?php echo Http::getBaseUrl(); ?>/site/themes/<?php echo Registry::get('site.theme'); ?>/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
	<link href="<?php echo Http::getBaseUrl(); ?>/site/themes/<?php echo Registry::get('site.theme'); ?>/assets/css/flextype.css" rel="stylesheet">
	<?php Event::dispatch('onThemeHeader'); ?>
  </head>
  <body>
  <?php Themes::view('partials/navigation')->display(); ?>
