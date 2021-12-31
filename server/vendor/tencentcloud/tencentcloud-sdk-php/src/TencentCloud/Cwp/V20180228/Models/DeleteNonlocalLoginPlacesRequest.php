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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteNonlocalLoginPlaces请求参数结构体
 *
 * @method string getDelType() 获取删除异地登录事件的方式，可选值："Ids"、"Ip"、"All"，默认为Ids
 * @method void setDelType(string $DelType) 设置删除异地登录事件的方式，可选值："Ids"、"Ip"、"All"，默认为Ids
 * @method array getIds() 获取异地登录事件ID数组。DelType为Ids或DelType未填时此项必填
 * @method void setIds(array $Ids) 设置异地登录事件ID数组。DelType为Ids或DelType未填时此项必填
 * @method array getIp() 获取异地登录事件的Ip。DelType为Ip时必填
 * @method void setIp(array $Ip) 设置异地登录事件的Ip。DelType为Ip时必填
 * @method string getUuid() 获取主机Uuid
 * @method void setUuid(string $Uuid) 设置主机Uuid
 */
class DeleteNonlocalLoginPlacesRequest extends AbstractModel
{
    /**
     * @var string 删除异地登录事件的方式，可选值："Ids"、"Ip"、"All"，默认为Ids
     */
    public $DelType;

    /**
     * @var array 异地登录事件ID数组。DelType为Ids或DelType未填时此项必填
     */
    public $Ids;

    /**
     * @var array 异地登录事件的Ip。DelType为Ip时必填
     */
    public $Ip;

    /**
     * @var string 主机Uuid
     */
    public $Uuid;

    /**
     * @param string $DelType 删除异地登录事件的方式，可选值："Ids"、"Ip"、"All"，默认为Ids
     * @param array $Ids 异地登录事件ID数组。DelType为Ids或DelType未填时此项必填
     * @param array $Ip 异地登录事件的Ip。DelType为Ip时必填
     * @param string $Uuid 主机Uuid
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
        if (array_key_exists("DelType",$param) and $param["DelType"] !== null) {
            $this->DelType = $param["DelType"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
