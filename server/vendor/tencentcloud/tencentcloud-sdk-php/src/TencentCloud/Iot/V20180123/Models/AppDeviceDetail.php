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
 * 绑定设备详情
 *
 * @method string getDeviceId() 获取设备Id
 * @method void setDeviceId(string $DeviceId) 设置设备Id
 * @method string getProductId() 获取所属产品Id
 * @method void setProductId(string $ProductId) 设置所属产品Id
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getAliasName() 获取别名
 * @method void setAliasName(string $AliasName) 设置别名
 * @method string getRegion() 获取地区
 * @method void setRegion(string $Region) 设置地区
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getDeviceInfo() 获取设备信息（json）
 * @method void setDeviceInfo(string $DeviceInfo) 设置设备信息（json）
 * @method array getDataTemplate() 获取数据模板
 * @method void setDataTemplate(array $DataTemplate) 设置数据模板
 */
class AppDeviceDetail extends AbstractModel
{
    /**
     * @var string 设备Id
     */
    public $DeviceId;

    /**
     * @var string 所属产品Id
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 别名
     */
    public $AliasName;

    /**
     * @var string 地区
     */
    public $Region;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 设备信息（json）
     */
    public $DeviceInfo;

    /**
     * @var array 数据模板
     */
    public $DataTemplate;

    /**
     * @param string $DeviceId 设备Id
     * @param string $ProductId 所属产品Id
     * @param string $DeviceName 设备名称
     * @param string $AliasName 别名
     * @param string $Region 地区
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $DeviceInfo 设备信息（json）
     * @param array $DataTemplate 数据模板
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DeviceInfo",$param) and $param["DeviceInfo"] !== null) {
            $this->DeviceInfo = $param["DeviceInfo"];
        }

        if (array_key_exists("DataTemplate",$param) and $param["DataTemplate"] !== null) {
            $this->DataTemplate = [];
            foreach ($param["DataTemplate"] as $key => $value){
                $obj = new DataTemplate();
                $obj->deserialize($value);
                array_push($this->DataTemplate, $obj);
            }
        }
    }
}
