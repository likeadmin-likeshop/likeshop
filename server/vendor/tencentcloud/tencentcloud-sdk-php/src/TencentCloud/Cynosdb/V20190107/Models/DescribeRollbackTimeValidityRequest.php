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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRollbackTimeValidity请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getExpectTime() 获取期望回滚的时间点
 * @method void setExpectTime(string $ExpectTime) 设置期望回滚的时间点
 * @method integer getExpectTimeThresh() 获取回滚时间点的允许误差范围
 * @method void setExpectTimeThresh(integer $ExpectTimeThresh) 设置回滚时间点的允许误差范围
 */
class DescribeRollbackTimeValidityRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 期望回滚的时间点
     */
    public $ExpectTime;

    /**
     * @var integer 回滚时间点的允许误差范围
     */
    public $ExpectTimeThresh;

    /**
     * @param string $ClusterId 集群ID
     * @param string $ExpectTime 期望回滚的时间点
     * @param integer $ExpectTimeThresh 回滚时间点的允许误差范围
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ExpectTime",$param) and $param["ExpectTime"] !== null) {
            $this->ExpectTime = $param["ExpectTime"];
        }

        if (array_key_exists("ExpectTimeThresh",$param) and $param["ExpectTimeThresh"] !== null) {
            $this->ExpectTimeThresh = $param["ExpectTimeThresh"];
        }
    }
}
