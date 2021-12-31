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
 * QueryBankWithdrawCashDetails请求参数结构体
 *
 * @method string getMrchCode() 获取String(22)，商户号（签约客户号）
 * @method void setMrchCode(string $MrchCode) 设置String(22)，商户号（签约客户号）
 * @method string getFunctionFlag() 获取STRING(2)，功能标志（1: 当日; 2: 历史）
 * @method void setFunctionFlag(string $FunctionFlag) 设置STRING(2)，功能标志（1: 当日; 2: 历史）
 * @method string getSubAcctNo() 获取STRING(50)，见证子帐户的帐号
 * @method void setSubAcctNo(string $SubAcctNo) 设置STRING(50)，见证子帐户的帐号
 * @method string getQueryFlag() 获取STRING(4)，查询标志（2: 提现; 3: 清分）
 * @method void setQueryFlag(string $QueryFlag) 设置STRING(4)，查询标志（2: 提现; 3: 清分）
 * @method string getPageNum() 获取STRING(10)，页码（起始值为1，每次最多返回20条记录，第二页返回的记录数为第21至40条记录，第三页为41至60条记录，顺序均按照建立时间的先后）
 * @method void setPageNum(string $PageNum) 设置STRING(10)，页码（起始值为1，每次最多返回20条记录，第二页返回的记录数为第21至40条记录，第三页为41至60条记录，顺序均按照建立时间的先后）
 * @method string getBeginDate() 获取STRING(8)，开始日期（若是历史查询，则必输，当日查询时，不起作用。格式：20190101）
 * @method void setBeginDate(string $BeginDate) 设置STRING(8)，开始日期（若是历史查询，则必输，当日查询时，不起作用。格式：20190101）
 * @method string getEndDate() 获取STRING(8)，结束日期（若是历史查询，则必输，当日查询时，不起作用。格式：20190101）
 * @method void setEndDate(string $EndDate) 设置STRING(8)，结束日期（若是历史查询，则必输，当日查询时，不起作用。格式：20190101）
 * @method string getReservedMsg() 获取STRING(1027)，保留域
 * @method void setReservedMsg(string $ReservedMsg) 设置STRING(1027)，保留域
 * @method string getProfile() 获取STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 * @method void setProfile(string $Profile) 设置STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 */
class QueryBankWithdrawCashDetailsRequest extends AbstractModel
{
    /**
     * @var string String(22)，商户号（签约客户号）
     */
    public $MrchCode;

    /**
     * @var string STRING(2)，功能标志（1: 当日; 2: 历史）
     */
    public $FunctionFlag;

    /**
     * @var string STRING(50)，见证子帐户的帐号
     */
    public $SubAcctNo;

    /**
     * @var string STRING(4)，查询标志（2: 提现; 3: 清分）
     */
    public $QueryFlag;

    /**
     * @var string STRING(10)，页码（起始值为1，每次最多返回20条记录，第二页返回的记录数为第21至40条记录，第三页为41至60条记录，顺序均按照建立时间的先后）
     */
    public $PageNum;

    /**
     * @var string STRING(8)，开始日期（若是历史查询，则必输，当日查询时，不起作用。格式：20190101）
     */
    public $BeginDate;

    /**
     * @var string STRING(8)，结束日期（若是历史查询，则必输，当日查询时，不起作用。格式：20190101）
     */
    public $EndDate;

    /**
     * @var string STRING(1027)，保留域
     */
    public $ReservedMsg;

    /**
     * @var string STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
     */
    public $Profile;

    /**
     * @param string $MrchCode String(22)，商户号（签约客户号）
     * @param string $FunctionFlag STRING(2)，功能标志（1: 当日; 2: 历史）
     * @param string $SubAcctNo STRING(50)，见证子帐户的帐号
     * @param string $QueryFlag STRING(4)，查询标志（2: 提现; 3: 清分）
     * @param string $PageNum STRING(10)，页码（起始值为1，每次最多返回20条记录，第二页返回的记录数为第21至40条记录，第三页为41至60条记录，顺序均按照建立时间的先后）
     * @param string $BeginDate STRING(8)，开始日期（若是历史查询，则必输，当日查询时，不起作用。格式：20190101）
     * @param string $EndDate STRING(8)，结束日期（若是历史查询，则必输，当日查询时，不起作用。格式：20190101）
     * @param string $ReservedMsg STRING(1027)，保留域
     * @param string $Profile STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
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
        if (array_key_exists("MrchCode",$param) and $param["MrchCode"] !== null) {
            $this->MrchCode = $param["MrchCode"];
        }

        if (array_key_exists("FunctionFlag",$param) and $param["FunctionFlag"] !== null) {
            $this->FunctionFlag = $param["FunctionFlag"];
        }

        if (array_key_exists("SubAcctNo",$param) and $param["SubAcctNo"] !== null) {
            $this->SubAcctNo = $param["SubAcctNo"];
        }

        if (array_key_exists("QueryFlag",$param) and $param["QueryFlag"] !== null) {
            $this->QueryFlag = $param["QueryFlag"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("ReservedMsg",$param) and $param["ReservedMsg"] !== null) {
            $this->ReservedMsg = $param["ReservedMsg"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
