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
 * QueryMerchantInfoForManagement请求参数结构体
 *
 * @method integer getInvoicePlatformId() 获取开票平台ID
 * @method void setInvoicePlatformId(integer $InvoicePlatformId) 设置开票平台ID
 * @method integer getOffset() 获取页码
 * @method void setOffset(integer $Offset) 设置页码
 * @method integer getLimit() 获取页大小
 * @method void setLimit(integer $Limit) 设置页大小
 * @method string getProfile() 获取接入环境。沙箱环境填sandbox。
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填sandbox。
 */
class QueryMerchantInfoForManagementRequest extends AbstractModel
{
    /**
     * @var integer 开票平台ID
     */
    public $InvoicePlatformId;

    /**
     * @var integer 页码
     */
    public $Offset;

    /**
     * @var integer 页大小
     */
    public $Limit;

    /**
     * @var string 接入环境。沙箱环境填sandbox。
     */
    public $Profile;

    /**
     * @param integer $InvoicePlatformId 开票平台ID
     * @param integer $Offset 页码
     * @param integer $Limit 页大小
     * @param string $Profile 接入环境。沙箱环境填sandbox。
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
        if (array_key_exists("InvoicePlatformId",$param) and $param["InvoicePlatformId"] !== null) {
            $this->InvoicePlatformId = $param["InvoicePlatformId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
