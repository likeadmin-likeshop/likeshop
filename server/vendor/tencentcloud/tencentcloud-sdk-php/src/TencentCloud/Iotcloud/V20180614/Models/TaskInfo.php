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
 * 任务列表详细信息
 *
 * @method string getType() 获取任务类型，目前取值为 “UpdateShadow” 或者 “PublishMessage”
 * @method void setType(string $Type) 设置任务类型，目前取值为 “UpdateShadow” 或者 “PublishMessage”
 * @method string getId() 获取任务 ID
 * @method void setId(string $Id) 设置任务 ID
 * @method string getProductId() 获取产品 ID
 * @method void setProductId(string $ProductId) 设置产品 ID
 * @method integer getStatus() 获取状态。1表示等待处理，2表示调度处理中，3表示已完成，4表示失败，5表示已取消
 * @method void setStatus(integer $Status) 设置状态。1表示等待处理，2表示调度处理中，3表示已完成，4表示失败，5表示已取消
 * @method integer getCreateTime() 获取任务创建时间，Unix 时间戳
 * @method void setCreateTime(integer $CreateTime) 设置任务创建时间，Unix 时间戳
 * @method integer getUpdateTime() 获取最后任务更新时间，Unix 时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置最后任务更新时间，Unix 时间戳
 * @method integer getRetCode() 获取返回的错误码
 * @method void setRetCode(integer $RetCode) 设置返回的错误码
 * @method string getErrMsg() 获取返回的错误信息
 * @method void setErrMsg(string $ErrMsg) 设置返回的错误信息
 */
class TaskInfo extends AbstractModel
{
    /**
     * @var string 任务类型，目前取值为 “UpdateShadow” 或者 “PublishMessage”
     */
    public $Type;

    /**
     * @var string 任务 ID
     */
    public $Id;

    /**
     * @var string 产品 ID
     */
    public $ProductId;

    /**
     * @var integer 状态。1表示等待处理，2表示调度处理中，3表示已完成，4表示失败，5表示已取消
     */
    public $Status;

    /**
     * @var integer 任务创建时间，Unix 时间戳
     */
    public $CreateTime;

    /**
     * @var integer 最后任务更新时间，Unix 时间戳
     */
    public $UpdateTime;

    /**
     * @var integer 返回的错误码
     */
    public $RetCode;

    /**
     * @var string 返回的错误信息
     */
    public $ErrMsg;

    /**
     * @param string $Type 任务类型，目前取值为 “UpdateShadow” 或者 “PublishMessage”
     * @param string $Id 任务 ID
     * @param string $ProductId 产品 ID
     * @param integer $Status 状态。1表示等待处理，2表示调度处理中，3表示已完成，4表示失败，5表示已取消
     * @param integer $CreateTime 任务创建时间，Unix 时间戳
     * @param integer $UpdateTime 最后任务更新时间，Unix 时间戳
     * @param integer $RetCode 返回的错误码
     * @param string $ErrMsg 返回的错误信息
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RetCode",$param) and $param["RetCode"] !== null) {
            $this->RetCode = $param["RetCode"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
