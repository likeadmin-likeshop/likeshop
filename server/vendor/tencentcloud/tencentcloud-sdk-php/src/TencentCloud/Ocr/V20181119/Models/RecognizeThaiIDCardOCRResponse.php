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
 * RecognizeThaiIDCardOCR返回参数结构体
 *
 * @method string getID() 获取身份证号码
 * @method void setID(string $ID) 设置身份证号码
 * @method string getThaiName() 获取泰文姓名
 * @method void setThaiName(string $ThaiName) 设置泰文姓名
 * @method string getEnFirstName() 获取英文姓名
 * @method void setEnFirstName(string $EnFirstName) 设置英文姓名
 * @method string getAddress() 获取地址
 * @method void setAddress(string $Address) 设置地址
 * @method string getBirthday() 获取出生日期
 * @method void setBirthday(string $Birthday) 设置出生日期
 * @method string getIssueDate() 获取首次领用日期
 * @method void setIssueDate(string $IssueDate) 设置首次领用日期
 * @method string getExpirationDate() 获取签发日期
 * @method void setExpirationDate(string $ExpirationDate) 设置签发日期
 * @method string getEnLastName() 获取英文姓名
 * @method void setEnLastName(string $EnLastName) 设置英文姓名
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RecognizeThaiIDCardOCRResponse extends AbstractModel
{
    /**
     * @var string 身份证号码
     */
    public $ID;

    /**
     * @var string 泰文姓名
     */
    public $ThaiName;

    /**
     * @var string 英文姓名
     */
    public $EnFirstName;

    /**
     * @var string 地址
     */
    public $Address;

    /**
     * @var string 出生日期
     */
    public $Birthday;

    /**
     * @var string 首次领用日期
     */
    public $IssueDate;

    /**
     * @var string 签发日期
     */
    public $ExpirationDate;

    /**
     * @var string 英文姓名
     */
    public $EnLastName;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ID 身份证号码
     * @param string $ThaiName 泰文姓名
     * @param string $EnFirstName 英文姓名
     * @param string $Address 地址
     * @param string $Birthday 出生日期
     * @param string $IssueDate 首次领用日期
     * @param string $ExpirationDate 签发日期
     * @param string $EnLastName 英文姓名
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ThaiName",$param) and $param["ThaiName"] !== null) {
            $this->ThaiName = $param["ThaiName"];
        }

        if (array_key_exists("EnFirstName",$param) and $param["EnFirstName"] !== null) {
            $this->EnFirstName = $param["EnFirstName"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("IssueDate",$param) and $param["IssueDate"] !== null) {
            $this->IssueDate = $param["IssueDate"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("EnLastName",$param) and $param["EnLastName"] !== null) {
            $this->EnLastName = $param["EnLastName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
