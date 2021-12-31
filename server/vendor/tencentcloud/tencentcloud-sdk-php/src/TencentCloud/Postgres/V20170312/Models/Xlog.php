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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库Xlog信息
 *
 * @method integer getId() 获取备份文件唯一标识
 * @method void setId(integer $Id) 设置备份文件唯一标识
 * @method string getStartTime() 获取文件生成的开始时间
 * @method void setStartTime(string $StartTime) 设置文件生成的开始时间
 * @method string getEndTime() 获取文件生成的结束时间
 * @method void setEndTime(string $EndTime) 设置文件生成的结束时间
 * @method string getInternalAddr() 获取内网下载地址
 * @method void setInternalAddr(string $InternalAddr) 设置内网下载地址
 * @method string getExternalAddr() 获取外网下载地址
 * @method void setExternalAddr(string $ExternalAddr) 设置外网下载地址
 * @method integer getSize() 获取备份文件大小
 * @method void setSize(integer $Size) 设置备份文件大小
 */
class Xlog extends AbstractModel
{
    /**
     * @var integer 备份文件唯一标识
     */
    public $Id;

    /**
     * @var string 文件生成的开始时间
     */
    public $StartTime;

    /**
     * @var string 文件生成的结束时间
     */
    public $EndTime;

    /**
     * @var string 内网下载地址
     */
    public $InternalAddr;

    /**
     * @var string 外网下载地址
     */
    public $ExternalAddr;

    /**
     * @var integer 备份文件大小
     */
    public $Size;

    /**
     * @param integer $Id 备份文件唯一标识
     * @param string $StartTime 文件生成的开始时间
     * @param string $EndTime 文件生成的结束时间
     * @param string $InternalAddr 内网下载地址
     * @param string $ExternalAddr 外网下载地址
     * @param integer $Size 备份文件大小
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InternalAddr",$param) and $param["InternalAddr"] !== null) {
            $this->InternalAddr = $param["InternalAddr"];
        }

        if (array_key_exists("ExternalAddr",$param) and $param["ExternalAddr"] !== null) {
            $this->ExternalAddr = $param["ExternalAddr"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
