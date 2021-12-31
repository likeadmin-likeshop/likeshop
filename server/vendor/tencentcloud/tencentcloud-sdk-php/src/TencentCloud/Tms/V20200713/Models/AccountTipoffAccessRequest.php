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
namespace TencentCloud\Tms\V20200713\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AccountTipoffAccess请求参数结构体
 *
 * @method string getReportedAccount() 获取被举报账号，长度低于 128 个字符
 * @method void setReportedAccount(string $ReportedAccount) 设置被举报账号，长度低于 128 个字符
 * @method integer getReportedAccountType() 获取被举报账号类型(1-手机号 2-QQ号 3-微信号 4-QQ群号 5-微信openid 6-QQopenid 0-其它)
 * @method void setReportedAccountType(integer $ReportedAccountType) 设置被举报账号类型(1-手机号 2-QQ号 3-微信号 4-QQ群号 5-微信openid 6-QQopenid 0-其它)
 * @method integer getEvilType() 获取被举报账号所属恶意类型(1-诈骗，2-骚扰，3-广告，4-违法违规，5-赌博传销，0-其他)
 * @method void setEvilType(integer $EvilType) 设置被举报账号所属恶意类型(1-诈骗，2-骚扰，3-广告，4-违法违规，5-赌博传销，0-其他)
 * @method string getSenderAccount() 获取举报者账号，长度低于 128 个字符
 * @method void setSenderAccount(string $SenderAccount) 设置举报者账号，长度低于 128 个字符
 * @method integer getSenderAccountType() 获取举报者账号类型(1-手机号 2-QQ号 3-微信号 4-QQ群号 5-微信openid 6-QQopenid 0-其它)
 * @method void setSenderAccountType(integer $SenderAccountType) 设置举报者账号类型(1-手机号 2-QQ号 3-微信号 4-QQ群号 5-微信openid 6-QQopenid 0-其它)
 * @method string getSenderIP() 获取举报者IP地址
 * @method void setSenderIP(string $SenderIP) 设置举报者IP地址
 * @method string getEvilContent() 获取包含被举报账号的恶意内容（比如文本、图片链接，长度低于1024个字符）
 * @method void setEvilContent(string $EvilContent) 设置包含被举报账号的恶意内容（比如文本、图片链接，长度低于1024个字符）
 */
class AccountTipoffAccessRequest extends AbstractModel
{
    /**
     * @var string 被举报账号，长度低于 128 个字符
     */
    public $ReportedAccount;

    /**
     * @var integer 被举报账号类型(1-手机号 2-QQ号 3-微信号 4-QQ群号 5-微信openid 6-QQopenid 0-其它)
     */
    public $ReportedAccountType;

    /**
     * @var integer 被举报账号所属恶意类型(1-诈骗，2-骚扰，3-广告，4-违法违规，5-赌博传销，0-其他)
     */
    public $EvilType;

    /**
     * @var string 举报者账号，长度低于 128 个字符
     */
    public $SenderAccount;

    /**
     * @var integer 举报者账号类型(1-手机号 2-QQ号 3-微信号 4-QQ群号 5-微信openid 6-QQopenid 0-其它)
     */
    public $SenderAccountType;

    /**
     * @var string 举报者IP地址
     */
    public $SenderIP;

    /**
     * @var string 包含被举报账号的恶意内容（比如文本、图片链接，长度低于1024个字符）
     */
    public $EvilContent;

    /**
     * @param string $ReportedAccount 被举报账号，长度低于 128 个字符
     * @param integer $ReportedAccountType 被举报账号类型(1-手机号 2-QQ号 3-微信号 4-QQ群号 5-微信openid 6-QQopenid 0-其它)
     * @param integer $EvilType 被举报账号所属恶意类型(1-诈骗，2-骚扰，3-广告，4-违法违规，5-赌博传销，0-其他)
     * @param string $SenderAccount 举报者账号，长度低于 128 个字符
     * @param integer $SenderAccountType 举报者账号类型(1-手机号 2-QQ号 3-微信号 4-QQ群号 5-微信openid 6-QQopenid 0-其它)
     * @param string $SenderIP 举报者IP地址
     * @param string $EvilContent 包含被举报账号的恶意内容（比如文本、图片链接，长度低于1024个字符）
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
        if (array_key_exists("ReportedAccount",$param) and $param["ReportedAccount"] !== null) {
            $this->ReportedAccount = $param["ReportedAccount"];
        }

        if (array_key_exists("ReportedAccountType",$param) and $param["ReportedAccountType"] !== null) {
            $this->ReportedAccountType = $param["ReportedAccountType"];
        }

        if (array_key_exists("EvilType",$param) and $param["EvilType"] !== null) {
            $this->EvilType = $param["EvilType"];
        }

        if (array_key_exists("SenderAccount",$param) and $param["SenderAccount"] !== null) {
            $this->SenderAccount = $param["SenderAccount"];
        }

        if (array_key_exists("SenderAccountType",$param) and $param["SenderAccountType"] !== null) {
            $this->SenderAccountType = $param["SenderAccountType"];
        }

        if (array_key_exists("SenderIP",$param) and $param["SenderIP"] !== null) {
            $this->SenderIP = $param["SenderIP"];
        }

        if (array_key_exists("EvilContent",$param) and $param["EvilContent"] !== null) {
            $this->EvilContent = $param["EvilContent"];
        }
    }
}
