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
 * DownloadRecordList请求参数结构体
 *
 * @method string getModule() 获取模块名，本接口取值：Record
 * @method void setModule(string $Module) 设置模块名，本接口取值：Record
 * @method string getOperation() 获取操作名，本接口取值：DownloadList
 * @method void setOperation(string $Operation) 设置操作名，本接口取值：DownloadList
 * @method string getBizDate() 获取录音日期，格式为YYYY-MM-DD
 * @method void setBizDate(string $BizDate) 设置录音日期，格式为YYYY-MM-DD
 * @method string getInstId() 获取实例ID
 * @method void setInstId(string $InstId) 设置实例ID
 */
class DownloadRecordListRequest extends AbstractModel
{
    /**
     * @var string 模块名，本接口取值：Record
     */
    public $Module;

    /**
     * @var string 操作名，本接口取值：DownloadList
     */
    public $Operation;

    /**
     * @var string 录音日期，格式为YYYY-MM-DD
     */
    public $BizDate;

    /**
     * @var string 实例ID
     */
    public $InstId;

    /**
     * @param string $Module 模块名，本接口取值：Record
     * @param string $Operation 操作名，本接口取值：DownloadList
     * @param string $BizDate 录音日期，格式为YYYY-MM-DD
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

        if (array_key_exists("BizDate",$param) and $param["BizDate"] !== null) {
            $this->BizDate = $param["BizDate"];
        }

        if (array_key_exists("InstId",$param) and $param["InstId"] !== null) {
            $this->InstId = $param["InstId"];
        }
    }
}
