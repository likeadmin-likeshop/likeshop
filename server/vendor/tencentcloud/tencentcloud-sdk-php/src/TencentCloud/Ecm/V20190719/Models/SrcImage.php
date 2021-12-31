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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像来源信息
 *
 * @method string getImageId() 获取镜像id
 * @method void setImageId(string $ImageId) 设置镜像id
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getImageOsName() 获取系统名称
 * @method void setImageOsName(string $ImageOsName) 设置系统名称
 * @method string getImageDescription() 获取镜像描述
 * @method void setImageDescription(string $ImageDescription) 设置镜像描述
 * @method string getRegion() 获取区域
 * @method void setRegion(string $Region) 设置区域
 * @method integer getRegionID() 获取区域ID
 * @method void setRegionID(integer $RegionID) 设置区域ID
 * @method string getRegionName() 获取区域名称
 * @method void setRegionName(string $RegionName) 设置区域名称
 * @method string getInstanceName() 获取来源实例名称
 * @method void setInstanceName(string $InstanceName) 设置来源实例名称
 * @method string getInstanceId() 获取来源实例ID
 * @method void setInstanceId(string $InstanceId) 设置来源实例ID
 * @method string getImageType() 获取来源镜像类型
 * @method void setImageType(string $ImageType) 设置来源镜像类型
 */
class SrcImage extends AbstractModel
{
    /**
     * @var string 镜像id
     */
    public $ImageId;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 系统名称
     */
    public $ImageOsName;

    /**
     * @var string 镜像描述
     */
    public $ImageDescription;

    /**
     * @var string 区域
     */
    public $Region;

    /**
     * @var integer 区域ID
     */
    public $RegionID;

    /**
     * @var string 区域名称
     */
    public $RegionName;

    /**
     * @var string 来源实例名称
     */
    public $InstanceName;

    /**
     * @var string 来源实例ID
     */
    public $InstanceId;

    /**
     * @var string 来源镜像类型
     */
    public $ImageType;

    /**
     * @param string $ImageId 镜像id
     * @param string $ImageName 镜像名称
     * @param string $ImageOsName 系统名称
     * @param string $ImageDescription 镜像描述
     * @param string $Region 区域
     * @param integer $RegionID 区域ID
     * @param string $RegionName 区域名称
     * @param string $InstanceName 来源实例名称
     * @param string $InstanceId 来源实例ID
     * @param string $ImageType 来源镜像类型
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageOsName",$param) and $param["ImageOsName"] !== null) {
            $this->ImageOsName = $param["ImageOsName"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionID",$param) and $param["RegionID"] !== null) {
            $this->RegionID = $param["RegionID"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }
    }
}
