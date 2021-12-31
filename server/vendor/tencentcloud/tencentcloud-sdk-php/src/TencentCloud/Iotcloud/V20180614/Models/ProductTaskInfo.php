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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品级任务详细信息
 *
 * @method integer getId() 获取任务ID
 * @method void setId(integer $Id) 设置任务ID
 * @method integer getType() 获取任务类型 0-批量创建设备类型
 * @method void setType(integer $Type) 设置任务类型 0-批量创建设备类型
 * @method integer getState() 获取任务状态 0-创建中 1-待执行 2-执行中 3-执行失败 4-子任务部分失败 5-执行成功
 * @method void setState(integer $State) 设置任务状态 0-创建中 1-待执行 2-执行中 3-执行失败 4-子任务部分失败 5-执行成功
 * @method string getParametersType() 获取任务参数类型 cosfile-文件输入 random-随机生成
 * @method void setParametersType(string $ParametersType) 设置任务参数类型 cosfile-文件输入 random-随机生成
 * @method string getParameters() 获取任务参数
 * @method void setParameters(string $Parameters) 设置任务参数
 * @method string getResultType() 获取任务执行结果类型 cosfile-文件输出 errmsg-错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultType(string $ResultType) 设置任务执行结果类型 cosfile-文件输出 errmsg-错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResult() 获取任务执行结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(string $Result) 设置任务执行结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBatchCount() 获取子任务总个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchCount(integer $BatchCount) 设置子任务总个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBatchOffset() 获取子任务已执行个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchOffset(integer $BatchOffset) 设置子任务已执行个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取任务创建时间
 * @method void setCreateTime(integer $CreateTime) 设置任务创建时间
 * @method integer getUpdateTime() 获取任务更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置任务更新时间
 * @method integer getCompleteTime() 获取任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompleteTime(integer $CompleteTime) 设置任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProductTaskInfo extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $Id;

    /**
     * @var integer 任务类型 0-批量创建设备类型
     */
    public $Type;

    /**
     * @var integer 任务状态 0-创建中 1-待执行 2-执行中 3-执行失败 4-子任务部分失败 5-执行成功
     */
    public $State;

    /**
     * @var string 任务参数类型 cosfile-文件输入 random-随机生成
     */
    public $ParametersType;

    /**
     * @var string 任务参数
     */
    public $Parameters;

    /**
     * @var string 任务执行结果类型 cosfile-文件输出 errmsg-错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultType;

    /**
     * @var string 任务执行结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var integer 子任务总个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchCount;

    /**
     * @var integer 子任务已执行个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchOffset;

    /**
     * @var integer 任务创建时间
     */
    public $CreateTime;

    /**
     * @var integer 任务更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompleteTime;

    /**
     * @param integer $Id 任务ID
     * @param integer $Type 任务类型 0-批量创建设备类型
     * @param integer $State 任务状态 0-创建中 1-待执行 2-执行中 3-执行失败 4-子任务部分失败 5-执行成功
     * @param string $ParametersType 任务参数类型 cosfile-文件输入 random-随机生成
     * @param string $Parameters 任务参数
     * @param string $ResultType 任务执行结果类型 cosfile-文件输出 errmsg-错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Result 任务执行结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BatchCount 子任务总个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BatchOffset 子任务已执行个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 任务创建时间
     * @param integer $UpdateTime 任务更新时间
     * @param integer $CompleteTime 任务完成时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("ParametersType",$param) and $param["ParametersType"] !== null) {
            $this->ParametersType = $param["ParametersType"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("BatchCount",$param) and $param["BatchCount"] !== null) {
            $this->BatchCount = $param["BatchCount"];
        }

        if (array_key_exists("BatchOffset",$param) and $param["BatchOffset"] !== null) {
            $this->BatchOffset = $param["BatchOffset"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CompleteTime",$param) and $param["CompleteTime"] !== null) {
            $this->CompleteTime = $param["CompleteTime"];
        }
    }
}
