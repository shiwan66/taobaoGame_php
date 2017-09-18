<?php
/**
 * TOP API: taobao.place.private.poi.list request
 * 
 * @author auto create
 * @since 1.0, 2016.09.09
 */
class PlacePrivatePoiListRequest
{
	/** 
	 * 门店查询条件
	 **/
	private $privateStoreQueryDO;
	
	private $apiParas = array();
	
	public function setPrivateStoreQueryDO($privateStoreQueryDO)
	{
		$this->privateStoreQueryDO = $privateStoreQueryDO;
		$this->apiParas["private_store_query_d_o"] = $privateStoreQueryDO;
	}

	public function getPrivateStoreQueryDO()
	{
		return $this->privateStoreQueryDO;
	}

	public function getApiMethodName()
	{
		return "taobao.place.private.poi.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
