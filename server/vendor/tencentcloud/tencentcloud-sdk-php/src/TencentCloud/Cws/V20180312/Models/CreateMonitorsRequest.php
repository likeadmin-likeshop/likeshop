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
namespace TencentCloud\Cws\V20180312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMonitors请求参数结构体
 *
 * @method array getUrls() 获取站点的url列表
 * @method void setUrls(array $Urls) 设置站点的url列表
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method string getScannerType() 获取扫描模式，normal-正常扫描；deep-深度扫描
 * @method void setScannerType(string $ScannerType) 设置扫描模式，normal-正常扫描；deep-深度扫描
 * @method integer getCrontab() 获取扫描周期，单位小时，每X小时执行一次
 * @method void setCrontab(integer $Crontab) 设置扫描周期，单位小时，每X小时执行一次
 * @method integer getRateLimit() 获取扫描速率限制，每秒发送X个HTTP请求
 * @method void setRateLimit(integer $RateLimit) 设置扫描速率限制，每秒发送X个HTTP请求
 * @method string getFirstScanStartTime() 获取首次扫描开始时间
 * @method void setFirstScanStartTime(string $FirstScanStartTime) 设置首次扫描开始时间
 */
class CreateMonitorsRequest extends AbstractModel
{
    /**
     * @var array 站点的url列表
     */
    public $Urls;

    /**
     * @var string 任务名称
     */
    public $Name;

    /**
     * @var string 扫描模式，normal-正常扫描；deep-深度扫描
     */
    public $ScannerType;

    /**
     * @var integer 扫描周期，单位小时，每X小时执行一次
     */
    public $Crontab;

    /**
     * @var integer 扫描速率限制，每秒发送X个HTTP请求
     */
    public $RateLimit;

    /**
     * @var string 首次扫描开始时间
     */
    public $FirstScanStartTime;

    /**
     * @param array $Urls 站点的url列表
     * @param string $Name 任务名称
     * @param string $ScannerType 扫描模式，normal-正常扫描；deep-深度扫描
     * @param integer $Crontab 扫描周期，单位小时，每X小时执行一次
     * @param integer $RateLimit 扫描速率限制，每秒发送X个HTTP请求
     * @param string $FirstScanStartTime 首次扫描开始时间
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
        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ScannerType",$param) and $param["ScannerType"] !== null) {
            $this->ScannerType = $param["ScannerType"];
        }

        if (array_key_exists("Crontab",$param) and $param["Crontab"] !== null) {
            $this->Crontab = $param["Crontab"];
        }

        if (array_key_exists("RateLimit",$param) and $param["RateLimit"] !== null) {
            $this->RateLimit = $param["RateLimit"];
        }

        if (array_key_exists("FirstScanStartTime",$param) and $param["FirstScanStartTime"] !== null) {
            $this->FirstScanStartTime = $param["FirstScanStartTime"];
        }
    }
}
