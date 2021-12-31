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
namespace TencentCloud\Ic\V20190307\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 卡片详细信息
 *
 * @method string getIccid() 获取卡片ID
 * @method void setIccid(string $Iccid) 设置卡片ID
 * @method string getMsisdn() 获取卡电话号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsisdn(string $Msisdn) 设置卡电话号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImsi() 获取卡imsi
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImsi(string $Imsi) 设置卡imsi
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImei() 获取卡imei
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImei(string $Imei) 设置卡imei
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSdkappid() 获取应用ID
 * @method void setSdkappid(string $Sdkappid) 设置应用ID
 * @method integer getTeleoperator() 获取运营商编号
 * @method void setTeleoperator(integer $Teleoperator) 设置运营商编号
 * @method integer getCardStatus() 获取卡片状态 1:未激活 2：激活 3：停卡 5：销卡
 * @method void setCardStatus(integer $CardStatus) 设置卡片状态 1:未激活 2：激活 3：停卡 5：销卡
 * @method integer getNetworkStatus() 获取网络状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkStatus(integer $NetworkStatus) 设置网络状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActivitedTime() 获取激活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivitedTime(string $ActivitedTime) 设置激活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取资费类型，1 单卡，2 流量池
 * @method void setType(integer $Type) 设置资费类型，1 单卡，2 流量池
 * @method string getProductId() 获取套餐类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductId(string $ProductId) 设置套餐类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPoolId() 获取流量池ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoolId(string $PoolId) 设置流量池ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDataUsedInPeriod() 获取周期套餐流量使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataUsedInPeriod(float $DataUsedInPeriod) 设置周期套餐流量使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDataTotalInPeriod() 获取周期套餐总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataTotalInPeriod(float $DataTotalInPeriod) 设置周期套餐总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductExpiredTime() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductExpiredTime(string $ProductExpiredTime) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getModifiedTime() 获取修改时间
 * @method void setModifiedTime(string $ModifiedTime) 设置修改时间
 * @method integer getPreorderCnt() 获取套餐周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreorderCnt(integer $PreorderCnt) 设置套餐周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsActivated() 获取激活被回调标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsActivated(integer $IsActivated) 设置激活被回调标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderId() 获取订单ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderId(string $OrderId) 设置订单ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenew() 获取是否自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenew(integer $AutoRenew) 设置是否自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAllowArrears() 获取0 不需要开通达量不停卡 1 需要开通达量不停卡
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowArrears(integer $AllowArrears) 设置0 不需要开通达量不停卡 1 需要开通达量不停卡
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNeedSms() 获取是否开通短信0:未开短信 1:开通短信
 * @method void setNeedSms(integer $NeedSms) 设置是否开通短信0:未开短信 1:开通短信
 * @method integer getProvider() 获取供应商
 * @method void setProvider(integer $Provider) 设置供应商
 * @method integer getCertificationState() 获取实名认证 0:无 1:未实名 2:已实名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificationState(integer $CertificationState) 设置实名认证 0:无 1:未实名 2:已实名
注意：此字段可能返回 null，表示取不到有效值。
 */
class CardInfo extends AbstractModel
{
    /**
     * @var string 卡片ID
     */
    public $Iccid;

    /**
     * @var string 卡电话号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msisdn;

    /**
     * @var string 卡imsi
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Imsi;

    /**
     * @var string 卡imei
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Imei;

    /**
     * @var string 应用ID
     */
    public $Sdkappid;

    /**
     * @var integer 运营商编号
     */
    public $Teleoperator;

    /**
     * @var integer 卡片状态 1:未激活 2：激活 3：停卡 5：销卡
     */
    public $CardStatus;

    /**
     * @var integer 网络状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkStatus;

    /**
     * @var string 激活时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivitedTime;

    /**
     * @var integer 资费类型，1 单卡，2 流量池
     */
    public $Type;

    /**
     * @var string 套餐类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductId;

    /**
     * @var string 流量池ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PoolId;

    /**
     * @var float 周期套餐流量使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataUsedInPeriod;

    /**
     * @var float 周期套餐总量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataTotalInPeriod;

    /**
     * @var string 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductExpiredTime;

    /**
     * @var string 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 修改时间
     */
    public $ModifiedTime;

