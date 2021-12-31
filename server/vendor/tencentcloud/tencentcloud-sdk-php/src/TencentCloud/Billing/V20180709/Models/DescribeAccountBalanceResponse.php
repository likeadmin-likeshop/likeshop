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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccountBalance返回参数结构体
 *
 * @method integer getBalance() 获取接口做过变更,为兼容老接口,本字段与RealBalance相同,为当前真实可用余额,单位 分
 * @method void setBalance(integer $Balance) 设置接口做过变更,为兼容老接口,本字段与RealBalance相同,为当前真实可用余额,单位 分
 * @method integer getUin() 获取查询的用户Uin
 * @method void setUin(integer $Uin) 设置查询的用户Uin
 * @method float getRealBalance() 获取当前真实可用余额,单位 分
 * @method void setRealBalance(float $RealBalance) 设置当前真实可用余额,单位 分
 * @method float getCashAccountBalance() 获取现金账户余额,单位 分
 * @method void setCashAccountBalance(float $CashAccountBalance) 设置现金账户余额,单位 分
 * @method float getIncomeIntoAccountBalance() 获取收益转入账户余额,单位 分
 * @method void setIncomeIntoAccountBalance(float $IncomeIntoAccountBalance) 设置收益转入账户余额,单位 分
 * @method float getPresentAccountBalance() 获取赠送账户余额,单位 分
 * @method void setPresentAccountBalance(float $PresentAccountBalance) 设置赠送账户余额,单位 分
 * @method float getFreezeAmount() 获取冻结金额,单位 分
 * @method void setFreezeAmount(float $FreezeAmount) 设置冻结金额,单位 分
 * @method float getOweAmount() 获取欠费金额,单位 分
 * @method void setOweAmount(float $OweAmount) 设置欠费金额,单位 分
 * @method boolean getIsAllowArrears() 获取是否允许欠费消费
 * @method void setIsAllowArrears(boolean $IsAllowArrears) 设置是否允许欠费消费
 * @method boolean getIsCreditLimited() 获取是否限制信用额度
 * @method void setIsCreditLimited(boolean $IsCreditLimited) 设置是否限制信用额度
 * @method float getCreditAmount() 获取信用额度
 * @method void setCreditAmount(float $CreditAmount) 设置信用额度
 * @method float getCreditBalance() 获取可用信用额度
 * @method void setCreditBalance(float $CreditBalance) 设置可用信用额度
 * @method float getRealCreditBalance() 获取真实可用信用额度
 * @method void setRealCreditBalance(float $RealCreditBalance) 设置真实可用信用额度
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAccountBalanceResponse extends AbstractModel
{
    /**
     * @var integer 接口做过变更,为兼容老接口,本字段与RealBalance相同,为当前真实可用余额,单位 分
     */
    public $Balance;

    /**
     * @var integer 查询的用户Uin
     */
    public $Uin;

    /**
     * @var float 当前真实可用余额,单位 分
     */
    public $RealBalance;

    /**
     * @var float 现金账户余额,单位 分
     */
    public $CashAccountBalance;

    /**
     * @var float 收益转入账户余额,单位 分
     */
    public $IncomeIntoAccountBalance;

    /**
     * @var float 赠送账户余额,单位 分
     */
    public $PresentAccountBalance;

    /**
     * @var float 冻结金额,单位 分
     */
    public $FreezeAmount;

    /**
     * @var float 欠费金额,单位 分
     */
    public $OweAmount;

    /**
     * @var boolean 是否允许欠费消费
     */
    public $IsAllowArrears;

    /**
     * @var boolean 是否限制信用额度
     */
    public $IsCreditLimited;

    /**
     * @var float 信用额度
     */
    public $CreditAmount;

    /**
     * @var float 可用信用额度
     */
    public $CreditBalance;

    /**
     * @var float 真实可用信用额度
     */
    public $RealCreditBalance;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Balance 接口做过变更,为兼容老接口,本字段与RealBalance相同,为当前真实可用余额,单位 分
     * @param integer $Uin 查询的用户Uin
     * @param float $RealBalance 当前真实可用余额,单位 分
     * @param float $CashAccountBalance 现金账户余额,单位 分
     * @param float $IncomeIntoAccountBalance 收益转入账户余额,单位 分
     * @param float $PresentAccountBalance 赠送账户余额,单位 分
     * @param float $FreezeAmount 冻结金额,单位 分
     * @param float $OweAmount 欠费金额,单位 分
     * @param boolean $IsAllowArrears 是否允许欠费消费
     * @param boolean $IsCreditLimited 是否限制信用额度
     * @param float $CreditAmount 信用额度
     * @param float $CreditBalance 可用信用额度
     * @param float $RealCreditBalance 真实可用信用额度
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
        if (array_key_exists("Balance",$param) and $param["Balance"] !== null) {
            $this->Balance = $param["Balance"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("RealBalance",$param) and $param["RealBalance"] !== null) {
            $this->RealBalance = $param["RealBalance"];
        }

        if (array_key_exists("CashAccountBalance",$param) and $param["CashAccountBalance"] !== null) {
            $this->CashAccountBalance = $param["CashAccountBalance"];
        }

        if (array_key_exists("IncomeIntoAccountBalance",$param) and $param["IncomeIntoAccountBalance"] !== null) {
            $this->IncomeIntoAccountBalance = $param["IncomeIntoAccountBalance"];
        }

        if (array_key_exists("PresentAccountBalance",$param) and $param["PresentAccountBalance"] !== null) {
            $this->PresentAccountBalance = $param["PresentAccountBalance"];
        }

        if (array_key_exists("FreezeAmount",$param) and $param["FreezeAmount"] !== null) {
            $this->FreezeAmount = $param["FreezeAmount"];
        }

        if (array_key_exists("OweAmount",$param) and $param["OweAmount"] !== null) {
            $this->OweAmount = $param["OweAmount"];
        }

        if (array_key_exists("IsAllowArrears",$param) and $param["IsAllowArrears"] !== null) {
            $this->IsAllowArrears = $param["IsAllowArrears"];
        }

        if (array_key_exists("IsCreditLimited",$param) and $param["IsCreditLimited"] !== null) {
            $this->IsCreditLimited = $param["IsCreditLimited"];
        }

        if (array_key_exists("CreditAmount",$param) and $param["CreditAmount"] !== null) {
            $this->CreditAmount = $param["CreditAmount"];
        }

        if (array_key_exists("CreditBalance",$param) and $param["CreditBalance"] !== null) {
            $this->CreditBalance = $param["CreditBalance"];
        }

        if (array_key_exists("RealCreditBalance",$param) and $param["RealCreditBalance"] !== null) {
            $this->RealCreditBalance = $param["RealCreditBalance"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
