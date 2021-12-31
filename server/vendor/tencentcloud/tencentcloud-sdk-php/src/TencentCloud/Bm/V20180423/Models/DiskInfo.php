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
 * 自定义机型磁盘的描述
 *
 * @method integer getDiskTypeId() 获取磁盘ID
 * @method void setDiskTypeId(integer $DiskTypeId) 设置磁盘ID
 * @method integer getSize() 获取磁盘的容量，单位为G
 * @method void setSize(integer $Size) 设置磁盘的容量，单位为G
 * @method string getDiskDescription() 获取磁盘信息描述
 * @method void setDiskDescription(string $DiskDescription) 设置磁盘信息描述
 */
class DiskInfo extends AbstractModel
{
    /**
     * @var integer 磁盘ID
     */
    public $DiskTypeId;

    /**
     * @var integer 磁盘的容量，单位为G
     */
    public $Size;

    /**
     * @var string 磁盘信息描述
     */
    public $DiskDescription;

    /**
     * @param integer $DiskTypeId 磁盘ID
     * @param integer $Size 磁盘的容量，单位为G
     * @param string $DiskDescription 磁盘信息描述
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
        if (array_key_exists("DiskTypeId",$param) and $param["DiskTypeId"] !== null) {
            $this->DiskTypeId = $param["DiskTypeId"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("DiskDescription",$param) and $param["DiskDescription"] !== null) {
            $this->DiskDescription = $param["DiskDescription"];
        }
    }
}
