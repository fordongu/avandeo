<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
 
/*基础配置项*/
$setting['author']='shopex';
$setting['version']='v1.0';
$setting['name']='首页普通商品展示';
$setting['order']=0;
$setting['stime']='2015-03';
$setting['catalog']='商品相关';
$setting['description'] = '展示模板使用的首页tab商品展示挂件';
$setting['userinfo'] = '';
$setting['usual']    = '1';
$setting['tag']    = 'auto';
$setting['template'] = array(
                            'default.html'=>app::get('b2c')->_('默认')
                        );
/*初始化配置项*/
$setting['selector'] = 'filter';
$setting['limit'] = 4;
?>
