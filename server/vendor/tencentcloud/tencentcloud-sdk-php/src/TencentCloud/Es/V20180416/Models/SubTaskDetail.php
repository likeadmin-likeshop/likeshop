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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例操作记录流程任务中的子任务信息（如升级检查任务中的各个检查项）
 *
 * @method string getName() 获取子任务名
 * @method void setName(string $Name) 设置子任务名
 * @method boolean getResult() 获取子任务结果
 * @method void setResult(boolean $Result) 设置子任务结果
 * @method string getErrMsg() 获取子任务错误信息
 * @method void setErrMsg(string $ErrMsg) 设置子任务错误信息
 * @method string getType() 获取子任务类型
 * @method void setType(string $Type) 设置子任务类型
 * @method integer getStatus() 获取子任务状态，0处理中 1成功 -1失败
 * @method void setStatus(integer $Status) 设置子任务状态，0处理中 1成功 -1失败
 * @method array getFailedIndices() 获取升级检查失败的索引名
 * @method void setFailedIndices(array $FailedIndices) 设置升级检查失败的索引名
 * @method string getFinishTime() 获取子任务结束时间
 * @method void setFinishTime(string $FinishTime) 设置子任务结束时间
 * @method integer getLevel() 获取子任务等级，1警告 2失败
 * @method void setLevel(integer $Level) 设置子任务等级，1警告 2失败
 */
class SubTaskDetail extends AbstractModel
{
    /**
     * @var string 子任务名
     */
    public $Name;

    /**
     * @var boolean 子任务结果
     */
    public $Result;

    /**
     * @var string 子任务错误信息
     */
    public $ErrMsg;

    /**
     * @var string 子任务类型
     */
    public $Type;

    /**
     * @var integer 子任务状态，0处理中 1成功 -1失败
     */
    public $Status;

    /**
     * @var array 升级检查失败的索引名
     */
    public $FailedIndices;

    /**
     * @var string 子任务结束时间
     */
    public $FinishTime;

    /**
     * @var integer 子任务等级，1警告 2失败
     */
    public $Level;

    /**
     * @param string $Name 子任务名
     * @param boolean $Result 子任务结果
     * @param string $ErrMsg 子任务错误信息
     * @param string $Type 子任务类型
     * @param integer $Status 子任务状态，0处理中 1成功 -1失败
     * @param array $FailedIndices 升级检查失败的索引名
     * @param string $FinishTime 子任务结束时间
     * @param integer $Level 子任务等级，1警告 2失败
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailedIndices",$param) and $param["FailedIndices"] !== null) {
            $this->FailedIndices = $param["FailedIndices"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
