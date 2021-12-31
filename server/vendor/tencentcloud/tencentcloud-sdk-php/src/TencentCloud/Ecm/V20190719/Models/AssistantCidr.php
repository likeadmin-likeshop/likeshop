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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC辅助CIDR信息。
 *
 * @method string getVpcId() 获取VPC实例ID。形如：vpc-6v2ht8q5
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。形如：vpc-6v2ht8q5
 * @method string getCidrBlock() 获取辅助CIDR。形如：172.16.0.0/16
 * @method void setCidrBlock(string $CidrBlock) 设置辅助CIDR。形如：172.16.0.0/16
 * @method integer getAssistantType() 获取辅助CIDR类型（0：普通辅助CIDR，1：容器辅助CIDR），默认都是0。
 * @method void setAssistantType(integer $AssistantType) 设置辅助CIDR类型（0：普通辅助CIDR，1：容器辅助CIDR），默认都是0。
 * @method array getSubnetSet() 获取辅助CIDR拆分的子网。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetSet(array $SubnetSet) 设置辅助CIDR拆分的子网。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssistantCidr extends AbstractModel
{
    /**
     * @var string VPC实例ID。形如：vpc-6v2ht8q5
     */
    public $VpcId;

    /**
     * @var string 辅助CIDR。形如：172.16.0.0/16
     */
    public $CidrBlock;

    /**
     * @var integer 辅助CIDR类型（0：普通辅助CIDR，1：容器辅助CIDR），默认都是0。
     */
    public $AssistantType;

    /**
     * @var array 辅助CIDR拆分的子网。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetSet;

    /**
     * @param string $VpcId VPC实例ID。形如：vpc-6v2ht8q5
     * @param string $CidrBlock 辅助CIDR。形如：172.16.0.0/16
     * @param integer $AssistantType 辅助CIDR类型（0：普通辅助CIDR，1：容器辅助CIDR），默认都是0。
     * @param array $SubnetSet 辅助CIDR拆分的子网。
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("AssistantType",$param) and $param["AssistantType"] !== null) {
            $this->AssistantType = $param["AssistantType"];
        }

        if (array_key_exists("SubnetSet",$param) and $param["SubnetSet"] !== null) {
            $this->SubnetSet = [];
            foreach ($param["SubnetSet"] as $key => $value){
                $obj = new Subnet();
                $obj->deserialize($value);
                array_push($this->SubnetSet, $obj);
            }
        }
    }
}
