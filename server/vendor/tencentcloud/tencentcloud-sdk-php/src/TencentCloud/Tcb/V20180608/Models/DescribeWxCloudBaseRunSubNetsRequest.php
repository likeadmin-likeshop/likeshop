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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWxCloudBaseRunSubNets请求参数结构体
 *
 * @method string getVpcId() 获取VPC id
 * @method void setVpcId(string $VpcId) 设置VPC id
 * @method integer getLimit() 获取查询个数限制，不填或小于等于0，等于不限制
 * @method void setLimit(integer $Limit) 设置查询个数限制，不填或小于等于0，等于不限制
 */
class DescribeWxCloudBaseRunSubNetsRequest extends AbstractModel
{
    /**
     * @var string VPC id
     */
    public $VpcId;

    /**
     * @var integer 查询个数限制，不填或小于等于0，等于不限制
     */
    public $Limit;

    /**
     * @param string $VpcId VPC id
     * @param integer $Limit 查询个数限制，不填或小于等于0，等于不限制
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
