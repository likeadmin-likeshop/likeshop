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
 * 配置项
 *
 * @method string getConfigId() 获取配置项ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigId(string $ConfigId) 设置配置项ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigName() 获取配置项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigName(string $ConfigName) 设置配置项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigVersion() 获取配置项版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigVersion(string $ConfigVersion) 设置配置项版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigVersionDesc() 获取配置项版本描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigVersionDesc(string $ConfigVersionDesc) 设置配置项版本描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigValue() 获取配置项值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigValue(string $ConfigValue) 设置配置项值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigType() 获取配置项类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigType(string $ConfigType) 设置配置项类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTime(string $CreationTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationId() 获取应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeleteFlag() 获取删除标识，true：可以删除；false：不可删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteFlag(boolean $DeleteFlag) 设置删除标识，true：可以删除；false：不可删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdateTime() 获取最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConfigVersionCount() 获取配置项版本数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigVersionCount(integer $ConfigVersionCount) 设置配置项版本数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class Config extends AbstractModel
{
    /**
     * @var string 配置项ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigId;

    /**
     * @var string 配置项名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigName;

    /**
     * @var string 配置项版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigVersion;

    /**
     * @var string 配置项版本描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigVersionDesc;

    /**
     * @var string 配置项值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigValue;

    /**
     * @var string 配置项类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigType;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTime;

    /**
     * @var string 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @var string 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @var boolean 删除标识，true：可以删除；false：不可删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteFlag;

    /**
     * @var string 最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTime;

    /**
     * @var integer 配置项版本数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigVersionCount;

    /**
     * @param string $ConfigId 配置项ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigName 配置项名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigVersion 配置项版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigVersionDesc 配置项版本描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigValue 配置项值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigType 配置项类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationId 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeleteFlag 删除标识，true：可以删除；false：不可删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdateTime 最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConfigVersionCount 配置项版本数量
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigVersion",$param) and $param["ConfigVersion"] !== null) {
            $this->ConfigVersion = $param["ConfigVersion"];
        }

        if (array_key_exists("ConfigVersionDesc",$param) and $param["ConfigVersionDesc"] !== null) {
            $this->ConfigVersionDesc = $param["ConfigVersionDesc"];
        }

        if (array_key_exists("ConfigValue",$param) and $param["ConfigValue"] !== null) {
            $this->ConfigValue = $param["ConfigValue"];
        }

        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("DeleteFlag",$param) and $param["DeleteFlag"] !== null) {
            $this->DeleteFlag = $param["DeleteFlag"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("ConfigVersionCount",$param) and $param["ConfigVersionCount"] !== null) {
            $this->ConfigVersionCount = $param["ConfigVersionCount"];
        }
    }
}
