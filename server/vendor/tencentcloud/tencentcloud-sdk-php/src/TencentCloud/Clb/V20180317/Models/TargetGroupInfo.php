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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标组信息
 *
 * @method string getTargetGroupId() 获取目标组ID
 * @method void setTargetGroupId(string $TargetGroupId) 设置目标组ID
 * @method string getVpcId() 获取目标组的vpcid
 * @method void setVpcId(string $VpcId) 设置目标组的vpcid
 * @method string getTargetGroupName() 获取目标组的名字
 * @method void setTargetGroupName(string $TargetGroupName) 设置目标组的名字
 * @method integer getPort() 获取目标组的默认端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置目标组的默认端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取目标组的创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置目标组的创建时间
 * @method string getUpdatedTime() 获取目标组的修改时间
 * @method void setUpdatedTime(string $UpdatedTime) 设置目标组的修改时间
 * @method array getAssociatedRule() 获取关联到的规则数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociatedRule(array $AssociatedRule) 设置关联到的规则数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class TargetGroupInfo extends AbstractModel
{
    /**
     * @var string 目标组ID
     */
    public $TargetGroupId;

    /**
     * @var string 目标组的vpcid
     */
    public $VpcId;

    /**
     * @var string 目标组的名字
     */
    public $TargetGroupName;

    /**
     * @var integer 目标组的默认端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 目标组的创建时间
     */
    public $CreatedTime;

    /**
     * @var string 目标组的修改时间
     */
    public $UpdatedTime;

    /**
     * @var array 关联到的规则数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociatedRule;

    /**
     * @param string $TargetGroupId 目标组ID
     * @param string $VpcId 目标组的vpcid
     * @param string $TargetGroupName 目标组的名字
     * @param integer $Port 目标组的默认端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 目标组的创建时间
     * @param string $UpdatedTime 目标组的修改时间
     * @param array $AssociatedRule 关联到的规则数组
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
        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("TargetGroupName",$param) and $param["TargetGroupName"] !== null) {
            $this->TargetGroupName = $param["TargetGroupName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("AssociatedRule",$param) and $param["AssociatedRule"] !== null) {
            $this->AssociatedRule = [];
            foreach ($param["AssociatedRule"] as $key => $value){
                $obj = new AssociationItem();
                $obj->deserialize($value);
                array_push($this->AssociatedRule, $obj);
            }
        }
    }
}
