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
 * CreateSinglePay请求参数结构体
 *
 * @method string getSerialNumber() 获取业务流水号，历史唯一
 * @method void setSerialNumber(string $SerialNumber) 设置业务流水号，历史唯一
 * @method string getPayAccountNumber() 获取付方账户号
 * @method void setPayAccountNumber(string $PayAccountNumber) 设置付方账户号
 * @method string getPayAccountName() 获取付方账户名称
 * @method void setPayAccountName(string $PayAccountName) 设置付方账户名称
 * @method integer getAmount() 获取金额
 * @method void setAmount(integer $Amount) 设置金额
 * @method string getRecvAccountNumber() 获取收方账户号
 * @method void setRecvAccountNumber(string $RecvAccountNumber) 设置收方账户号
 * @method string getRecvAccountName() 获取收方账户名称
 * @method void setRecvAccountName(string $RecvAccountName) 设置收方账户名称
 * @method string getPayBankCnaps() 获取付方账户CNAPS号
 * @method void setPayBankCnaps(string $PayBankCnaps) 设置付方账户CNAPS号
 * @method string getPayBankType() 获取付方账户银行大类，PayBankCnaps为空时必传（见常见问题-银企直连银行类型）
 * @method void setPayBankType(string $PayBankType) 设置付方账户银行大类，PayBankCnaps为空时必传（见常见问题-银企直连银行类型）
 * @method string getPayBankProvince() 获取付方账户银行所在省，PayBankCnaps为空时必传（见常见问题-银企直连省份枚举信息）
 * @method void setPayBankProvince(string $PayBankProvince) 设置付方账户银行所在省，PayBankCnaps为空时必传（见常见问题-银企直连省份枚举信息）
 * @method string getPayBankCity() 获取付方账户银行所在地区，PayBankCnaps为空时必传（见常见问题-银企直连城市枚举信息）
 * @method void setPayBankCity(string $PayBankCity) 设置付方账户银行所在地区，PayBankCnaps为空时必传（见常见问题-银企直连城市枚举信息）
 * @method string getRecvBankCnaps() 获取收方账户CNAPS号
 * @method void setRecvBankCnaps(string $RecvBankCnaps) 设置收方账户CNAPS号
 * @method string getRecvBankType() 获取收方账户银行大类，RecvBankCnaps为空时必传（见常见问题-银企直连银行类型）
 * @method void setRecvBankType(string $RecvBankType) 设置收方账户银行大类，RecvBankCnaps为空时必传（见常见问题-银企直连银行类型）
 * @method string getRecvBankProvince() 获取收方账户银行所在省，RecvBankCnaps为空时必传（见常见问题-银企直连省份枚举信息）
 * @method void setRecvBankProvince(string $RecvBankProvince) 设置收方账户银行所在省，RecvBankCnaps为空时必传（见常见问题-银企直连省份枚举信息）
 * @method string getRecvBankCity() 获取收方账户银行所在地区，RecvBankCnaps为空时必传（见常见问题-银企直连城市枚举信息）
 * @method void setRecvBankCity(string $RecvBankCity) 设置收方账户银行所在地区，RecvBankCnaps为空时必传（见常见问题-银企直连城市枚举信息）
 * @method string getRecvCertType() 获取收款方证件类型（见常见问题-银企直连证件类型枚举信息）
 * @method void setRecvCertType(string $RecvCertType) 设置收款方证件类型（见常见问题-银企直连证件类型枚举信息）
 * @method string getRecvCertNo() 获取收款方证件号码
 * @method void setRecvCertNo(string $RecvCertNo) 设置收款方证件号码
 * @method string getSummary() 获取摘要信息
 * @method void setSummary(string $Summary) 设置摘要信息
 * @method string getProfile() 获取接入环境。沙箱环境填sandbox
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填sandbox
 */
class CreateSinglePayRequest extends AbstractModel
{
    /**
     * @var string 业务流水号，历史唯一
     */
    public $SerialNumber;

    /**
     * @var string 付方账户号
     */
    public $PayAccountNumber;

    /**
     * @var string 付方账户名称
     */
    public $PayAccountName;

    /**
     * @var integer 金额
     */
    public $Amount;

    /**
     * @var string 收方账户号
     */
    public $RecvAccountNumber;

    /**
     * @var string 收方账户名称
     */
    public $RecvAccountName;

    /**
     * @var string 付方账户CNAPS号
     */
    public $PayBankCnaps;

    /**
     * @var string 付方账户银行大类，PayBankCnaps为空时必传（见常见问题-银企直连银行类型）
     */
    public $PayBankType;

    /**
     * @var string 付方账户银行所在省，PayBankCnaps为空时必传（见常见问题-银企直连省份枚举信息）
     */
    public $PayBankProvince;

    /**
     * @var string 付方账户银行所在地区，PayBankCnaps为空时必传（见常见问题-银企直连城市枚举信息）
     */
    public $PayBankCity;

