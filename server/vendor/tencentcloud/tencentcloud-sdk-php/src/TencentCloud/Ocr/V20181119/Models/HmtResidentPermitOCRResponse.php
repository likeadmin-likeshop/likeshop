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
 * HmtResidentPermitOCR返回参数结构体
 *
 * @method string getName() 获取证件姓名
 * @method void setName(string $Name) 设置证件姓名
 * @method string getSex() 获取性别
 * @method void setSex(string $Sex) 设置性别
 * @method string getBirth() 获取出生日期
 * @method void setBirth(string $Birth) 设置出生日期
 * @method string getAddress() 获取地址
 * @method void setAddress(string $Address) 设置地址
 * @method string getIdCardNo() 获取身份证号
 * @method void setIdCardNo(string $IdCardNo) 设置身份证号
 * @method integer getCardType() 获取0-正面
1-反面
 * @method void setCardType(integer $CardType) 设置0-正面
1-反面
 * @method string getValidDate() 获取证件有效期限
 * @method void setValidDate(string $ValidDate) 设置证件有效期限
 * @method string getAuthority() 获取签发机关
 * @method void setAuthority(string $Authority) 设置签发机关
 * @method string getVisaNum() 获取签发次数
 * @method void setVisaNum(string $VisaNum) 设置签发次数
 * @method string getPassNo() 获取通行证号码
 * @method void setPassNo(string $PassNo) 设置通行证号码
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class HmtResidentPermitOCRResponse extends AbstractModel
{
    /**
     * @var string 证件姓名
     */
    public $Name;

    /**
     * @var string 性别
     */
    public $Sex;

    /**
     * @var string 出生日期
     */
    public $Birth;

    /**
     * @var string 地址
     */
    public $Address;

    /**
     * @var string 身份证号
     */
    public $IdCardNo;

    /**
     * @var integer 0-正面
1-反面
     */
    public $CardType;

    /**
     * @var string 证件有效期限
     */
    public $ValidDate;

    /**
     * @var string 签发机关
     */
    public $Authority;

    /**
     * @var string 签发次数
     */
    public $VisaNum;

    /**
     * @var string 通行证号码
     */
    public $PassNo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 证件姓名
     * @param string $Sex 性别
     * @param string $Birth 出生日期
     * @param string $Address 地址
     * @param string $IdCardNo 身份证号
     * @param integer $CardType 0-正面
1-反面
     * @param string $ValidDate 证件有效期限
     * @param string $Authority 签发机关
     * @param string $VisaNum 签发次数
     * @param string $PassNo 通行证号码
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

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Birth",$param) and $param["Birth"] !== null) {
            $this->Birth = $param["Birth"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("IdCardNo",$param) and $param["IdCardNo"] !== null) {
            $this->IdCardNo = $param["IdCardNo"];
        }

        if (array_key_exists("CardType",$param) and $param["CardType"] !== null) {
            $this->CardType = $param["CardType"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("Authority",$param) and $param["Authority"] !== null) {
            $this->Authority = $param["Authority"];
        }

        if (array_key_exists("VisaNum",$param) and $param["VisaNum"] !== null) {
            $this->VisaNum = $param["VisaNum"];
        }

        if (array_key_exists("PassNo",$param) and $param["PassNo"] !== null) {
            $this->PassNo = $param["PassNo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
