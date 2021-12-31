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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多云盘参数
 *
 * @method string getDiskType() 获取云盘类型("CLOUD_PREMIUM","CLOUD_SSD","CLOUD_BASIC")的一种
 * @method void setDiskType(string $DiskType) 设置云盘类型("CLOUD_PREMIUM","CLOUD_SSD","CLOUD_BASIC")的一种
 * @method integer getVolume() 获取云盘大小
 * @method void setVolume(integer $Volume) 设置云盘大小
 * @method integer getCount() 获取该类型云盘个数
 * @method void setCount(integer $Count) 设置该类型云盘个数
 */
class MultiDisk extends AbstractModel
{
    /**
     * @var string 云盘类型("CLOUD_PREMIUM","CLOUD_SSD","CLOUD_BASIC")的一种
     */
    public $DiskType;

    /**
     * @var integer 云盘大小
     */
    public $Volume;

    /**
     * @var integer 该类型云盘个数
     */
    public $Count;

    /**
     * @param string $DiskType 云盘类型("CLOUD_PREMIUM","CLOUD_SSD","CLOUD_BASIC")的一种
     * @param integer $Volume 云盘大小
     * @param integer $Count 该类型云盘个数
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
