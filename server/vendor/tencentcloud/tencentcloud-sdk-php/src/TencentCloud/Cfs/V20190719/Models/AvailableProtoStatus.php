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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本控制-协议详情

 *
 * @method string getSaleStatus() 获取售卖状态。可选值有 sale_out 售罄、saling可售、no_saling不可销售
 * @method void setSaleStatus(string $SaleStatus) 设置售卖状态。可选值有 sale_out 售罄、saling可售、no_saling不可销售
 * @method string getProtocol() 获取协议类型。可选值有 NFS、CIFS
 * @method void setProtocol(string $Protocol) 设置协议类型。可选值有 NFS、CIFS
 */
class AvailableProtoStatus extends AbstractModel
{
    /**
     * @var string 售卖状态。可选值有 sale_out 售罄、saling可售、no_saling不可销售
     */
    public $SaleStatus;

    /**
     * @var string 协议类型。可选值有 NFS、CIFS
     */
    public $Protocol;

    /**
     * @param string $SaleStatus 售卖状态。可选值有 sale_out 售罄、saling可售、no_saling不可销售
     * @param string $Protocol 协议类型。可选值有 NFS、CIFS
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
        if (array_key_exists("SaleStatus",$param) and $param["SaleStatus"] !== null) {
            $this->SaleStatus = $param["SaleStatus"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
