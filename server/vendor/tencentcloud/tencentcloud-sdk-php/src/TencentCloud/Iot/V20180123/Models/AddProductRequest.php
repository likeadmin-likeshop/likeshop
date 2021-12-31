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
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddProduct请求参数结构体
 *
 * @method string getName() 获取产品名称，同一区域产品名称需唯一，支持中文、英文字母、中划线和下划线，长度不超过31个字符，中文占两个字符
 * @method void setName(string $Name) 设置产品名称，同一区域产品名称需唯一，支持中文、英文字母、中划线和下划线，长度不超过31个字符，中文占两个字符
 * @method string getDescription() 获取产品描述
 * @method void setDescription(string $Description) 设置产品描述
 * @method array getDataTemplate() 获取数据模版
 * @method void setDataTemplate(array $DataTemplate) 设置数据模版
 * @method string getDataProtocol() 获取产品版本（native表示基础版，template表示高级版，默认值为template）
 * @method void setDataProtocol(string $DataProtocol) 设置产品版本（native表示基础版，template表示高级版，默认值为template）
 * @method integer getAuthType() 获取设备认证方式（1：动态令牌，2：签名直连鉴权）
 * @method void setAuthType(integer $AuthType) 设置设备认证方式（1：动态令牌，2：签名直连鉴权）
 * @method string getCommProtocol() 获取通信方式（other/wifi/cellular/nb-iot）
 * @method void setCommProtocol(string $CommProtocol) 设置通信方式（other/wifi/cellular/nb-iot）
 * @method string getDeviceType() 获取产品的设备类型（device: 直连设备；sub_device：子设备；gateway：网关设备）
 * @method void setDeviceType(string $DeviceType) 设置产品的设备类型（device: 直连设备；sub_device：子设备；gateway：网关设备）
 */
class AddProductRequest extends AbstractModel
{
    /**
     * @var string 产品名称，同一区域产品名称需唯一，支持中文、英文字母、中划线和下划线，长度不超过31个字符，中文占两个字符
     */
    public $Name;

    /**
     * @var string 产品描述
     */
    public $Description;

    /**
     * @var array 数据模版
     */
    public $DataTemplate;

    /**
     * @var string 产品版本（native表示基础版，template表示高级版，默认值为template）
     */
    public $DataProtocol;

    /**
     * @var integer 设备认证方式（1：动态令牌，2：签名直连鉴权）
     */
    public $AuthType;

    /**
     * @var string 通信方式（other/wifi/cellular/nb-iot）
     */
    public $CommProtocol;

    /**
     * @var string 产品的设备类型（device: 直连设备；sub_device：子设备；gateway：网关设备）
     */
    public $DeviceType;

    /**
     * @param string $Name 产品名称，同一区域产品名称需唯一，支持中文、英文字母、中划线和下划线，长度不超过31个字符，中文占两个字符
     * @param string $Description 产品描述
     * @param array $DataTemplate 数据模版
     * @param string $DataProtocol 产品版本（native表示基础版，template表示高级版，默认值为template）
     * @param integer $AuthType 设备认证方式（1：动态令牌，2：签名直连鉴权）
     * @param string $CommProtocol 通信方式（other/wifi/cellular/nb-iot）
     * @param string $DeviceType 产品的设备类型（device: 直连设备；sub_device：子设备；gateway：网关设备）
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DataTemplate",$param) and $param["DataTemplate"] !== null) {
            $this->DataTemplate = [];
            foreach ($param["DataTemplate"] as $key => $value){
                $obj = new DataTemplate();
                $obj->deserialize($value);
                array_push($this->DataTemplate, $obj);
            }
        }

        if (array_key_exists("DataProtocol",$param) and $param["DataProtocol"] !== null) {
            $this->DataProtocol = $param["DataProtocol"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("CommProtocol",$param) and $param["CommProtocol"] !== null) {
            $this->CommProtocol = $param["CommProtocol"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}
