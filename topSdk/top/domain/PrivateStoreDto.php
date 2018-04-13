<?php

/**
 * 私有化门店数据对象
 *
 * @author auto create
 */
class PrivateStoreDto
{
    /**
     * 门店地址
     **/
    public $address;

    /**
     * top应用appKey.
     **/
    public $app_key;

    /**
     * 门店业务类型，默认为商品类业务300.
     **/
    public $biz_type;

    /**
     * 门店别名.
     **/
    public $byname;

    /**
     * 门店类目.
     **/
    public $category_id;

    /**
     * 标准行政区划代码-市代码
     **/
    public $city;

    /**
     * 城市名称.
     **/
    public $city_name;

    /**
     * 门店联系方式，多个以;分隔，如：0571-81113563-123;0571-81113563;13826881688;400-820-5555.
     **/
    public $contact;

    /**
     * 标准行政区划代码-区代码
     **/
    public $district;

    /**
     * 区名称.
     **/
    public $district_name;

    /**
     * 扩展信息.
     **/
    public $extended;

    /**
     * 门店介绍.
     **/
    public $introduce;

    /**
     * 门店名.
     **/
    public $name;

    /**
     * 门店商家自用编码
     **/
    public $outer_id;

    /**
     * 门店主图片，淘宝图片空间图片路径地址，如：i7/T1rfxpXcVhXXXH9QcZ_033150.jpg.
     **/
    public $pic;

    /**
     * 门店辅图，一个门店可以有多张附图，以;分隔.
     **/
    public $pictures;

    /**
     * 门店纬度.
     **/
    public $posx;

    /**
     * 门店经度.
     **/
    public $posy;

    /**
     * 标准行政区划代码-省代码
     **/
    public $prov;

    /**
     * 省名称.
     **/
    public $prov_name;

    /**
     * 门店ID.
     **/
    public $store_id;

    /**
     * 分店名.
     **/
    public $subname;

    /**
     * 淘宝用户ID.
     **/
    public $user_id;
}
