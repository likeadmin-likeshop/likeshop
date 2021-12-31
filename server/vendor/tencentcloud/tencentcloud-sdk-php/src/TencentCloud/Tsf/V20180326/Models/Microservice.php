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
 * 微服务
 *
 * @method string getMicroserviceId() 获取微服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroserviceId(string $MicroserviceId) 设置微服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMicroserviceName() 获取微服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroserviceName(string $MicroserviceName) 设置微服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMicroserviceDesc() 获取微服务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroserviceDesc(string $MicroserviceDesc) 设置微服务描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceId() 获取命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunInstanceCount() 获取微服务的运行实例数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunInstanceCount(integer $RunInstanceCount) 设置微服务的运行实例数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCriticalInstanceCount() 获取微服务的离线实例数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCriticalInstanceCount(integer $CriticalInstanceCount) 设置微服务的离线实例数目
注意：此字段可能返回 null，表示取不到有效值。
 */
class Microservice extends AbstractModel
{
    /**
     * @var string 微服务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroserviceId;

    /**
     * @var string 微服务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroserviceName;

    /**
     * @var string 微服务描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroserviceDesc;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceId;

    /**
     * @var integer 微服务的运行实例数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunInstanceCount;

    /**
     * @var integer 微服务的离线实例数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CriticalInstanceCount;

    /**
     * @param string $MicroserviceId 微服务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MicroserviceName 微服务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MicroserviceDesc 微服务描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceId 命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunInstanceCount 微服务的运行实例数目
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CriticalInstanceCount 微服务的离线实例数目
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
        if (array_key_exists("MicroserviceId",$param) and $param["MicroserviceId"] !== null) {
            $this->MicroserviceId = $param["MicroserviceId"];
        }

        if (array_key_exists("MicroserviceName",$param) and $param["MicroserviceName"] !== null) {
            $this->MicroserviceName = $param["MicroserviceName"];
        }

        if (array_key_exists("MicroserviceDesc",$param) and $param["MicroserviceDesc"] !== null) {
            $this->MicroserviceDesc = $param["MicroserviceDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("RunInstanceCount",$param) and $param["RunInstanceCount"] !== null) {
            $this->RunInstanceCount = $param["RunInstanceCount"];
        }

        if (array_key_exists("CriticalInstanceCount",$param) and $param["CriticalInstanceCount"] !== null) {
            $this->CriticalInstanceCount = $param["CriticalInstanceCount"];
        }
    }
}
