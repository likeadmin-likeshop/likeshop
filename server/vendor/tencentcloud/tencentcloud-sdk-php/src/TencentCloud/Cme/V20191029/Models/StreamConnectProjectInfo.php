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
 * 云转推项目信息，包含输入源、输出源、当前转推开始时间等信息。
 *
 * @method string getStatus() 获取转推项目状态，取值有：
<li>Working ：转推中；</li>
<li>Idle ：空闲中。</li>
 * @method void setStatus(string $Status) 设置转推项目状态，取值有：
<li>Working ：转推中；</li>
<li>Idle ：空闲中。</li>
 * @method string getCurrentInputEndpoint() 获取当前转推输入源，取值有：
<li>Main ：主输入源；</li>
<li>Backup ：备输入源。</li>
 * @method void setCurrentInputEndpoint(string $CurrentInputEndpoint) 设置当前转推输入源，取值有：
<li>Main ：主输入源；</li>
<li>Backup ：备输入源。</li>
 * @method string getCurrentStartTime() 获取当前转推开始时间， 采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。仅 Status 取值 Working 时有效。
 * @method void setCurrentStartTime(string $CurrentStartTime) 设置当前转推开始时间， 采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。仅 Status 取值 Working 时有效。
 * @method string getCurrentStopTime() 获取当前转推计划结束时间， 采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。仅 Status 取值 Working 时有效。
 * @method void setCurrentStopTime(string $CurrentStopTime) 设置当前转推计划结束时间， 采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。仅 Status 取值 Working 时有效。
 * @method string getLastStopTime() 获取上一次转推结束时间， 采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。仅 Status 取值 Idle 时有效。
 * @method void setLastStopTime(string $LastStopTime) 设置上一次转推结束时间， 采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。仅 Status 取值 Idle 时有效。
 * @method StreamInputInfo getMainInput() 获取云转推主输入源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMainInput(StreamInputInfo $MainInput) 设置云转推主输入源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method StreamInputInfo getBackupInput() 获取云转推备输入源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupInput(StreamInputInfo $BackupInput) 设置云转推备输入源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOutputSet() 获取云转推输出源。
 * @method void setOutputSet(array $OutputSet) 设置云转推输出源。
 */
class StreamConnectProjectInfo extends AbstractModel
{
    /**
     * @var string 转推项目状态，取值有：
<li>Working ：转推中；</li>
<li>Idle ：空闲中。</li>
     */
    public $Status;

    /**
     * @var string 当前转推输入源，取值有：
<li>Main ：主输入源；</li>
<li>Backup ：备输入源。</li>
     */
    public $CurrentInputEndpoint;

    /**
     * @var string 当前转推开始时间， 采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。仅 Status 取值 Working 时有效。
     */
    public $CurrentStartTime;

    /**
     * @var string 当前转推计划结束时间， 采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。仅 Status 取值 Working 时有效。
     */
    public $CurrentStopTime;

    /**
     * @var string 上一次转推结束时间， 采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。仅 Status 取值 Idle 时有效。
     */
    public $LastStopTime;

    /**
     * @var StreamInputInfo 云转推主输入源。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MainInput;

    /**
     * @var StreamInputInfo 云转推备输入源。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupInput;

    /**
     * @var array 云转推输出源。
     */
    public $OutputSet;

    /**
     * @param string $Status 转推项目状态，取值有：
<li>Working ：转推中；</li>
<li>Idle ：空闲中。</li>
     * @param string $CurrentInputEndpoint 当前转推输入源，取值有：
<li>Main ：主输入源；</li>
<li>Backup ：备输入源。</li>
     * @param string $CurrentStartTime 当前转推开始时间， 采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。仅 Status 取值 Working 时有效。
     * @param string $CurrentStopTime 当前转推计划结束时间， 采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。仅 Status 取值 Working 时有效。
     * @param string $LastStopTime 上一次转推结束时间， 采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。仅 Status 取值 Idle 时有效。
     * @param StreamInputInfo $MainInput 云转推主输入源。
注意：此字段可能返回 null，表示取不到有效值。
     * @param StreamInputInfo $BackupInput 云转推备输入源。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OutputSet 云转推输出源。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CurrentInputEndpoint",$param) and $param["CurrentInputEndpoint"] !== null) {
            $this->CurrentInputEndpoint = $param["CurrentInputEndpoint"];
        }

        if (array_key_exists("CurrentStartTime",$param) and $param["CurrentStartTime"] !== null) {
            $this->CurrentStartTime = $param["CurrentStartTime"];
        }

        if (array_key_exists("CurrentStopTime",$param) and $param["CurrentStopTime"] !== null) {
            $this->CurrentStopTime = $param["CurrentStopTime"];
        }

        if (array_key_exists("LastStopTime",$param) and $param["LastStopTime"] !== null) {
            $this->LastStopTime = $param["LastStopTime"];
        }

        if (array_key_exists("MainInput",$param) and $param["MainInput"] !== null) {
            $this->MainInput = new StreamInputInfo();
            $this->MainInput->deserialize($param["MainInput"]);
        }

        if (array_key_exists("BackupInput",$param) and $param["BackupInput"] !== null) {
            $this->BackupInput = new StreamInputInfo();
            $this->BackupInput->deserialize($param["BackupInput"]);
        }

        if (array_key_exists("OutputSet",$param) and $param["OutputSet"] !== null) {
            $this->OutputSet = [];
            foreach ($param["OutputSet"] as $key => $value){
                $obj = new StreamConnectOutputInfo();
                $obj->deserialize($value);
                array_push($this->OutputSet, $obj);
            }
        }
    }
}
