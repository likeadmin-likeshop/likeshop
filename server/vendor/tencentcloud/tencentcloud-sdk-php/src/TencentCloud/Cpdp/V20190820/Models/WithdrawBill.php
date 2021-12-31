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
 * 聚鑫提现订单内容
 *
 * @method string getWithdrawOrderId() 获取业务提现订单号
 * @method void setWithdrawOrderId(string $WithdrawOrderId) 设置业务提现订单号
 * @method string getDate() 获取提现日期
 * @method void setDate(string $Date) 设置提现日期
 * @method string getPayAmt() 获取提现金额，单位： 分
 * @method void setPayAmt(string $PayAmt) 设置提现金额，单位： 分
 * @method string getInSubAppId() 获取聚鑫分配转入账户appid
 * @method void setInSubAppId(string $InSubAppId) 设置聚鑫分配转入账户appid
 * @method string getOutSubAppId() 获取聚鑫分配转出账户appid
 * @method void setOutSubAppId(string $OutSubAppId) 设置聚鑫分配转出账户appid
 * @method string getCurrencyType() 获取ISO货币代码
 * @method void setCurrencyType(string $CurrencyType) 设置ISO货币代码
 * @method string getMetaData() 获取透传字段
 * @method void setMetaData(string $MetaData) 设置透传字段
 * @method string getExtendFieldData() 获取扩展字段
 * @method void setExtendFieldData(string $ExtendFieldData) 设置扩展字段
 */
class WithdrawBill extends AbstractModel
{
    /**
     * @var string 业务提现订单号
     */
    public $WithdrawOrderId;

    /**
     * @var string 提现日期
     */
    public $Date;

    /**
     * @var string 提现金额，单位： 分
     */
    public $PayAmt;

    /**
     * @var string 聚鑫分配转入账户appid
     */
    public $InSubAppId;

    /**
     * @var string 聚鑫分配转出账户appid
     */
    public $OutSubAppId;

    /**
     * @var string ISO货币代码
     */
    public $CurrencyType;

    /**
     * @var string 透传字段
     */
    public $MetaData;

    /**
     * @var string 扩展字段
     */
    public $ExtendFieldData;

    /**
     * @param string $WithdrawOrderId 业务提现订单号
     * @param string $Date 提现日期
     * @param string $PayAmt 提现金额，单位： 分
     * @param string $InSubAppId 聚鑫分配转入账户appid
     * @param string $OutSubAppId 聚鑫分配转出账户appid
     * @param string $CurrencyType ISO货币代码
     * @param string $MetaData 透传字段
     * @param string $ExtendFieldData 扩展字段
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
        if (array_key_exists("WithdrawOrderId",$param) and $param["WithdrawOrderId"] !== null) {
            $this->WithdrawOrderId = $param["WithdrawOrderId"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("PayAmt",$param) and $param["PayAmt"] !== null) {
            $this->PayAmt = $param["PayAmt"];
        }

        if (array_key_exists("InSubAppId",$param) and $param["InSubAppId"] !== null) {
            $this->InSubAppId = $param["InSubAppId"];
        }

        if (array_key_exists("OutSubAppId",$param) and $param["OutSubAppId"] !== null) {
            $this->OutSubAppId = $param["OutSubAppId"];
        }

        if (array_key_exists("CurrencyType",$param) and $param["CurrencyType"] !== null) {
            $this->CurrencyType = $param["CurrencyType"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = $param["MetaData"];
        }

        if (array_key_exists("ExtendFieldData",$param) and $param["ExtendFieldData"] !== null) {
            $this->ExtendFieldData = $param["ExtendFieldData"];
        }
    }
}
