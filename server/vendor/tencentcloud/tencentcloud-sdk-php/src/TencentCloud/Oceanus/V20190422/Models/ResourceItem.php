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
 * 资源详细描述
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getName() 获取资源名称
 * @method void setName(string $Name) 设置资源名称
 * @method integer getResourceType() 获取资源类型
 * @method void setResourceType(integer $ResourceType) 设置资源类型
 * @method ResourceLoc getResourceLoc() 获取资源位置
 * @method void setResourceLoc(ResourceLoc $ResourceLoc) 设置资源位置
 * @method string getRegion() 获取资源地域
 * @method void setRegion(string $Region) 设置资源地域
 * @method integer getAppId() 获取应用ID
 * @method void setAppId(integer $AppId) 设置应用ID
 * @method string getOwnerUin() 获取主账号Uin
 * @method void setOwnerUin(string $OwnerUin) 设置主账号Uin
 * @method string getCreatorUin() 获取子账号Uin
 * @method void setCreatorUin(string $CreatorUin) 设置子账号Uin
 * @method string getCreateTime() 获取资源创建时间
 * @method void setCreateTime(string $CreateTime) 设置资源创建时间
 * @method string getUpdateTime() 获取资源最后更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置资源最后更新时间
 * @method integer getLatestResourceConfigVersion() 获取资源的资源版本ID
 * @method void setLatestResourceConfigVersion(integer $LatestResourceConfigVersion) 设置资源的资源版本ID
 * @method string getRemark() 获取资源备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置资源备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVersionCount() 获取版本个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionCount(integer $VersionCount) 设置版本个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRefJobCount() 获取关联作业数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefJobCount(integer $RefJobCount) 设置关联作业数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceItem extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 资源名称
     */
    public $Name;

    /**
     * @var integer 资源类型
     */
    public $ResourceType;

    /**
     * @var ResourceLoc 资源位置
     */
    public $ResourceLoc;

    /**
     * @var string 资源地域
     */
    public $Region;

    /**
     * @var integer 应用ID
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
     * @var string 资源创建时间
     */
    public $CreateTime;

    /**
     * @var string 资源最后更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 资源的资源版本ID
     */
    public $LatestResourceConfigVersion;

    /**
     * @var string 资源备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 版本个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionCount;

    /**
     * @var integer 关联作业数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefJobCount;

    /**
     * @param string $ResourceId 资源ID
     * @param string $Name 资源名称
     * @param integer $ResourceType 资源类型
     * @param ResourceLoc $ResourceLoc 资源位置
     * @param string $Region 资源地域
     * @param integer $AppId 应用ID
     * @param string $OwnerUin 主账号Uin
     * @param string $CreatorUin 子账号Uin
     * @param string $CreateTime 资源创建时间
     * @param string $UpdateTime 资源最后更新时间
     * @param integer $LatestResourceConfigVersion 资源的资源版本ID
     * @param string $Remark 资源备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VersionCount 版本个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RefJobCount 关联作业数
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceLoc",$param) and $param["ResourceLoc"] !== null) {
            $this->ResourceLoc = new ResourceLoc();
            $this->ResourceLoc->deserialize($param["ResourceLoc"]);
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LatestResourceConfigVersion",$param) and $param["LatestResourceConfigVersion"] !== null) {
            $this->LatestResourceConfigVersion = $param["LatestResourceConfigVersion"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("VersionCount",$param) and $param["VersionCount"] !== null) {
            $this->VersionCount = $param["VersionCount"];
        }

        if (array_key_exists("RefJobCount",$param) and $param["RefJobCount"] !== null) {
            $this->RefJobCount = $param["RefJobCount"];
        }
    }
}
