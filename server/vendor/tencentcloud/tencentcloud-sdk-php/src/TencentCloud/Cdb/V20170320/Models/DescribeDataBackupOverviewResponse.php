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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataBackupOverview返回参数结构体
 *
 * @method integer getDataBackupVolume() 获取当前地域的数据备份总容量（包含自动备份和手动备份，单位为字节）。
 * @method void setDataBackupVolume(integer $DataBackupVolume) 设置当前地域的数据备份总容量（包含自动备份和手动备份，单位为字节）。
 * @method integer getDataBackupCount() 获取当前地域的数据备份总个数。
 * @method void setDataBackupCount(integer $DataBackupCount) 设置当前地域的数据备份总个数。
 * @method integer getAutoBackupVolume() 获取当前地域的自动备份总容量。
 * @method void setAutoBackupVolume(integer $AutoBackupVolume) 设置当前地域的自动备份总容量。
 * @method integer getAutoBackupCount() 获取当前地域的自动备份总个数。
 * @method void setAutoBackupCount(integer $AutoBackupCount) 设置当前地域的自动备份总个数。
 * @method integer getManualBackupVolume() 获取当前地域的手动备份总容量。
 * @method void setManualBackupVolume(integer $ManualBackupVolume) 设置当前地域的手动备份总容量。
 * @method integer getManualBackupCount() 获取当前地域的手动备份总个数。
 * @method void setManualBackupCount(integer $ManualBackupCount) 设置当前地域的手动备份总个数。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDataBackupOverviewResponse extends AbstractModel
{
    /**
     * @var integer 当前地域的数据备份总容量（包含自动备份和手动备份，单位为字节）。
     */
    public $DataBackupVolume;

    /**
     * @var integer 当前地域的数据备份总个数。
     */
    public $DataBackupCount;

    /**
     * @var integer 当前地域的自动备份总容量。
     */
    public $AutoBackupVolume;

    /**
     * @var integer 当前地域的自动备份总个数。
     */
    public $AutoBackupCount;

    /**
     * @var integer 当前地域的手动备份总容量。
     */
    public $ManualBackupVolume;

    /**
     * @var integer 当前地域的手动备份总个数。
     */
    public $ManualBackupCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $DataBackupVolume 当前地域的数据备份总容量（包含自动备份和手动备份，单位为字节）。
     * @param integer $DataBackupCount 当前地域的数据备份总个数。
     * @param integer $AutoBackupVolume 当前地域的自动备份总容量。
     * @param integer $AutoBackupCount 当前地域的自动备份总个数。
     * @param integer $ManualBackupVolume 当前地域的手动备份总容量。
     * @param integer $ManualBackupCount 当前地域的手动备份总个数。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DataBackupVolume",$param) and $param["DataBackupVolume"] !== null) {
            $this->DataBackupVolume = $param["DataBackupVolume"];
        }

        if (array_key_exists("DataBackupCount",$param) and $param["DataBackupCount"] !== null) {
            $this->DataBackupCount = $param["DataBackupCount"];
        }

        if (array_key_exists("AutoBackupVolume",$param) and $param["AutoBackupVolume"] !== null) {
            $this->AutoBackupVolume = $param["AutoBackupVolume"];
        }

        if (array_key_exists("AutoBackupCount",$param) and $param["AutoBackupCount"] !== null) {
            $this->AutoBackupCount = $param["AutoBackupCount"];
        }

        if (array_key_exists("ManualBackupVolume",$param) and $param["ManualBackupVolume"] !== null) {
            $this->ManualBackupVolume = $param["ManualBackupVolume"];
        }

        if (array_key_exists("ManualBackupCount",$param) and $param["ManualBackupCount"] !== null) {
            $this->ManualBackupCount = $param["ManualBackupCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
