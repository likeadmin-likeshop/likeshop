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
namespace TencentCloud\Ds\V20180523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签署人信息
 *
 * @method string getAccountResId() 获取账户ID
 * @method void setAccountResId(string $AccountResId) 设置账户ID
 * @method string getAuthorizationTime() 获取授权时间（上传合同可不传该参数）
 * @method void setAuthorizationTime(string $AuthorizationTime) 设置授权时间（上传合同可不传该参数）
 * @method string getLocation() 获取授权IP地址（上传合同可不传该参数）
 * @method void setLocation(string $Location) 设置授权IP地址（上传合同可不传该参数）
 * @method string getSealId() 获取签章ID
 * @method void setSealId(string $SealId) 设置签章ID
 * @method string getImageData() 获取签名图片，优先级比SealId高
 * @method void setImageData(string $ImageData) 设置签名图片，优先级比SealId高
 * @method integer getCertType() 获取默认值：1  表示RSA证书， 2 表示国密证书， 参数不传时默认为1
 * @method void setCertType(integer $CertType) 设置默认值：1  表示RSA证书， 2 表示国密证书， 参数不传时默认为1
 * @method string getSignLocation() 获取签名域的标签值
 * @method void setSignLocation(string $SignLocation) 设置签名域的标签值
 */
class SignInfo extends AbstractModel
{
    /**
     * @var string 账户ID
     */
    public $AccountResId;

    /**
     * @var string 授权时间（上传合同可不传该参数）
     */
    public $AuthorizationTime;

    /**
     * @var string 授权IP地址（上传合同可不传该参数）
     */
    public $Location;

    /**
     * @var string 签章ID
     */
    public $SealId;

    /**
     * @var string 签名图片，优先级比SealId高
     */
    public $ImageData;

    /**
     * @var integer 默认值：1  表示RSA证书， 2 表示国密证书， 参数不传时默认为1
     */
    public $CertType;

    /**
     * @var string 签名域的标签值
     */
    public $SignLocation;

    /**
     * @param string $AccountResId 账户ID
     * @param string $AuthorizationTime 授权时间（上传合同可不传该参数）
     * @param string $Location 授权IP地址（上传合同可不传该参数）
     * @param string $SealId 签章ID
     * @param string $ImageData 签名图片，优先级比SealId高
     * @param integer $CertType 默认值：1  表示RSA证书， 2 表示国密证书， 参数不传时默认为1
     * @param string $SignLocation 签名域的标签值
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
        if (array_key_exists("AccountResId",$param) and $param["AccountResId"] !== null) {
            $this->AccountResId = $param["AccountResId"];
        }

        if (array_key_exists("AuthorizationTime",$param) and $param["AuthorizationTime"] !== null) {
            $this->AuthorizationTime = $param["AuthorizationTime"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("ImageData",$param) and $param["ImageData"] !== null) {
            $this->ImageData = $param["ImageData"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("SignLocation",$param) and $param["SignLocation"] !== null) {
            $this->SignLocation = $param["SignLocation"];
        }
    }
}
