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
namespace TencentCloud\Iottid\V20190411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyChipBurnInfo返回参数结构体
 *
 * @method boolean getPass() 获取验证结果
 * @method void setPass(boolean $Pass) 设置验证结果
 * @method integer getVerifiedTimes() 获取已验证次数
 * @method void setVerifiedTimes(integer $VerifiedTimes) 设置已验证次数
 * @method integer getLeftTimes() 获取剩余验证次数
 * @method void setLeftTimes(integer $LeftTimes) 设置剩余验证次数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class VerifyChipBurnInfoResponse extends AbstractModel
{
    /**
     * @var boolean 验证结果
     */
    public $Pass;

    /**
     * @var integer 已验证次数
     */
    public $VerifiedTimes;

    /**
     * @var integer 剩余验证次数
     */
    public $LeftTimes;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Pass 验证结果
     * @param integer $VerifiedTimes 已验证次数
     * @param integer $LeftTimes 剩余验证次数
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Pass",$param) and $param["Pass"] !== null) {
            $this->Pass = $param["Pass"];
        }

        if (array_key_exists("VerifiedTimes",$param) and $param["VerifiedTimes"] !== null) {
            $this->VerifiedTimes = $param["VerifiedTimes"];
        }

        if (array_key_exists("LeftTimes",$param) and $param["LeftTimes"] !== null) {
            $this->LeftTimes = $param["LeftTimes"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
