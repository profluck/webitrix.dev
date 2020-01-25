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
<?php if (!defined('ERROR_404')): ?>
<div class="wrapper">
    <div class="sidebar-wrapper">
        <div class="profile-container">
            <? $APPLICATION->IncludeComponent("bitrix:main.include", ".default", [
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "AREA_FILE_RECURSIVE" => "N",
                "EDIT_TEMPLATE" => "",
                "COMPONENT_TEMPLATE" => ".default",
                "PATH" => "/page_includes/profile_section_inc.php"
            ]) ?>
        </div>
        <div class="contact-container container-block">
            <ul class="list-unstyled contact-list">
                <li class="email"><i class="fa fa-envelope"></i><a href="mailto: yourname@email.com">alan.doe@website.com</a></li>
                <li class="phone"><i class="fa fa-phone"></i><a href="tel:0123 456 789">0123 456 789</a></li>
                <li class="website"><i class="fa fa-globe"></i><a href="http://themes.3rdwavemedia.com/website-templates/free-responsive-website-template-for-developers/" target="_blank">portfoliosite.com</a></li>
                <li class="linkedin"><i class="fa fa-linkedin"></i><a href="#" target="_blank">linkedin.com/in/alandoe</a></li>
                <li class="github"><i class="fa fa-github"></i><a href="#" target="_blank">github.com/username</a></li>
                <li class="twitter"><i class="fa fa-twitter"></i><a href="https://twitter.com/3rdwave_themes" target="_blank">@twittername</a></li>
            </ul>
        </div>
        <div class="education-container container-block">
            <h2 class="container-block-title">Education</h2>
            <? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "AREA_FILE_RECURSIVE" => "N",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/page_includes/education_section_inc.php"
            ]) ?>
        </div>
        <div class="languages-container container-block">
            <h2 class="container-block-title">Languages</h2>
            <? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "AREA_FILE_RECURSIVE" => "N",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/page_includes/languages_section_inc.php"
            ]) ?>
        </div>
        <div class="interests-container container-block">
            <h2 class="container-block-title">Interests</h2>
            <? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "AREA_FILE_RECURSIVE" => "N",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/page_includes/interests_section_inc.php"
            ]) ?>
        </div>
    </div>
    <div class="main-wrapper">
<?php endif; ?>
	
						