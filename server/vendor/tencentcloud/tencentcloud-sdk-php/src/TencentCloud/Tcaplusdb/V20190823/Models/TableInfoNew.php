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
 * 表格详情信息
 *
 * @method string getTableName() 获取表格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableInstanceId() 获取表格实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableInstanceId(string $TableInstanceId) 设置表格实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableType() 获取表格数据结构类型，如：`GENERIC`或`LIST`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableType(string $TableType) 设置表格数据结构类型，如：`GENERIC`或`LIST`
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableIdlType() 获取表格数据描述语言（IDL）类型，如：`PROTO`或`TDR`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableIdlType(string $TableIdlType) 设置表格数据描述语言（IDL）类型，如：`PROTO`或`TDR`
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取表格所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置表格所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取表格所属集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置表格所属集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableGroupId() 获取表格所属表格组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableGroupId(string $TableGroupId) 设置表格所属表格组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableGroupName() 获取表格所属表格组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableGroupName(string $TableGroupName) 设置表格所属表格组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeyStruct() 获取表格主键字段结构json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyStruct(string $KeyStruct) 设置表格主键字段结构json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValueStruct() 获取表格非主键字段结构json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueStruct(string $ValueStruct) 设置表格非主键字段结构json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShardingKeySet() 获取表格分表因子集合，对PROTO类型表格有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShardingKeySet(string $ShardingKeySet) 设置表格分表因子集合，对PROTO类型表格有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexStruct() 获取表格索引键字段集合，对PROTO类型表格有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexStruct(string $IndexStruct) 设置表格索引键字段集合，对PROTO类型表格有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getListElementNum() 获取LIST类型表格元素个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListElementNum(integer $ListElementNum) 设置LIST类型表格元素个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIdlFiles() 获取表格所关联IDL文件信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdlFiles(array $IdlFiles) 设置表格所关联IDL文件信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReservedVolume() 获取表格预留容量（GB）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReservedVolume(integer $ReservedVolume) 设置表格预留容量（GB）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReservedReadQps() 获取表格预留读CU
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReservedReadQps(integer $ReservedReadQps) 设置表格预留读CU
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReservedWriteQps() 获取表格预留写CU
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReservedWriteQps(integer $ReservedWriteQps) 设置表格预留写CU
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTableSize() 获取表格实际数据量大小（MB）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableSize(integer $TableSize) 设置表格实际数据量大小（MB）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取表格状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置表格状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取表格创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置表格创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedTime() 获取表格最后一次修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(string $UpdatedTime) 设置表格最后一次修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemo() 获取表格备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemo(string $Memo) 设置表格备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ErrorInfo getError() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setError(ErrorInfo $Error) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiAccessId() 获取TcaplusDB SDK数据访问接入ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiAccessId(string $ApiAccessId) 设置TcaplusDB SDK数据访问接入ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSortFieldNum() 获取SORTLIST类型表格排序字段个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSortFieldNum(integer $SortFieldNum) 设置SORTLIST类型表格排序字段个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSortRule() 获取SORTLIST类型表格排序顺序
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSortRule(integer $SortRule) 设置SORTLIST类型表格排序顺序
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbClusterInfoStruct() 获取表格分布式索引信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbClusterInfoStruct(string $DbClusterInfoStruct) 设置表格分布式索引信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableInfoNew extends AbstractModel
{
    /**
     * @var string 表格名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 表格实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableInstanceId;

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
     * @var string 表格所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 表格所属集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 表格所属表格组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableGroupId;

    /**
     * @var string 表格所属表格组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableGroupName;

    /**
     * @var string 表格主键字段结构json字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyStruct;

    /**
     * @var string 表格非主键字段结构json字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueStruct;

    /**
     * @var string 表格分表因子集合，对PROTO类型表格有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShardingKeySet;

    /**
     * @var string 表格索引键字段集合，对PROTO类型表格有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexStruct;

    /**
     * @var integer LIST类型表格元素个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListElementNum;

    /**
     * @var array 表格所关联IDL文件信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdlFiles;

    /**
     * @var integer 表格预留容量（GB）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReservedVolume;

    /**
     * @var integer 表格预留读CU
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReservedReadQps;

    /**
     * @var integer 表格预留写CU
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReservedWriteQps;

    /**
     * @var integer 表格实际数据量大小（MB）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableSize;

    /**
     * @var string 表格状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 表格创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 表格最后一次修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @var string 表格备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memo;

    /**
     * @var ErrorInfo 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Error;

    /**
     * @var string TcaplusDB SDK数据访问接入ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiAccessId;

    /**
     * @var integer SORTLIST类型表格排序字段个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SortFieldNum;

    /**
     * @var integer SORTLIST类型表格排序顺序
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SortRule;

    /**
     * @var string 表格分布式索引信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbClusterInfoStruct;

    /**
     * @param string $TableName 表格名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableInstanceId 表格实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableType 表格数据结构类型，如：`GENERIC`或`LIST`
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableIdlType 表格数据描述语言（IDL）类型，如：`PROTO`或`TDR`
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 表格所属集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 表格所属集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableGroupId 表格所属表格组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableGroupName 表格所属表格组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KeyStruct 表格主键字段结构json字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValueStruct 表格非主键字段结构json字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShardingKeySet 表格分表因子集合，对PROTO类型表格有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexStruct 表格索引键字段集合，对PROTO类型表格有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ListElementNum LIST类型表格元素个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IdlFiles 表格所关联IDL文件信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReservedVolume 表格预留容量（GB）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReservedReadQps 表格预留读CU
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReservedWriteQps 表格预留写CU
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableSize 表格实际数据量大小（MB）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 表格状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 表格创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedTime 表格最后一次修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Memo 表格备注信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ErrorInfo $Error 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiAccessId TcaplusDB SDK数据访问接入ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SortFieldNum SORTLIST类型表格排序字段个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SortRule SORTLIST类型表格排序顺序
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbClusterInfoStruct 表格分布式索引信息
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("TableInstanceId",$param) and $param["TableInstanceId"] !== null) {
            $this->TableInstanceId = $param["TableInstanceId"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("TableIdlType",$param) and $param["TableIdlType"] !== null) {
            $this->TableIdlType = $param["TableIdlType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableGroupName",$param) and $param["TableGroupName"] !== null) {
            $this->TableGroupName = $param["TableGroupName"];
        }

        if (array_key_exists("KeyStruct",$param) and $param["KeyStruct"] !== null) {
            $this->KeyStruct = $param["KeyStruct"];
        }

        if (array_key_exists("ValueStruct",$param) and $param["ValueStruct"] !== null) {
            $this->ValueStruct = $param["ValueStruct"];
        }

        if (array_key_exists("ShardingKeySet",$param) and $param["ShardingKeySet"] !== null) {
            $this->ShardingKeySet = $param["ShardingKeySet"];
        }

        if (array_key_exists("IndexStruct",$param) and $param["IndexStruct"] !== null) {
            $this->IndexStruct = $param["IndexStruct"];
        }

        if (array_key_exists("ListElementNum",$param) and $param["ListElementNum"] !== null) {
            $this->ListElementNum = $param["ListElementNum"];
        }

        if (array_key_exists("IdlFiles",$param) and $param["IdlFiles"] !== null) {
            $this->IdlFiles = [];
            foreach ($param["IdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->IdlFiles, $obj);
            }
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

        if (array_key_exists("TableSize",$param) and $param["TableSize"] !== null) {
            $this->TableSize = $param["TableSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("Memo",$param) and $param["Memo"] !== null) {
            $this->Memo = $param["Memo"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }

        if (array_key_exists("ApiAccessId",$param) and $param["ApiAccessId"] !== null) {
            $this->ApiAccessId = $param["ApiAccessId"];
        }

        if (array_key_exists("SortFieldNum",$param) and $param["SortFieldNum"] !== null) {
            $this->SortFieldNum = $param["SortFieldNum"];
        }

        if (array_key_exists("SortRule",$param) and $param["SortRule"] !== null) {
            $this->SortRule = $param["SortRule"];
        }

        if (array_key_exists("DbClusterInfoStruct",$param) and $param["DbClusterInfoStruct"] !== null) {
            $this->DbClusterInfoStruct = $param["DbClusterInfoStruct"];
        }
    }
}
