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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 进度步骤详情
 *
 * @method string getMsg() 获取具体步骤返回信息
 * @method void setMsg(string $Msg) 设置具体步骤返回信息
 * @method integer getStatus() 获取当前步骤状态，0成功，-2未开始
 * @method void setStatus(integer $Status) 设置当前步骤状态，0成功，-2未开始
 * @method string getName() 获取步骤名称
 * @method void setName(string $Name) 设置步骤名称
 */
class StepDetail extends AbstractModel
{
    /**
     * @var string 具体步骤返回信息
     */
    public $Msg;

    /**
     * @var integer 当前步骤状态，0成功，-2未开始
     */
    public $Status;

    /**
     * @var string 步骤名称
     */
    public $Name;

    /**
     * @param string $Msg 具体步骤返回信息
     * @param integer $Status 当前步骤状态，0成功，-2未开始
     * @param string $Name 步骤名称
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
        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
