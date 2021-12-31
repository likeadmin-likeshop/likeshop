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
 * 生成包支持操作系统详细信息
 *
 * @method string getImageId() 获取生成包操作系统的镜像Id
 * @method void setImageId(string $ImageId) 设置生成包操作系统的镜像Id
 * @method string getOsType() 获取生成包操作系统的类型
 * @method void setOsType(string $OsType) 设置生成包操作系统的类型
 * @method integer getOsBit() 获取生成包操作系统的位数
 * @method void setOsBit(integer $OsBit) 设置生成包操作系统的位数
 * @method string getOsVersion() 获取生成包操作系统的版本
 * @method void setOsVersion(string $OsVersion) 设置生成包操作系统的版本
 */
class AssetSupportSys extends AbstractModel
{
    /**
     * @var string 生成包操作系统的镜像Id
     */
    public $ImageId;

    /**
     * @var string 生成包操作系统的类型
     */
    public $OsType;

    /**
     * @var integer 生成包操作系统的位数
     */
    public $OsBit;

    /**
     * @var string 生成包操作系统的版本
     */
    public $OsVersion;

    /**
     * @param string $ImageId 生成包操作系统的镜像Id
     * @param string $OsType 生成包操作系统的类型
     * @param integer $OsBit 生成包操作系统的位数
     * @param string $OsVersion 生成包操作系统的版本
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

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("OsBit",$param) and $param["OsBit"] !== null) {
            $this->OsBit = $param["OsBit"];
        }

        if (array_key_exists("OsVersion",$param) and $param["OsVersion"] !== null) {
            $this->OsVersion = $param["OsVersion"];
        }
    }
}
