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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * server独占机器的详细信息
 *
 * @method string getServerUid() 获取svr唯一id
 * @method void setServerUid(string $ServerUid) 设置svr唯一id
 * @method string getMachineType() 获取机器类型
 * @method void setMachineType(string $MachineType) 设置机器类型
 * @method integer getMemoryRate() 获取内存占用量
 * @method void setMemoryRate(integer $MemoryRate) 设置内存占用量
 * @method integer getDiskRate() 获取磁盘占用量
 * @method void setDiskRate(integer $DiskRate) 设置磁盘占用量
 * @method integer getReadNum() 获取读次数
 * @method void setReadNum(integer $ReadNum) 设置读次数
 * @method integer getWriteNum() 获取写次数
 * @method void setWriteNum(integer $WriteNum) 设置写次数
 */
class ServerDetailInfo extends AbstractModel
{
    /**
     * @var string svr唯一id
     */
    public $ServerUid;

    /**
     * @var string 机器类型
     */
    public $MachineType;

    /**
     * @var integer 内存占用量
     */
    public $MemoryRate;

    /**
     * @var integer 磁盘占用量
     */
    public $DiskRate;

    /**
     * @var integer 读次数
     */
    public $ReadNum;

    /**
     * @var integer 写次数
     */
    public $WriteNum;

    /**
     * @param string $ServerUid svr唯一id
     * @param string $MachineType 机器类型
     * @param integer $MemoryRate 内存占用量
     * @param integer $DiskRate 磁盘占用量
     * @param integer $ReadNum 读次数
     * @param integer $WriteNum 写次数
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
        if (array_key_exists("ServerUid",$param) and $param["ServerUid"] !== null) {
            $this->ServerUid = $param["ServerUid"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MemoryRate",$param) and $param["MemoryRate"] !== null) {
            $this->MemoryRate = $param["MemoryRate"];
        }

        if (array_key_exists("DiskRate",$param) and $param["DiskRate"] !== null) {
            $this->DiskRate = $param["DiskRate"];
        }

        if (array_key_exists("ReadNum",$param) and $param["ReadNum"] !== null) {
            $this->ReadNum = $param["ReadNum"];
        }

        if (array_key_exists("WriteNum",$param) and $param["WriteNum"] !== null) {
            $this->WriteNum = $param["WriteNum"];
        }
    }
}
