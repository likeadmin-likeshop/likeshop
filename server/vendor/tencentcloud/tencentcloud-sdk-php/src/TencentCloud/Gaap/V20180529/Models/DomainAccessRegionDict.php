<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名解析就近访问配置详情
 *
 * @method array getNationCountryInnerList() 获取就近接入区域
 * @method void setNationCountryInnerList(array $NationCountryInnerList) 设置就近接入区域
 * @method array getProxyList() 获取加速区域通道列表
 * @method void setProxyList(array $ProxyList) 设置加速区域通道列表
 * @method string getRegionId() 获取加速区域ID
 * @method void setRegionId(string $RegionId) 设置加速区域ID
 * @method string getGeographicalZoneInnerCode() 获取加速区域内部编码
 * @method void setGeographicalZoneInnerCode(string $GeographicalZoneInnerCode) 设置加速区域内部编码
 * @method string getContinentInnerCode() 获取加速区域所属大洲内部编码
 * @method void setContinentInnerCode(string $ContinentInnerCode) 设置加速区域所属大洲内部编码
 * @method string getRegionName() 获取加速区域别名
 * @method void setRegionName(string $RegionName) 设置加速区域别名
 */
class DomainAccessRegionDict extends AbstractModel
{
    /**
     * @var array 就近接入区域
     */
    public $NationCountryInnerList;

    /**
     * @var array 加速区域通道列表
     */
    public $ProxyList;

    /**
     * @var string 加速区域ID
     */
    public $RegionId;

    /**
     * @var string 加速区域内部编码
     */
    public $GeographicalZoneInnerCode;

    /**
     * @var string 加速区域所属大洲内部编码
     */
    public $ContinentInnerCode;

    /**
     * @var string 加速区域别名
     */
    public $RegionName;

    /**
     * @param array $NationCountryInnerList 就近接入区域
     * @param array $ProxyList 加速区域通道列表
     * @param string $RegionId 加速区域ID
     * @param string $GeographicalZoneInnerCode 加速区域内部编码
     * @param string $ContinentInnerCode 加速区域所属大洲内部编码
     * @param string $RegionName 加速区域别名
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NationCountryInnerList",$param) and $param["NationCountryInnerList"] !== null) {
            $this->NationCountryInnerList = [];
            foreach ($param["NationCountryInnerList"] as $key => $value){
                $obj = new NationCountryInnerInfo();
                $obj->deserialize($value);
                array_push($this->NationCountryInnerList, $obj);
            }
        }

        if (array_key_exists("ProxyList",$param) and $param["ProxyList"] !== null) {
            $this->ProxyList = [];
            foreach ($param["ProxyList"] as $key => $value){
                $obj = new ProxyIdDict();
                $obj->deserialize($value);
                array_push($this->ProxyList, $obj);
            }
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("GeographicalZoneInnerCode",$param) and $param["GeographicalZoneInnerCode"] !== null) {
            $this->GeographicalZoneInnerCode = $param["GeographicalZoneInnerCode"];
        }

        if (array_key_exists("ContinentInnerCode",$param) and $param["ContinentInnerCode"] !== null) {
            $this->ContinentInnerCode = $param["ContinentInnerCode"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }
    }
}
