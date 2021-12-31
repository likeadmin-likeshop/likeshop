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
 * 域名就近接入配置
 *
 * @method string getRegionId() 获取地域ID。
 * @method void setRegionId(string $RegionId) 设置地域ID。
 * @method array getNationCountryInnerList() 获取就近接入区域国家内部编码，编码列表可通过DescribeCountryAreaMapping接口获取。
 * @method void setNationCountryInnerList(array $NationCountryInnerList) 设置就近接入区域国家内部编码，编码列表可通过DescribeCountryAreaMapping接口获取。
 */
class AccessRegionDomainConf extends AbstractModel
{
    /**
     * @var string 地域ID。
     */
    public $RegionId;

    /**
     * @var array 就近接入区域国家内部编码，编码列表可通过DescribeCountryAreaMapping接口获取。
     */
    public $NationCountryInnerList;

    /**
     * @param string $RegionId 地域ID。
     * @param array $NationCountryInnerList 就近接入区域国家内部编码，编码列表可通过DescribeCountryAreaMapping接口获取。
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("NationCountryInnerList",$param) and $param["NationCountryInnerList"] !== null) {
            $this->NationCountryInnerList = $param["NationCountryInnerList"];
        }
    }
}
