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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBSpaceStatus返回参数结构体
 *
 * @method integer getGrowth() 获取磁盘增长量(MB)。
 * @method void setGrowth(integer $Growth) 设置磁盘增长量(MB)。
 * @method integer getRemain() 获取磁盘剩余(MB)。
 * @method void setRemain(integer $Remain) 设置磁盘剩余(MB)。
 * @method integer getTotal() 获取磁盘总量(MB)。
 * @method void setTotal(integer $Total) 设置磁盘总量(MB)。
 * @method integer getAvailableDays() 获取预计可用天数。
 * @method void setAvailableDays(integer $AvailableDays) 设置预计可用天数。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBSpaceStatusResponse extends AbstractModel
{
    /**
     * @var integer 磁盘增长量(MB)。
     */
    public $Growth;

    /**
     * @var integer 磁盘剩余(MB)。
     */
    public $Remain;

    /**
     * @var integer 磁盘总量(MB)。
     */
    public $Total;

    /**
     * @var integer 预计可用天数。
     */
    public $AvailableDays;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Growth 磁盘增长量(MB)。
     * @param integer $Remain 磁盘剩余(MB)。
     * @param integer $Total 磁盘总量(MB)。
     * @param integer $AvailableDays 预计可用天数。
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
        if (array_key_exists("Growth",$param) and $param["Growth"] !== null) {
            $this->Growth = $param["Growth"];
        }

        if (array_key_exists("Remain",$param) and $param["Remain"] !== null) {
            $this->Remain = $param["Remain"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("AvailableDays",$param) and $param["AvailableDays"] !== null) {
            $this->AvailableDays = $param["AvailableDays"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
