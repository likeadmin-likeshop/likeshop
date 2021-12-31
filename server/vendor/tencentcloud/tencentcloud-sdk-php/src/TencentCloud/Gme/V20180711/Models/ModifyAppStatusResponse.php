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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAppStatus接口输出参数
 *
 * @method integer getBizId() 获取GME应用ID
 * @method void setBizId(integer $BizId) 设置GME应用ID
 * @method string getStatus() 获取应用状态，取值：open/close
 * @method void setStatus(string $Status) 设置应用状态，取值：open/close
 */
class ModifyAppStatusResponse extends AbstractModel
{
    /**
     * @var integer GME应用ID
     */
    public $BizId;

    /**
     * @var string 应用状态，取值：open/close
     */
    public $Status;

    /**
     * @param integer $BizId GME应用ID
     * @param string $Status 应用状态，取值：open/close
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
