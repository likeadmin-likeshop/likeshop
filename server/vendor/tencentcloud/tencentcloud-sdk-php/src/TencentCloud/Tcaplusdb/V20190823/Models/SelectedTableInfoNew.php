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
 * 被选中的表信息
 *
 * @method string getTableGroupId() 获取表所属表格组ID
 * @method void setTableGroupId(string $TableGroupId) 设置表所属表格组ID
 * @method string getTableName() 获取表格名称
 * @method void setTableName(string $TableName) 设置表格名称
 * @method string getTableInstanceId() 获取表实例ID
 * @method void setTableInstanceId(string $TableInstanceId) 设置表实例ID
 * @method string getTableIdlType() 获取表格描述语言类型：`PROTO`或`TDR`
 * @method void setTableIdlType(string $TableIdlType) 设置表格描述语言类型：`PROTO`或`TDR`
 * @method string getTableType() 获取表格数据结构类型：`GENERIC`或`LIST`
 * @method void setTableType(string $TableType) 设置表格数据结构类型：`GENERIC`或`LIST`
 * @method integer getListElementNum() 获取LIST表元素个数
 * @method void setListElementNum(integer $ListElementNum) 设置LIST表元素个数
 * @method integer getReservedVolume() 获取表格预留容量（GB）
 * @method void setReservedVolume(integer $ReservedVolume) 设置表格预留容量（GB）
 * @method integer getReservedReadQps() 获取表格预留读CU
 * @method void setReservedReadQps(integer $ReservedReadQps) 设置表格预留读CU
 * @method integer getReservedWriteQps() 获取表格预留写CU
 * @method void setReservedWriteQps(integer $ReservedWriteQps) 设置表格预留写CU
 * @method string getMemo() 获取表格备注信息
 * @method void setMemo(string $Memo) 设置表格备注信息
 * @method string getFileName() 获取Key回档文件名，回档专用
 * @method void setFileName(string $FileName) 设置Key回档文件名，回档专用
 * @method string getFileExtType() 获取Key回档文件扩展名，回档专用
 * @method void setFileExtType(string $FileExtType) 设置Key回档文件扩展名，回档专用
 * @method integer getFileSize() 获取Key回档文件大小，回档专用
 * @method void setFileSize(integer $FileSize) 设置Key回档文件大小，回档专用
 * @method string getFileContent() 获取Key回档文件内容，回档专用
 * @method void setFileContent(string $FileContent) 设置Key回档文件内容，回档专用
 */
class SelectedTableInfoNew extends AbstractModel
{
    /**
     * @var string 表所属表格组ID
     */
    public $TableGroupId;

    /**
     * @var string 表格名称
     */
    public $TableName;

    /**
     * @var string 表实例ID
     */
    public $TableInstanceId;

    /**
     * @var string 表格描述语言类型：`PROTO`或`TDR`
     */
    public $TableIdlType;

    /**
     * @var string 表格数据结构类型：`GENERIC`或`LIST`
     */
    public $TableType;

    /**
     * @var integer LIST表元素个数
     */
    public $ListElementNum;

    /**
     * @var integer 表格预留容量（GB）
     */
    public $ReservedVolume;

    /**
     * @var integer 表格预留读CU
     */
    public $ReservedReadQps;

    /**
     * @var integer 表格预留写CU
     */
    public $ReservedWriteQps;

    /**
     * @var string 表格备注信息
     */
    public $Memo;

    /**
     * @var string Key回档文件名，回档专用
     */
    public $FileName;

    /**
     * @var string Key回档文件扩展名，回档专用
     */
    public $FileExtType;

    /**
     * @var integer Key回档文件大小，回档专用
     */
    public $FileSize;

    /**
     * @var string Key回档文件内容，回档专用
     */
    public $FileContent;

    /**
     * @param string $TableGroupId 表所属表格组ID
     * @param string $TableName 表格名称
     * @param string $TableInstanceId 表实例ID
     * @param string $TableIdlType 表格描述语言类型：`PROTO`或`TDR`
     * @param string $TableType 表格数据结构类型：`GENERIC`或`LIST`
     * @param integer $ListElementNum LIST表元素个数
     * @param integer $ReservedVolume 表格预留容量（GB）
     * @param integer $ReservedReadQps 表格预留读CU
     * @param integer $ReservedWriteQps 表格预留写CU
     * @param string $Memo 表格备注信息
     * @param string $FileName Key回档文件名，回档专用
     * @param string $FileExtType Key回档文件扩展名，回档专用
     * @param integer $FileSize Key回档文件大小，回档专用
     * @param string $FileContent Key回档文件内容，回档专用
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
        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableInstanceId",$param) and $param["TableInstanceId"] !== null) {
            $this->TableInstanceId = $param["TableInstanceId"];
        }

        if (array_key_exists("TableIdlType",$param) and $param["TableIdlType"] !== null) {
            $this->TableIdlType = $param["TableIdlType"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("ListElementNum",$param) and $param["ListElementNum"] !== null) {
            $this->ListElementNum = $param["ListElementNum"];
        }

        if (array_key_exists("ReservedVolume",$param) and $param["ReservedVolume"] !== null) {
            $this->ReservedVolume = $param["ReservedVolume"];
        }

        if (array_key_exists("ReservedReadQps",$param) and $param["ReservedReadQps"] !== null) {
            $this->ReservedReadQps = $param["ReservedReadQps"];
        }

        if (array_key_exists("ReservedWriteQps",$param) and $param["ReservedWriteQps"] !== null) {
            $this->ReservedWriteQps = $param["ReservedWriteQps"];
        }

        if (array_key_exists("Memo",$param) and $param["Memo"] !== null) {
            $this->Memo = $param["Memo"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileExtType",$param) and $param["FileExtType"] !== null) {
            $this->FileExtType = $param["FileExtType"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }
    }
}
