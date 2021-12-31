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
 * QueryAcctInfo返回参数结构体
 *
 * @method string getSubAppId() 获取聚鑫计费SubAppId，代表子商户
 * @method void setSubAppId(string $SubAppId) 设置聚鑫计费SubAppId，代表子商户
 * @method string getSubMchName() 获取子商户名称
 * @method void setSubMchName(string $SubMchName) 设置子商户名称
 * @method string getSubMchType() 获取子商户类型：
个人: personal
企业：enterprise
缺省： enterprise
 * @method void setSubMchType(string $SubMchType) 设置子商户类型：
个人: personal
企业：enterprise
缺省： enterprise
 * @method string getShortName() 获取不填则默认子商户名称
 * @method void setShortName(string $ShortName) 设置不填则默认子商户名称
 * @method string getAddress() 获取子商户地址
 * @method void setAddress(string $Address) 设置子商户地址
 * @method string getContact() 获取子商户联系人子商户联系人
<敏感信息>
 * @method void setContact(string $Contact) 设置子商户联系人子商户联系人
<敏感信息>
 * @method string getMobile() 获取联系人手机号
<敏感信息>
 * @method void setMobile(string $Mobile) 设置联系人手机号
<敏感信息>
 * @method string getEmail() 获取邮箱 
<敏感信息>
 * @method void setEmail(string $Email) 设置邮箱 
<敏感信息>
 * @method string getSubMchId() 获取子商户id
 * @method void setSubMchId(string $SubMchId) 设置子商户id
 * @method string getSubAcctNo() 获取子账户
 * @method void setSubAcctNo(string $SubAcctNo) 设置子账户
 * @method string getSubMerchantMemberType() 获取子商户会员类型：
general:普通子账户
merchant:商户子账户
缺省： general
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubMerchantMemberType(string $SubMerchantMemberType) 设置子商户会员类型：
general:普通子账户
merchant:商户子账户
缺省： general
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryAcctInfoResponse extends AbstractModel
{
    /**
     * @var string 聚鑫计费SubAppId，代表子商户
     */
    public $SubAppId;

    /**
     * @var string 子商户名称
     */
    public $SubMchName;

    /**
     * @var string 子商户类型：
个人: personal
企业：enterprise
缺省： enterprise
     */
    public $SubMchType;

    /**
     * @var string 不填则默认子商户名称
     */
    public $ShortName;

    /**
     * @var string 子商户地址
     */
    public $Address;

    /**
     * @var string 子商户联系人子商户联系人
<敏感信息>
     */
    public $Contact;

    /**
     * @var string 联系人手机号
<敏感信息>
     */
    public $Mobile;

    /**
     * @var string 邮箱 
<敏感信息>
     */
    public $Email;

    /**
     * @var string 子商户id
     */
    public $SubMchId;

    /**
     * @var string 子账户
     */
    public $SubAcctNo;

    /**
     * @var string 子商户会员类型：
general:普通子账户
merchant:商户子账户
缺省： general
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubMerchantMemberType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SubAppId 聚鑫计费SubAppId，代表子商户
     * @param string $SubMchName 子商户名称
     * @param string $SubMchType 子商户类型：
个人: personal
企业：enterprise
缺省： enterprise
     * @param string $ShortName 不填则默认子商户名称
     * @param string $Address 子商户地址
     * @param string $Contact 子商户联系人子商户联系人
<敏感信息>
     * @param string $Mobile 联系人手机号
<敏感信息>
     * @param string $Email 邮箱 
<敏感信息>
     * @param string $SubMchId 子商户id
     * @param string $SubAcctNo 子账户
     * @param string $SubMerchantMemberType 子商户会员类型：
general:普通子账户
merchant:商户子账户
缺省： general
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SubMchName",$param) and $param["SubMchName"] !== null) {
            $this->SubMchName = $param["SubMchName"];
        }

        if (array_key_exists("SubMchType",$param) and $param["SubMchType"] !== null) {
            $this->SubMchType = $param["SubMchType"];
        }

        if (array_key_exists("ShortName",$param) and $param["ShortName"] !== null) {
            $this->ShortName = $param["ShortName"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Contact",$param) and $param["Contact"] !== null) {
            $this->Contact = $param["Contact"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("SubMchId",$param) and $param["SubMchId"] !== null) {
            $this->SubMchId = $param["SubMchId"];
        }

        if (array_key_exists("SubAcctNo",$param) and $param["SubAcctNo"] !== null) {
            $this->SubAcctNo = $param["SubAcctNo"];
        }

        if (array_key_exists("SubMerchantMemberType",$param) and $param["SubMerchantMemberType"] !== null) {
            $this->SubMerchantMemberType = $param["SubMerchantMemberType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
