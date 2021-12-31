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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对端网关厂商信息对象。
 *
 * @method string getPlatform() 获取平台。
 * @method void setPlatform(string $Platform) 设置平台。
 * @method string getSoftwareVersion() 获取软件版本。
 * @method void setSoftwareVersion(string $SoftwareVersion) 设置软件版本。
 * @method string getVendorName() 获取供应商名称。
 * @method void setVendorName(string $VendorName) 设置供应商名称。
 */
class CustomerGatewayVendor extends AbstractModel
{
    /**
     * @var string 平台。
     */
    public $Platform;

    /**
     * @var string 软件版本。
     */
    public $SoftwareVersion;

    /**
     * @var string 供应商名称。
     */
    public $VendorName;

    /**
     * @param string $Platform 平台。
     * @param string $SoftwareVersion 软件版本。
     * @param string $VendorName 供应商名称。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("SoftwareVersion",$param) and $param["SoftwareVersion"] !== null) {
            $this->SoftwareVersion = $param["SoftwareVersion"];
        }

        if (array_key_exists("VendorName",$param) and $param["VendorName"] !== null) {
            $this->VendorName = $param["VendorName"];
        }
    }
}
