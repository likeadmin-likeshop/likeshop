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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetLoRaGatewayList请求参数结构体
 *
 * @method boolean getIsCommunity() 获取是否是社区网关
 * @method void setIsCommunity(boolean $IsCommunity) 设置是否是社区网关
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取限制个数
 * @method void setLimit(integer $Limit) 设置限制个数
 */
class GetLoRaGatewayListRequest extends AbstractModel
{
    /**
     * @var boolean 是否是社区网关
     */
    public $IsCommunity;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 限制个数
     */
    public $Limit;

    /**
     * @param boolean $IsCommunity 是否是社区网关
     * @param integer $Offset 偏移量
     * @param integer $Limit 限制个数
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
        if (array_key_exists("IsCommunity",$param) and $param["IsCommunity"] !== null) {
            $this->IsCommunity = $param["IsCommunity"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
