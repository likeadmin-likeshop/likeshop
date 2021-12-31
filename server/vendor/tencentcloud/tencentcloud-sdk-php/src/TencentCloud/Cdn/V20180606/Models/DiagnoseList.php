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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户端访问诊断URL信息列表
 *
 * @method string getDiagnoseTag() 获取诊断任务标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiagnoseTag(string $DiagnoseTag) 设置诊断任务标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReportId() 获取报告ID，用于获取详细诊断报告。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportId(string $ReportId) 设置报告ID，用于获取详细诊断报告。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClientInfo() 获取客户端信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientInfo(array $ClientInfo) 设置客户端信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFinalDiagnose() 获取最终诊断结果。
-1：已提交
0  ：检测中
1  ：检测正常
2  ： 检测异常
3  ： 诊断页面异常关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinalDiagnose(integer $FinalDiagnose) 设置最终诊断结果。
-1：已提交
0  ：检测中
1  ：检测正常
2  ： 检测异常
3  ： 诊断页面异常关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取诊断任务创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置诊断任务创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiagnoseList extends AbstractModel
{
    /**
     * @var string 诊断任务标签。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiagnoseTag;

    /**
     * @var string 报告ID，用于获取详细诊断报告。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportId;

    /**
     * @var array 客户端信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientInfo;

    /**
     * @var integer 最终诊断结果。
-1：已提交
0  ：检测中
1  ：检测正常
2  ： 检测异常
3  ： 诊断页面异常关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinalDiagnose;

    /**
     * @var string 诊断任务创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @param string $DiagnoseTag 诊断任务标签。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReportId 报告ID，用于获取详细诊断报告。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClientInfo 客户端信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FinalDiagnose 最终诊断结果。
-1：已提交
0  ：检测中
1  ：检测正常
2  ： 检测异常
3  ： 诊断页面异常关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 诊断任务创建时间。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DiagnoseTag",$param) and $param["DiagnoseTag"] !== null) {
            $this->DiagnoseTag = $param["DiagnoseTag"];
        }

        if (array_key_exists("ReportId",$param) and $param["ReportId"] !== null) {
            $this->ReportId = $param["ReportId"];
        }

        if (array_key_exists("ClientInfo",$param) and $param["ClientInfo"] !== null) {
            $this->ClientInfo = [];
            foreach ($param["ClientInfo"] as $key => $value){
                $obj = new ClientInfo();
                $obj->deserialize($value);
                array_push($this->ClientInfo, $obj);
            }
        }

        if (array_key_exists("FinalDiagnose",$param) and $param["FinalDiagnose"] !== null) {
            $this->FinalDiagnose = $param["FinalDiagnose"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
