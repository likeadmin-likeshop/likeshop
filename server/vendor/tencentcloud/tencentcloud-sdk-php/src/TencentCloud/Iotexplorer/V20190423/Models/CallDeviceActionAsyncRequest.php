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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CallDeviceActionAsync请求参数结构体
 *
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getActionId() 获取产品数据模板中行为功能的标识符，由开发者自行根据设备的应用场景定义
 * @method void setActionId(string $ActionId) 设置产品数据模板中行为功能的标识符，由开发者自行根据设备的应用场景定义
 * @method string getInputParams() 获取输入参数
 * @method void setInputParams(string $InputParams) 设置输入参数
 */
class CallDeviceActionAsyncRequest extends AbstractModel
{
    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 产品数据模板中行为功能的标识符，由开发者自行根据设备的应用场景定义
     */
    public $ActionId;

    /**
     * @var string 输入参数
     */
    public $InputParams;

    /**
     * @param string $ProductId 产品Id
     * @param string $DeviceName 设备名称
     * @param string $ActionId 产品数据模板中行为功能的标识符，由开发者自行根据设备的应用场景定义
     * @param string $InputParams 输入参数
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

        if (array_key_exists("ActionId",$param) and $param["ActionId"] !== null) {
            $this->ActionId = $param["ActionId"];
        }

        if (array_key_exists("InputParams",$param) and $param["InputParams"] !== null) {
            $this->InputParams = $param["InputParams"];
        }
    }
}
