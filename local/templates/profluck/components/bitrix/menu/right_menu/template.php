<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="list-unstyled contact-list">
    <? foreach($arResult as $arItem):
        if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
            continue;
    ?>
    <li <?= (!empty($arItem["PARAMS"]['LI_CLASS'])) ? 'class="'. $arItem["PARAMS"]['LI_CLASS'] .'"' : '' ?>>
        <? if(!empty($arItem["PARAMS"]['ICON'])): ?>
            <i class="<?= $arItem["PARAMS"]['ICON'] ?>"></i>
        <? endif; ?>
        <a href="<?= ($arItem["PARAMS"]['FLAG_IS_TEL'] == 'Y') ? preg_replace('~[\/() -]~', '', $arItem["LINK"]) : $arItem["LINK"] ?>"
            <?= ($arItem["SELECTED"]) ? 'class="selected"' : '' ?>
            <?= ($arItem["PARAMS"]['FLAG_IS_BLANK'] == 'Y') ? 'target="_blank"' : '' ?>
        >
        <?= $arItem["TEXT"] ?>
        </a>
    </li>
    <?endforeach?>
</ul>
<?endif?>