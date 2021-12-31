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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteNetDetect请求参数结构体
 *
 * @method string getNetDetectId() 获取网络探测实例`ID`。形如：`netd-12345678`
 * @method void setNetDetectId(string $NetDetectId) 设置网络探测实例`ID`。形如：`netd-12345678`
 */
class DeleteNetDetectRequest extends AbstractModel
{
    /**
     * @var string 网络探测实例`ID`。形如：`netd-12345678`
     */
    public $NetDetectId;

    /**
     * @param string $NetDetectId 网络探测实例`ID`。形如：`netd-12345678`
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
        if (array_key_exists("NetDetectId",$param) and $param["NetDetectId"] !== null) {
            $this->NetDetectId = $param["NetDetectId"];
        }
    }
}
