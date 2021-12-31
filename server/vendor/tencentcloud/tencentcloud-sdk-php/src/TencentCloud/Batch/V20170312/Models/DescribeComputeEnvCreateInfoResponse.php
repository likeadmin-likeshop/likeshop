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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeComputeEnvCreateInfo返回参数结构体
 *
 * @method string getEnvId() 获取计算环境 ID
 * @method void setEnvId(string $EnvId) 设置计算环境 ID
 * @method string getEnvName() 获取计算环境名称
 * @method void setEnvName(string $EnvName) 设置计算环境名称
 * @method string getEnvDescription() 获取计算环境描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvDescription(string $EnvDescription) 设置计算环境描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvType() 获取计算环境类型，仅支持“MANAGED”类型
 * @method void setEnvType(string $EnvType) 设置计算环境类型，仅支持“MANAGED”类型
 * @method EnvData getEnvData() 获取计算环境参数
 * @method void setEnvData(EnvData $EnvData) 设置计算环境参数
 * @method array getMountDataDisks() 获取数据盘挂载选项
 * @method void setMountDataDisks(array $MountDataDisks) 设置数据盘挂载选项
 * @method array getInputMappings() 获取输入映射
 * @method void setInputMappings(array $InputMappings) 设置输入映射
 * @method array getAuthentications() 获取授权信息
 * @method void setAuthentications(array $Authentications) 设置授权信息
 * @method array getNotifications() 获取通知信息
 * @method void setNotifications(array $Notifications) 设置通知信息
 * @method integer getDesiredComputeNodeCount() 获取计算节点期望个数
 * @method void setDesiredComputeNodeCount(integer $DesiredComputeNodeCount) 设置计算节点期望个数
 * @method array getTags() 获取计算环境绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置计算环境绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeComputeEnvCreateInfoResponse extends AbstractModel
{
    /**
     * @var string 计算环境 ID
     */
    public $EnvId;

    /**
     * @var string 计算环境名称
     */
    public $EnvName;

    /**
     * @var string 计算环境描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvDescription;

    /**
     * @var string 计算环境类型，仅支持“MANAGED”类型
     */
    public $EnvType;

    /**
     * @var EnvData 计算环境参数
     */
    public $EnvData;

    /**
     * @var array 数据盘挂载选项
     */
    public $MountDataDisks;

    /**
     * @var array 输入映射
     */
    public $InputMappings;

    /**
     * @var array 授权信息
     */
    public $Authentications;

    /**
     * @var array 通知信息
     */
    public $Notifications;

    /**
     * @var integer 计算节点期望个数
     */
    public $DesiredComputeNodeCount;

    /**
     * @var array 计算环境绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $EnvId 计算环境 ID
     * @param string $EnvName 计算环境名称
     * @param string $EnvDescription 计算环境描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvType 计算环境类型，仅支持“MANAGED”类型
     * @param EnvData $EnvData 计算环境参数
     * @param array $MountDataDisks 数据盘挂载选项
     * @param array $InputMappings 输入映射
     * @param array $Authentications 授权信息
     * @param array $Notifications 通知信息
     * @param integer $DesiredComputeNodeCount 计算节点期望个数
     * @param array $Tags 计算环境绑定的标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("EnvName",$param) and $param["EnvName"] !== null) {
            $this->EnvName = $param["EnvName"];
        }

        if (array_key_exists("EnvDescription",$param) and $param["EnvDescription"] !== null) {
            $this->EnvDescription = $param["EnvDescription"];
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("EnvData",$param) and $param["EnvData"] !== null) {
            $this->EnvData = new EnvData();
            $this->EnvData->deserialize($param["EnvData"]);
        }

        if (array_key_exists("MountDataDisks",$param) and $param["MountDataDisks"] !== null) {
            $this->MountDataDisks = [];
            foreach ($param["MountDataDisks"] as $key => $value){
                $obj = new MountDataDisk();
                $obj->deserialize($value);
                array_push($this->MountDataDisks, $obj);
            }
        }

        if (array_key_exists("InputMappings",$param) and $param["InputMappings"] !== null) {
            $this->InputMappings = [];
            foreach ($param["InputMappings"] as $key => $value){
                $obj = new InputMapping();
                $obj->deserialize($value);
                array_push($this->InputMappings, $obj);
            }
        }

        if (array_key_exists("Authentications",$param) and $param["Authentications"] !== null) {
            $this->Authentications = [];
            foreach ($param["Authentications"] as $key => $value){
                $obj = new Authentication();
                $obj->deserialize($value);
                array_push($this->Authentications, $obj);
            }
        }

        if (array_key_exists("Notifications",$param) and $param["Notifications"] !== null) {
            $this->Notifications = [];
            foreach ($param["Notifications"] as $key => $value){
                $obj = new Notification();
                $obj->deserialize($value);
                array_push($this->Notifications, $obj);
            }
        }

        if (array_key_exists("DesiredComputeNodeCount",$param) and $param["DesiredComputeNodeCount"] !== null) {
            $this->DesiredComputeNodeCount = $param["DesiredComputeNodeCount"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
