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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点本地盘信息
 *
 * @method string getLocalDiskType() 获取本地盘类型<li>LOCAL_SATA：大数据型</li><li>NVME_SSD：高IO型</li>
 * @method void setLocalDiskType(string $LocalDiskType) 设置本地盘类型<li>LOCAL_SATA：大数据型</li><li>NVME_SSD：高IO型</li>
 * @method integer getLocalDiskSize() 获取本地盘单盘大小
 * @method void setLocalDiskSize(integer $LocalDiskSize) 设置本地盘单盘大小
 * @method integer getLocalDiskCount() 获取本地盘块数
 * @method void setLocalDiskCount(integer $LocalDiskCount) 设置本地盘块数
 */
class LocalDiskInfo extends AbstractModel
{
    /**
     * @var string 本地盘类型<li>LOCAL_SATA：大数据型</li><li>NVME_SSD：高IO型</li>
     */
    public $LocalDiskType;

    /**
     * @var integer 本地盘单盘大小
     */
    public $LocalDiskSize;

    /**
     * @var integer 本地盘块数
     */
    public $LocalDiskCount;

    /**
     * @param string $LocalDiskType 本地盘类型<li>LOCAL_SATA：大数据型</li><li>NVME_SSD：高IO型</li>
     * @param integer $LocalDiskSize 本地盘单盘大小
     * @param integer $LocalDiskCount 本地盘块数
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
        if (array_key_exists("LocalDiskType",$param) and $param["LocalDiskType"] !== null) {
            $this->LocalDiskType = $param["LocalDiskType"];
        }

        if (array_key_exists("LocalDiskSize",$param) and $param["LocalDiskSize"] !== null) {
            $this->LocalDiskSize = $param["LocalDiskSize"];
        }

        if (array_key_exists("LocalDiskCount",$param) and $param["LocalDiskCount"] !== null) {
            $this->LocalDiskCount = $param["LocalDiskCount"];
        }
    }
}
