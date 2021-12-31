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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomImageTask请求参数结构体
 *
 * @method array getFilters() 获取支持key,value查询
task-id: 异步任务ID
image-id: 镜像ID
image-name: 镜像名称
 * @method void setFilters(array $Filters) 设置支持key,value查询
task-id: 异步任务ID
image-id: 镜像ID
image-name: 镜像名称
 */
class DescribeCustomImageTaskRequest extends AbstractModel
{
    /**
     * @var array 支持key,value查询
task-id: 异步任务ID
image-id: 镜像ID
image-name: 镜像名称
     */
    public $Filters;

    /**
     * @param array $Filters 支持key,value查询
task-id: 异步任务ID
image-id: 镜像ID
image-name: 镜像名称
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
