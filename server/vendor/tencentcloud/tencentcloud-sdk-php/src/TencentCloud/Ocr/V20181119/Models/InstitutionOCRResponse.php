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
 * InstitutionOCR返回参数结构体
 *
 * @method string getRegId() 获取注册号
 * @method void setRegId(string $RegId) 设置注册号
 * @method string getValidDate() 获取有效期
 * @method void setValidDate(string $ValidDate) 设置有效期
 * @method string getLocation() 获取住所
 * @method void setLocation(string $Location) 设置住所
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getLegalPerson() 获取法定代表人
 * @method void setLegalPerson(string $LegalPerson) 设置法定代表人
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class InstitutionOCRResponse extends AbstractModel
{
    /**
     * @var string 注册号
     */
    public $RegId;

    /**
     * @var string 有效期
     */
    public $ValidDate;

    /**
     * @var string 住所
     */
    public $Location;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 法定代表人
     */
    public $LegalPerson;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RegId 注册号
     * @param string $ValidDate 有效期
     * @param string $Location 住所
     * @param string $Name 名称
     * @param string $LegalPerson 法定代表人
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
        if (array_key_exists("RegId",$param) and $param["RegId"] !== null) {
            $this->RegId = $param["RegId"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LegalPerson",$param) and $param["LegalPerson"] !== null) {
            $this->LegalPerson = $param["LegalPerson"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
