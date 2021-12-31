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
 * 硬盘大小的描述
 *
 * @method string getDiskName() 获取硬盘名称
 * @method void setDiskName(string $DiskName) 设置硬盘名称
 * @method integer getDiskSize() 获取硬盘大小（单位GiB）
 * @method void setDiskSize(integer $DiskSize) 设置硬盘大小（单位GiB）
 */
class DeviceDiskSizeInfo extends AbstractModel
{
    /**
     * @var string 硬盘名称
     */
    public $DiskName;

    /**
     * @var integer 硬盘大小（单位GiB）
     */
    public $DiskSize;

    /**
     * @param string $DiskName 硬盘名称
     * @param integer $DiskSize 硬盘大小（单位GiB）
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
        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
