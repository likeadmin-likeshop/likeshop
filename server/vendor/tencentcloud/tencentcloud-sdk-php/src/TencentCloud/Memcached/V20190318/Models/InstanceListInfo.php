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
namespace TencentCloud\Memcached\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例详细信息列表
 *
 * @method array getTags() 获取实例关联的标签信息
 * @method void setTags(array $Tags) 设置实例关联的标签信息
 * @method string getAddTimeStamp() 获取实例创建时间
 * @method void setAddTimeStamp(string $AddTimeStamp) 设置实例创建时间
 * @method integer getAppId() 获取用户AppID
 * @method void setAppId(integer $AppId) 设置用户AppID
 * @method integer getAutoRenewFlag() 获取实例是否设置自动续费标识，1：设置自动续费；0：未设置自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置实例是否设置自动续费标识，1：设置自动续费；0：未设置自动续费
 * @method integer getCmemId() 获取实例内置ID
 * @method void setCmemId(integer $CmemId) 设置实例内置ID
 * @method string getDeadlineTimeStamp() 获取实例截止时间
 * @method void setDeadlineTimeStamp(string $DeadlineTimeStamp) 设置实例截止时间
 * @method integer getExpire() 获取过期策略
 * @method void setExpire(integer $Expire) 设置过期策略
 * @method string getInstanceDesc() 获取实例描述信息
 * @method void setInstanceDesc(string $InstanceDesc) 设置实例描述信息
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getIsolateTimeStamp() 获取实例隔离时间
 * @method void setIsolateTimeStamp(string $IsolateTimeStamp) 设置实例隔离时间
 * @method string getModTimeStamp() 获取实例修改时间
 * @method void setModTimeStamp(string $ModTimeStamp) 设置实例修改时间
 * @method integer getPayMode() 获取计费模式：0-按量计费，1-包年包月
 * @method void setPayMode(integer $PayMode) 设置计费模式：0-按量计费，1-包年包月
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getRegionId() 获取地域id 1--广州 4--上海 5-- 香港 6--多伦多 7--上海金融 8--北京 9-- 新加坡 11--深圳金融 15--美西（硅谷）16--成都 17--德国 18--韩国 19--重庆 21--印度 22--美东（弗吉尼亚）23--泰国 24--俄罗斯 25--日本
 * @method void setRegionId(integer $RegionId) 设置地域id 1--广州 4--上海 5-- 香港 6--多伦多 7--上海金融 8--北京 9-- 新加坡 11--深圳金融 15--美西（硅谷）16--成都 17--德国 18--韩国 19--重庆 21--印度 22--美东（弗吉尼亚）23--泰国 24--俄罗斯 25--日本
 * @method integer getSetId() 获取仓库ID
 * @method void setSetId(integer $SetId) 设置仓库ID
 * @method integer getStatus() 获取实例当前状态，0：待初始化；1：实例在流程中；2：实例运行中；-2：实例已隔离；-3：实例待删除
 * @method void setStatus(integer $Status) 设置实例当前状态，0：待初始化；1：实例在流程中；2：实例运行中；-2：实例已隔离；-3：实例待删除
 * @method integer getSubnetId() 获取vpc网络下子网id 如：46315
 * @method void setSubnetId(integer $SubnetId) 设置vpc网络下子网id 如：46315
 * @method string getUniqSubnetId() 获取vpc网络下子网id 如：subnet-fd3j6l35mm0
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置vpc网络下子网id 如：subnet-fd3j6l35mm0
 * @method string getUniqVpcId() 获取vpc网络id 如：vpc-fk33jsf43kgv
 * @method void setUniqVpcId(string $UniqVpcId) 设置vpc网络id 如：vpc-fk33jsf43kgv
 * @method string getVip() 获取实例vip
 * @method void setVip(string $Vip) 设置实例vip
 * @method integer getVpcId() 获取vpc网络id 如：75101
 * @method void setVpcId(integer $VpcId) 设置vpc网络id 如：75101
 * @method integer getVport() 获取实例端口号
 * @method void setVport(integer $Vport) 设置实例端口号
 * @method integer getZoneId() 获取区域ID
 * @method void setZoneId(integer $ZoneId) 设置区域ID
 */
class InstanceListInfo extends AbstractModel
{
    /**
     * @var array 实例关联的标签信息
     */
    public $Tags;

    /**
     * @var string 实例创建时间
     */
    public $AddTimeStamp;

    /**
     * @var integer 用户AppID
     */
    public $AppId;

    /**
     * @var integer 实例是否设置自动续费标识，1：设置自动续费；0：未设置自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var integer 实例内置ID
     */
    public $CmemId;

