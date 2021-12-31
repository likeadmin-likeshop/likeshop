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
namespace TencentCloud\Yunsou\V20191115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据操作结果
 *
 * @method integer getAppId() 获取应用ID
 * @method void setAppId(integer $AppId) 设置应用ID
 * @method integer getSeq() 获取序号
 * @method void setSeq(integer $Seq) 设置序号
 * @method string getTotalResult() 获取结果
 * @method void setTotalResult(string $TotalResult) 设置结果
 * @method array getResult() 获取操作结果明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(array $Result) 设置操作结果明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorResult() 获取异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorResult(string $ErrorResult) 设置异常信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataManipulationResult extends AbstractModel
{
    /**
     * @var integer 应用ID
     */
    public $AppId;

    /**
     * @var integer 序号
     */
    public $Seq;

    /**
     * @var string 结果
     */
    public $TotalResult;

    /**
     * @var array 操作结果明细
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var string 异常信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorResult;

    /**
     * @param integer $AppId 应用ID
     * @param integer $Seq 序号
     * @param string $TotalResult 结果
     * @param array $Result 操作结果明细
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorResult 异常信息
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }

        if (array_key_exists("TotalResult",$param) and $param["TotalResult"] !== null) {
            $this->TotalResult = $param["TotalResult"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = [];
            foreach ($param["Result"] as $key => $value){
                $obj = new DataManipulationResultItem();
                $obj->deserialize($value);
                array_push($this->Result, $obj);
            }
        }

        if (array_key_exists("ErrorResult",$param) and $param["ErrorResult"] !== null) {
            $this->ErrorResult = $param["ErrorResult"];
        }
    }
}
