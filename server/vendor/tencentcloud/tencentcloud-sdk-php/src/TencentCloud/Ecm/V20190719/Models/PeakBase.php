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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 峰值信息
 *
 * @method integer getPeakCpuNum() 获取CPU峰值
 * @method void setPeakCpuNum(integer $PeakCpuNum) 设置CPU峰值
 * @method integer getPeakMemoryNum() 获取内存峰值
 * @method void setPeakMemoryNum(integer $PeakMemoryNum) 设置内存峰值
 * @method integer getPeakStorageNum() 获取硬盘峰值
 * @method void setPeakStorageNum(integer $PeakStorageNum) 设置硬盘峰值
 * @method string getRecordTime() 获取记录时间
 * @method void setRecordTime(string $RecordTime) 设置记录时间
 */
class PeakBase extends AbstractModel
{
    /**
     * @var integer CPU峰值
     */
    public $PeakCpuNum;

    /**
     * @var integer 内存峰值
     */
    public $PeakMemoryNum;

    /**
     * @var integer 硬盘峰值
     */
    public $PeakStorageNum;

    /**
     * @var string 记录时间
     */
    public $RecordTime;

    /**
     * @param integer $PeakCpuNum CPU峰值
     * @param integer $PeakMemoryNum 内存峰值
     * @param integer $PeakStorageNum 硬盘峰值
     * @param string $RecordTime 记录时间
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
        if (array_key_exists("PeakCpuNum",$param) and $param["PeakCpuNum"] !== null) {
            $this->PeakCpuNum = $param["PeakCpuNum"];
        }

        if (array_key_exists("PeakMemoryNum",$param) and $param["PeakMemoryNum"] !== null) {
            $this->PeakMemoryNum = $param["PeakMemoryNum"];
        }

        if (array_key_exists("PeakStorageNum",$param) and $param["PeakStorageNum"] !== null) {
            $this->PeakStorageNum = $param["PeakStorageNum"];
        }

        if (array_key_exists("RecordTime",$param) and $param["RecordTime"] !== null) {
            $this->RecordTime = $param["RecordTime"];
        }
    }
}
