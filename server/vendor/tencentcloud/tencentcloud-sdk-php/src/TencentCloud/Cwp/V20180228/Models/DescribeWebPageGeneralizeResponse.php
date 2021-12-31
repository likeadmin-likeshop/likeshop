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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWebPageGeneralize返回参数结构体
 *
 * @method integer getProtectMonitor() 获取防护监测 0 未开启 1 已开启 2 异常
 * @method void setProtectMonitor(integer $ProtectMonitor) 设置防护监测 0 未开启 1 已开启 2 异常
 * @method integer getProtectDirNum() 获取防护目录数
 * @method void setProtectDirNum(integer $ProtectDirNum) 设置防护目录数
 * @method integer getProtectFileNum() 获取防护文件数
 * @method void setProtectFileNum(integer $ProtectFileNum) 设置防护文件数
 * @method integer getTamperFileNum() 获取篡改文件数
 * @method void setTamperFileNum(integer $TamperFileNum) 设置篡改文件数
 * @method integer getTamperNum() 获取篡改数
 * @method void setTamperNum(integer $TamperNum) 设置篡改数
 * @method integer getProtectToday() 获取今日防护
 * @method void setProtectToday(integer $ProtectToday) 设置今日防护
 * @method integer getProtectHostNum() 获取防护主机数
 * @method void setProtectHostNum(integer $ProtectHostNum) 设置防护主机数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeWebPageGeneralizeResponse extends AbstractModel
{
    /**
     * @var integer 防护监测 0 未开启 1 已开启 2 异常
     */
    public $ProtectMonitor;

    /**
     * @var integer 防护目录数
     */
    public $ProtectDirNum;

    /**
     * @var integer 防护文件数
     */
    public $ProtectFileNum;

    /**
     * @var integer 篡改文件数
     */
    public $TamperFileNum;

    /**
     * @var integer 篡改数
     */
    public $TamperNum;

    /**
     * @var integer 今日防护
     */
    public $ProtectToday;

    /**
     * @var integer 防护主机数
     */
    public $ProtectHostNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ProtectMonitor 防护监测 0 未开启 1 已开启 2 异常
     * @param integer $ProtectDirNum 防护目录数
     * @param integer $ProtectFileNum 防护文件数
     * @param integer $TamperFileNum 篡改文件数
     * @param integer $TamperNum 篡改数
     * @param integer $ProtectToday 今日防护
     * @param integer $ProtectHostNum 防护主机数
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
        if (array_key_exists("ProtectMonitor",$param) and $param["ProtectMonitor"] !== null) {
            $this->ProtectMonitor = $param["ProtectMonitor"];
        }

        if (array_key_exists("ProtectDirNum",$param) and $param["ProtectDirNum"] !== null) {
            $this->ProtectDirNum = $param["ProtectDirNum"];
        }

        if (array_key_exists("ProtectFileNum",$param) and $param["ProtectFileNum"] !== null) {
            $this->ProtectFileNum = $param["ProtectFileNum"];
        }

        if (array_key_exists("TamperFileNum",$param) and $param["TamperFileNum"] !== null) {
            $this->TamperFileNum = $param["TamperFileNum"];
        }

        if (array_key_exists("TamperNum",$param) and $param["TamperNum"] !== null) {
            $this->TamperNum = $param["TamperNum"];
        }

        if (array_key_exists("ProtectToday",$param) and $param["ProtectToday"] !== null) {
            $this->ProtectToday = $param["ProtectToday"];
        }

        if (array_key_exists("ProtectHostNum",$param) and $param["ProtectHostNum"] !== null) {
            $this->ProtectHostNum = $param["ProtectHostNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
