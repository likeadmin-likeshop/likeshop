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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 省份信息
 *
 * @method string getProvinceId() 获取省份Id
 * @method void setProvinceId(string $ProvinceId) 设置省份Id
 * @method string getProvinceName() 获取省份名称
 * @method void setProvinceName(string $ProvinceName) 设置省份名称
 */
class Province extends AbstractModel
{
    /**
     * @var string 省份Id
     */
    public $ProvinceId;

    /**
     * @var string 省份名称
     */
    public $ProvinceName;

    /**
     * @param string $ProvinceId 省份Id
     * @param string $ProvinceName 省份名称
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
        if (array_key_exists("ProvinceId",$param) and $param["ProvinceId"] !== null) {
            $this->ProvinceId = $param["ProvinceId"];
        }

        if (array_key_exists("ProvinceName",$param) and $param["ProvinceName"] !== null) {
            $this->ProvinceName = $param["ProvinceName"];
        }
    }
}
