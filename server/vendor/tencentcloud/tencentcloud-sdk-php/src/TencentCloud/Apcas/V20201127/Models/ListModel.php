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
namespace TencentCloud\Apcas\V20201127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务列表项Model
 *
 * @method integer getID() 获取任务ID
 * @method void setID(integer $ID) 设置任务ID
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method integer getStartTime() 获取任务起始时间（13位数字的UNIX 时间戳，单位毫秒 ）
 * @method void setStartTime(integer $StartTime) 设置任务起始时间（13位数字的UNIX 时间戳，单位毫秒 ）
 * @method integer getStatus() 获取任务状态 0:默认状态 1:任务正在运行 2:任务运行成功 3:任务运行失败
 * @method void setStatus(integer $Status) 设置任务状态 0:默认状态 1:任务正在运行 2:任务运行成功 3:任务运行失败
 * @method integer getAvailable() 获取画像覆盖人数
 * @method void setAvailable(integer $Available) 设置画像覆盖人数
 * @method string getErrMsg() 获取任务失败描述信息
 * @method void setErrMsg(string $ErrMsg) 设置任务失败描述信息
 */
class ListModel extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $ID;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var integer 任务起始时间（13位数字的UNIX 时间戳，单位毫秒 ）
     */
    public $StartTime;

    /**
     * @var integer 任务状态 0:默认状态 1:任务正在运行 2:任务运行成功 3:任务运行失败
     */
    public $Status;

    /**
     * @var integer 画像覆盖人数
     */
    public $Available;

    /**
     * @var string 任务失败描述信息
     */
    public $ErrMsg;

    /**
     * @param integer $ID 任务ID
     * @param string $TaskName 任务名称
     * @param integer $StartTime 任务起始时间（13位数字的UNIX 时间戳，单位毫秒 ）
     * @param integer $Status 任务状态 0:默认状态 1:任务正在运行 2:任务运行成功 3:任务运行失败
     * @param integer $Available 画像覆盖人数
     * @param string $ErrMsg 任务失败描述信息
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
