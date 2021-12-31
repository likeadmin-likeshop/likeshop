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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAssetWithImage请求参数结构体
 *
 * @method string getAssetName() 获取生成包名字，最小长度为1，最大长度为64
 * @method void setAssetName(string $AssetName) 设置生成包名字，最小长度为1，最大长度为64
 * @method string getAssetVersion() 获取生成包版本，最小长度为1，最大长度为64
 * @method void setAssetVersion(string $AssetVersion) 设置生成包版本，最小长度为1，最大长度为64
 * @method string getAssetRegion() 获取生成包所在地域，详见产品支持的 [地域列表](https://cloud.tencent.com/document/api/1165/42053#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8)
 * @method void setAssetRegion(string $AssetRegion) 设置生成包所在地域，详见产品支持的 [地域列表](https://cloud.tencent.com/document/api/1165/42053#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8)
 * @method string getImageId() 获取生成包支持的操作系统镜像id
 * @method void setImageId(string $ImageId) 设置生成包支持的操作系统镜像id
 * @method string getImageSize() 获取操作系统镜像包大小，比如：40GB，支持单位 KB、MB、GB
 * @method void setImageSize(string $ImageSize) 设置操作系统镜像包大小，比如：40GB，支持单位 KB、MB、GB
 * @method string getImageOs() 获取操作系统镜像包名称，最小长度为1，最大长度为64
 * @method void setImageOs(string $ImageOs) 设置操作系统镜像包名称，最小长度为1，最大长度为64
 * @method string getOsType() 获取操作系统镜像包类型，CentOS 或者 Windows
 * @method void setOsType(string $OsType) 设置操作系统镜像包类型，CentOS 或者 Windows
 * @method string getImageType() 获取操作系统镜像包类型，当前只支持 SHARED_IMAGE
 * @method void setImageType(string $ImageType) 设置操作系统镜像包类型，当前只支持 SHARED_IMAGE
 * @method integer getOsBit() 获取操作系统镜像包位数，32 或者 64
 * @method void setOsBit(integer $OsBit) 设置操作系统镜像包位数，32 或者 64
 */
class CreateAssetWithImageRequest extends AbstractModel
{
    /**
     * @var string 生成包名字，最小长度为1，最大长度为64
     */
    public $AssetName;

    /**
     * @var string 生成包版本，最小长度为1，最大长度为64
     */
    public $AssetVersion;

    /**
     * @var string 生成包所在地域，详见产品支持的 [地域列表](https://cloud.tencent.com/document/api/1165/42053#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8)
     */
    public $AssetRegion;

    /**
     * @var string 生成包支持的操作系统镜像id
     */
    public $ImageId;

    /**
     * @var string 操作系统镜像包大小，比如：40GB，支持单位 KB、MB、GB
     */
    public $ImageSize;

    /**
     * @var string 操作系统镜像包名称，最小长度为1，最大长度为64
     */
    public $ImageOs;

    /**
     * @var string 操作系统镜像包类型，CentOS 或者 Windows
     */
    public $OsType;

    /**
     * @var string 操作系统镜像包类型，当前只支持 SHARED_IMAGE
     */
    public $ImageType;

    /**
     * @var integer 操作系统镜像包位数，32 或者 64
     */
    public $OsBit;

    /**
     * @param string $AssetName 生成包名字，最小长度为1，最大长度为64
     * @param string $AssetVersion 生成包版本，最小长度为1，最大长度为64
     * @param string $AssetRegion 生成包所在地域，详见产品支持的 [地域列表](https://cloud.tencent.com/document/api/1165/42053#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8)
     * @param string $ImageId 生成包支持的操作系统镜像id
     * @param string $ImageSize 操作系统镜像包大小，比如：40GB，支持单位 KB、MB、GB
     * @param string $ImageOs 操作系统镜像包名称，最小长度为1，最大长度为64
     * @param string $OsType 操作系统镜像包类型，CentOS 或者 Windows
     * @param string $ImageType 操作系统镜像包类型，当前只支持 SHARED_IMAGE
     * @param integer $OsBit 操作系统镜像包位数，32 或者 64
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
        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetVersion",$param) and $param["AssetVersion"] !== null) {
            $this->AssetVersion = $param["AssetVersion"];
        }

        if (array_key_exists("AssetRegion",$param) and $param["AssetRegion"] !== null) {
            $this->AssetRegion = $param["AssetRegion"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("ImageOs",$param) and $param["ImageOs"] !== null) {
            $this->ImageOs = $param["ImageOs"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("OsBit",$param) and $param["OsBit"] !== null) {
            $this->OsBit = $param["OsBit"];
        }
    }
}
