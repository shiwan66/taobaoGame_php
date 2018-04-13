<?php
/**
 * TOP API: taobao.smartstore.device.add request.
 *
 * @author auto create
 *
 * @since 1.0, 2017.07.27
 */
class SmartstoreDeviceAddRequest
{
    /**
     * 设备地址
     **/
    private $deviceAddress;

    /**
     * 设备用途描述.
     **/
    private $deviceDescription;

    /**
     * 设备名称.
     **/
    private $deviceName;

    /**
     * 设备类型：互动游戏大屏，AR游戏，商品货架大屏，人脸识别，wifi探针，红外感应，试衣镜，试妆镜，电子价签，rfid，pos，其他请直接填写名称.
     **/
    private $deviceType;

    /**
     * 设备应用首页URL.
     **/
    private $isvUrl;

    /**
     * 门店ID.
     **/
    private $storeId;

    private $apiParas = [];

    public function setDeviceAddress($deviceAddress)
    {
        $this->deviceAddress = $deviceAddress;
        $this->apiParas['device_address'] = $deviceAddress;
    }

    public function getDeviceAddress()
    {
        return $this->deviceAddress;
    }

    public function setDeviceDescription($deviceDescription)
    {
        $this->deviceDescription = $deviceDescription;
        $this->apiParas['device_description'] = $deviceDescription;
    }

    public function getDeviceDescription()
    {
        return $this->deviceDescription;
    }

    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        $this->apiParas['device_name'] = $deviceName;
    }

    public function getDeviceName()
    {
        return $this->deviceName;
    }

    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        $this->apiParas['device_type'] = $deviceType;
    }

    public function getDeviceType()
    {
        return $this->deviceType;
    }

    public function setIsvUrl($isvUrl)
    {
        $this->isvUrl = $isvUrl;
        $this->apiParas['isv_url'] = $isvUrl;
    }

    public function getIsvUrl()
    {
        return $this->isvUrl;
    }

    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
        $this->apiParas['store_id'] = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    public function getApiMethodName()
    {
        return 'taobao.smartstore.device.add';
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->deviceAddress, 'deviceAddress');
        RequestCheckUtil::checkMaxLength($this->deviceAddress, 300, 'deviceAddress');
        RequestCheckUtil::checkNotNull($this->deviceDescription, 'deviceDescription');
        RequestCheckUtil::checkMaxLength($this->deviceDescription, 300, 'deviceDescription');
        RequestCheckUtil::checkNotNull($this->deviceName, 'deviceName');
        RequestCheckUtil::checkMaxLength($this->deviceName, 100, 'deviceName');
        RequestCheckUtil::checkNotNull($this->deviceType, 'deviceType');
        RequestCheckUtil::checkMaxLength($this->deviceType, 50, 'deviceType');
        RequestCheckUtil::checkNotNull($this->isvUrl, 'isvUrl');
        RequestCheckUtil::checkMaxLength($this->isvUrl, 500, 'isvUrl');
        RequestCheckUtil::checkNotNull($this->storeId, 'storeId');
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
