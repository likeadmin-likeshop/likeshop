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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拨测失败返回情况汇总
 *
 * @method integer getResultCount() 获取拨测失败个数
 * @method void setResultCount(integer $ResultCount) 设置拨测失败个数
 * @method integer getResultCode() 获取拨测失败返回码
 * @method void setResultCode(integer $ResultCode) 设置拨测失败返回码
 * @method string getErrorReason() 获取拨测失败原因描述
 * @method void setErrorReason(string $ErrorReason) 设置拨测失败原因描述
 */
class CatReturnSummary extends AbstractModel
{
    /**
     * @var integer 拨测失败个数
     */
    public $ResultCount;

    /**
     * @var integer 拨测失败返回码
     */
    public $ResultCode;

    /**
     * @var string 拨测失败原因描述
     */
    public $ErrorReason;

    /**
     * @param integer $ResultCount 拨测失败个数
     * @param integer $ResultCode 拨测失败返回码
     * @param string $ErrorReason 拨测失败原因描述
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
        if (array_key_exists("ResultCount",$param) and $param["ResultCount"] !== null) {
            $this->ResultCount = $param["ResultCount"];
        }

        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }

        if (array_key_exists("ErrorReason",$param) and $param["ErrorReason"] !== null) {
            $this->ErrorReason = $param["ErrorReason"];
        }
    }
}
