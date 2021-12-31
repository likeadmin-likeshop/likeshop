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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClientBalance返回参数结构体
 *
 * @method integer getBalance() 获取账户可用余额，单位分 （可用余额 = 现金余额 - 冻结金额）
 * @method void setBalance(integer $Balance) 设置账户可用余额，单位分 （可用余额 = 现金余额 - 冻结金额）
 * @method integer getCash() 获取账户现金余额，单位分
 * @method void setCash(integer $Cash) 设置账户现金余额，单位分
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClientBalanceResponse extends AbstractModel
{
    /**
     * @var integer 账户可用余额，单位分 （可用余额 = 现金余额 - 冻结金额）
     */
    public $Balance;

    /**
     * @var integer 账户现金余额，单位分
     */
    public $Cash;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Balance 账户可用余额，单位分 （可用余额 = 现金余额 - 冻结金额）
     * @param integer $Cash 账户现金余额，单位分
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
        if (array_key_exists("Balance",$param) and $param["Balance"] !== null) {
            $this->Balance = $param["Balance"];
        }

        if (array_key_exists("Cash",$param) and $param["Cash"] !== null) {
            $this->Cash = $param["Cash"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
