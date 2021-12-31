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
 * 简单应用
 *
 * @method string getApplicationId() 获取应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationType() 获取应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationType(string $ApplicationType) 设置应用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMicroserviceType() 获取应用微服务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroserviceType(string $MicroserviceType) 设置应用微服务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationDesc() 获取ApplicationDesc
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationDesc(string $ApplicationDesc) 设置ApplicationDesc
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProgLang() 获取ProgLang
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgLang(string $ProgLang) 设置ProgLang
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationResourceType() 获取ApplicationResourceType
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationResourceType(string $ApplicationResourceType) 设置ApplicationResourceType
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取CreateTime
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置CreateTime
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取UpdateTime
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置UpdateTime
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApigatewayServiceId() 获取ApigatewayServiceId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApigatewayServiceId(string $ApigatewayServiceId) 设置ApigatewayServiceId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationRuntimeType() 获取ApplicationRuntimeType
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationRuntimeType(string $ApplicationRuntimeType) 设置ApplicationRuntimeType
注意：此字段可能返回 null，表示取不到有效值。
 */
class SimpleApplication extends AbstractModel
{
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
     * @var string 应用类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationType;

    /**
     * @var string 应用微服务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroserviceType;

    /**
     * @var string ApplicationDesc
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationDesc;

    /**
     * @var string ProgLang
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgLang;

    /**
     * @var string ApplicationResourceType
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationResourceType;

    /**
     * @var string CreateTime
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string UpdateTime
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string ApigatewayServiceId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApigatewayServiceId;

    /**
     * @var string ApplicationRuntimeType
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationRuntimeType;

    /**
     * @param string $ApplicationId 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationType 应用类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MicroserviceType 应用微服务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationDesc ApplicationDesc
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProgLang ProgLang
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationResourceType ApplicationResourceType
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime CreateTime
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime UpdateTime
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApigatewayServiceId ApigatewayServiceId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationRuntimeType ApplicationRuntimeType
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("MicroserviceType",$param) and $param["MicroserviceType"] !== null) {
            $this->MicroserviceType = $param["MicroserviceType"];
        }

        if (array_key_exists("ApplicationDesc",$param) and $param["ApplicationDesc"] !== null) {
            $this->ApplicationDesc = $param["ApplicationDesc"];
        }

        if (array_key_exists("ProgLang",$param) and $param["ProgLang"] !== null) {
            $this->ProgLang = $param["ProgLang"];
        }

        if (array_key_exists("ApplicationResourceType",$param) and $param["ApplicationResourceType"] !== null) {
            $this->ApplicationResourceType = $param["ApplicationResourceType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ApigatewayServiceId",$param) and $param["ApigatewayServiceId"] !== null) {
            $this->ApigatewayServiceId = $param["ApigatewayServiceId"];
        }

        if (array_key_exists("ApplicationRuntimeType",$param) and $param["ApplicationRuntimeType"] !== null) {
            $this->ApplicationRuntimeType = $param["ApplicationRuntimeType"];
        }
    }
}