    /**
     * @var integer 套餐周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PreorderCnt;

    /**
     * @var integer 激活被回调标志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsActivated;

    /**
     * @var string 订单ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderId;

    /**
     * @var integer 是否自动续费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenew;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 0 不需要开通达量不停卡 1 需要开通达量不停卡
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowArrears;

    /**
     * @var integer 是否开通短信0:未开短信 1:开通短信
     */
    public $NeedSms;

    /**
     * @var integer 供应商
     */
    public $Provider;

    /**
     * @var integer 实名认证 0:无 1:未实名 2:已实名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificationState;

    /**
     * @param string $Iccid 卡片ID
     * @param string $Msisdn 卡电话号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Imsi 卡imsi
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Imei 卡imei
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sdkappid 应用ID
     * @param integer $Teleoperator 运营商编号
     * @param integer $CardStatus 卡片状态 1:未激活 2：激活 3：停卡 5：销卡
     * @param integer $NetworkStatus 网络状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActivitedTime 激活时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 资费类型，1 单卡，2 流量池
     * @param string $ProductId 套餐类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PoolId 流量池ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DataUsedInPeriod 周期套餐流量使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DataTotalInPeriod 周期套餐总量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductExpiredTime 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间
     * @param string $ModifiedTime 修改时间
     * @param integer $PreorderCnt 套餐周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsActivated 激活被回调标志
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderId 订单ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenew 是否自动续费
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AllowArrears 0 不需要开通达量不停卡 1 需要开通达量不停卡
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NeedSms 是否开通短信0:未开短信 1:开通短信
     * @param integer $Provider 供应商
     * @param integer $CertificationState 实名认证 0:无 1:未实名 2:已实名
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
        if (array_key_exists("Iccid",$param) and $param["Iccid"] !== null) {
            $this->Iccid = $param["Iccid"];
        }

        if (array_key_exists("Msisdn",$param) and $param["Msisdn"] !== null) {
            $this->Msisdn = $param["Msisdn"];
        }

        if (array_key_exists("Imsi",$param) and $param["Imsi"] !== null) {
            $this->Imsi = $param["Imsi"];
        }

        if (array_key_exists("Imei",$param) and $param["Imei"] !== null) {
            $this->Imei = $param["Imei"];
        }

        if (array_key_exists("Sdkappid",$param) and $param["Sdkappid"] !== null) {
            $this->Sdkappid = $param["Sdkappid"];
        }

        if (array_key_exists("Teleoperator",$param) and $param["Teleoperator"] !== null) {
            $this->Teleoperator = $param["Teleoperator"];
        }

        if (array_key_exists("CardStatus",$param) and $param["CardStatus"] !== null) {
            $this->CardStatus = $param["CardStatus"];
        }

        if (array_key_exists("NetworkStatus",$param) and $param["NetworkStatus"] !== null) {
            $this->NetworkStatus = $param["NetworkStatus"];
        }

        if (array_key_exists("ActivitedTime",$param) and $param["ActivitedTime"] !== null) {
            $this->ActivitedTime = $param["ActivitedTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("PoolId",$param) and $param["PoolId"] !== null) {
            $this->PoolId = $param["PoolId"];
        }

        if (array_key_exists("DataUsedInPeriod",$param) and $param["DataUsedInPeriod"] !== null) {
            $this->DataUsedInPeriod = $param["DataUsedInPeriod"];
        }

        if (array_key_exists("DataTotalInPeriod",$param) and $param["DataTotalInPeriod"] !== null) {
            $this->DataTotalInPeriod = $param["DataTotalInPeriod"];
        }

        if (array_key_exists("ProductExpiredTime",$param) and $param["ProductExpiredTime"] !== null) {
            $this->ProductExpiredTime = $param["ProductExpiredTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("PreorderCnt",$param) and $param["PreorderCnt"] !== null) {
            $this->PreorderCnt = $param["PreorderCnt"];
        }

        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->IsActivated = $param["IsActivated"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AllowArrears",$param) and $param["AllowArrears"] !== null) {
            $this->AllowArrears = $param["AllowArrears"];
        }

        if (array_key_exists("NeedSms",$param) and $param["NeedSms"] !== null) {
            $this->NeedSms = $param["NeedSms"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("CertificationState",$param) and $param["CertificationState"] !== null) {
            $this->CertificationState = $param["CertificationState"];
        }
    }
}
