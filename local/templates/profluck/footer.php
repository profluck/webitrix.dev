<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
</div><!--//wrapper-->
<footer class="footer">
    <div class="text-center">
        <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
    </div><!--//container-->
</footer><!--//footer-->
<?
Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/plugins/jquery-1.11.3.min.js', $additional);
Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/plugins/bootstrap/js/bootstrap.min.js', $additional);
Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js', $additional);
?>
</body>
</html>