    /**
     * @var string 实例截止时间
     */
    public $DeadlineTimeStamp;

    /**
     * @var integer 过期策略
     */
    public $Expire;

    /**
     * @var string 实例描述信息
     */
    public $InstanceDesc;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例隔离时间
     */
    public $IsolateTimeStamp;

    /**
     * @var string 实例修改时间
     */
    public $ModTimeStamp;

    /**
     * @var integer 计费模式：0-按量计费，1-包年包月
     */
    public $PayMode;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 地域id 1--广州 4--上海 5-- 香港 6--多伦多 7--上海金融 8--北京 9-- 新加坡 11--深圳金融 15--美西（硅谷）16--成都 17--德国 18--韩国 19--重庆 21--印度 22--美东（弗吉尼亚）23--泰国 24--俄罗斯 25--日本
     */
    public $RegionId;

    /**
     * @var integer 仓库ID
     */
    public $SetId;

    /**
     * @var integer 实例当前状态，0：待初始化；1：实例在流程中；2：实例运行中；-2：实例已隔离；-3：实例待删除
     */
    public $Status;

    /**
     * @var integer vpc网络下子网id 如：46315
     */
    public $SubnetId;

    /**
     * @var string vpc网络下子网id 如：subnet-fd3j6l35mm0
     */
    public $UniqSubnetId;

    /**
     * @var string vpc网络id 如：vpc-fk33jsf43kgv
     */
    public $UniqVpcId;

    /**
     * @var string 实例vip
     */
    public $Vip;

    /**
     * @var integer vpc网络id 如：75101
     */
    public $VpcId;

    /**
     * @var integer 实例端口号
     */
    public $Vport;

    /**
     * @var integer 区域ID
     */
    public $ZoneId;

    /**
     * @param array $Tags 实例关联的标签信息
     * @param string $AddTimeStamp 实例创建时间
     * @param integer $AppId 用户AppID
     * @param integer $AutoRenewFlag 实例是否设置自动续费标识，1：设置自动续费；0：未设置自动续费
     * @param integer $CmemId 实例内置ID
     * @param string $DeadlineTimeStamp 实例截止时间
     * @param integer $Expire 过期策略
     * @param string $InstanceDesc 实例描述信息
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $IsolateTimeStamp 实例隔离时间
     * @param string $ModTimeStamp 实例修改时间
     * @param integer $PayMode 计费模式：0-按量计费，1-包年包月
     * @param integer $ProjectId 项目ID
     * @param integer $RegionId 地域id 1--广州 4--上海 5-- 香港 6--多伦多 7--上海金融 8--北京 9-- 新加坡 11--深圳金融 15--美西（硅谷）16--成都 17--德国 18--韩国 19--重庆 21--印度 22--美东（弗吉尼亚）23--泰国 24--俄罗斯 25--日本
     * @param integer $SetId 仓库ID
     * @param integer $Status 实例当前状态，0：待初始化；1：实例在流程中；2：实例运行中；-2：实例已隔离；-3：实例待删除
     * @param integer $SubnetId vpc网络下子网id 如：46315
     * @param string $UniqSubnetId vpc网络下子网id 如：subnet-fd3j6l35mm0
     * @param string $UniqVpcId vpc网络id 如：vpc-fk33jsf43kgv
     * @param string $Vip 实例vip
     * @param integer $VpcId vpc网络id 如：75101
     * @param integer $Vport 实例端口号
     * @param integer $ZoneId 区域ID
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
        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AddTimeStamp",$param) and $param["AddTimeStamp"] !== null) {
            $this->AddTimeStamp = $param["AddTimeStamp"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("CmemId",$param) and $param["CmemId"] !== null) {
            $this->CmemId = $param["CmemId"];
        }

        if (array_key_exists("DeadlineTimeStamp",$param) and $param["DeadlineTimeStamp"] !== null) {
            $this->DeadlineTimeStamp = $param["DeadlineTimeStamp"];
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }

        if (array_key_exists("InstanceDesc",$param) and $param["InstanceDesc"] !== null) {
            $this->InstanceDesc = $param["InstanceDesc"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("IsolateTimeStamp",$param) and $param["IsolateTimeStamp"] !== null) {
            $this->IsolateTimeStamp = $param["IsolateTimeStamp"];
        }

        if (array_key_exists("ModTimeStamp",$param) and $param["ModTimeStamp"] !== null) {
            $this->ModTimeStamp = $param["ModTimeStamp"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("SetId",$param) and $param["SetId"] !== null) {
            $this->SetId = $param["SetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }
    }
}
