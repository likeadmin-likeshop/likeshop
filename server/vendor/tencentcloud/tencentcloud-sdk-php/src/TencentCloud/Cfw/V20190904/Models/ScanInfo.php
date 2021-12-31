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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 新手引导扫描信息  
 *
 * @method ScanResultInfo getScanResultInfo() 获取扫描结果信息
 * @method void setScanResultInfo(ScanResultInfo $ScanResultInfo) 设置扫描结果信息
 * @method integer getScanStatus() 获取扫描状态 0扫描中 1完成   2没赠送过扫描显示开启界面
 * @method void setScanStatus(integer $ScanStatus) 设置扫描状态 0扫描中 1完成   2没赠送过扫描显示开启界面
 * @method float getScanPercent() 获取进度
 * @method void setScanPercent(float $ScanPercent) 设置进度
 * @method string getScanTime() 获取预计完成时间
 * @method void setScanTime(string $ScanTime) 设置预计完成时间
 */
class ScanInfo extends AbstractModel
{
    /**
     * @var ScanResultInfo 扫描结果信息
     */
    public $ScanResultInfo;

    /**
     * @var integer 扫描状态 0扫描中 1完成   2没赠送过扫描显示开启界面
     */
    public $ScanStatus;

    /**
     * @var float 进度
     */
    public $ScanPercent;

    /**
     * @var string 预计完成时间
     */
    public $ScanTime;

    /**
     * @param ScanResultInfo $ScanResultInfo 扫描结果信息
     * @param integer $ScanStatus 扫描状态 0扫描中 1完成   2没赠送过扫描显示开启界面
     * @param float $ScanPercent 进度
     * @param string $ScanTime 预计完成时间
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
        if (array_key_exists("ScanResultInfo",$param) and $param["ScanResultInfo"] !== null) {
            $this->ScanResultInfo = new ScanResultInfo();
            $this->ScanResultInfo->deserialize($param["ScanResultInfo"]);
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("ScanPercent",$param) and $param["ScanPercent"] !== null) {
            $this->ScanPercent = $param["ScanPercent"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }
    }
}
