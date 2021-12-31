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
 * DeleteScanInstances请求参数结构体
 *
 * @method array getAppSids() 获取删除一个或多个扫描的app，最大支持20个
 * @method void setAppSids(array $AppSids) 设置删除一个或多个扫描的app，最大支持20个
 */
class DeleteScanInstancesRequest extends AbstractModel
{
    /**
     * @var array 删除一个或多个扫描的app，最大支持20个
     */
    public $AppSids;

    /**
     * @param array $AppSids 删除一个或多个扫描的app，最大支持20个
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
        if (array_key_exists("AppSids",$param) and $param["AppSids"] !== null) {
            $this->AppSids = $param["AppSids"];
        }
    }
}
