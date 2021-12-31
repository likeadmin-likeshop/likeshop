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
 * 已审核代客信息
 *
 * @method string getUin() 获取代理商账号ID
 * @method void setUin(string $Uin) 设置代理商账号ID
 * @method string getClientUin() 获取代客账号ID
 * @method void setClientUin(string $ClientUin) 设置代客账号ID
 * @method string getAgentTime() 获取代客审核通过时间戳
 * @method void setAgentTime(string $AgentTime) 设置代客审核通过时间戳
 * @method string getClientFlag() 获取代客类型，可能值为a/b/c
 * @method void setClientFlag(string $ClientFlag) 设置代客类型，可能值为a/b/c
 * @method string getClientRemark() 获取代客备注
 * @method void setClientRemark(string $ClientRemark) 设置代客备注
 * @method string getClientName() 获取代客名称（首选实名认证名称）
 * @method void setClientName(string $ClientName) 设置代客名称（首选实名认证名称）
 * @method string getAuthType() 获取认证类型, 0：个人，1：企业；其他：未认证
 * @method void setAuthType(string $AuthType) 设置认证类型, 0：个人，1：企业；其他：未认证
 * @method string getAppId() 获取代客APPID
 * @method void setAppId(string $AppId) 设置代客APPID
 * @method integer getLastMonthAmt() 获取上月消费金额
 * @method void setLastMonthAmt(integer $LastMonthAmt) 设置上月消费金额
 * @method integer getThisMonthAmt() 获取本月消费金额
 * @method void setThisMonthAmt(integer $ThisMonthAmt) 设置本月消费金额
 * @method integer getHasOverdueBill() 获取是否欠费,0：不欠费；1：欠费
 * @method void setHasOverdueBill(integer $HasOverdueBill) 设置是否欠费,0：不欠费；1：欠费
 * @method string getClientType() 获取客户类型：可以为new(新拓)/assign(指定)/old(存量已关联)/old_newchecking(存量-新关联考核中)/old_newnotpass(存量-新关联未达标)/direct(直销)/direct_newopp(直销(新商机))/空
 * @method void setClientType(string $ClientType) 设置客户类型：可以为new(新拓)/assign(指定)/old(存量已关联)/old_newchecking(存量-新关联考核中)/old_newnotpass(存量-新关联未达标)/direct(直销)/direct_newopp(直销(新商机))/空
 * @method string getProjectType() 获取项目类型：可以为self(自拓项目)/platform(合作项目)/repeat(复算项目  )/空
 * @method void setProjectType(string $ProjectType) 设置项目类型：可以为self(自拓项目)/platform(合作项目)/repeat(复算项目  )/空
 * @method string getSalesUin() 获取业务员ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSalesUin(string $SalesUin) 设置业务员ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSalesName() 获取业务员姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSalesName(string $SalesName) 设置业务员姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMail() 获取代客邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMail(string $Mail) 设置代客邮箱
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentAuditedClient extends AbstractModel
{
    /**
     * @var string 代理商账号ID
     */
    public $Uin;

    /**
     * @var string 代客账号ID
     */
    public $ClientUin;

    /**
     * @var string 代客审核通过时间戳
     */
    public $AgentTime;

    /**
     * @var string 代客类型，可能值为a/b/c
     */
    public $ClientFlag;

    /**
     * @var string 代客备注
     */
    public $ClientRemark;

    /**
     * @var string 代客名称（首选实名认证名称）
     */
    public $ClientName;

    /**
     * @var string 认证类型, 0：个人，1：企业；其他：未认证
     */
    public $AuthType;

    /**
     * @var string 代客APPID
     */
    public $AppId;

    /**
     * @var integer 上月消费金额
     */
    public $LastMonthAmt;

    /**
     * @var integer 本月消费金额
     */
    public $ThisMonthAmt;

    /**
     * @var integer 是否欠费,0：不欠费；1：欠费
     */
    public $HasOverdueBill;

    /**
     * @var string 客户类型：可以为new(新拓)/assign(指定)/old(存量已关联)/old_newchecking(存量-新关联考核中)/old_newnotpass(存量-新关联未达标)/direct(直销)/direct_newopp(直销(新商机))/空
     */
    public $ClientType;

    /**
     * @var string 项目类型：可以为self(自拓项目)/platform(合作项目)/repeat(复算项目  )/空
     */
    public $ProjectType;

    /**
     * @var string 业务员ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SalesUin;

    /**
     * @var string 业务员姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SalesName;

    /**
     * @var string 代客邮箱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mail;

    /**
     * @param string $Uin 代理商账号ID
     * @param string $ClientUin 代客账号ID
     * @param string $AgentTime 代客审核通过时间戳
     * @param string $ClientFlag 代客类型，可能值为a/b/c
     * @param string $ClientRemark 代客备注
     * @param string $ClientName 代客名称（首选实名认证名称）
     * @param string $AuthType 认证类型, 0：个人，1：企业；其他：未认证
     * @param string $AppId 代客APPID
     * @param integer $LastMonthAmt 上月消费金额
     * @param integer $ThisMonthAmt 本月消费金额
     * @param integer $HasOverdueBill 是否欠费,0：不欠费；1：欠费
     * @param string $ClientType 客户类型：可以为new(新拓)/assign(指定)/old(存量已关联)/old_newchecking(存量-新关联考核中)/old_newnotpass(存量-新关联未达标)/direct(直销)/direct_newopp(直销(新商机))/空
     * @param string $ProjectType 项目类型：可以为self(自拓项目)/platform(合作项目)/repeat(复算项目  )/空
     * @param string $SalesUin 业务员ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SalesName 业务员姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mail 代客邮箱
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

        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("AgentTime",$param) and $param["AgentTime"] !== null) {
            $this->AgentTime = $param["AgentTime"];
        }

        if (array_key_exists("ClientFlag",$param) and $param["ClientFlag"] !== null) {
            $this->ClientFlag = $param["ClientFlag"];
        }

        if (array_key_exists("ClientRemark",$param) and $param["ClientRemark"] !== null) {
            $this->ClientRemark = $param["ClientRemark"];
        }

        if (array_key_exists("ClientName",$param) and $param["ClientName"] !== null) {
            $this->ClientName = $param["ClientName"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("LastMonthAmt",$param) and $param["LastMonthAmt"] !== null) {
            $this->LastMonthAmt = $param["LastMonthAmt"];
        }

        if (array_key_exists("ThisMonthAmt",$param) and $param["ThisMonthAmt"] !== null) {
            $this->ThisMonthAmt = $param["ThisMonthAmt"];
        }

        if (array_key_exists("HasOverdueBill",$param) and $param["HasOverdueBill"] !== null) {
            $this->HasOverdueBill = $param["HasOverdueBill"];
        }

        if (array_key_exists("ClientType",$param) and $param["ClientType"] !== null) {
            $this->ClientType = $param["ClientType"];
        }

        if (array_key_exists("ProjectType",$param) and $param["ProjectType"] !== null) {
            $this->ProjectType = $param["ProjectType"];
        }

        if (array_key_exists("SalesUin",$param) and $param["SalesUin"] !== null) {
            $this->SalesUin = $param["SalesUin"];
        }

        if (array_key_exists("SalesName",$param) and $param["SalesName"] !== null) {
            $this->SalesName = $param["SalesName"];
        }

        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }
    }
}
