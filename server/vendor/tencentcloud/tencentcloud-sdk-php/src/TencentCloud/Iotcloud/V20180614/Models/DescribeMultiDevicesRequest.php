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
 * DescribeMultiDevices请求参数结构体
 *
 * @method string getProductId() 获取产品 ID，创建产品时腾讯云为用户分配全局唯一的 ID
 * @method void setProductId(string $ProductId) 设置产品 ID，创建产品时腾讯云为用户分配全局唯一的 ID
 * @method string getTaskId() 获取任务 ID，由批量创建设备接口返回
 * @method void setTaskId(string $TaskId) 设置任务 ID，由批量创建设备接口返回
 * @method integer getOffset() 获取分页偏移
 * @method void setOffset(integer $Offset) 设置分页偏移
 * @method integer getLimit() 获取分页大小，每页返回的设备个数
 * @method void setLimit(integer $Limit) 设置分页大小，每页返回的设备个数
 */
class DescribeMultiDevicesRequest extends AbstractModel
{
    /**
     * @var string 产品 ID，创建产品时腾讯云为用户分配全局唯一的 ID
     */
    public $ProductId;

    /**
     * @var string 任务 ID，由批量创建设备接口返回
     */
    public $TaskId;

    /**
     * @var integer 分页偏移
     */
    public $Offset;

    /**
     * @var integer 分页大小，每页返回的设备个数
     */
    public $Limit;

    /**
     * @param string $ProductId 产品 ID，创建产品时腾讯云为用户分配全局唯一的 ID
     * @param string $TaskId 任务 ID，由批量创建设备接口返回
     * @param integer $Offset 分页偏移
     * @param integer $Limit 分页大小，每页返回的设备个数
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
