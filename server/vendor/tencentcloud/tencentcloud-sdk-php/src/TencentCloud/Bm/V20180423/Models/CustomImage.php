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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义镜像信息
 *
 * @method string getImageId() 获取镜像ID
 * @method void setImageId(string $ImageId) 设置镜像ID
 * @method string getImageName() 获取镜像别名
 * @method void setImageName(string $ImageName) 设置镜像别名
 * @method integer getImageStatus() 获取镜像状态码
 * @method void setImageStatus(integer $ImageStatus) 设置镜像状态码
 * @method string getOsClass() 获取镜像OS名
 * @method void setOsClass(string $OsClass) 设置镜像OS名
 * @method string getOsVersion() 获取镜像OS版本
 * @method void setOsVersion(string $OsVersion) 设置镜像OS版本
 * @method integer getOsBit() 获取OS是64还是32位
 * @method void setOsBit(integer $OsBit) 设置OS是64还是32位
 * @method integer getImageSize() 获取镜像大小(M)
 * @method void setImageSize(integer $ImageSize) 设置镜像大小(M)
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method array getPartitionInfoSet() 获取分区信息
 * @method void setPartitionInfoSet(array $PartitionInfoSet) 设置分区信息
 * @method string getDeviceClassCode() 获取适用机型
 * @method void setDeviceClassCode(string $DeviceClassCode) 设置适用机型
 * @method string getImageDescription() 获取备注
 * @method void setImageDescription(string $ImageDescription) 设置备注
 * @method integer getOsTypeId() 获取原始镜像id
 * @method void setOsTypeId(integer $OsTypeId) 设置原始镜像id
 */
class CustomImage extends AbstractModel
{
    /**
     * @var string 镜像ID
     */
    public $ImageId;

    /**
     * @var string 镜像别名
     */
    public $ImageName;

    /**
     * @var integer 镜像状态码
     */
    public $ImageStatus;

    /**
     * @var string 镜像OS名
     */
    public $OsClass;

    /**
     * @var string 镜像OS版本
     */
    public $OsVersion;

    /**
     * @var integer OS是64还是32位
     */
    public $OsBit;

    /**
     * @var integer 镜像大小(M)
     */
    public $ImageSize;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var array 分区信息
     */
    public $PartitionInfoSet;

    /**
     * @var string 适用机型
     */
    public $DeviceClassCode;

    /**
     * @var string 备注
     */
    public $ImageDescription;

    /**
     * @var integer 原始镜像id
     */
    public $OsTypeId;

    /**
     * @param string $ImageId 镜像ID
     * @param string $ImageName 镜像别名
     * @param integer $ImageStatus 镜像状态码
     * @param string $OsClass 镜像OS名
     * @param string $OsVersion 镜像OS版本
     * @param integer $OsBit OS是64还是32位
     * @param integer $ImageSize 镜像大小(M)
     * @param string $CreateTime 创建时间
     * @param array $PartitionInfoSet 分区信息
     * @param string $DeviceClassCode 适用机型
     * @param string $ImageDescription 备注
     * @param integer $OsTypeId 原始镜像id
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

        if (array_key_exists("ImageStatus",$param) and $param["ImageStatus"] !== null) {
            $this->ImageStatus = $param["ImageStatus"];
        }

        if (array_key_exists("OsClass",$param) and $param["OsClass"] !== null) {
            $this->OsClass = $param["OsClass"];
        }

        if (array_key_exists("OsVersion",$param) and $param["OsVersion"] !== null) {
            $this->OsVersion = $param["OsVersion"];
        }

        if (array_key_exists("OsBit",$param) and $param["OsBit"] !== null) {
            $this->OsBit = $param["OsBit"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PartitionInfoSet",$param) and $param["PartitionInfoSet"] !== null) {
            $this->PartitionInfoSet = [];
            foreach ($param["PartitionInfoSet"] as $key => $value){
                $obj = new PartitionInfo();
                $obj->deserialize($value);
                array_push($this->PartitionInfoSet, $obj);
            }
        }

        if (array_key_exists("DeviceClassCode",$param) and $param["DeviceClassCode"] !== null) {
            $this->DeviceClassCode = $param["DeviceClassCode"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("OsTypeId",$param) and $param["OsTypeId"] !== null) {
            $this->OsTypeId = $param["OsTypeId"];
        }
    }
}