    /**
     * @var string 收方账户CNAPS号
     */
    public $RecvBankCnaps;

    /**
     * @var string 收方账户银行大类，RecvBankCnaps为空时必传（见常见问题-银企直连银行类型）
     */
    public $RecvBankType;

    /**
     * @var string 收方账户银行所在省，RecvBankCnaps为空时必传（见常见问题-银企直连省份枚举信息）
     */
    public $RecvBankProvince;

    /**
     * @var string 收方账户银行所在地区，RecvBankCnaps为空时必传（见常见问题-银企直连城市枚举信息）
     */
    public $RecvBankCity;

    /**
     * @var string 收款方证件类型（见常见问题-银企直连证件类型枚举信息）
     */
    public $RecvCertType;

    /**
     * @var string 收款方证件号码
     */
    public $RecvCertNo;

    /**
     * @var string 摘要信息
     */
    public $Summary;

    /**
     * @var string 接入环境。沙箱环境填sandbox
     */
    public $Profile;

    /**
     * @param string $SerialNumber 业务流水号，历史唯一
     * @param string $PayAccountNumber 付方账户号
     * @param string $PayAccountName 付方账户名称
     * @param integer $Amount 金额
     * @param string $RecvAccountNumber 收方账户号
     * @param string $RecvAccountName 收方账户名称
     * @param string $PayBankCnaps 付方账户CNAPS号
     * @param string $PayBankType 付方账户银行大类，PayBankCnaps为空时必传（见常见问题-银企直连银行类型）
     * @param string $PayBankProvince 付方账户银行所在省，PayBankCnaps为空时必传（见常见问题-银企直连省份枚举信息）
     * @param string $PayBankCity 付方账户银行所在地区，PayBankCnaps为空时必传（见常见问题-银企直连城市枚举信息）
     * @param string $RecvBankCnaps 收方账户CNAPS号
     * @param string $RecvBankType 收方账户银行大类，RecvBankCnaps为空时必传（见常见问题-银企直连银行类型）
     * @param string $RecvBankProvince 收方账户银行所在省，RecvBankCnaps为空时必传（见常见问题-银企直连省份枚举信息）
     * @param string $RecvBankCity 收方账户银行所在地区，RecvBankCnaps为空时必传（见常见问题-银企直连城市枚举信息）
     * @param string $RecvCertType 收款方证件类型（见常见问题-银企直连证件类型枚举信息）
     * @param string $RecvCertNo 收款方证件号码
     * @param string $Summary 摘要信息
     * @param string $Profile 接入环境。沙箱环境填sandbox
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
        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("PayAccountNumber",$param) and $param["PayAccountNumber"] !== null) {
            $this->PayAccountNumber = $param["PayAccountNumber"];
        }

        if (array_key_exists("PayAccountName",$param) and $param["PayAccountName"] !== null) {
            $this->PayAccountName = $param["PayAccountName"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("RecvAccountNumber",$param) and $param["RecvAccountNumber"] !== null) {
            $this->RecvAccountNumber = $param["RecvAccountNumber"];
        }

        if (array_key_exists("RecvAccountName",$param) and $param["RecvAccountName"] !== null) {
            $this->RecvAccountName = $param["RecvAccountName"];
        }

        if (array_key_exists("PayBankCnaps",$param) and $param["PayBankCnaps"] !== null) {
            $this->PayBankCnaps = $param["PayBankCnaps"];
        }

        if (array_key_exists("PayBankType",$param) and $param["PayBankType"] !== null) {
            $this->PayBankType = $param["PayBankType"];
        }

        if (array_key_exists("PayBankProvince",$param) and $param["PayBankProvince"] !== null) {
            $this->PayBankProvince = $param["PayBankProvince"];
        }

        if (array_key_exists("PayBankCity",$param) and $param["PayBankCity"] !== null) {
            $this->PayBankCity = $param["PayBankCity"];
        }

        if (array_key_exists("RecvBankCnaps",$param) and $param["RecvBankCnaps"] !== null) {
            $this->RecvBankCnaps = $param["RecvBankCnaps"];
        }

        if (array_key_exists("RecvBankType",$param) and $param["RecvBankType"] !== null) {
            $this->RecvBankType = $param["RecvBankType"];
        }

        if (array_key_exists("RecvBankProvince",$param) and $param["RecvBankProvince"] !== null) {
            $this->RecvBankProvince = $param["RecvBankProvince"];
        }

        if (array_key_exists("RecvBankCity",$param) and $param["RecvBankCity"] !== null) {
            $this->RecvBankCity = $param["RecvBankCity"];
        }

        if (array_key_exists("RecvCertType",$param) and $param["RecvCertType"] !== null) {
            $this->RecvCertType = $param["RecvCertType"];
        }

        if (array_key_exists("RecvCertNo",$param) and $param["RecvCertNo"] !== null) {
            $this->RecvCertNo = $param["RecvCertNo"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
