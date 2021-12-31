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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterBehavior请求参数结构体
 *
 * @method string getMidasAppId() 获取聚鑫分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫分配的支付主MidasAppId
 * @method string getSubAppId() 获取聚鑫计费SubAppId，代表子商户
 * @method void setSubAppId(string $SubAppId) 设置聚鑫计费SubAppId，代表子商户
 * @method string getMidasSecretId() 获取聚鑫分配的安全ID
 * @method void setMidasSecretId(string $MidasSecretId) 设置聚鑫分配的安全ID
 * @method string getMidasSignature() 获取按照聚鑫安全密钥计算的签名
 * @method void setMidasSignature(string $MidasSignature) 设置按照聚鑫安全密钥计算的签名
 * @method integer getFunctionFlag() 获取功能标志
1：登记行为记录信息
2：查询补录信息
 * @method void setFunctionFlag(integer $FunctionFlag) 设置功能标志
1：登记行为记录信息
2：查询补录信息
 * @method string getMidasEnvironment() 获取环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 * @method string getOperationClickTime() 获取操作点击时间
yyyyMMddHHmmss
功能标志FunctionFlag=1时必输
 * @method void setOperationClickTime(string $OperationClickTime) 设置操作点击时间
yyyyMMddHHmmss
功能标志FunctionFlag=1时必输
 * @method string getIpAddress() 获取IP地址
功能标志FunctionFlag=1时必输
 * @method void setIpAddress(string $IpAddress) 设置IP地址
功能标志FunctionFlag=1时必输
 * @method string getMacAddress() 获取MAC地址
功能标志FunctionFlag=1时必输
 * @method void setMacAddress(string $MacAddress) 设置MAC地址
功能标志FunctionFlag=1时必输
 * @method integer getSignChannel() 获取签约渠道
1:  App
2:  平台H5网页
3：公众号
4：小程序
功能标志FunctionFlag=1时必输
 * @method void setSignChannel(integer $SignChannel) 设置签约渠道
1:  App
2:  平台H5网页
3：公众号
4：小程序
功能标志FunctionFlag=1时必输
 */
class RegisterBehaviorRequest extends AbstractModel
{
    /**
     * @var string 聚鑫分配的支付主MidasAppId
     */
    public $MidasAppId;

    /**
     * @var string 聚鑫计费SubAppId，代表子商户
     */
    public $SubAppId;

    /**
     * @var string 聚鑫分配的安全ID
     */
    public $MidasSecretId;

    /**
     * @var string 按照聚鑫安全密钥计算的签名
     */
    public $MidasSignature;

    /**
     * @var integer 功能标志
1：登记行为记录信息
2：查询补录信息
     */
    public $FunctionFlag;

    /**
     * @var string 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
     */
    public $MidasEnvironment;

    /**
     * @var string 操作点击时间
yyyyMMddHHmmss
功能标志FunctionFlag=1时必输
     */
    public $OperationClickTime;

    /**
     * @var string IP地址
功能标志FunctionFlag=1时必输
     */
    public $IpAddress;

    /**
     * @var string MAC地址
功能标志FunctionFlag=1时必输
     */
    public $MacAddress;

    /**
     * @var integer 签约渠道
1:  App
2:  平台H5网页
3：公众号
4：小程序
功能标志FunctionFlag=1时必输
     */
    public $SignChannel;

    /**
     * @param string $MidasAppId 聚鑫分配的支付主MidasAppId
     * @param string $SubAppId 聚鑫计费SubAppId，代表子商户
     * @param string $MidasSecretId 聚鑫分配的安全ID
     * @param string $MidasSignature 按照聚鑫安全密钥计算的签名
     * @param integer $FunctionFlag 功能标志
1：登记行为记录信息
2：查询补录信息
     * @param string $MidasEnvironment 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
     * @param string $OperationClickTime 操作点击时间
yyyyMMddHHmmss
功能标志FunctionFlag=1时必输
     * @param string $IpAddress IP地址
功能标志FunctionFlag=1时必输
     * @param string $MacAddress MAC地址
功能标志FunctionFlag=1时必输
     * @param integer $SignChannel 签约渠道
1:  App
2:  平台H5网页
3：公众号
4：小程序
功能标志FunctionFlag=1时必输
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
        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("MidasSecretId",$param) and $param["MidasSecretId"] !== null) {
            $this->MidasSecretId = $param["MidasSecretId"];
        }

        if (array_key_exists("MidasSignature",$param) and $param["MidasSignature"] !== null) {
            $this->MidasSignature = $param["MidasSignature"];
        }

        if (array_key_exists("FunctionFlag",$param) and $param["FunctionFlag"] !== null) {
            $this->FunctionFlag = $param["FunctionFlag"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }

        if (array_key_exists("OperationClickTime",$param) and $param["OperationClickTime"] !== null) {
            $this->OperationClickTime = $param["OperationClickTime"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("MacAddress",$param) and $param["MacAddress"] !== null) {
            $this->MacAddress = $param["MacAddress"];
        }

        if (array_key_exists("SignChannel",$param) and $param["SignChannel"] !== null) {
            $this->SignChannel = $param["SignChannel"];
        }
    }
}
