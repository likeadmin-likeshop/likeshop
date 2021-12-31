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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * emptydir 数据卷详细信息
 *
 * @method boolean getEnableEmptyDirVolume() 获取启用emptydir数据卷
 * @method void setEnableEmptyDirVolume(boolean $EnableEmptyDirVolume) 设置启用emptydir数据卷
 * @method string getMedium() 获取"","Memory","HugePages"
 * @method void setMedium(string $Medium) 设置"","Memory","HugePages"
 * @method string getSizeLimit() 获取emptydir数据卷大小
 * @method void setSizeLimit(string $SizeLimit) 设置emptydir数据卷大小
 */
class CloudBaseRunEmptyDirVolumeSource extends AbstractModel
{
    /**
     * @var boolean 启用emptydir数据卷
     */
    public $EnableEmptyDirVolume;

    /**
     * @var string "","Memory","HugePages"
     */
    public $Medium;

    /**
     * @var string emptydir数据卷大小
     */
    public $SizeLimit;

    /**
     * @param boolean $EnableEmptyDirVolume 启用emptydir数据卷
     * @param string $Medium "","Memory","HugePages"
     * @param string $SizeLimit emptydir数据卷大小
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
        if (array_key_exists("EnableEmptyDirVolume",$param) and $param["EnableEmptyDirVolume"] !== null) {
            $this->EnableEmptyDirVolume = $param["EnableEmptyDirVolume"];
        }

        if (array_key_exists("Medium",$param) and $param["Medium"] !== null) {
            $this->Medium = $param["Medium"];
        }

        if (array_key_exists("SizeLimit",$param) and $param["SizeLimit"] !== null) {
            $this->SizeLimit = $param["SizeLimit"];
        }
    }
}
