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
<? if (!empty($arResult['ITEMS'])): ?>
<? foreach($arResult["ITEMS"] as $arItem): ?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="meta">
            <div class="upper-row">
                <h3 class="job-title"><?= isset($arItem['NAME']) ? $arItem['NAME'] : '' ?></h3>
                <? if(!empty($arItem['PROPERTIES']['WORK_PERIOD_START']['VALUE'])): ?>
                <? $work_period_end = (!empty($arItem['PROPERTIES']['WORK_PERIOD_END']['VALUE']) && $arItem['PROPERTIES']['WORK_PERIOD_END']['VALUE'] > 0) ? $arItem['PROPERTIES']['WORK_PERIOD_END']['VALUE'] : 'Present' ?>
                <div class="time"><?= $arItem['PROPERTIES']['WORK_PERIOD_START']['VALUE'] ?> - <?= $work_period_end ?></div>
                <? endif; ?>
            </div>
            <? if(!empty($arItem['PROPERTIES']['WORK_LOCATION']['VALUE'])): ?>
            <div class="company"><?= $arItem['PROPERTIES']['WORK_LOCATION']['VALUE'] ?></div>
            <? endif; ?>
        </div>
        <div class="details">
            <?= isset($arItem['PREVIEW_TEXT']) ? $arItem['PREVIEW_TEXT'] : '' ?>
        </div>
    </div>
<? endforeach; ?>
<? else: ?>
<p>No info about experience.</p>
<? endif; ?>