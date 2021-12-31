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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDoSAttackIPRegionMap返回参数结构体
 *
 * @method array getNationCount() 获取全球地域分布数据
 * @method void setNationCount(array $NationCount) 设置全球地域分布数据
 * @method array getProvinceCount() 获取国内省份地域分布数据
 * @method void setProvinceCount(array $ProvinceCount) 设置国内省份地域分布数据
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDDoSAttackIPRegionMapResponse extends AbstractModel
{
    /**
     * @var array 全球地域分布数据
     */
    public $NationCount;

    /**
     * @var array 国内省份地域分布数据
     */
    public $ProvinceCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $NationCount 全球地域分布数据
     * @param array $ProvinceCount 国内省份地域分布数据
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("NationCount",$param) and $param["NationCount"] !== null) {
            $this->NationCount = [];
            foreach ($param["NationCount"] as $key => $value){
                $obj = new KeyValueRecord();
                $obj->deserialize($value);
                array_push($this->NationCount, $obj);
            }
        }

        if (array_key_exists("ProvinceCount",$param) and $param["ProvinceCount"] !== null) {
            $this->ProvinceCount = [];
            foreach ($param["ProvinceCount"] as $key => $value){
                $obj = new KeyValueRecord();
                $obj->deserialize($value);
                array_push($this->ProvinceCount, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
