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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返佣信息定义
 *
 * @method string getUin() 获取代理商账号ID
 * @method void setUin(string $Uin) 设置代理商账号ID
 * @method string getRebateMonth() 获取返佣月份，如2018-02
 * @method void setRebateMonth(string $RebateMonth) 设置返佣月份，如2018-02
 * @method integer getAmt() 获取返佣金额，单位分
 * @method void setAmt(integer $Amt) 设置返佣金额，单位分
 * @method integer getMonthSales() 获取月度业绩，单位分
 * @method void setMonthSales(integer $MonthSales) 设置月度业绩，单位分
 * @method integer getQuarterSales() 获取季度业绩，单位分
 * @method void setQuarterSales(integer $QuarterSales) 设置季度业绩，单位分
 * @method string getExceptionFlag() 获取NORMAL(正常)/HAS_OVERDUE_BILL(欠费)/NO_CONTRACT(缺合同)
 * @method void setExceptionFlag(string $ExceptionFlag) 设置NORMAL(正常)/HAS_OVERDUE_BILL(欠费)/NO_CONTRACT(缺合同)
 */
class RebateInfoElem extends AbstractModel
{
    /**
     * @var string 代理商账号ID
     */
    public $Uin;

    /**
     * @var string 返佣月份，如2018-02
     */
    public $RebateMonth;

    /**
     * @var integer 返佣金额，单位分
     */
    public $Amt;

    /**
     * @var integer 月度业绩，单位分
     */
    public $MonthSales;

    /**
     * @var integer 季度业绩，单位分
     */
    public $QuarterSales;

    /**
     * @var string NORMAL(正常)/HAS_OVERDUE_BILL(欠费)/NO_CONTRACT(缺合同)
     */
    public $ExceptionFlag;

    /**
     * @param string $Uin 代理商账号ID
     * @param string $RebateMonth 返佣月份，如2018-02
     * @param integer $Amt 返佣金额，单位分
     * @param integer $MonthSales 月度业绩，单位分
     * @param integer $QuarterSales 季度业绩，单位分
     * @param string $ExceptionFlag NORMAL(正常)/HAS_OVERDUE_BILL(欠费)/NO_CONTRACT(缺合同)
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("RebateMonth",$param) and $param["RebateMonth"] !== null) {
            $this->RebateMonth = $param["RebateMonth"];
        }

        if (array_key_exists("Amt",$param) and $param["Amt"] !== null) {
            $this->Amt = $param["Amt"];
        }

        if (array_key_exists("MonthSales",$param) and $param["MonthSales"] !== null) {
            $this->MonthSales = $param["MonthSales"];
        }

        if (array_key_exists("QuarterSales",$param) and $param["QuarterSales"] !== null) {
            $this->QuarterSales = $param["QuarterSales"];
        }

        if (array_key_exists("ExceptionFlag",$param) and $param["ExceptionFlag"] !== null) {
            $this->ExceptionFlag = $param["ExceptionFlag"];
        }
    }
}
