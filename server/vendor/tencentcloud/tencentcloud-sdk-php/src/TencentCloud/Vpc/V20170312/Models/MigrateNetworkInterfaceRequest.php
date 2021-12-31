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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MigrateNetworkInterface请求参数结构体
 *
 * @method string getNetworkInterfaceId() 获取弹性网卡实例ID，例如：eni-m6dyj72l。
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置弹性网卡实例ID，例如：eni-m6dyj72l。
 * @method string getSourceInstanceId() 获取弹性网卡当前绑定的CVM实例ID。形如：ins-r8hr2upy。
 * @method void setSourceInstanceId(string $SourceInstanceId) 设置弹性网卡当前绑定的CVM实例ID。形如：ins-r8hr2upy。
 * @method string getDestinationInstanceId() 获取待迁移的目的CVM实例ID。
 * @method void setDestinationInstanceId(string $DestinationInstanceId) 设置待迁移的目的CVM实例ID。
 * @method integer getAttachType() 获取网卡绑定类型：0 标准型 1 扩展型。
 * @method void setAttachType(integer $AttachType) 设置网卡绑定类型：0 标准型 1 扩展型。
 */
class MigrateNetworkInterfaceRequest extends AbstractModel
{
    /**
     * @var string 弹性网卡实例ID，例如：eni-m6dyj72l。
     */
    public $NetworkInterfaceId;

    /**
     * @var string 弹性网卡当前绑定的CVM实例ID。形如：ins-r8hr2upy。
     */
    public $SourceInstanceId;

    /**
     * @var string 待迁移的目的CVM实例ID。
     */
    public $DestinationInstanceId;

    /**
     * @var integer 网卡绑定类型：0 标准型 1 扩展型。
     */
    public $AttachType;

    /**
     * @param string $NetworkInterfaceId 弹性网卡实例ID，例如：eni-m6dyj72l。
     * @param string $SourceInstanceId 弹性网卡当前绑定的CVM实例ID。形如：ins-r8hr2upy。
     * @param string $DestinationInstanceId 待迁移的目的CVM实例ID。
     * @param integer $AttachType 网卡绑定类型：0 标准型 1 扩展型。
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
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("SourceInstanceId",$param) and $param["SourceInstanceId"] !== null) {
            $this->SourceInstanceId = $param["SourceInstanceId"];
        }

        if (array_key_exists("DestinationInstanceId",$param) and $param["DestinationInstanceId"] !== null) {
            $this->DestinationInstanceId = $param["DestinationInstanceId"];
        }

        if (array_key_exists("AttachType",$param) and $param["AttachType"] !== null) {
            $this->AttachType = $param["AttachType"];
        }
    }
}
