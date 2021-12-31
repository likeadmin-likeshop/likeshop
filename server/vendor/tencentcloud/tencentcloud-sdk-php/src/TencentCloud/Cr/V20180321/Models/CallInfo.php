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
 * 作业信息
 *
 * @method string getBizDate() 获取业务日期
 * @method void setBizDate(string $BizDate) 设置业务日期
 * @method string getStatus() 获取状态 WAIT：待执行；DOING：执行中；ERROR：执行错误；DONE：已完成；
 * @method void setStatus(string $Status) 设置状态 WAIT：待执行；DOING：执行中；ERROR：执行错误；DONE：已完成；
 * @method integer getTotalCount() 获取成功总数
 * @method void setTotalCount(integer $TotalCount) 设置成功总数
 * @method string getFileName() 获取文件名称
 * @method void setFileName(string $FileName) 设置文件名称
 * @method string getFileType() 获取文件类型 I：呼叫文件 R：停拨文件
 * @method void setFileType(string $FileType) 设置文件类型 I：呼叫文件 R：停拨文件
 * @method string getCallId() 获取作业唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallId(string $CallId) 设置作业唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 */
class CallInfo extends AbstractModel
{
    /**
     * @var string 业务日期
     */
    public $BizDate;

    /**
     * @var string 状态 WAIT：待执行；DOING：执行中；ERROR：执行错误；DONE：已完成；
     */
    public $Status;

    /**
     * @var integer 成功总数
     */
    public $TotalCount;

    /**
     * @var string 文件名称
     */
    public $FileName;

    /**
     * @var string 文件类型 I：呼叫文件 R：停拨文件
     */
    public $FileType;

    /**
     * @var string 作业唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallId;

    /**
     * @param string $BizDate 业务日期
     * @param string $Status 状态 WAIT：待执行；DOING：执行中；ERROR：执行错误；DONE：已完成；
     * @param integer $TotalCount 成功总数
     * @param string $FileName 文件名称
     * @param string $FileType 文件类型 I：呼叫文件 R：停拨文件
     * @param string $CallId 作业唯一标识
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
        if (array_key_exists("BizDate",$param) and $param["BizDate"] !== null) {
            $this->BizDate = $param["BizDate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("CallId",$param) and $param["CallId"] !== null) {
            $this->CallId = $param["CallId"];
        }
    }
}
