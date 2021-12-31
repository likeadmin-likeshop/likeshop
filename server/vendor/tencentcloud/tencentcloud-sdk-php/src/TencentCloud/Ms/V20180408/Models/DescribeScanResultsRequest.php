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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScanResults请求参数结构体
 *
 * @method string getItemId() 获取任务唯一标识
 * @method void setItemId(string $ItemId) 设置任务唯一标识
 * @method array getAppMd5s() 获取批量查询一个或者多个app的扫描结果，如果不传表示查询该任务下所提交的所有app
 * @method void setAppMd5s(array $AppMd5s) 设置批量查询一个或者多个app的扫描结果，如果不传表示查询该任务下所提交的所有app
 */
class DescribeScanResultsRequest extends AbstractModel
{
    /**
     * @var string 任务唯一标识
     */
    public $ItemId;

    /**
     * @var array 批量查询一个或者多个app的扫描结果，如果不传表示查询该任务下所提交的所有app
     */
    public $AppMd5s;

    /**
     * @param string $ItemId 任务唯一标识
     * @param array $AppMd5s 批量查询一个或者多个app的扫描结果，如果不传表示查询该任务下所提交的所有app
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("AppMd5s",$param) and $param["AppMd5s"] !== null) {
            $this->AppMd5s = $param["AppMd5s"];
        }
    }
}
