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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportImage请求参数结构体
 *
 * @method string getArchitecture() 获取导入镜像的操作系统架构，`x86_64` 或 `i386`
 * @method void setArchitecture(string $Architecture) 设置导入镜像的操作系统架构，`x86_64` 或 `i386`
 * @method string getOsType() 获取导入镜像的操作系统类型，通过`DescribeImportImageOs`获取
 * @method void setOsType(string $OsType) 设置导入镜像的操作系统类型，通过`DescribeImportImageOs`获取
 * @method string getOsVersion() 获取导入镜像的操作系统版本，通过`DescribeImportImageOs`获取
 * @method void setOsVersion(string $OsVersion) 设置导入镜像的操作系统版本，通过`DescribeImportImageOs`获取
 * @method string getImageUrl() 获取导入镜像存放的cos地址
 * @method void setImageUrl(string $ImageUrl) 设置导入镜像存放的cos地址
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getImageDescription() 获取镜像描述
 * @method void setImageDescription(string $ImageDescription) 设置镜像描述
 * @method boolean getDryRun() 获取只检查参数，不执行任务
 * @method void setDryRun(boolean $DryRun) 设置只检查参数，不执行任务
 * @method boolean getForce() 获取是否强制导入，参考[强制导入镜像](https://cloud.tencent.com/document/product/213/12849)
 * @method void setForce(boolean $Force) 设置是否强制导入，参考[强制导入镜像](https://cloud.tencent.com/document/product/213/12849)
 */
class ImportImageRequest extends AbstractModel
{
    /**
     * @var string 导入镜像的操作系统架构，`x86_64` 或 `i386`
     */
    public $Architecture;

    /**
     * @var string 导入镜像的操作系统类型，通过`DescribeImportImageOs`获取
     */
    public $OsType;

    /**
     * @var string 导入镜像的操作系统版本，通过`DescribeImportImageOs`获取
     */
    public $OsVersion;

    /**
     * @var string 导入镜像存放的cos地址
     */
    public $ImageUrl;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 镜像描述
     */
    public $ImageDescription;

    /**
     * @var boolean 只检查参数，不执行任务
     */
    public $DryRun;

    /**
     * @var boolean 是否强制导入，参考[强制导入镜像](https://cloud.tencent.com/document/product/213/12849)
     */
    public $Force;

    /**
     * @param string $Architecture 导入镜像的操作系统架构，`x86_64` 或 `i386`
     * @param string $OsType 导入镜像的操作系统类型，通过`DescribeImportImageOs`获取
     * @param string $OsVersion 导入镜像的操作系统版本，通过`DescribeImportImageOs`获取
     * @param string $ImageUrl 导入镜像存放的cos地址
     * @param string $ImageName 镜像名称
     * @param string $ImageDescription 镜像描述
     * @param boolean $DryRun 只检查参数，不执行任务
     * @param boolean $Force 是否强制导入，参考[强制导入镜像](https://cloud.tencent.com/document/product/213/12849)
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
        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("OsVersion",$param) and $param["OsVersion"] !== null) {
            $this->OsVersion = $param["OsVersion"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
