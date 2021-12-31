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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例组信息
 *
 * @method integer getAppId() 获取appId
 * @method void setAppId(integer $AppId) 设置appId
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getDeletedTime() 获取删除时间
 * @method void setDeletedTime(string $DeletedTime) 设置删除时间
 * @method string getInstanceGrpId() 获取实例组ID
 * @method void setInstanceGrpId(string $InstanceGrpId) 设置实例组ID
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getType() 获取实例组类型。ha-ha组；ro-只读组
 * @method void setType(string $Type) 设置实例组类型。ha-ha组；ro-只读组
 * @method string getUpdatedTime() 获取更新时间
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间
 * @method string getVip() 获取内网IP
 * @method void setVip(string $Vip) 设置内网IP
 * @method integer getVport() 获取内网端口
 * @method void setVport(integer $Vport) 设置内网端口
 * @method string getWanDomain() 获取外网域名
 * @method void setWanDomain(string $WanDomain) 设置外网域名
 * @method string getWanIP() 获取外网ip
 * @method void setWanIP(string $WanIP) 设置外网ip
 * @method integer getWanPort() 获取外网端口
 * @method void setWanPort(integer $WanPort) 设置外网端口
 * @method string getWanStatus() 获取外网状态
 * @method void setWanStatus(string $WanStatus) 设置外网状态
 * @method array getInstanceSet() 获取实例组包含实例信息
 * @method void setInstanceSet(array $InstanceSet) 设置实例组包含实例信息
 */
class CynosdbInstanceGrp extends AbstractModel
{
    /**
     * @var integer appId
     */
    public $AppId;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 删除时间
     */
    public $DeletedTime;

    /**
     * @var string 实例组ID
     */
    public $InstanceGrpId;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 实例组类型。ha-ha组；ro-只读组
     */
    public $Type;

    /**
     * @var string 更新时间
     */
    public $UpdatedTime;

    /**
     * @var string 内网IP
     */
    public $Vip;

    /**
     * @var integer 内网端口
     */
    public $Vport;

    /**
     * @var string 外网域名
     */
    public $WanDomain;

    /**
     * @var string 外网ip
     */
    public $WanIP;

    /**
     * @var integer 外网端口
     */
    public $WanPort;

    /**
     * @var string 外网状态
     */
    public $WanStatus;

    /**
     * @var array 实例组包含实例信息
     */
    public $InstanceSet;

    /**
     * @param integer $AppId appId
     * @param string $ClusterId 集群ID
     * @param string $CreatedTime 创建时间
     * @param string $DeletedTime 删除时间
     * @param string $InstanceGrpId 实例组ID
     * @param string $Status 状态
     * @param string $Type 实例组类型。ha-ha组；ro-只读组
     * @param string $UpdatedTime 更新时间
     * @param string $Vip 内网IP
     * @param integer $Vport 内网端口
     * @param string $WanDomain 外网域名
     * @param string $WanIP 外网ip
     * @param integer $WanPort 外网端口
     * @param string $WanStatus 外网状态
     * @param array $InstanceSet 实例组包含实例信息
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("DeletedTime",$param) and $param["DeletedTime"] !== null) {
            $this->DeletedTime = $param["DeletedTime"];
        }

        if (array_key_exists("InstanceGrpId",$param) and $param["InstanceGrpId"] !== null) {
            $this->InstanceGrpId = $param["InstanceGrpId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanIP",$param) and $param["WanIP"] !== null) {
            $this->WanIP = $param["WanIP"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = [];
            foreach ($param["InstanceSet"] as $key => $value){
                $obj = new CynosdbInstance();
                $obj->deserialize($value);
                array_push($this->InstanceSet, $obj);
            }
        }
    }
}
