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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专业周报木马数据。
 *
 * @method string getMachineIp() 获取主机IP。
 * @method void setMachineIp(string $MachineIp) 设置主机IP。
 * @method string getFilePath() 获取木马文件路径。
 * @method void setFilePath(string $FilePath) 设置木马文件路径。
 * @method string getMd5() 获取木马文件MD5值。
 * @method void setMd5(string $Md5) 设置木马文件MD5值。
 * @method string getFindTime() 获取木马发现时间。
 * @method void setFindTime(string $FindTime) 设置木马发现时间。
 * @method string getStatus() 获取当前木马状态。
<li>UN_OPERATED：未处理</li>
<li>SEGREGATED：已隔离</li>
<li>TRUSTED：已信任</li>
<li>SEPARATING：隔离中</li>
<li>RECOVERING：恢复中</li>
 * @method void setStatus(string $Status) 设置当前木马状态。
<li>UN_OPERATED：未处理</li>
<li>SEGREGATED：已隔离</li>
<li>TRUSTED：已信任</li>
<li>SEPARATING：隔离中</li>
<li>RECOVERING：恢复中</li>
 */
class WeeklyReportMalware extends AbstractModel
{
    /**
     * @var string 主机IP。
     */
    public $MachineIp;

    /**
     * @var string 木马文件路径。
     */
    public $FilePath;

    /**
     * @var string 木马文件MD5值。
     */
    public $Md5;

    /**
     * @var string 木马发现时间。
     */
    public $FindTime;

    /**
     * @var string 当前木马状态。
<li>UN_OPERATED：未处理</li>
<li>SEGREGATED：已隔离</li>
<li>TRUSTED：已信任</li>
<li>SEPARATING：隔离中</li>
<li>RECOVERING：恢复中</li>
     */
    public $Status;

    /**
     * @param string $MachineIp 主机IP。
     * @param string $FilePath 木马文件路径。
     * @param string $Md5 木马文件MD5值。
     * @param string $FindTime 木马发现时间。
     * @param string $Status 当前木马状态。
<li>UN_OPERATED：未处理</li>
<li>SEGREGATED：已隔离</li>
<li>TRUSTED：已信任</li>
<li>SEPARATING：隔离中</li>
<li>RECOVERING：恢复中</li>
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
        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("FindTime",$param) and $param["FindTime"] !== null) {
            $this->FindTime = $param["FindTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
