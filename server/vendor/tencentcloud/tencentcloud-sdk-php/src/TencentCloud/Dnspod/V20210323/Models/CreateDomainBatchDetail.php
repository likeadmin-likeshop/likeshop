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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量添加域名返回结构
 *
 * @method array getRecordList() 获取见RecordInfoBatch
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordList(array $RecordList) 设置见RecordInfoBatch
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取任务编号
 * @method void setId(integer $Id) 设置任务编号
 * @method string getDomain() 获取域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomainGrade() 获取域名等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainGrade(string $DomainGrade) 设置域名等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrMsg() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMsg(string $ErrMsg) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取该条任务运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置该条任务运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperation() 获取操作类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperation(string $Operation) 设置操作类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class CreateDomainBatchDetail extends AbstractModel
{
    /**
     * @var array 见RecordInfoBatch
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordList;

    /**
     * @var integer 任务编号
     */
    public $Id;

    /**
     * @var string 域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string 域名等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainGrade;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMsg;

    /**
     * @var string 该条任务运行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 操作类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operation;

    /**
     * @param array $RecordList 见RecordInfoBatch
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 任务编号
     * @param string $Domain 域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DomainGrade 域名等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrMsg 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 该条任务运行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operation 操作类型
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
        if (array_key_exists("RecordList",$param) and $param["RecordList"] !== null) {
            $this->RecordList = [];
            foreach ($param["RecordList"] as $key => $value){
                $obj = new CreateDomainBatchRecord();
                $obj->deserialize($value);
                array_push($this->RecordList, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainGrade",$param) and $param["DomainGrade"] !== null) {
            $this->DomainGrade = $param["DomainGrade"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }
    }
}
