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
 * 业务信息定义
 *
 * @method string getUin() 获取代理商账号ID
 * @method void setUin(string $Uin) 设置代理商账号ID
 * @method string getOrderId() 获取订单号，仅对预付费账单有意义
 * @method void setOrderId(string $OrderId) 设置订单号，仅对预付费账单有意义
 * @method string getClientUin() 获取代客账号ID
 * @method void setClientUin(string $ClientUin) 设置代客账号ID
 * @method string getClientRemark() 获取代客备注名称
 * @method void setClientRemark(string $ClientRemark) 设置代客备注名称
 * @method string getPayTime() 获取支付时间
 * @method void setPayTime(string $PayTime) 设置支付时间
 * @method string getGoodsType() 获取云产品名称
 * @method void setGoodsType(string $GoodsType) 设置云产品名称
 * @method string getPayMode() 获取预付费/后付费
 * @method void setPayMode(string $PayMode) 设置预付费/后付费
 * @method string getSettleMonth() 获取支付月份
 * @method void setSettleMonth(string $SettleMonth) 设置支付月份
 * @method integer getAmt() 获取支付金额，单位分
 * @method void setAmt(integer $Amt) 设置支付金额，单位分
 * @method string getPayerMode() 获取agentpay：代付；selfpay：自付
 * @method void setPayerMode(string $PayerMode) 设置agentpay：代付；selfpay：自付
 * @method string getClientType() 获取客户类型：可以为new(新拓)/assign(指定)/old(存量)/空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientType(string $ClientType) 设置客户类型：可以为new(新拓)/assign(指定)/old(存量)/空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectType() 获取项目类型：可以为self(自拓项目)/platform(合作项目)/repeat(复算项目  )/空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectType(string $ProjectType) 设置项目类型：可以为self(自拓项目)/platform(合作项目)/repeat(复算项目  )/空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActivityId() 获取活动ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityId(string $ActivityId) 设置活动ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentBillElem extends AbstractModel
{
    /**
     * @var string 代理商账号ID
     */
    public $Uin;

    /**
     * @var string 订单号，仅对预付费账单有意义
     */
    public $OrderId;

    /**
     * @var string 代客账号ID
     */
    public $ClientUin;

    /**
     * @var string 代客备注名称
     */
    public $ClientRemark;

    /**
     * @var string 支付时间
     */
    public $PayTime;

    /**
     * @var string 云产品名称
     */
    public $GoodsType;

    /**
     * @var string 预付费/后付费
     */
    public $PayMode;

    /**
     * @var string 支付月份
     */
    public $SettleMonth;

    /**
     * @var integer 支付金额，单位分
     */
    public $Amt;

    /**
     * @var string agentpay：代付；selfpay：自付
     */
    public $PayerMode;

    /**
     * @var string 客户类型：可以为new(新拓)/assign(指定)/old(存量)/空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientType;

    /**
     * @var string 项目类型：可以为self(自拓项目)/platform(合作项目)/repeat(复算项目  )/空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectType;

    /**
     * @var string 活动ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityId;

    /**
     * @param string $Uin 代理商账号ID
     * @param string $OrderId 订单号，仅对预付费账单有意义
     * @param string $ClientUin 代客账号ID
     * @param string $ClientRemark 代客备注名称
     * @param string $PayTime 支付时间
     * @param string $GoodsType 云产品名称
     * @param string $PayMode 预付费/后付费
     * @param string $SettleMonth 支付月份
     * @param integer $Amt 支付金额，单位分
     * @param string $PayerMode agentpay：代付；selfpay：自付
     * @param string $ClientType 客户类型：可以为new(新拓)/assign(指定)/old(存量)/空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectType 项目类型：可以为self(自拓项目)/platform(合作项目)/repeat(复算项目  )/空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActivityId 活动ID
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("ClientRemark",$param) and $param["ClientRemark"] !== null) {
            $this->ClientRemark = $param["ClientRemark"];
        }

        if (array_key_exists("PayTime",$param) and $param["PayTime"] !== null) {
            $this->PayTime = $param["PayTime"];
        }

        if (array_key_exists("GoodsType",$param) and $param["GoodsType"] !== null) {
            $this->GoodsType = $param["GoodsType"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("SettleMonth",$param) and $param["SettleMonth"] !== null) {
            $this->SettleMonth = $param["SettleMonth"];
        }

        if (array_key_exists("Amt",$param) and $param["Amt"] !== null) {
            $this->Amt = $param["Amt"];
        }

        if (array_key_exists("PayerMode",$param) and $param["PayerMode"] !== null) {
            $this->PayerMode = $param["PayerMode"];
        }

        if (array_key_exists("ClientType",$param) and $param["ClientType"] !== null) {
            $this->ClientType = $param["ClientType"];
        }

        if (array_key_exists("ProjectType",$param) and $param["ProjectType"] !== null) {
            $this->ProjectType = $param["ProjectType"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }
    }
}
