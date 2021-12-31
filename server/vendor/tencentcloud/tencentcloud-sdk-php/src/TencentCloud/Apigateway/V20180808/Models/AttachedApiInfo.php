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
 * 插件绑定的API信息
 *
 * @method string getServiceId() 获取API所在服务ID。
 * @method void setServiceId(string $ServiceId) 设置API所在服务ID。
 * @method string getServiceName() 获取API所在服务名称。
 * @method void setServiceName(string $ServiceName) 设置API所在服务名称。
 * @method string getServiceDesc() 获取API所在服务描述信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceDesc(string $ServiceDesc) 设置API所在服务描述信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiId() 获取API ID。
 * @method void setApiId(string $ApiId) 设置API ID。
 * @method string getApiName() 获取API名称。
 * @method void setApiName(string $ApiName) 设置API名称。
 * @method string getApiDesc() 获取API描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiDesc(string $ApiDesc) 设置API描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvironment() 获取插件绑定API的环境。
 * @method void setEnvironment(string $Environment) 设置插件绑定API的环境。
 * @method string getAttachedTime() 获取插件和API绑定时间。
 * @method void setAttachedTime(string $AttachedTime) 设置插件和API绑定时间。
 */
class AttachedApiInfo extends AbstractModel
{
    /**
     * @var string API所在服务ID。
     */
    public $ServiceId;

    /**
     * @var string API所在服务名称。
     */
    public $ServiceName;

    /**
     * @var string API所在服务描述信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceDesc;

    /**
     * @var string API ID。
     */
    public $ApiId;

    /**
     * @var string API名称。
     */
    public $ApiName;

    /**
     * @var string API描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiDesc;

    /**
     * @var string 插件绑定API的环境。
     */
    public $Environment;

    /**
     * @var string 插件和API绑定时间。
     */
    public $AttachedTime;

    /**
     * @param string $ServiceId API所在服务ID。
     * @param string $ServiceName API所在服务名称。
     * @param string $ServiceDesc API所在服务描述信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiId API ID。
     * @param string $ApiName API名称。
     * @param string $ApiDesc API描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Environment 插件绑定API的环境。
     * @param string $AttachedTime 插件和API绑定时间。
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceDesc",$param) and $param["ServiceDesc"] !== null) {
            $this->ServiceDesc = $param["ServiceDesc"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ApiDesc",$param) and $param["ApiDesc"] !== null) {
            $this->ApiDesc = $param["ApiDesc"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("AttachedTime",$param) and $param["AttachedTime"] !== null) {
            $this->AttachedTime = $param["AttachedTime"];
        }
    }
}
