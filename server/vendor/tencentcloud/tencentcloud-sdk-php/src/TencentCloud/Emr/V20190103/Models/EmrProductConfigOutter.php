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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EMR产品配置
 *
 * @method array getSoftInfo() 获取软件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSoftInfo(array $SoftInfo) 设置软件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMasterNodeSize() 获取Master节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterNodeSize(integer $MasterNodeSize) 设置Master节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCoreNodeSize() 获取Core节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoreNodeSize(integer $CoreNodeSize) 设置Core节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskNodeSize() 获取Task节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskNodeSize(integer $TaskNodeSize) 设置Task节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getComNodeSize() 获取Common节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComNodeSize(integer $ComNodeSize) 设置Common节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method OutterResource getMasterResource() 获取Master节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterResource(OutterResource $MasterResource) 设置Master节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method OutterResource getCoreResource() 获取Core节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoreResource(OutterResource $CoreResource) 设置Core节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method OutterResource getTaskResource() 获取Task节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskResource(OutterResource $TaskResource) 设置Task节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method OutterResource getComResource() 获取Common节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComResource(OutterResource $ComResource) 设置Common节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOnCos() 获取是否使用COS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnCos(boolean $OnCos) 设置是否使用COS
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChargeType() 获取收费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeType(integer $ChargeType) 设置收费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRouterNodeSize() 获取Router节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRouterNodeSize(integer $RouterNodeSize) 设置Router节点个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportHA() 获取是否支持HA
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportHA(boolean $SupportHA) 设置是否支持HA
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSecurityOn() 获取是否支持安全模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityOn(boolean $SecurityOn) 设置是否支持安全模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecurityGroup() 获取安全组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityGroup(string $SecurityGroup) 设置安全组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCbsEncrypt() 获取是否开启Cbs加密
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCbsEncrypt(integer $CbsEncrypt) 设置是否开启Cbs加密
注意：此字段可能返回 null，表示取不到有效值。
 */
class EmrProductConfigOutter extends AbstractModel
{
    /**
     * @var array 软件信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SoftInfo;

    /**
     * @var integer Master节点个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterNodeSize;

    /**
     * @var integer Core节点个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoreNodeSize;

    /**
     * @var integer Task节点个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskNodeSize;

    /**
     * @var integer Common节点个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComNodeSize;

    /**
     * @var OutterResource Master节点资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterResource;

    /**
     * @var OutterResource Core节点资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoreResource;

    /**
     * @var OutterResource Task节点资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskResource;

    /**
     * @var OutterResource Common节点资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComResource;

    /**
     * @var boolean 是否使用COS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnCos;

    /**
     * @var integer 收费类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeType;

    /**
     * @var integer Router节点个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RouterNodeSize;

    /**
     * @var boolean 是否支持HA
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportHA;

    /**
     * @var boolean 是否支持安全模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityOn;

    /**
     * @var string 安全组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityGroup;

    /**
     * @var integer 是否开启Cbs加密
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CbsEncrypt;

    /**
     * @param array $SoftInfo 软件信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MasterNodeSize Master节点个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CoreNodeSize Core节点个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskNodeSize Task节点个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ComNodeSize Common节点个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param OutterResource $MasterResource Master节点资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param OutterResource $CoreResource Core节点资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param OutterResource $TaskResource Task节点资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param OutterResource $ComResource Common节点资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $OnCos 是否使用COS
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChargeType 收费类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RouterNodeSize Router节点个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportHA 是否支持HA
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SecurityOn 是否支持安全模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecurityGroup 安全组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CbsEncrypt 是否开启Cbs加密
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
        if (array_key_exists("SoftInfo",$param) and $param["SoftInfo"] !== null) {
            $this->SoftInfo = $param["SoftInfo"];
        }

        if (array_key_exists("MasterNodeSize",$param) and $param["MasterNodeSize"] !== null) {
            $this->MasterNodeSize = $param["MasterNodeSize"];
        }

        if (array_key_exists("CoreNodeSize",$param) and $param["CoreNodeSize"] !== null) {
            $this->CoreNodeSize = $param["CoreNodeSize"];
        }

        if (array_key_exists("TaskNodeSize",$param) and $param["TaskNodeSize"] !== null) {
            $this->TaskNodeSize = $param["TaskNodeSize"];
        }

        if (array_key_exists("ComNodeSize",$param) and $param["ComNodeSize"] !== null) {
            $this->ComNodeSize = $param["ComNodeSize"];
        }

        if (array_key_exists("MasterResource",$param) and $param["MasterResource"] !== null) {
            $this->MasterResource = new OutterResource();
            $this->MasterResource->deserialize($param["MasterResource"]);
        }

        if (array_key_exists("CoreResource",$param) and $param["CoreResource"] !== null) {
            $this->CoreResource = new OutterResource();
            $this->CoreResource->deserialize($param["CoreResource"]);
        }

        if (array_key_exists("TaskResource",$param) and $param["TaskResource"] !== null) {
            $this->TaskResource = new OutterResource();
            $this->TaskResource->deserialize($param["TaskResource"]);
        }

        if (array_key_exists("ComResource",$param) and $param["ComResource"] !== null) {
            $this->ComResource = new OutterResource();
            $this->ComResource->deserialize($param["ComResource"]);
        }

        if (array_key_exists("OnCos",$param) and $param["OnCos"] !== null) {
            $this->OnCos = $param["OnCos"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("RouterNodeSize",$param) and $param["RouterNodeSize"] !== null) {
            $this->RouterNodeSize = $param["RouterNodeSize"];
        }

        if (array_key_exists("SupportHA",$param) and $param["SupportHA"] !== null) {
            $this->SupportHA = $param["SupportHA"];
        }

        if (array_key_exists("SecurityOn",$param) and $param["SecurityOn"] !== null) {
            $this->SecurityOn = $param["SecurityOn"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("CbsEncrypt",$param) and $param["CbsEncrypt"] !== null) {
            $this->CbsEncrypt = $param["CbsEncrypt"];
        }
    }
}
