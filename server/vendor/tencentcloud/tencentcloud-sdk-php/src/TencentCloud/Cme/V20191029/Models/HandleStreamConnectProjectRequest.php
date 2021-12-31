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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HandleStreamConnectProject请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。
 * @method string getProjectId() 获取云转推项目Id 。
 * @method void setProjectId(string $ProjectId) 设置云转推项目Id 。
 * @method string getOperation() 获取请参考 [操作类型](#Operation)
 * @method void setOperation(string $Operation) 设置请参考 [操作类型](#Operation)
 * @method StreamInputInfo getInputInfo() 获取转推输入源操作参数。具体操作方式详见 [操作类型](#Operation) 及下文示例。
 * @method void setInputInfo(StreamInputInfo $InputInfo) 设置转推输入源操作参数。具体操作方式详见 [操作类型](#Operation) 及下文示例。
 * @method string getInputEndpoint() 获取主备输入源标识，取值有：
<li> Main ：主源；</li>
<li> Backup ：备源。</li>
 * @method void setInputEndpoint(string $InputEndpoint) 设置主备输入源标识，取值有：
<li> Main ：主源；</li>
<li> Backup ：备源。</li>
 * @method StreamConnectOutput getOutputInfo() 获取转推输出源操作参数。具体操作方式详见 [操作类型](#Operation) 及下文示例。
 * @method void setOutputInfo(StreamConnectOutput $OutputInfo) 设置转推输出源操作参数。具体操作方式详见 [操作类型](#Operation) 及下文示例。
 * @method string getCurrentStopTime() 获取云转推当前预计结束时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。具体操作方式详见 [操作类型](#Operation) 及下文示例。
 * @method void setCurrentStopTime(string $CurrentStopTime) 设置云转推当前预计结束时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。具体操作方式详见 [操作类型](#Operation) 及下文示例。
 */
class HandleStreamConnectProjectRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。
     */
    public $Platform;

    /**
     * @var string 云转推项目Id 。
     */
    public $ProjectId;

    /**
     * @var string 请参考 [操作类型](#Operation)
     */
    public $Operation;

    /**
     * @var StreamInputInfo 转推输入源操作参数。具体操作方式详见 [操作类型](#Operation) 及下文示例。
     */
    public $InputInfo;

    /**
     * @var string 主备输入源标识，取值有：
<li> Main ：主源；</li>
<li> Backup ：备源。</li>
     */
    public $InputEndpoint;

    /**
     * @var StreamConnectOutput 转推输出源操作参数。具体操作方式详见 [操作类型](#Operation) 及下文示例。
     */
    public $OutputInfo;

    /**
     * @var string 云转推当前预计结束时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。具体操作方式详见 [操作类型](#Operation) 及下文示例。
     */
    public $CurrentStopTime;

    /**
     * @param string $Platform 平台名称，指定访问的平台。
     * @param string $ProjectId 云转推项目Id 。
     * @param string $Operation 请参考 [操作类型](#Operation)
     * @param StreamInputInfo $InputInfo 转推输入源操作参数。具体操作方式详见 [操作类型](#Operation) 及下文示例。
     * @param string $InputEndpoint 主备输入源标识，取值有：
<li> Main ：主源；</li>
<li> Backup ：备源。</li>
     * @param StreamConnectOutput $OutputInfo 转推输出源操作参数。具体操作方式详见 [操作类型](#Operation) 及下文示例。
     * @param string $CurrentStopTime 云转推当前预计结束时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。具体操作方式详见 [操作类型](#Operation) 及下文示例。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new StreamInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("InputEndpoint",$param) and $param["InputEndpoint"] !== null) {
            $this->InputEndpoint = $param["InputEndpoint"];
        }

        if (array_key_exists("OutputInfo",$param) and $param["OutputInfo"] !== null) {
            $this->OutputInfo = new StreamConnectOutput();
            $this->OutputInfo->deserialize($param["OutputInfo"]);
        }

        if (array_key_exists("CurrentStopTime",$param) and $param["CurrentStopTime"] !== null) {
            $this->CurrentStopTime = $param["CurrentStopTime"];
        }
    }
}
