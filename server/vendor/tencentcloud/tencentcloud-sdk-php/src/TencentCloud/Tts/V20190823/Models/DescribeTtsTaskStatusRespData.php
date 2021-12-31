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
namespace TencentCloud\Tts\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取异步合成结果的返回参数
 *
 * @method string getTaskId() 获取任务标识。
 * @method void setTaskId(string $TaskId) 设置任务标识。
 * @method integer getStatus() 获取任务状态码，0：任务等待，1：任务执行中，2：任务成功，3：任务失败。
 * @method void setStatus(integer $Status) 设置任务状态码，0：任务等待，1：任务执行中，2：任务成功，3：任务失败。
 * @method string getStatusStr() 获取任务状态，waiting：任务等待，doing：任务执行中，success：任务成功，failed：任务失败。
 * @method void setStatusStr(string $StatusStr) 设置任务状态，waiting：任务等待，doing：任务执行中，success：任务成功，failed：任务失败。
 * @method string getResultUrl() 获取合成音频COS地址（链接有效期1天）。
 * @method void setResultUrl(string $ResultUrl) 设置合成音频COS地址（链接有效期1天）。
 * @method string getErrorMsg() 获取失败原因说明。
 * @method void setErrorMsg(string $ErrorMsg) 设置失败原因说明。
 */
class DescribeTtsTaskStatusRespData extends AbstractModel
{
    /**
     * @var string 任务标识。
     */
    public $TaskId;

    /**
     * @var integer 任务状态码，0：任务等待，1：任务执行中，2：任务成功，3：任务失败。
     */
    public $Status;

    /**
     * @var string 任务状态，waiting：任务等待，doing：任务执行中，success：任务成功，failed：任务失败。
     */
    public $StatusStr;

    /**
     * @var string 合成音频COS地址（链接有效期1天）。
     */
    public $ResultUrl;

    /**
     * @var string 失败原因说明。
     */
    public $ErrorMsg;

    /**
     * @param string $TaskId 任务标识。
     * @param integer $Status 任务状态码，0：任务等待，1：任务执行中，2：任务成功，3：任务失败。
     * @param string $StatusStr 任务状态，waiting：任务等待，doing：任务执行中，success：任务成功，failed：任务失败。
     * @param string $ResultUrl 合成音频COS地址（链接有效期1天）。
     * @param string $ErrorMsg 失败原因说明。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusStr",$param) and $param["StatusStr"] !== null) {
            $this->StatusStr = $param["StatusStr"];
        }

        if (array_key_exists("ResultUrl",$param) and $param["ResultUrl"] !== null) {
            $this->ResultUrl = $param["ResultUrl"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }
    }
}
