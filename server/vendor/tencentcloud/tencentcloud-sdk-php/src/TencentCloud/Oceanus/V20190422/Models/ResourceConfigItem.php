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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述资源配置的返回参数
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method integer getResourceType() 获取资源类型
 * @method void setResourceType(integer $ResourceType) 设置资源类型
 * @method string getRegion() 获取资源所属地域
 * @method void setRegion(string $Region) 设置资源所属地域
 * @method integer getAppId() 获取资源所属AppId
 * @method void setAppId(integer $AppId) 设置资源所属AppId
 * @method string getOwnerUin() 获取主账号Uin
 * @method void setOwnerUin(string $OwnerUin) 设置主账号Uin
 * @method string getCreatorUin() 获取子账号Uin
 * @method void setCreatorUin(string $CreatorUin) 设置子账号Uin
 * @method ResourceLoc getResourceLoc() 获取资源位置描述
 * @method void setResourceLoc(ResourceLoc $ResourceLoc) 设置资源位置描述
 * @method string getCreateTime() 获取资源创建时间
 * @method void setCreateTime(string $CreateTime) 设置资源创建时间
 * @method integer getVersion() 获取资源版本
 * @method void setVersion(integer $Version) 设置资源版本
 * @method string getRemark() 获取资源描述
 * @method void setRemark(string $Remark) 设置资源描述
 * @method integer getStatus() 获取资源状态：0: 资源同步中，1:资源已就绪
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置资源状态：0: 资源同步中，1:资源已就绪
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRefJobCount() 获取关联作业个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefJobCount(integer $RefJobCount) 设置关联作业个数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceConfigItem extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var integer 资源类型
     */
    public $ResourceType;

    /**
     * @var string 资源所属地域
     */
    public $Region;

    /**
     * @var integer 资源所属AppId
     */
    public $AppId;

    /**
     * @var string 主账号Uin
     */
    public $OwnerUin;

    /**
     * @var string 子账号Uin
     */
    public $CreatorUin;

    /**
     * @var ResourceLoc 资源位置描述
     */
    public $ResourceLoc;

    /**
     * @var string 资源创建时间
     */
    public $CreateTime;

    /**
     * @var integer 资源版本
     */
    public $Version;

    /**
     * @var string 资源描述
     */
    public $Remark;

    /**
     * @var integer 资源状态：0: 资源同步中，1:资源已就绪
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 关联作业个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefJobCount;

    /**
     * @param string $ResourceId 资源ID
     * @param integer $ResourceType 资源类型
     * @param string $Region 资源所属地域
     * @param integer $AppId 资源所属AppId
     * @param string $OwnerUin 主账号Uin
     * @param string $CreatorUin 子账号Uin
     * @param ResourceLoc $ResourceLoc 资源位置描述
     * @param string $CreateTime 资源创建时间
     * @param integer $Version 资源版本
     * @param string $Remark 资源描述
     * @param integer $Status 资源状态：0: 资源同步中，1:资源已就绪
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RefJobCount 关联作业个数
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("ResourceLoc",$param) and $param["ResourceLoc"] !== null) {
            $this->ResourceLoc = new ResourceLoc();
            $this->ResourceLoc->deserialize($param["ResourceLoc"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RefJobCount",$param) and $param["RefJobCount"] !== null) {
            $this->RefJobCount = $param["RefJobCount"];
        }
    }
}
