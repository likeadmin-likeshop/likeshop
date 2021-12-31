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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 项目信息描述
 *
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getOwnerUin() 获取资源拥有者（主账号）uin
 * @method void setOwnerUin(integer $OwnerUin) 设置资源拥有者（主账号）uin
 * @method integer getAppId() 获取应用Id
 * @method void setAppId(integer $AppId) 设置应用Id
 * @method string getName() 获取项目名称
 * @method void setName(string $Name) 设置项目名称
 * @method integer getCreatorUin() 获取创建者uin
 * @method void setCreatorUin(integer $CreatorUin) 设置创建者uin
 * @method string getSrcPlat() 获取来源平台
 * @method void setSrcPlat(string $SrcPlat) 设置来源平台
 * @method integer getSrcAppId() 获取来源AppId
 * @method void setSrcAppId(integer $SrcAppId) 设置来源AppId
 * @method integer getStatus() 获取项目状态,0正常，-1关闭。默认项目为3
 * @method void setStatus(integer $Status) 设置项目状态,0正常，-1关闭。默认项目为3
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getIsDefault() 获取是否默认项目，1 是，0 不是
 * @method void setIsDefault(integer $IsDefault) 设置是否默认项目，1 是，0 不是
 * @method string getInfo() 获取描述信息
 * @method void setInfo(string $Info) 设置描述信息
 */
class Project extends AbstractModel
{
    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 资源拥有者（主账号）uin
     */
    public $OwnerUin;

    /**
     * @var integer 应用Id
     */
    public $AppId;

    /**
     * @var string 项目名称
     */
    public $Name;

    /**
     * @var integer 创建者uin
     */
    public $CreatorUin;

    /**
     * @var string 来源平台
     */
    public $SrcPlat;

    /**
     * @var integer 来源AppId
     */
    public $SrcAppId;

    /**
     * @var integer 项目状态,0正常，-1关闭。默认项目为3
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 是否默认项目，1 是，0 不是
     */
    public $IsDefault;

    /**
     * @var string 描述信息
     */
    public $Info;

    /**
     * @param integer $ProjectId 项目ID
     * @param integer $OwnerUin 资源拥有者（主账号）uin
     * @param integer $AppId 应用Id
     * @param string $Name 项目名称
     * @param integer $CreatorUin 创建者uin
     * @param string $SrcPlat 来源平台
     * @param integer $SrcAppId 来源AppId
     * @param integer $Status 项目状态,0正常，-1关闭。默认项目为3
     * @param string $CreateTime 创建时间
     * @param integer $IsDefault 是否默认项目，1 是，0 不是
     * @param string $Info 描述信息
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("SrcPlat",$param) and $param["SrcPlat"] !== null) {
            $this->SrcPlat = $param["SrcPlat"];
        }

        if (array_key_exists("SrcAppId",$param) and $param["SrcAppId"] !== null) {
            $this->SrcAppId = $param["SrcAppId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }
    }
}
