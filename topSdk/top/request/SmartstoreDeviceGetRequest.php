<?php
/**
 * TOP API: taobao.smartstore.device.get request.
 *
 * @author auto create
 *
 * @since 1.0, 2017.07.27
 */
class SmartstoreDeviceGetRequest
{
    /**
     * 设备码
     **/
    private $deviceCode;

    private $apiParas = [];

    public function setDeviceCode($deviceCode)
    {
        $this->deviceCode = $deviceCode;
        $this->apiParas['device_code'] = $deviceCode;
    }

    public function getDeviceCode()
    {
        return $this->deviceCode;
    }

    public function getApiMethodName()
    {
        return 'taobao.smartstore.device.get';
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->deviceCode, 'deviceCode');
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
