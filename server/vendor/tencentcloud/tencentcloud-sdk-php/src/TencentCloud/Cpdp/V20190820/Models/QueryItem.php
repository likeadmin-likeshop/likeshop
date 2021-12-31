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
 * 聚鑫商户余额查询输出项
 *
 * @method string getSubAcctNo() 获取子商户账户
 * @method void setSubAcctNo(string $SubAcctNo) 设置子商户账户
 * @method string getSubAcctProperty() 获取子账户属性 
1：普通会员子账号 
2：挂账子账号 
3：手续费子账号 
4：利息子账号
5：平台担保子账号
 * @method void setSubAcctProperty(string $SubAcctProperty) 设置子账户属性 
1：普通会员子账号 
2：挂账子账号 
3：手续费子账号 
4：利息子账号
5：平台担保子账号
 * @method string getSubMchId() 获取业务平台的子商户Id，唯一
 * @method void setSubMchId(string $SubMchId) 设置业务平台的子商户Id，唯一
 * @method string getSubAcctName() 获取子账户名称
 * @method void setSubAcctName(string $SubAcctName) 设置子账户名称
 * @method string getAcctAvailBal() 获取账户可用余额
 * @method void setAcctAvailBal(string $AcctAvailBal) 设置账户可用余额
 * @method string getCashAmt() 获取可提现金额
 * @method void setCashAmt(string $CashAmt) 设置可提现金额
 * @method string getMaintenanceDate() 获取维护日期 开户日期或修改日期
 * @method void setMaintenanceDate(string $MaintenanceDate) 设置维护日期 开户日期或修改日期
 */
class QueryItem extends AbstractModel
{
    /**
     * @var string 子商户账户
     */
    public $SubAcctNo;

    /**
     * @var string 子账户属性 
1：普通会员子账号 
2：挂账子账号 
3：手续费子账号 
4：利息子账号
5：平台担保子账号
     */
    public $SubAcctProperty;

    /**
     * @var string 业务平台的子商户Id，唯一
     */
    public $SubMchId;

    /**
     * @var string 子账户名称
     */
    public $SubAcctName;

    /**
     * @var string 账户可用余额
     */
    public $AcctAvailBal;

    /**
     * @var string 可提现金额
     */
    public $CashAmt;

    /**
     * @var string 维护日期 开户日期或修改日期
     */
    public $MaintenanceDate;

    /**
     * @param string $SubAcctNo 子商户账户
     * @param string $SubAcctProperty 子账户属性 
1：普通会员子账号 
2：挂账子账号 
3：手续费子账号 
4：利息子账号
5：平台担保子账号
     * @param string $SubMchId 业务平台的子商户Id，唯一
     * @param string $SubAcctName 子账户名称
     * @param string $AcctAvailBal 账户可用余额
     * @param string $CashAmt 可提现金额
     * @param string $MaintenanceDate 维护日期 开户日期或修改日期
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
        if (array_key_exists("SubAcctNo",$param) and $param["SubAcctNo"] !== null) {
            $this->SubAcctNo = $param["SubAcctNo"];
        }

        if (array_key_exists("SubAcctProperty",$param) and $param["SubAcctProperty"] !== null) {
            $this->SubAcctProperty = $param["SubAcctProperty"];
        }

        if (array_key_exists("SubMchId",$param) and $param["SubMchId"] !== null) {
            $this->SubMchId = $param["SubMchId"];
        }

        if (array_key_exists("SubAcctName",$param) and $param["SubAcctName"] !== null) {
            $this->SubAcctName = $param["SubAcctName"];
        }

        if (array_key_exists("AcctAvailBal",$param) and $param["AcctAvailBal"] !== null) {
            $this->AcctAvailBal = $param["AcctAvailBal"];
        }

        if (array_key_exists("CashAmt",$param) and $param["CashAmt"] !== null) {
            $this->CashAmt = $param["CashAmt"];
        }

        if (array_key_exists("MaintenanceDate",$param) and $param["MaintenanceDate"] !== null) {
            $this->MaintenanceDate = $param["MaintenanceDate"];
        }
    }
}
