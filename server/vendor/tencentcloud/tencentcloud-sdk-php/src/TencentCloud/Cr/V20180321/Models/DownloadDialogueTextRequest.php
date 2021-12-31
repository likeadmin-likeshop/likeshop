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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadDialogueText请求参数结构体
 *
 * @method string getModule() 获取模块名，本接口取值：Report
 * @method void setModule(string $Module) 设置模块名，本接口取值：Report
 * @method string getOperation() 获取操作名，本接口取值：DownloadTextReport
 * @method void setOperation(string $Operation) 设置操作名，本接口取值：DownloadTextReport
 * @method string getReportDate() 获取报告日期，格式为YYYY-MM-DD
 * @method void setReportDate(string $ReportDate) 设置报告日期，格式为YYYY-MM-DD
 * @method string getInstId() 获取实例ID
 * @method void setInstId(string $InstId) 设置实例ID
 */
class DownloadDialogueTextRequest extends AbstractModel
{
    /**
     * @var string 模块名，本接口取值：Report
     */
    public $Module;

    /**
     * @var string 操作名，本接口取值：DownloadTextReport
     */
    public $Operation;

    /**
     * @var string 报告日期，格式为YYYY-MM-DD
     */
    public $ReportDate;

    /**
     * @var string 实例ID
     */
    public $InstId;

    /**
     * @param string $Module 模块名，本接口取值：Report
     * @param string $Operation 操作名，本接口取值：DownloadTextReport
     * @param string $ReportDate 报告日期，格式为YYYY-MM-DD
     * @param string $InstId 实例ID
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ReportDate",$param) and $param["ReportDate"] !== null) {
            $this->ReportDate = $param["ReportDate"];
        }

        if (array_key_exists("InstId",$param) and $param["InstId"] !== null) {
            $this->InstId = $param["InstId"];
        }
    }
}
