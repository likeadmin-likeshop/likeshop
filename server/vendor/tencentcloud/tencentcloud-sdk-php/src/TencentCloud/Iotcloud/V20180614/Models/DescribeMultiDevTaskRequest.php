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
 * DescribeMultiDevTask请求参数结构体
 *
 * @method string getTaskId() 获取任务 ID，由批量创建设备接口返回
 * @method void setTaskId(string $TaskId) 设置任务 ID，由批量创建设备接口返回
 * @method string getProductId() 获取产品 ID，创建产品时腾讯云为用户分配全局唯一的 ID
 * @method void setProductId(string $ProductId) 设置产品 ID，创建产品时腾讯云为用户分配全局唯一的 ID
 */
class DescribeMultiDevTaskRequest extends AbstractModel
{
    /**
     * @var string 任务 ID，由批量创建设备接口返回
     */
    public $TaskId;

    /**
     * @var string 产品 ID，创建产品时腾讯云为用户分配全局唯一的 ID
     */
    public $ProductId;

    /**
     * @param string $TaskId 任务 ID，由批量创建设备接口返回
     * @param string $ProductId 产品 ID，创建产品时腾讯云为用户分配全局唯一的 ID
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }
    }
}
