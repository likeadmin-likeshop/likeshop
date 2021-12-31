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
 * PermitOCR返回参数结构体
 *
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getEnglishName() 获取英文姓名
 * @method void setEnglishName(string $EnglishName) 设置英文姓名
 * @method string getNumber() 获取证件号
 * @method void setNumber(string $Number) 设置证件号
 * @method string getSex() 获取性别
 * @method void setSex(string $Sex) 设置性别
 * @method string getValidDate() 获取有效期限
 * @method void setValidDate(string $ValidDate) 设置有效期限
 * @method string getIssueAuthority() 获取签发机关
 * @method void setIssueAuthority(string $IssueAuthority) 设置签发机关
 * @method string getIssueAddress() 获取签发地点
 * @method void setIssueAddress(string $IssueAddress) 设置签发地点
 * @method string getBirthday() 获取出生日期
 * @method void setBirthday(string $Birthday) 设置出生日期
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class PermitOCRResponse extends AbstractModel
{
    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 英文姓名
     */
    public $EnglishName;

    /**
     * @var string 证件号
     */
    public $Number;

    /**
     * @var string 性别
     */
    public $Sex;

    /**
     * @var string 有效期限
     */
    public $ValidDate;

    /**
     * @var string 签发机关
     */
    public $IssueAuthority;

    /**
     * @var string 签发地点
     */
    public $IssueAddress;

    /**
     * @var string 出生日期
     */
    public $Birthday;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 姓名
     * @param string $EnglishName 英文姓名
     * @param string $Number 证件号
     * @param string $Sex 性别
     * @param string $ValidDate 有效期限
     * @param string $IssueAuthority 签发机关
     * @param string $IssueAddress 签发地点
     * @param string $Birthday 出生日期
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("EnglishName",$param) and $param["EnglishName"] !== null) {
            $this->EnglishName = $param["EnglishName"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("IssueAuthority",$param) and $param["IssueAuthority"] !== null) {
            $this->IssueAuthority = $param["IssueAuthority"];
        }

        if (array_key_exists("IssueAddress",$param) and $param["IssueAddress"] !== null) {
            $this->IssueAddress = $param["IssueAddress"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
