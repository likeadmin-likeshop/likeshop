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
 * ImportCustomImage请求参数结构体
 *
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getArchitecture() 获取导入镜像的操作系统架构，x86_64 或 i386
 * @method void setArchitecture(string $Architecture) 设置导入镜像的操作系统架构，x86_64 或 i386
 * @method string getOsType() 获取导入镜像的操作系统类型，通过DescribeImportImageOs获取
 * @method void setOsType(string $OsType) 设置导入镜像的操作系统类型，通过DescribeImportImageOs获取
 * @method string getOsVersion() 获取导入镜像的操作系统版本，通过DescribeImportImageOs获取
 * @method void setOsVersion(string $OsVersion) 设置导入镜像的操作系统版本，通过DescribeImportImageOs获取
 * @method string getImageDescription() 获取镜像描述
 * @method void setImageDescription(string $ImageDescription) 设置镜像描述
 * @method string getInitFlag() 获取镜像启动方式，cloudinit或nbd， 默认cloudinit
 * @method void setInitFlag(string $InitFlag) 设置镜像启动方式，cloudinit或nbd， 默认cloudinit
 * @method array getImageUrls() 获取镜像文件描述，多层镜像按顺序传入
 * @method void setImageUrls(array $ImageUrls) 设置镜像文件描述，多层镜像按顺序传入
 */
class ImportCustomImageRequest extends AbstractModel
{
    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 导入镜像的操作系统架构，x86_64 或 i386
     */
    public $Architecture;

    /**
     * @var string 导入镜像的操作系统类型，通过DescribeImportImageOs获取
     */
    public $OsType;

    /**
     * @var string 导入镜像的操作系统版本，通过DescribeImportImageOs获取
     */
    public $OsVersion;

    /**
     * @var string 镜像描述
     */
    public $ImageDescription;

    /**
     * @var string 镜像启动方式，cloudinit或nbd， 默认cloudinit
     */
    public $InitFlag;

    /**
     * @var array 镜像文件描述，多层镜像按顺序传入
     */
    public $ImageUrls;

    /**
     * @param string $ImageName 镜像名称
     * @param string $Architecture 导入镜像的操作系统架构，x86_64 或 i386
     * @param string $OsType 导入镜像的操作系统类型，通过DescribeImportImageOs获取
     * @param string $OsVersion 导入镜像的操作系统版本，通过DescribeImportImageOs获取
     * @param string $ImageDescription 镜像描述
     * @param string $InitFlag 镜像启动方式，cloudinit或nbd， 默认cloudinit
     * @param array $ImageUrls 镜像文件描述，多层镜像按顺序传入
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
        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
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

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("InitFlag",$param) and $param["InitFlag"] !== null) {
            $this->InitFlag = $param["InitFlag"];
        }

        if (array_key_exists("ImageUrls",$param) and $param["ImageUrls"] !== null) {
            $this->ImageUrls = [];
            foreach ($param["ImageUrls"] as $key => $value){
                $obj = new ImageUrl();
                $obj->deserialize($value);
                array_push($this->ImageUrls, $obj);
            }
        }
    }
}
