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
 * CreateDevice请求参数结构体
 *
 * @method string getProductId() 获取产品 ID 。创建产品时腾讯云为用户分配全局唯一的 ID
 * @method void setProductId(string $ProductId) 设置产品 ID 。创建产品时腾讯云为用户分配全局唯一的 ID
 * @method string getDeviceName() 获取设备名称。命名规则：[a-zA-Z0-9:_-]{1,48}。
 * @method void setDeviceName(string $DeviceName) 设置设备名称。命名规则：[a-zA-Z0-9:_-]{1,48}。
 * @method Attribute getAttribute() 获取设备属性
 * @method void setAttribute(Attribute $Attribute) 设置设备属性
 * @method string getDefinedPsk() 获取是否使用自定义PSK，默认不使用
 * @method void setDefinedPsk(string $DefinedPsk) 设置是否使用自定义PSK，默认不使用
 * @method integer getIsp() 获取运营商类型，当产品是NB-IoT产品时，此字段必填。1表示中国电信，2表示中国移动，3表示中国联通
 * @method void setIsp(integer $Isp) 设置运营商类型，当产品是NB-IoT产品时，此字段必填。1表示中国电信，2表示中国移动，3表示中国联通
 * @method string getImei() 获取IMEI，当产品是NB-IoT产品时，此字段必填
 * @method void setImei(string $Imei) 设置IMEI，当产品是NB-IoT产品时，此字段必填
 * @method string getLoraDevEui() 获取LoRa设备的DevEui，当创建LoRa时，此字段必填
 * @method void setLoraDevEui(string $LoraDevEui) 设置LoRa设备的DevEui，当创建LoRa时，此字段必填
 * @method integer getLoraMoteType() 获取LoRa设备的MoteType
 * @method void setLoraMoteType(integer $LoraMoteType) 设置LoRa设备的MoteType
 * @method string getSkey() 获取创建LoRa设备需要skey
 * @method void setSkey(string $Skey) 设置创建LoRa设备需要skey
 * @method string getLoraAppKey() 获取LoRa设备的AppKey
 * @method void setLoraAppKey(string $LoraAppKey) 设置LoRa设备的AppKey
 */
class CreateDeviceRequest extends AbstractModel
{
    /**
     * @var string 产品 ID 。创建产品时腾讯云为用户分配全局唯一的 ID
     */
    public $ProductId;

    /**
     * @var string 设备名称。命名规则：[a-zA-Z0-9:_-]{1,48}。
     */
    public $DeviceName;

    /**
     * @var Attribute 设备属性
     */
    public $Attribute;

    /**
     * @var string 是否使用自定义PSK，默认不使用
     */
    public $DefinedPsk;

    /**
     * @var integer 运营商类型，当产品是NB-IoT产品时，此字段必填。1表示中国电信，2表示中国移动，3表示中国联通
     */
    public $Isp;

    /**
     * @var string IMEI，当产品是NB-IoT产品时，此字段必填
     */
    public $Imei;

    /**
     * @var string LoRa设备的DevEui，当创建LoRa时，此字段必填
     */
    public $LoraDevEui;

    /**
     * @var integer LoRa设备的MoteType
     */
    public $LoraMoteType;

    /**
     * @var string 创建LoRa设备需要skey
     */
    public $Skey;

    /**
     * @var string LoRa设备的AppKey
     */
    public $LoraAppKey;

    /**
     * @param string $ProductId 产品 ID 。创建产品时腾讯云为用户分配全局唯一的 ID
     * @param string $DeviceName 设备名称。命名规则：[a-zA-Z0-9:_-]{1,48}。
     * @param Attribute $Attribute 设备属性
     * @param string $DefinedPsk 是否使用自定义PSK，默认不使用
     * @param integer $Isp 运营商类型，当产品是NB-IoT产品时，此字段必填。1表示中国电信，2表示中国移动，3表示中国联通
     * @param string $Imei IMEI，当产品是NB-IoT产品时，此字段必填
     * @param string $LoraDevEui LoRa设备的DevEui，当创建LoRa时，此字段必填
     * @param integer $LoraMoteType LoRa设备的MoteType
     * @param string $Skey 创建LoRa设备需要skey
     * @param string $LoraAppKey LoRa设备的AppKey
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Attribute",$param) and $param["Attribute"] !== null) {
            $this->Attribute = new Attribute();
            $this->Attribute->deserialize($param["Attribute"]);
        }

        if (array_key_exists("DefinedPsk",$param) and $param["DefinedPsk"] !== null) {
            $this->DefinedPsk = $param["DefinedPsk"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("Imei",$param) and $param["Imei"] !== null) {
            $this->Imei = $param["Imei"];
        }

        if (array_key_exists("LoraDevEui",$param) and $param["LoraDevEui"] !== null) {
            $this->LoraDevEui = $param["LoraDevEui"];
        }

        if (array_key_exists("LoraMoteType",$param) and $param["LoraMoteType"] !== null) {
            $this->LoraMoteType = $param["LoraMoteType"];
        }

        if (array_key_exists("Skey",$param) and $param["Skey"] !== null) {
            $this->Skey = $param["Skey"];
        }

        if (array_key_exists("LoraAppKey",$param) and $param["LoraAppKey"] !== null) {
            $this->LoraAppKey = $param["LoraAppKey"];
        }
    }
}
