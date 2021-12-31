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
 * UpdateDeviceShadow请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getState() 获取虚拟设备的状态，JSON字符串格式，由desired结构组成
 * @method void setState(string $State) 设置虚拟设备的状态，JSON字符串格式，由desired结构组成
 * @method integer getShadowVersion() 获取当前版本号，需要和后台的version保持一致，才能更新成功
 * @method void setShadowVersion(integer $ShadowVersion) 设置当前版本号，需要和后台的version保持一致，才能更新成功
 * @method string getPrefix() 获取下发delta消息的topic前缀，可选类型: "$shadow","$template"。不填写默认"$shadow"。
 * @method void setPrefix(string $Prefix) 设置下发delta消息的topic前缀，可选类型: "$shadow","$template"。不填写默认"$shadow"。
 */
class UpdateDeviceShadowRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 虚拟设备的状态，JSON字符串格式，由desired结构组成
     */
    public $State;

    /**
     * @var integer 当前版本号，需要和后台的version保持一致，才能更新成功
     */
    public $ShadowVersion;

    /**
     * @var string 下发delta消息的topic前缀，可选类型: "$shadow","$template"。不填写默认"$shadow"。
     */
    public $Prefix;

    /**
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param string $State 虚拟设备的状态，JSON字符串格式，由desired结构组成
     * @param integer $ShadowVersion 当前版本号，需要和后台的version保持一致，才能更新成功
     * @param string $Prefix 下发delta消息的topic前缀，可选类型: "$shadow","$template"。不填写默认"$shadow"。
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

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("ShadowVersion",$param) and $param["ShadowVersion"] !== null) {
            $this->ShadowVersion = $param["ShadowVersion"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }
    }
}
