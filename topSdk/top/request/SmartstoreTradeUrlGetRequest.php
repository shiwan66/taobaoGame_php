<?php
/**
 * TOP API: taobao.smartstore.trade.url.get request
 * 
 * @author auto create
 * @since 1.0, 2017.07.27
 */
class SmartstoreTradeUrlGetRequest
{
	/** 
	 * 智慧门店设备码
	 **/
	private $deviceCode;
	
	/** 
	 * 扩展信息
	 **/
	private $extInfo;
	
	/** 
	 * 商品ID，linkType=item时必填
	 **/
	private $itemId;
	
	/** 
	 * 链接类型，可选值[item、shop、url]
	 **/
	private $linkType;
	
	/** 
	 * 商户中心的导购员id
	 **/
	private $o2oGuideId;
	
	/** 
	 * 店铺ID，linkType=shop时必填
	 **/
	private $shopId;
	
	/** 
	 * 码跳转的目标地址，只能指向*.tmall.com或者*.taobao.com，，linkType=url时必填
	 **/
	private $targetUrl;
	
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

	public function setExtInfo($extInfo)
	{
		$this->extInfo = $extInfo;
		$this->apiParas["ext_info"] = $extInfo;
	}

	public function getExtInfo()
	{
		return $this->extInfo;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setLinkType($linkType)
	{
		$this->linkType = $linkType;
		$this->apiParas["link_type"] = $linkType;
	}

	public function getLinkType()
	{
		return $this->linkType;
	}

	public function setO2oGuideId($o2oGuideId)
	{
		$this->o2oGuideId = $o2oGuideId;
		$this->apiParas["o2o_guide_id"] = $o2oGuideId;
	}

	public function getO2oGuideId()
	{
		return $this->o2oGuideId;
	}

	public function setShopId($shopId)
	{
		$this->shopId = $shopId;
		$this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId()
	{
		return $this->shopId;
	}

	public function setTargetUrl($targetUrl)
	{
		$this->targetUrl = $targetUrl;
		$this->apiParas["target_url"] = $targetUrl;
	}

	public function getTargetUrl()
	{
		return $this->targetUrl;
	}

	public function getApiMethodName()
	{
		return "taobao.smartstore.trade.url.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deviceCode,"deviceCode");
		RequestCheckUtil::checkNotNull($this->linkType,"linkType");
		RequestCheckUtil::checkNotNull($this->o2oGuideId,"o2oGuideId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
