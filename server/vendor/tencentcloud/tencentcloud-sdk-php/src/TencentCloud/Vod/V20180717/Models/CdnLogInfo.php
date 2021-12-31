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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDN 日志信息
 *
 * @method string getDate() 获取日志所属日期， 格式为：yyyy-MM-dd ，如2018-03-01。
 * @method void setDate(string $Date) 设置日志所属日期， 格式为：yyyy-MM-dd ，如2018-03-01。
 * @method string getName() 获取日志名称，格式为：日期小时-域名
如 2018120101-test.vod2.mqcloud.com。
 * @method void setName(string $Name) 设置日志名称，格式为：日期小时-域名
如 2018120101-test.vod2.mqcloud.com。
 * @method string getUrl() 获取日志下载链接，24小时内下载有效。
 * @method void setUrl(string $Url) 设置日志下载链接，24小时内下载有效。
 * @method string getStartTime() 获取日志起始时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setStartTime(string $StartTime) 设置日志起始时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method string getEndTime() 获取日志结束时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setEndTime(string $EndTime) 设置日志结束时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 */
class CdnLogInfo extends AbstractModel
{
    /**
     * @var string 日志所属日期， 格式为：yyyy-MM-dd ，如2018-03-01。
     */
    public $Date;

    /**
     * @var string 日志名称，格式为：日期小时-域名
如 2018120101-test.vod2.mqcloud.com。
     */
    public $Name;

    /**
     * @var string 日志下载链接，24小时内下载有效。
     */
    public $Url;

    /**
     * @var string 日志起始时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $StartTime;

    /**
     * @var string 日志结束时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $EndTime;

    /**
     * @param string $Date 日志所属日期， 格式为：yyyy-MM-dd ，如2018-03-01。
     * @param string $Name 日志名称，格式为：日期小时-域名
如 2018120101-test.vod2.mqcloud.com。
     * @param string $Url 日志下载链接，24小时内下载有效。
     * @param string $StartTime 日志起始时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     * @param string $EndTime 日志结束时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
