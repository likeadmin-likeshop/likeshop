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
 * 数据库备份信息
 *
 * @method integer getId() 获取备份文件唯一标识
 * @method void setId(integer $Id) 设置备份文件唯一标识
 * @method string getStartTime() 获取文件生成的开始时间
 * @method void setStartTime(string $StartTime) 设置文件生成的开始时间
 * @method string getEndTime() 获取文件生成的结束时间
 * @method void setEndTime(string $EndTime) 设置文件生成的结束时间
 * @method integer getSize() 获取文件大小(K)
 * @method void setSize(integer $Size) 设置文件大小(K)
 * @method integer getStrategy() 获取策略（0-实例备份；1-多库备份）
 * @method void setStrategy(integer $Strategy) 设置策略（0-实例备份；1-多库备份）
 * @method integer getWay() 获取类型（0-定时）
 * @method void setWay(integer $Way) 设置类型（0-定时）
 * @method integer getType() 获取备份方式（1-完整）
 * @method void setType(integer $Type) 设置备份方式（1-完整）
 * @method integer getStatus() 获取状态（1-创建中；2-成功；3-失败）
 * @method void setStatus(integer $Status) 设置状态（1-创建中；2-成功；3-失败）
 * @method array getDbList() 获取DB列表
 * @method void setDbList(array $DbList) 设置DB列表
 * @method string getInternalAddr() 获取内网下载地址
 * @method void setInternalAddr(string $InternalAddr) 设置内网下载地址
 * @method string getExternalAddr() 获取外网下载地址
 * @method void setExternalAddr(string $ExternalAddr) 设置外网下载地址
 */
class DBBackup extends AbstractModel
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
     * @var integer 文件大小(K)
     */
    public $Size;

    /**
     * @var integer 策略（0-实例备份；1-多库备份）
     */
    public $Strategy;

    /**
     * @var integer 类型（0-定时）
     */
    public $Way;

    /**
     * @var integer 备份方式（1-完整）
     */
    public $Type;

    /**
     * @var integer 状态（1-创建中；2-成功；3-失败）
     */
    public $Status;

    /**
     * @var array DB列表
     */
    public $DbList;

    /**
     * @var string 内网下载地址
     */
    public $InternalAddr;

    /**
     * @var string 外网下载地址
     */
    public $ExternalAddr;

    /**
     * @param integer $Id 备份文件唯一标识
     * @param string $StartTime 文件生成的开始时间
     * @param string $EndTime 文件生成的结束时间
     * @param integer $Size 文件大小(K)
     * @param integer $Strategy 策略（0-实例备份；1-多库备份）
     * @param integer $Way 类型（0-定时）
     * @param integer $Type 备份方式（1-完整）
     * @param integer $Status 状态（1-创建中；2-成功；3-失败）
     * @param array $DbList DB列表
     * @param string $InternalAddr 内网下载地址
     * @param string $ExternalAddr 外网下载地址
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("Way",$param) and $param["Way"] !== null) {
            $this->Way = $param["Way"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DbList",$param) and $param["DbList"] !== null) {
            $this->DbList = $param["DbList"];
        }

        if (array_key_exists("InternalAddr",$param) and $param["InternalAddr"] !== null) {
            $this->InternalAddr = $param["InternalAddr"];
        }

        if (array_key_exists("ExternalAddr",$param) and $param["ExternalAddr"] !== null) {
            $this->ExternalAddr = $param["ExternalAddr"];
        }
    }
}
