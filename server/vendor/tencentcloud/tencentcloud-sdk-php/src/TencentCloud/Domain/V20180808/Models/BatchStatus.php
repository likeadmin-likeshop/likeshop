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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量任务状态
 *
 * @method integer getLogId() 获取批量任务id
 * @method void setLogId(integer $LogId) 设置批量任务id
 * @method string getStatus() 获取批量任务状态  doing：进行中  success：成功  failed：失败  partial_success：部分成功
 * @method void setStatus(string $Status) 设置批量任务状态  doing：进行中  success：成功  failed：失败  partial_success：部分成功
 * @method string getBatchAction() 获取批量任务类型
 * @method void setBatchAction(string $BatchAction) 设置批量任务类型
 */
class BatchStatus extends AbstractModel
{
    /**
     * @var integer 批量任务id
     */
    public $LogId;

    /**
     * @var string 批量任务状态  doing：进行中  success：成功  failed：失败  partial_success：部分成功
     */
    public $Status;

    /**
     * @var string 批量任务类型
     */
    public $BatchAction;

    /**
     * @param integer $LogId 批量任务id
     * @param string $Status 批量任务状态  doing：进行中  success：成功  failed：失败  partial_success：部分成功
     * @param string $BatchAction 批量任务类型
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
        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BatchAction",$param) and $param["BatchAction"] !== null) {
            $this->BatchAction = $param["BatchAction"];
        }
    }
}
