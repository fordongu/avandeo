<?php/** * ShopEx licence * * @copyright  Copyright (c) 2005-2012 ShopEx Technologies Inc. (http://www.shopex.cn) * @license  http://ecos.shopex.cn/ ShopEx License */class sradar_ctl_admin_goods extends base_controller implements desktop_interface_controller_content{    /**     * 商品列表页追加商品雷达的js文件，如果是导出商品列表则不加载此js，防止导出时将js代码也导出     * @param unknown_type $html     * @param unknown_type $obj     */    public function modify(&$html, &$obj){        //修改增加商品雷达js导致的商品列表删除异常的bug @lujy//        if($_REQUEST['action'] == 'export' || $_REQUEST['action'] == 'to_export'){        if(!empty($_REQUEST['action'])){           $html .= '';        }else{           $html .= "<script>               if(!$('radar_loadjs'))Asset.javascript('http://js.sradar.cn/radarForGoodsList.js',{id:'radar_loadjs',onLoad:function(){radar_point_extract();}});else radar_point_extract();           </script>           ";        }    }}