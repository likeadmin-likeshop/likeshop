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
 * 代理商完税证明
 *
 * @method string getAnchorId() 获取主播银行账号
 * @method void setAnchorId(string $AnchorId) 设置主播银行账号
 * @method string getAnchorName() 获取主播姓名
 * @method void setAnchorName(string $AnchorName) 设置主播姓名
 * @method string getAnchorIDCard() 获取主播身份证
 * @method void setAnchorIDCard(string $AnchorIDCard) 设置主播身份证
 * @method string getStartTime() 获取纳税的开始时间，格式yyyy-MM-dd
 * @method void setStartTime(string $StartTime) 设置纳税的开始时间，格式yyyy-MM-dd
 * @method string getEndTime() 获取纳税的结束时间，格式yyyy-MM-dd
 * @method void setEndTime(string $EndTime) 设置纳税的结束时间，格式yyyy-MM-dd
 * @method integer getAmount() 获取流水金额。以“分”为单位
 * @method void setAmount(integer $Amount) 设置流水金额。以“分”为单位
 * @method integer getTax() 获取应缴税款。以“分”为单位
 * @method void setTax(integer $Tax) 设置应缴税款。以“分”为单位
 */
class AgentTaxPayment extends AbstractModel
{
    /**
     * @var string 主播银行账号
     */
    public $AnchorId;

    /**
     * @var string 主播姓名
     */
    public $AnchorName;

    /**
     * @var string 主播身份证
     */
    public $AnchorIDCard;

    /**
     * @var string 纳税的开始时间，格式yyyy-MM-dd
     */
    public $StartTime;

    /**
     * @var string 纳税的结束时间，格式yyyy-MM-dd
     */
    public $EndTime;

    /**
     * @var integer 流水金额。以“分”为单位
     */
    public $Amount;

    /**
     * @var integer 应缴税款。以“分”为单位
     */
    public $Tax;

    /**
     * @param string $AnchorId 主播银行账号
     * @param string $AnchorName 主播姓名
     * @param string $AnchorIDCard 主播身份证
     * @param string $StartTime 纳税的开始时间，格式yyyy-MM-dd
     * @param string $EndTime 纳税的结束时间，格式yyyy-MM-dd
     * @param integer $Amount 流水金额。以“分”为单位
     * @param integer $Tax 应缴税款。以“分”为单位
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
        if (array_key_exists("AnchorId",$param) and $param["AnchorId"] !== null) {
            $this->AnchorId = $param["AnchorId"];
        }

        if (array_key_exists("AnchorName",$param) and $param["AnchorName"] !== null) {
            $this->AnchorName = $param["AnchorName"];
        }

        if (array_key_exists("AnchorIDCard",$param) and $param["AnchorIDCard"] !== null) {
            $this->AnchorIDCard = $param["AnchorIDCard"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }
    }
}
