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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API网关插件详情。
 *
 * @method string getPluginId() 获取插件ID。
 * @method void setPluginId(string $PluginId) 设置插件ID。
 * @method string getPluginName() 获取插件名称。
 * @method void setPluginName(string $PluginName) 设置插件名称。
 * @method string getPluginType() 获取插件类型。
 * @method void setPluginType(string $PluginType) 设置插件类型。
 * @method string getPluginData() 获取插件定义语句。
 * @method void setPluginData(string $PluginData) 设置插件定义语句。
 * @method string getDescription() 获取插件描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置插件描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取插件创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
 * @method void setCreatedTime(string $CreatedTime) 设置插件创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
 * @method string getModifiedTime() 获取插件修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
 * @method void setModifiedTime(string $ModifiedTime) 设置插件修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
 * @method integer getAttachedApiTotalCount() 获取插件绑定的API总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachedApiTotalCount(integer $AttachedApiTotalCount) 设置插件绑定的API总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAttachedApis() 获取插件绑定的API信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachedApis(array $AttachedApis) 设置插件绑定的API信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Plugin extends AbstractModel
{
    /**
     * @var string 插件ID。
     */
    public $PluginId;

    /**
     * @var string 插件名称。
     */
    public $PluginName;

    /**
     * @var string 插件类型。
     */
    public $PluginType;

    /**
     * @var string 插件定义语句。
     */
    public $PluginData;

    /**
     * @var string 插件描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 插件创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
     */
    public $CreatedTime;

    /**
     * @var string 插件修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
     */
    public $ModifiedTime;

    /**
     * @var integer 插件绑定的API总数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachedApiTotalCount;

    /**
     * @var array 插件绑定的API信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachedApis;

    /**
     * @param string $PluginId 插件ID。
     * @param string $PluginName 插件名称。
     * @param string $PluginType 插件类型。
     * @param string $PluginData 插件定义语句。
     * @param string $Description 插件描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 插件创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
     * @param string $ModifiedTime 插件修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
     * @param integer $AttachedApiTotalCount 插件绑定的API总数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AttachedApis 插件绑定的API信息。
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("PluginType",$param) and $param["PluginType"] !== null) {
            $this->PluginType = $param["PluginType"];
        }

        if (array_key_exists("PluginData",$param) and $param["PluginData"] !== null) {
            $this->PluginData = $param["PluginData"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("AttachedApiTotalCount",$param) and $param["AttachedApiTotalCount"] !== null) {
            $this->AttachedApiTotalCount = $param["AttachedApiTotalCount"];
        }

        if (array_key_exists("AttachedApis",$param) and $param["AttachedApis"] !== null) {
            $this->AttachedApis = [];
            foreach ($param["AttachedApis"] as $key => $value){
                $obj = new AttachedApiInfo();
                $obj->deserialize($value);
                array_push($this->AttachedApis, $obj);
            }
        }
    }
}
