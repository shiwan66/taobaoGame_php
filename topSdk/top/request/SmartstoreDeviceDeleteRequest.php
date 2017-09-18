<?php
/**
 * TOP API: taobao.smartstore.device.delete request
 * 
 * @author auto create
 * @since 1.0, 2017.07.27
 */
class SmartstoreDeviceDeleteRequest
{
	/** 
	 * 设备号
	 **/
	private $deviceCode;
	
	private $apiParas = array();
	
	public function setDeviceCode($deviceCode)
	{
		$this->deviceCode = $deviceCode;
		$this->apiParas["device_code"] = $deviceCode;
	}

	public function getDeviceCode()
	{
		return $this->deviceCode;
	}

	public function getApiMethodName()
	{
		return "taobao.smartstore.device.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deviceCode,"deviceCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
