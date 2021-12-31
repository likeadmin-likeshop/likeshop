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
 * 二进制日志信息
 *
 * @method string getName() 获取binlog 日志备份文件名
 * @method void setName(string $Name) 设置binlog 日志备份文件名
 * @method integer getSize() 获取备份文件大小，单位：Byte
 * @method void setSize(integer $Size) 设置备份文件大小，单位：Byte
 * @method string getDate() 获取文件存储时间，时间格式：2016-03-17 02:10:37
 * @method void setDate(string $Date) 设置文件存储时间，时间格式：2016-03-17 02:10:37
 * @method string getIntranetUrl() 获取内网下载地址
 * @method void setIntranetUrl(string $IntranetUrl) 设置内网下载地址
 * @method string getInternetUrl() 获取外网下载地址
 * @method void setInternetUrl(string $InternetUrl) 设置外网下载地址
 * @method string getType() 获取日志具体类型，可能的值有：binlog - 二进制日志
 * @method void setType(string $Type) 设置日志具体类型，可能的值有：binlog - 二进制日志
 * @method string getBinlogStartTime() 获取binlog 文件起始时间
 * @method void setBinlogStartTime(string $BinlogStartTime) 设置binlog 文件起始时间
 * @method string getBinlogFinishTime() 获取binlog 文件截止时间
 * @method void setBinlogFinishTime(string $BinlogFinishTime) 设置binlog 文件截止时间
 */
class BinlogInfo extends AbstractModel
{
    /**
     * @var string binlog 日志备份文件名
     */
    public $Name;

    /**
     * @var integer 备份文件大小，单位：Byte
     */
    public $Size;

    /**
     * @var string 文件存储时间，时间格式：2016-03-17 02:10:37
     */
    public $Date;

    /**
     * @var string 内网下载地址
     */
    public $IntranetUrl;

    /**
     * @var string 外网下载地址
     */
    public $InternetUrl;

    /**
     * @var string 日志具体类型，可能的值有：binlog - 二进制日志
     */
    public $Type;

    /**
     * @var string binlog 文件起始时间
     */
    public $BinlogStartTime;

    /**
     * @var string binlog 文件截止时间
     */
    public $BinlogFinishTime;

    /**
     * @param string $Name binlog 日志备份文件名
     * @param integer $Size 备份文件大小，单位：Byte
     * @param string $Date 文件存储时间，时间格式：2016-03-17 02:10:37
     * @param string $IntranetUrl 内网下载地址
     * @param string $InternetUrl 外网下载地址
     * @param string $Type 日志具体类型，可能的值有：binlog - 二进制日志
     * @param string $BinlogStartTime binlog 文件起始时间
     * @param string $BinlogFinishTime binlog 文件截止时间
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("IntranetUrl",$param) and $param["IntranetUrl"] !== null) {
            $this->IntranetUrl = $param["IntranetUrl"];
        }

        if (array_key_exists("InternetUrl",$param) and $param["InternetUrl"] !== null) {
            $this->InternetUrl = $param["InternetUrl"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("BinlogStartTime",$param) and $param["BinlogStartTime"] !== null) {
            $this->BinlogStartTime = $param["BinlogStartTime"];
        }

        if (array_key_exists("BinlogFinishTime",$param) and $param["BinlogFinishTime"] !== null) {
            $this->BinlogFinishTime = $param["BinlogFinishTime"];
        }
    }
}
