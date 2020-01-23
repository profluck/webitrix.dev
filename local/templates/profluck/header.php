<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle();?></title>
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico">
    <?
    Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/plugins/bootstrap/css/bootstrap.min.css");
    Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/plugins/font-awesome/css/font-awesome.css");
    Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/styles.css");
    ?>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="panel">
    <?$APPLICATION->ShowPanel();?>
</div>
<div class="wrapper">
	
						