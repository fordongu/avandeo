<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 * @author qianzedong <qianzedong@shopex.cn>
 */

function theme_widget_space_category(&$setting,&$render)
{
	$data['cagetory_list'] = app::get('b2c')->model('space_cat')->getMap();
	$data['cat_id'] = $render->pagedata['cat_id'];
	return $data;                                        
}
?>






