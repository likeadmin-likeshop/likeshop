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
 * 就近接入的国家地区详情
 *
 * @method string getNationCountryName() 获取国家名
 * @method void setNationCountryName(string $NationCountryName) 设置国家名
 * @method string getNationCountryInnerCode() 获取国家内部编码
 * @method void setNationCountryInnerCode(string $NationCountryInnerCode) 设置国家内部编码
 */
class NationCountryInnerInfo extends AbstractModel
{
    /**
     * @var string 国家名
     */
    public $NationCountryName;

    /**
     * @var string 国家内部编码
     */
    public $NationCountryInnerCode;

    /**
     * @param string $NationCountryName 国家名
     * @param string $NationCountryInnerCode 国家内部编码
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
        if (array_key_exists("NationCountryName",$param) and $param["NationCountryName"] !== null) {
            $this->NationCountryName = $param["NationCountryName"];
        }

        if (array_key_exists("NationCountryInnerCode",$param) and $param["NationCountryInnerCode"] !== null) {
            $this->NationCountryInnerCode = $param["NationCountryInnerCode"];
        }
    }
}
