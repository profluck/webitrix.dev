<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? if(!empty($arResult["ITEMS"])): ?>
<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="item" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
        <span class="project-title">
        <? if(!empty($arItem['PROPERTIES']['PROJECT_LINK']['VALUE'])): ?>
            <a <?= $arItem['PROPERTIES']['PROJECT_LINK_BLANK']['VALUE'] ? 'target="_blank"' : '' ?> href="<?= $arItem['PROPERTIES']['PROJECT_LINK']['VALUE'] ?>"><?= $arItem['NAME'] ?></a>
        <? else: ?>
            <?= $arItem['NAME'] ?>
        <? endif; ?>
        </span>
        -
        <span class="project-tagline">
            <?= $arItem['PREVIEW_TEXT'] ?>
        </span>
    </div>
<? endforeach; ?>
<? endif; ?>