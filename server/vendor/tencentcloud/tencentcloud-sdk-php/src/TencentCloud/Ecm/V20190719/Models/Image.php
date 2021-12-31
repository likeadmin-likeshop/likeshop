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
 * 镜像信息
 *
 * @method string getImageId() 获取镜像ID
 * @method void setImageId(string $ImageId) 设置镜像ID
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getImageState() 获取镜像状态
 * @method void setImageState(string $ImageState) 设置镜像状态
 * @method string getImageType() 获取镜像类型
 * @method void setImageType(string $ImageType) 设置镜像类型
 * @method string getImageOsName() 获取操作系统名称
 * @method void setImageOsName(string $ImageOsName) 设置操作系统名称
 * @method string getImageDescription() 获取镜像描述
 * @method void setImageDescription(string $ImageDescription) 设置镜像描述
 * @method string getImageCreateTime() 获取镜像导入时间
 * @method void setImageCreateTime(string $ImageCreateTime) 设置镜像导入时间
 * @method string getArchitecture() 获取操作系统位数
 * @method void setArchitecture(string $Architecture) 设置操作系统位数
 * @method string getOsType() 获取操作系统类型
 * @method void setOsType(string $OsType) 设置操作系统类型
 * @method string getOsVersion() 获取操作系统版本
 * @method void setOsVersion(string $OsVersion) 设置操作系统版本
 * @method string getPlatform() 获取操作系统平台
 * @method void setPlatform(string $Platform) 设置操作系统平台
 * @method integer getImageOwner() 获取镜像所有者
 * @method void setImageOwner(integer $ImageOwner) 设置镜像所有者
 * @method integer getImageSize() 获取镜像大小。单位：GB
 * @method void setImageSize(integer $ImageSize) 设置镜像大小。单位：GB
 * @method SrcImage getSrcImage() 获取镜像来源信息
 * @method void setSrcImage(SrcImage $SrcImage) 设置镜像来源信息
 * @method string getImageSource() 获取镜像来源类型
 * @method void setImageSource(string $ImageSource) 设置镜像来源类型
 * @method string getTaskId() 获取中间态和失败时候的任务ID
 * @method void setTaskId(string $TaskId) 设置中间态和失败时候的任务ID
 */
class Image extends AbstractModel
{
    /**
     * @var string 镜像ID
     */
    public $ImageId;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 镜像状态
     */
    public $ImageState;

    /**
     * @var string 镜像类型
     */
    public $ImageType;

    /**
     * @var string 操作系统名称
     */
    public $ImageOsName;

    /**
     * @var string 镜像描述
     */
    public $ImageDescription;

    /**
     * @var string 镜像导入时间
     */
    public $ImageCreateTime;

    /**
     * @var string 操作系统位数
     */
    public $Architecture;

    /**
     * @var string 操作系统类型
     */
    public $OsType;

    /**
     * @var string 操作系统版本
     */
    public $OsVersion;

    /**
     * @var string 操作系统平台
     */
    public $Platform;

    /**
     * @var integer 镜像所有者
     */
    public $ImageOwner;

    /**
     * @var integer 镜像大小。单位：GB
     */
    public $ImageSize;

    /**
     * @var SrcImage 镜像来源信息
     */
    public $SrcImage;

    /**
     * @var string 镜像来源类型
     */
    public $ImageSource;

    /**
     * @var string 中间态和失败时候的任务ID
     */
    public $TaskId;

    /**
     * @param string $ImageId 镜像ID
     * @param string $ImageName 镜像名称
     * @param string $ImageState 镜像状态
     * @param string $ImageType 镜像类型
     * @param string $ImageOsName 操作系统名称
     * @param string $ImageDescription 镜像描述
     * @param string $ImageCreateTime 镜像导入时间
     * @param string $Architecture 操作系统位数
     * @param string $OsType 操作系统类型
     * @param string $OsVersion 操作系统版本
     * @param string $Platform 操作系统平台
     * @param integer $ImageOwner 镜像所有者
     * @param integer $ImageSize 镜像大小。单位：GB
     * @param SrcImage $SrcImage 镜像来源信息
     * @param string $ImageSource 镜像来源类型
     * @param string $TaskId 中间态和失败时候的任务ID
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

        if (array_key_exists("ImageState",$param) and $param["ImageState"] !== null) {
            $this->ImageState = $param["ImageState"];
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("ImageOsName",$param) and $param["ImageOsName"] !== null) {
            $this->ImageOsName = $param["ImageOsName"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("ImageCreateTime",$param) and $param["ImageCreateTime"] !== null) {
            $this->ImageCreateTime = $param["ImageCreateTime"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("OsVersion",$param) and $param["OsVersion"] !== null) {
            $this->OsVersion = $param["OsVersion"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ImageOwner",$param) and $param["ImageOwner"] !== null) {
            $this->ImageOwner = $param["ImageOwner"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("SrcImage",$param) and $param["SrcImage"] !== null) {
            $this->SrcImage = new SrcImage();
            $this->SrcImage->deserialize($param["SrcImage"]);
        }

        if (array_key_exists("ImageSource",$param) and $param["ImageSource"] !== null) {
            $this->ImageSource = $param["ImageSource"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
