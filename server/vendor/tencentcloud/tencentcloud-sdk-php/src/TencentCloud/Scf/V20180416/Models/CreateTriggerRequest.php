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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTrigger请求参数结构体
 *
 * @method string getFunctionName() 获取新建触发器绑定的函数名称
 * @method void setFunctionName(string $FunctionName) 设置新建触发器绑定的函数名称
 * @method string getTriggerName() 获取新建触发器名称。如果是定时触发器，名称支持英文字母、数字、连接符和下划线，最长100个字符；如果是cos触发器，需要是对应cos存储桶适用于XML API的访问域名(例如:5401-5ff414-12345.cos.ap-shanghai.myqcloud.com);如果是其他触发器，见具体触发器绑定参数的说明
 * @method void setTriggerName(string $TriggerName) 设置新建触发器名称。如果是定时触发器，名称支持英文字母、数字、连接符和下划线，最长100个字符；如果是cos触发器，需要是对应cos存储桶适用于XML API的访问域名(例如:5401-5ff414-12345.cos.ap-shanghai.myqcloud.com);如果是其他触发器，见具体触发器绑定参数的说明
 * @method string getType() 获取触发器类型，目前支持 cos 、cmq、 timer、 ckafka、apigw类型
 * @method void setType(string $Type) 设置触发器类型，目前支持 cos 、cmq、 timer、 ckafka、apigw类型
 * @method string getTriggerDesc() 获取触发器对应的参数，可见具体[触发器描述说明](https://cloud.tencent.com/document/product/583/39901)
 * @method void setTriggerDesc(string $TriggerDesc) 设置触发器对应的参数，可见具体[触发器描述说明](https://cloud.tencent.com/document/product/583/39901)
 * @method string getNamespace() 获取函数的命名空间
 * @method void setNamespace(string $Namespace) 设置函数的命名空间
 * @method string getQualifier() 获取函数的版本
 * @method void setQualifier(string $Qualifier) 设置函数的版本
 * @method string getEnable() 获取触发器的初始是能状态 OPEN表示开启 CLOSE表示关闭
 * @method void setEnable(string $Enable) 设置触发器的初始是能状态 OPEN表示开启 CLOSE表示关闭
 * @method string getCustomArgument() 获取用户自定义参数，仅支持timer触发器
 * @method void setCustomArgument(string $CustomArgument) 设置用户自定义参数，仅支持timer触发器
 */
class CreateTriggerRequest extends AbstractModel
{
    /**
     * @var string 新建触发器绑定的函数名称
     */
    public $FunctionName;

    /**
     * @var string 新建触发器名称。如果是定时触发器，名称支持英文字母、数字、连接符和下划线，最长100个字符；如果是cos触发器，需要是对应cos存储桶适用于XML API的访问域名(例如:5401-5ff414-12345.cos.ap-shanghai.myqcloud.com);如果是其他触发器，见具体触发器绑定参数的说明
     */
    public $TriggerName;

    /**
     * @var string 触发器类型，目前支持 cos 、cmq、 timer、 ckafka、apigw类型
     */
    public $Type;

    /**
     * @var string 触发器对应的参数，可见具体[触发器描述说明](https://cloud.tencent.com/document/product/583/39901)
     */
    public $TriggerDesc;

    /**
     * @var string 函数的命名空间
     */
    public $Namespace;

    /**
     * @var string 函数的版本
     */
    public $Qualifier;

    /**
     * @var string 触发器的初始是能状态 OPEN表示开启 CLOSE表示关闭
     */
    public $Enable;

    /**
     * @var string 用户自定义参数，仅支持timer触发器
     */
    public $CustomArgument;

    /**
     * @param string $FunctionName 新建触发器绑定的函数名称
     * @param string $TriggerName 新建触发器名称。如果是定时触发器，名称支持英文字母、数字、连接符和下划线，最长100个字符；如果是cos触发器，需要是对应cos存储桶适用于XML API的访问域名(例如:5401-5ff414-12345.cos.ap-shanghai.myqcloud.com);如果是其他触发器，见具体触发器绑定参数的说明
     * @param string $Type 触发器类型，目前支持 cos 、cmq、 timer、 ckafka、apigw类型
     * @param string $TriggerDesc 触发器对应的参数，可见具体[触发器描述说明](https://cloud.tencent.com/document/product/583/39901)
     * @param string $Namespace 函数的命名空间
     * @param string $Qualifier 函数的版本
     * @param string $Enable 触发器的初始是能状态 OPEN表示开启 CLOSE表示关闭
     * @param string $CustomArgument 用户自定义参数，仅支持timer触发器
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TriggerDesc",$param) and $param["TriggerDesc"] !== null) {
            $this->TriggerDesc = $param["TriggerDesc"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("CustomArgument",$param) and $param["CustomArgument"] !== null) {
            $this->CustomArgument = $param["CustomArgument"];
        }
    }
}
