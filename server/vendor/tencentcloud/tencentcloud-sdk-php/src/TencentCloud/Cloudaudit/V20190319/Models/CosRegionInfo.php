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
 * cos地域信息
 *
 * @method string getCosRegion() 获取cos地域
 * @method void setCosRegion(string $CosRegion) 设置cos地域
 * @method string getCosRegionName() 获取地域描述
 * @method void setCosRegionName(string $CosRegionName) 设置地域描述
 */
class CosRegionInfo extends AbstractModel
{
    /**
     * @var string cos地域
     */
    public $CosRegion;

    /**
     * @var string 地域描述
     */
    public $CosRegionName;

    /**
     * @param string $CosRegion cos地域
     * @param string $CosRegionName 地域描述
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
        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("CosRegionName",$param) and $param["CosRegionName"] !== null) {
            $this->CosRegionName = $param["CosRegionName"];
        }
    }
}
