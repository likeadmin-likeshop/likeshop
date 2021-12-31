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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品属性
 *
 * @method string getProductDescription() 获取产品描述
 * @method void setProductDescription(string $ProductDescription) 设置产品描述
 * @method string getEncryptionType() 获取加密类型，1表示证书认证，2表示签名认证。如不填写，默认值是1
 * @method void setEncryptionType(string $EncryptionType) 设置加密类型，1表示证书认证，2表示签名认证。如不填写，默认值是1
 * @method string getRegion() 获取产品所属区域，目前只支持广州（gz）
 * @method void setRegion(string $Region) 设置产品所属区域，目前只支持广州（gz）
 * @method integer getProductType() 获取产品类型，各个类型值代表的节点-类型如下：
0 普通产品，2 NB-IoT产品，4 LoRa产品，3 LoRa网关产品，5 普通网关产品   默认值是0
 * @method void setProductType(integer $ProductType) 设置产品类型，各个类型值代表的节点-类型如下：
0 普通产品，2 NB-IoT产品，4 LoRa产品，3 LoRa网关产品，5 普通网关产品   默认值是0
 * @method string getFormat() 获取数据格式，取值为json或者custom，默认值是json
 * @method void setFormat(string $Format) 设置数据格式，取值为json或者custom，默认值是json
 * @method string getPlatform() 获取产品所属平台，默认值是0
 * @method void setPlatform(string $Platform) 设置产品所属平台，默认值是0
 * @method string getAppeui() 获取LoRa产品运营侧APPEUI，只有LoRa产品需要填写
 * @method void setAppeui(string $Appeui) 设置LoRa产品运营侧APPEUI，只有LoRa产品需要填写
 * @method string getModelId() 获取产品绑定的物模型ID，-1表示不绑定
 * @method void setModelId(string $ModelId) 设置产品绑定的物模型ID，-1表示不绑定
 * @method string getModelName() 获取产品绑定的物模型名称
 * @method void setModelName(string $ModelName) 设置产品绑定的物模型名称
 * @method string getProductKey() 获取产品密钥，suite产品才会有
 * @method void setProductKey(string $ProductKey) 设置产品密钥，suite产品才会有
 * @method integer getRegisterType() 获取动态注册类型 0-关闭, 1-预定义设备名 2-动态定义设备名
 * @method void setRegisterType(integer $RegisterType) 设置动态注册类型 0-关闭, 1-预定义设备名 2-动态定义设备名
 * @method string getProductSecret() 获取动态注册产品秘钥
 * @method void setProductSecret(string $ProductSecret) 设置动态注册产品秘钥
 * @method integer getRegisterLimit() 获取RegisterType为2时，设备动态创建的限制数量
 * @method void setRegisterLimit(integer $RegisterLimit) 设置RegisterType为2时，设备动态创建的限制数量
 */
class ProductProperties extends AbstractModel
{
    /**
     * @var string 产品描述
     */
    public $ProductDescription;

    /**
     * @var string 加密类型，1表示证书认证，2表示签名认证。如不填写，默认值是1
     */
    public $EncryptionType;

    /**
     * @var string 产品所属区域，目前只支持广州（gz）
     */
    public $Region;

    /**
     * @var integer 产品类型，各个类型值代表的节点-类型如下：
0 普通产品，2 NB-IoT产品，4 LoRa产品，3 LoRa网关产品，5 普通网关产品   默认值是0
     */
    public $ProductType;

    /**
     * @var string 数据格式，取值为json或者custom，默认值是json
     */
    public $Format;

    /**
     * @var string 产品所属平台，默认值是0
     */
    public $Platform;

    /**
     * @var string LoRa产品运营侧APPEUI，只有LoRa产品需要填写
     */
    public $Appeui;

    /**
     * @var string 产品绑定的物模型ID，-1表示不绑定
     */
    public $ModelId;

    /**
     * @var string 产品绑定的物模型名称
     */
    public $ModelName;

    /**
     * @var string 产品密钥，suite产品才会有
     */
    public $ProductKey;

    /**
     * @var integer 动态注册类型 0-关闭, 1-预定义设备名 2-动态定义设备名
     */
    public $RegisterType;

    /**
     * @var string 动态注册产品秘钥
     */
    public $ProductSecret;

    /**
     * @var integer RegisterType为2时，设备动态创建的限制数量
     */
    public $RegisterLimit;

    /**
     * @param string $ProductDescription 产品描述
     * @param string $EncryptionType 加密类型，1表示证书认证，2表示签名认证。如不填写，默认值是1
     * @param string $Region 产品所属区域，目前只支持广州（gz）
     * @param integer $ProductType 产品类型，各个类型值代表的节点-类型如下：
0 普通产品，2 NB-IoT产品，4 LoRa产品，3 LoRa网关产品，5 普通网关产品   默认值是0
     * @param string $Format 数据格式，取值为json或者custom，默认值是json
     * @param string $Platform 产品所属平台，默认值是0
     * @param string $Appeui LoRa产品运营侧APPEUI，只有LoRa产品需要填写
     * @param string $ModelId 产品绑定的物模型ID，-1表示不绑定
     * @param string $ModelName 产品绑定的物模型名称
     * @param string $ProductKey 产品密钥，suite产品才会有
     * @param integer $RegisterType 动态注册类型 0-关闭, 1-预定义设备名 2-动态定义设备名
     * @param string $ProductSecret 动态注册产品秘钥
     * @param integer $RegisterLimit RegisterType为2时，设备动态创建的限制数量
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
        if (array_key_exists("ProductDescription",$param) and $param["ProductDescription"] !== null) {
            $this->ProductDescription = $param["ProductDescription"];
        }

        if (array_key_exists("EncryptionType",$param) and $param["EncryptionType"] !== null) {
            $this->EncryptionType = $param["EncryptionType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Appeui",$param) and $param["Appeui"] !== null) {
            $this->Appeui = $param["Appeui"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ProductKey",$param) and $param["ProductKey"] !== null) {
            $this->ProductKey = $param["ProductKey"];
        }

        if (array_key_exists("RegisterType",$param) and $param["RegisterType"] !== null) {
            $this->RegisterType = $param["RegisterType"];
        }

        if (array_key_exists("ProductSecret",$param) and $param["ProductSecret"] !== null) {
            $this->ProductSecret = $param["ProductSecret"];
        }

        if (array_key_exists("RegisterLimit",$param) and $param["RegisterLimit"] !== null) {
            $this->RegisterLimit = $param["RegisterLimit"];
        }
    }
}
