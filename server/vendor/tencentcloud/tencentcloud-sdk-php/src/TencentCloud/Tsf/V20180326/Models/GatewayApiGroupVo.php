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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网关分组简单信息
 *
 * @method string getGroupId() 获取分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGroupApiCount() 获取分组下API个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupApiCount(integer $GroupApiCount) 设置分组下API个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroupApis() 获取分组API列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupApis(array $GroupApis) 设置分组API列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayInstanceType() 获取网关实例的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayInstanceType(string $GatewayInstanceType) 设置网关实例的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayInstanceId() 获取网关实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayInstanceId(string $GatewayInstanceId) 设置网关实例ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class GatewayApiGroupVo extends AbstractModel
{
    /**
     * @var string 分组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 分组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var integer 分组下API个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupApiCount;

    /**
     * @var array 分组API列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupApis;

    /**
     * @var string 网关实例的类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayInstanceType;

    /**
     * @var string 网关实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayInstanceId;

    /**
     * @param string $GroupId 分组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 分组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GroupApiCount 分组下API个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GroupApis 分组API列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayInstanceType 网关实例的类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayInstanceId 网关实例ID
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupApiCount",$param) and $param["GroupApiCount"] !== null) {
            $this->GroupApiCount = $param["GroupApiCount"];
        }

        if (array_key_exists("GroupApis",$param) and $param["GroupApis"] !== null) {
            $this->GroupApis = [];
            foreach ($param["GroupApis"] as $key => $value){
                $obj = new GatewayGroupApiVo();
                $obj->deserialize($value);
                array_push($this->GroupApis, $obj);
            }
        }

        if (array_key_exists("GatewayInstanceType",$param) and $param["GatewayInstanceType"] !== null) {
            $this->GatewayInstanceType = $param["GatewayInstanceType"];
        }

        if (array_key_exists("GatewayInstanceId",$param) and $param["GatewayInstanceId"] !== null) {
            $this->GatewayInstanceId = $param["GatewayInstanceId"];
        }
    }
}
