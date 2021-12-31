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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表格回档结果信息
 *
 * @method string getTableInstanceId() 获取表格实例ID，形如：tcaplus-3be64cbb
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableInstanceId(string $TableInstanceId) 设置表格实例ID，形如：tcaplus-3be64cbb
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务ID，对于创建单任务的接口有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID，对于创建单任务的接口有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableType() 获取表格数据结构类型，如：`GENERIC`或`LIST`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableType(string $TableType) 设置表格数据结构类型，如：`GENERIC`或`LIST`
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableIdlType() 获取表格数据描述语言（IDL）类型，如：`PROTO`或`TDR`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableIdlType(string $TableIdlType) 设置表格数据描述语言（IDL）类型，如：`PROTO`或`TDR`
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableGroupId() 获取表格所属表格组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableGroupId(string $TableGroupId) 设置表格所属表格组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method ErrorInfo getError() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setError(ErrorInfo $Error) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskIds() 获取任务ID列表，对于创建多任务的接口有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskIds(array $TaskIds) 设置任务ID列表，对于创建多任务的接口有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileId() 获取上传的key文件ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileId(string $FileId) 设置上传的key文件ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccKeyNum() 获取校验成功Key数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccKeyNum(integer $SuccKeyNum) 设置校验成功Key数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalKeyNum() 获取Key文件中包含总的Key数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalKeyNum(integer $TotalKeyNum) 设置Key文件中包含总的Key数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableRollbackResultNew extends AbstractModel
{
    /**
     * @var string 表格实例ID，形如：tcaplus-3be64cbb
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableInstanceId;

    /**
     * @var string 任务ID，对于创建单任务的接口有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 表格名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 表格数据结构类型，如：`GENERIC`或`LIST`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableType;

    /**
     * @var string 表格数据描述语言（IDL）类型，如：`PROTO`或`TDR`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableIdlType;

    /**
     * @var string 表格所属表格组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableGroupId;

    /**
     * @var ErrorInfo 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Error;

    /**
     * @var array 任务ID列表，对于创建多任务的接口有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskIds;

    /**
     * @var string 上传的key文件ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileId;

    /**
     * @var integer 校验成功Key数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccKeyNum;

    /**
     * @var integer Key文件中包含总的Key数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalKeyNum;

    /**
     * @param string $TableInstanceId 表格实例ID，形如：tcaplus-3be64cbb
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务ID，对于创建单任务的接口有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表格名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableType 表格数据结构类型，如：`GENERIC`或`LIST`
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableIdlType 表格数据描述语言（IDL）类型，如：`PROTO`或`TDR`
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableGroupId 表格所属表格组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param ErrorInfo $Error 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskIds 任务ID列表，对于创建多任务的接口有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileId 上传的key文件ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccKeyNum 校验成功Key数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalKeyNum Key文件中包含总的Key数量
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
        if (array_key_exists("TableInstanceId",$param) and $param["TableInstanceId"] !== null) {
            $this->TableInstanceId = $param["TableInstanceId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("TableIdlType",$param) and $param["TableIdlType"] !== null) {
            $this->TableIdlType = $param["TableIdlType"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("SuccKeyNum",$param) and $param["SuccKeyNum"] !== null) {
            $this->SuccKeyNum = $param["SuccKeyNum"];
        }

        if (array_key_exists("TotalKeyNum",$param) and $param["TotalKeyNum"] !== null) {
            $this->TotalKeyNum = $param["TotalKeyNum"];
        }
    }
}
