<?php
/**
 * TOP API: taobao.place.account.query request.
 *
 * @author auto create
 *
 * @since 1.0, 2016.09.09
 */
class PlaceAccountQueryRequest
{
    /**
     * 入参
     **/
    private $queryDO;

    private $apiParas = [];

    public function setQueryDO($queryDO)
    {
        $this->queryDO = $queryDO;
        $this->apiParas['query_d_o'] = $queryDO;
    }

    public function getQueryDO()
    {
        return $this->queryDO;
    }

    public function getApiMethodName()
    {
        return 'taobao.place.account.query';
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
