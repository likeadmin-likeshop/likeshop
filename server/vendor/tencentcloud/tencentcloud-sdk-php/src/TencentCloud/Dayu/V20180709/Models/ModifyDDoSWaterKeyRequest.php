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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDDoSWaterKey请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
 * @method string getPolicyId() 获取策略ID
 * @method void setPolicyId(string $PolicyId) 设置策略ID
 * @method string getMethod() 获取密钥操作，取值：[add（添加），delete（删除），open（开启），close（关闭），get（获取密钥）]
 * @method void setMethod(string $Method) 设置密钥操作，取值：[add（添加），delete（删除），open（开启），close（关闭），get（获取密钥）]
 * @method integer getKeyId() 获取密钥ID，当添加密钥操作时可以不填或填0，其他操作时必须填写；
 * @method void setKeyId(integer $KeyId) 设置密钥ID，当添加密钥操作时可以不填或填0，其他操作时必须填写；
 */
class ModifyDDoSWaterKeyRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
     */
    public $Business;

    /**
     * @var string 策略ID
     */
    public $PolicyId;

    /**
     * @var string 密钥操作，取值：[add（添加），delete（删除），open（开启），close（关闭），get（获取密钥）]
     */
    public $Method;

    /**
     * @var integer 密钥ID，当添加密钥操作时可以不填或填0，其他操作时必须填写；
     */
    public $KeyId;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
     * @param string $PolicyId 策略ID
     * @param string $Method 密钥操作，取值：[add（添加），delete（删除），open（开启），close（关闭），get（获取密钥）]
     * @param integer $KeyId 密钥ID，当添加密钥操作时可以不填或填0，其他操作时必须填写；
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }
    }
}
