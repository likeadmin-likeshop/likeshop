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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cmq地域信息
 *
 * @method string getCmqRegionName() 获取地域描述
 * @method void setCmqRegionName(string $CmqRegionName) 设置地域描述
 * @method string getCmqRegion() 获取cmq地域
 * @method void setCmqRegion(string $CmqRegion) 设置cmq地域
 */
class CmqRegionInfo extends AbstractModel
{
    /**
     * @var string 地域描述
     */
    public $CmqRegionName;

    /**
     * @var string cmq地域
     */
    public $CmqRegion;

    /**
     * @param string $CmqRegionName 地域描述
     * @param string $CmqRegion cmq地域
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
        if (array_key_exists("CmqRegionName",$param) and $param["CmqRegionName"] !== null) {
            $this->CmqRegionName = $param["CmqRegionName"];
        }

        if (array_key_exists("CmqRegion",$param) and $param["CmqRegion"] !== null) {
            $this->CmqRegion = $param["CmqRegion"];
        }
    }
}
