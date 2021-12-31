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
namespace TencentCloud\Aa\V20200224\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账号信息。
 *
 * @method integer getAccountType() 获取用户账号类型（默认开通 QQ 开放账号、手机号，手机 MD5 账号类型查询。如需使用微信开放账号，则需要 提交工单 由腾讯云进行资格审核，审核通过后方可正常使用微信开放账号）：
1：QQ开放账号。
2：微信开放账号。
4：手机号（暂仅支持国内手机号）。
8：设备号（imei/imeiMD5/idfa/idfaMd5）。
0：其他。
10004：手机号MD5（标准中国大陆手机号11位，MD5后取32位小写值）
 * @method void setAccountType(integer $AccountType) 设置用户账号类型（默认开通 QQ 开放账号、手机号，手机 MD5 账号类型查询。如需使用微信开放账号，则需要 提交工单 由腾讯云进行资格审核，审核通过后方可正常使用微信开放账号）：
1：QQ开放账号。
2：微信开放账号。
4：手机号（暂仅支持国内手机号）。
8：设备号（imei/imeiMD5/idfa/idfaMd5）。
0：其他。
10004：手机号MD5（标准中国大陆手机号11位，MD5后取32位小写值）
 * @method QQAccountInfo getQQAccount() 获取QQ账号信息，AccountType是1时，该字段必填。
 * @method void setQQAccount(QQAccountInfo $QQAccount) 设置QQ账号信息，AccountType是1时，该字段必填。
 * @method WeChatAccountInfo getWeChatAccount() 获取微信账号信息，AccountType是2时，该字段必填。
 * @method void setWeChatAccount(WeChatAccountInfo $WeChatAccount) 设置微信账号信息，AccountType是2时，该字段必填。
 * @method OtherAccountInfo getOtherAccount() 获取其它账号信息，AccountType是0、4、8或10004时，该字段必填。
 * @method void setOtherAccount(OtherAccountInfo $OtherAccount) 设置其它账号信息，AccountType是0、4、8或10004时，该字段必填。
 */
class AccountInfo extends AbstractModel
{
    /**
     * @var integer 用户账号类型（默认开通 QQ 开放账号、手机号，手机 MD5 账号类型查询。如需使用微信开放账号，则需要 提交工单 由腾讯云进行资格审核，审核通过后方可正常使用微信开放账号）：
1：QQ开放账号。
2：微信开放账号。
4：手机号（暂仅支持国内手机号）。
8：设备号（imei/imeiMD5/idfa/idfaMd5）。
0：其他。
10004：手机号MD5（标准中国大陆手机号11位，MD5后取32位小写值）
     */
    public $AccountType;

    /**
     * @var QQAccountInfo QQ账号信息，AccountType是1时，该字段必填。
     */
    public $QQAccount;

    /**
     * @var WeChatAccountInfo 微信账号信息，AccountType是2时，该字段必填。
     */
    public $WeChatAccount;

    /**
     * @var OtherAccountInfo 其它账号信息，AccountType是0、4、8或10004时，该字段必填。
     */
    public $OtherAccount;

    /**
     * @param integer $AccountType 用户账号类型（默认开通 QQ 开放账号、手机号，手机 MD5 账号类型查询。如需使用微信开放账号，则需要 提交工单 由腾讯云进行资格审核，审核通过后方可正常使用微信开放账号）：
1：QQ开放账号。
2：微信开放账号。
4：手机号（暂仅支持国内手机号）。
8：设备号（imei/imeiMD5/idfa/idfaMd5）。
0：其他。
10004：手机号MD5（标准中国大陆手机号11位，MD5后取32位小写值）
     * @param QQAccountInfo $QQAccount QQ账号信息，AccountType是1时，该字段必填。
     * @param WeChatAccountInfo $WeChatAccount 微信账号信息，AccountType是2时，该字段必填。
     * @param OtherAccountInfo $OtherAccount 其它账号信息，AccountType是0、4、8或10004时，该字段必填。
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
        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("QQAccount",$param) and $param["QQAccount"] !== null) {
            $this->QQAccount = new QQAccountInfo();
            $this->QQAccount->deserialize($param["QQAccount"]);
        }

        if (array_key_exists("WeChatAccount",$param) and $param["WeChatAccount"] !== null) {
            $this->WeChatAccount = new WeChatAccountInfo();
            $this->WeChatAccount->deserialize($param["WeChatAccount"]);
        }

        if (array_key_exists("OtherAccount",$param) and $param["OtherAccount"] !== null) {
            $this->OtherAccount = new OtherAccountInfo();
            $this->OtherAccount->deserialize($param["OtherAccount"]);
        }
    }
}
