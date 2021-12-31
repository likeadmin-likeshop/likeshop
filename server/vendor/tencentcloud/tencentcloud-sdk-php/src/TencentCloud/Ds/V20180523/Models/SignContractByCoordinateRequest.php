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
 * SignContractByCoordinate请求参数结构体
 *
 * @method string getModule() 获取模块名ContractMng
 * @method void setModule(string $Module) 设置模块名ContractMng
 * @method string getOperation() 获取操作名SignContractByCoordinate
 * @method void setOperation(string $Operation) 设置操作名SignContractByCoordinate
 * @method string getContractResId() 获取合同ID
 * @method void setContractResId(string $ContractResId) 设置合同ID
 * @method string getAccountResId() 获取帐户ID
 * @method void setAccountResId(string $AccountResId) 设置帐户ID
 * @method array getSignLocations() 获取签署坐标，坐标原点在文件左下角，坐标单位为磅，坐标不得超过合同文件边界
 * @method void setSignLocations(array $SignLocations) 设置签署坐标，坐标原点在文件左下角，坐标单位为磅，坐标不得超过合同文件边界
 * @method string getAuthorizationTime() 获取授权时间（由平台自动填充）
 * @method void setAuthorizationTime(string $AuthorizationTime) 设置授权时间（由平台自动填充）
 * @method string getPosition() 获取授权IP地址（由平台自动填充）
 * @method void setPosition(string $Position) 设置授权IP地址（由平台自动填充）
 * @method string getSealResId() 获取签章ID
 * @method void setSealResId(string $SealResId) 设置签章ID
 * @method integer getCertType() 获取选用证书类型：1  表示RSA证书， 2 表示国密证书， 参数不传时默认为1
 * @method void setCertType(integer $CertType) 设置选用证书类型：1  表示RSA证书， 2 表示国密证书， 参数不传时默认为1
 * @method string getImageData() 获取签名图片，base64编码
 * @method void setImageData(string $ImageData) 设置签名图片，base64编码
 */
class SignContractByCoordinateRequest extends AbstractModel
{
    /**
     * @var string 模块名ContractMng
     */
    public $Module;

    /**
     * @var string 操作名SignContractByCoordinate
     */
    public $Operation;

    /**
     * @var string 合同ID
     */
    public $ContractResId;

    /**
     * @var string 帐户ID
     */
    public $AccountResId;

    /**
     * @var array 签署坐标，坐标原点在文件左下角，坐标单位为磅，坐标不得超过合同文件边界
     */
    public $SignLocations;

    /**
     * @var string 授权时间（由平台自动填充）
     */
    public $AuthorizationTime;

    /**
     * @var string 授权IP地址（由平台自动填充）
     */
    public $Position;

    /**
     * @var string 签章ID
     */
    public $SealResId;

    /**
     * @var integer 选用证书类型：1  表示RSA证书， 2 表示国密证书， 参数不传时默认为1
     */
    public $CertType;

    /**
     * @var string 签名图片，base64编码
     */
    public $ImageData;

    /**
     * @param string $Module 模块名ContractMng
     * @param string $Operation 操作名SignContractByCoordinate
     * @param string $ContractResId 合同ID
     * @param string $AccountResId 帐户ID
     * @param array $SignLocations 签署坐标，坐标原点在文件左下角，坐标单位为磅，坐标不得超过合同文件边界
     * @param string $AuthorizationTime 授权时间（由平台自动填充）
     * @param string $Position 授权IP地址（由平台自动填充）
     * @param string $SealResId 签章ID
     * @param integer $CertType 选用证书类型：1  表示RSA证书， 2 表示国密证书， 参数不传时默认为1
     * @param string $ImageData 签名图片，base64编码
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ContractResId",$param) and $param["ContractResId"] !== null) {
            $this->ContractResId = $param["ContractResId"];
        }

        if (array_key_exists("AccountResId",$param) and $param["AccountResId"] !== null) {
            $this->AccountResId = $param["AccountResId"];
        }

        if (array_key_exists("SignLocations",$param) and $param["SignLocations"] !== null) {
            $this->SignLocations = [];
            foreach ($param["SignLocations"] as $key => $value){
                $obj = new SignLocation();
                $obj->deserialize($value);
                array_push($this->SignLocations, $obj);
            }
        }

        if (array_key_exists("AuthorizationTime",$param) and $param["AuthorizationTime"] !== null) {
            $this->AuthorizationTime = $param["AuthorizationTime"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("SealResId",$param) and $param["SealResId"] !== null) {
            $this->SealResId = $param["SealResId"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("ImageData",$param) and $param["ImageData"] !== null) {
            $this->ImageData = $param["ImageData"];
        }
    }
}
