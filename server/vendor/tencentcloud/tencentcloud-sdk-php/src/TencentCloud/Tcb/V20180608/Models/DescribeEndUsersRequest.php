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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEndUsers请求参数结构体
 *
 * @method string getEnvId() 获取开发者的环境ID
 * @method void setEnvId(string $EnvId) 设置开发者的环境ID
 * @method integer getOffset() 获取可选参数，偏移量，默认 0
 * @method void setOffset(integer $Offset) 设置可选参数，偏移量，默认 0
 * @method integer getLimit() 获取可选参数，拉取数量，默认 20
 * @method void setLimit(integer $Limit) 设置可选参数，拉取数量，默认 20
 * @method array getUUIds() 获取按照 uuid 列表过滤，最大个数为100
 * @method void setUUIds(array $UUIds) 设置按照 uuid 列表过滤，最大个数为100
 */
class DescribeEndUsersRequest extends AbstractModel
{
    /**
     * @var string 开发者的环境ID
     */
    public $EnvId;

    /**
     * @var integer 可选参数，偏移量，默认 0
     */
    public $Offset;

    /**
     * @var integer 可选参数，拉取数量，默认 20
     */
    public $Limit;

    /**
     * @var array 按照 uuid 列表过滤，最大个数为100
     */
    public $UUIds;

    /**
     * @param string $EnvId 开发者的环境ID
     * @param integer $Offset 可选参数，偏移量，默认 0
     * @param integer $Limit 可选参数，拉取数量，默认 20
     * @param array $UUIds 按照 uuid 列表过滤，最大个数为100
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("UUIds",$param) and $param["UUIds"] !== null) {
            $this->UUIds = $param["UUIds"];
        }
    }
}
