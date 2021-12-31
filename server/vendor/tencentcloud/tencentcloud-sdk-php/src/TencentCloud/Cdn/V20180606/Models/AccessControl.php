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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 请求头部及请求url访问控制
 *
 * @method string getSwitch() 获取on | off 是否启用请求头部及请求url访问控制
 * @method void setSwitch(string $Switch) 设置on | off 是否启用请求头部及请求url访问控制
 * @method array getAccessControlRules() 获取请求头部及请求url访问规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessControlRules(array $AccessControlRules) 设置请求头部及请求url访问规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReturnCode() 获取返回状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReturnCode(integer $ReturnCode) 设置返回状态码
注意：此字段可能返回 null，表示取不到有效值。
 */
class AccessControl extends AbstractModel
{
    /**
     * @var string on | off 是否启用请求头部及请求url访问控制
     */
    public $Switch;

    /**
     * @var array 请求头部及请求url访问规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessControlRules;

    /**
     * @var integer 返回状态码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReturnCode;

    /**
     * @param string $Switch on | off 是否启用请求头部及请求url访问控制
     * @param array $AccessControlRules 请求头部及请求url访问规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReturnCode 返回状态码
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("AccessControlRules",$param) and $param["AccessControlRules"] !== null) {
            $this->AccessControlRules = [];
            foreach ($param["AccessControlRules"] as $key => $value){
                $obj = new AccessControlRule();
                $obj->deserialize($value);
                array_push($this->AccessControlRules, $obj);
            }
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }
    }
}
