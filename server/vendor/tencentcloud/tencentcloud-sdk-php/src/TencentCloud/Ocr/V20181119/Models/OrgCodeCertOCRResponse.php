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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OrgCodeCertOCR返回参数结构体
 *
 * @method string getOrgCode() 获取代码
 * @method void setOrgCode(string $OrgCode) 设置代码
 * @method string getName() 获取机构名称
 * @method void setName(string $Name) 设置机构名称
 * @method string getAddress() 获取地址
 * @method void setAddress(string $Address) 设置地址
 * @method string getValidDate() 获取有效期
 * @method void setValidDate(string $ValidDate) 设置有效期
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class OrgCodeCertOCRResponse extends AbstractModel
{
    /**
     * @var string 代码
     */
    public $OrgCode;

    /**
     * @var string 机构名称
     */
    public $Name;

    /**
     * @var string 地址
     */
    public $Address;

    /**
     * @var string 有效期
     */
    public $ValidDate;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OrgCode 代码
     * @param string $Name 机构名称
     * @param string $Address 地址
     * @param string $ValidDate 有效期
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("OrgCode",$param) and $param["OrgCode"] !== null) {
            $this->OrgCode = $param["OrgCode"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
