<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';


$strReturn .= '<div class="breadcrumbs breadcrumbs--blog" itemprop="http://schema.org/breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList"><ul class="breadcrumbs__list">';

$itemSize = count($arResult);

for($index = 0; $index < $itemSize; $index++)
{
  $arResult[$index]["TITLE"] = strip_tags($arResult[$index]["TITLE"]);
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li class="breadcrumbs__item" id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				'.$arrow.'
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item" class="breadcrumbs__link">
					<span itemprop="name">'.$title.'</span>
				</a>
				<meta itemprop="position" content="'.($index + 1).'" />
			</li>';
	}
	else
	{
		$strReturn .= '
			<li class="breadcrumbs__item">
				'.$arrow.'
				<span>'.$title.'</span>
			</li>';
	}
}

$strReturn .= '</ul></div>';

return $strReturn;