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
            <? $APPLICATION->IncludeComponent("bitrix:menu", "right_menu", [
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => [],
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "ROOT_MENU_TYPE" => "right",
                    "USE_EXT" => "N",
                    "COMPONENT_TEMPLATE" => "right_menu"
                ], false
            ) ?>
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
	
						