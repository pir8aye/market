<?php
/**
 * Elgg Market Plugin
 * @package market
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author slyhne, RiverVanRain
 * @copyright slyhne 2010-2015, wZm 2k17
 * @link https://wzm.me
 * @version 2.2
 */

$object = $vars['item']->getObjectEntity();
$excerpt = strip_tags($object->excerpt);
$excerpt = elgg_get_excerpt($excerpt);

$img = elgg_view('output/img', array(
				'src' => "market/image/{$object->guid}/1/medium/{$object->time_updated}",
				'class' => 'elgg-photo market-river-image',
				'alt' => $object->guid,
				));
$image = elgg_view('output/url', array(
			'href' => "market/view/{$object->guid}/" . elgg_get_friendly_title($object->title),
			'text' => $img,
			));

echo elgg_view('river/item', array(
	'item' => $vars['item'],
	'message' => $excerpt,
	'attachments' => $image,
));
