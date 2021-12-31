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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceVipVport请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。
 * @method string getDstIp() 获取目标 IP。该参数和 DstPort 参数，两者必传一个。
 * @method void setDstIp(string $DstIp) 设置目标 IP。该参数和 DstPort 参数，两者必传一个。
 * @method integer getDstPort() 获取目标端口，支持范围为：[1024-65535]。该参数和 DstIp 参数，两者必传一个。
 * @method void setDstPort(integer $DstPort) 设置目标端口，支持范围为：[1024-65535]。该参数和 DstIp 参数，两者必传一个。
 * @method string getUniqVpcId() 获取私有网络统一 ID。
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络统一 ID。
 * @method string getUniqSubnetId() 获取子网统一 ID。
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置子网统一 ID。
 * @method integer getReleaseDuration() 获取进行基础网络转 VPC 网络和 VPC 网络下的子网变更时，原网络中旧IP的回收时间，单位为小时，取值范围为0-168，默认值为24小时。
 * @method void setReleaseDuration(integer $ReleaseDuration) 设置进行基础网络转 VPC 网络和 VPC 网络下的子网变更时，原网络中旧IP的回收时间，单位为小时，取值范围为0-168，默认值为24小时。
 */
class ModifyDBInstanceVipVportRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。
     */
    public $InstanceId;

    /**
     * @var string 目标 IP。该参数和 DstPort 参数，两者必传一个。
     */
    public $DstIp;

    /**
     * @var integer 目标端口，支持范围为：[1024-65535]。该参数和 DstIp 参数，两者必传一个。
     */
    public $DstPort;

    /**
     * @var string 私有网络统一 ID。
     */
    public $UniqVpcId;

    /**
     * @var string 子网统一 ID。
     */
    public $UniqSubnetId;

    /**
     * @var integer 进行基础网络转 VPC 网络和 VPC 网络下的子网变更时，原网络中旧IP的回收时间，单位为小时，取值范围为0-168，默认值为24小时。
     */
    public $ReleaseDuration;

    /**
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872) 接口获取，其值为输出参数中字段 InstanceId 的值。
     * @param string $DstIp 目标 IP。该参数和 DstPort 参数，两者必传一个。
     * @param integer $DstPort 目标端口，支持范围为：[1024-65535]。该参数和 DstIp 参数，两者必传一个。
     * @param string $UniqVpcId 私有网络统一 ID。
     * @param string $UniqSubnetId 子网统一 ID。
     * @param integer $ReleaseDuration 进行基础网络转 VPC 网络和 VPC 网络下的子网变更时，原网络中旧IP的回收时间，单位为小时，取值范围为0-168，默认值为24小时。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("ReleaseDuration",$param) and $param["ReleaseDuration"] !== null) {
            $this->ReleaseDuration = $param["ReleaseDuration"];
        }
    }
}
