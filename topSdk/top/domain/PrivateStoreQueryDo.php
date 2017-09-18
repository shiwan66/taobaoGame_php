<?php

/**
 * 门店查询条件
 * @author auto create
 */
class PrivateStoreQueryDo
{
	
	/** 
	 * 业务类型
	 **/
	public $biz_type;
	
	/** 
	 * 查询页码
	 **/
	public $page_no;
	
	/** 
	 * 每页大小
	 **/
	public $page_size;
	
	/** 
	 * 门店包含的业务TAG，多个以;分隔
	 **/
	public $tags;
	
	/** 
	 * ISV商家用户ID
	 **/
	public $user_id;	
}
?>