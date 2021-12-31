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
 * DescribeProductResource请求参数结构体
 *
 * @method string getProductID() 获取需要查看资源列表的产品 ID
 * @method void setProductID(string $ProductID) 设置需要查看资源列表的产品 ID
 * @method string getName() 获取需要过滤的资源名称
 * @method void setName(string $Name) 设置需要过滤的资源名称
 */
class DescribeProductResourceRequest extends AbstractModel
{
    /**
     * @var string 需要查看资源列表的产品 ID
     */
    public $ProductID;

    /**
     * @var string 需要过滤的资源名称
     */
    public $Name;

    /**
     * @param string $ProductID 需要查看资源列表的产品 ID
     * @param string $Name 需要过滤的资源名称
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
        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
