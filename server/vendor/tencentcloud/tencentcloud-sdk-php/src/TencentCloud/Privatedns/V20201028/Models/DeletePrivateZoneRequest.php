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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeletePrivateZone请求参数结构体
 *
 * @method string getZoneId() 获取私有域ID
 * @method void setZoneId(string $ZoneId) 设置私有域ID
 * @method array getZoneIdSet() 获取私有域ID数组，ZoneId 优先
 * @method void setZoneIdSet(array $ZoneIdSet) 设置私有域ID数组，ZoneId 优先
 */
class DeletePrivateZoneRequest extends AbstractModel
{
    /**
     * @var string 私有域ID
     */
    public $ZoneId;

    /**
     * @var array 私有域ID数组，ZoneId 优先
     */
    public $ZoneIdSet;

    /**
     * @param string $ZoneId 私有域ID
     * @param array $ZoneIdSet 私有域ID数组，ZoneId 优先
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneIdSet",$param) and $param["ZoneIdSet"] !== null) {
            $this->ZoneIdSet = $param["ZoneIdSet"];
        }
    }
}
