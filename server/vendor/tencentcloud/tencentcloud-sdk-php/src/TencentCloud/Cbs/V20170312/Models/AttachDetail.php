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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述一个实例已挂载和可挂载数据盘的数量。
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method integer getAttachedDiskCount() 获取实例已挂载数据盘的数量。
 * @method void setAttachedDiskCount(integer $AttachedDiskCount) 设置实例已挂载数据盘的数量。
 * @method integer getMaxAttachCount() 获取实例最大可挂载数据盘的数量。
 * @method void setMaxAttachCount(integer $MaxAttachCount) 设置实例最大可挂载数据盘的数量。
 */
class AttachDetail extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var integer 实例已挂载数据盘的数量。
     */
    public $AttachedDiskCount;

    /**
     * @var integer 实例最大可挂载数据盘的数量。
     */
    public $MaxAttachCount;

    /**
     * @param string $InstanceId 实例ID。
     * @param integer $AttachedDiskCount 实例已挂载数据盘的数量。
     * @param integer $MaxAttachCount 实例最大可挂载数据盘的数量。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AttachedDiskCount",$param) and $param["AttachedDiskCount"] !== null) {
            $this->AttachedDiskCount = $param["AttachedDiskCount"];
        }

        if (array_key_exists("MaxAttachCount",$param) and $param["MaxAttachCount"] !== null) {
            $this->MaxAttachCount = $param["MaxAttachCount"];
        }
    }
}
