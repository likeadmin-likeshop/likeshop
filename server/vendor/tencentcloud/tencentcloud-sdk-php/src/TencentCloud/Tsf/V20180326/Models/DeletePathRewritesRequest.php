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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeletePathRewrites请求参数结构体
 *
 * @method array getPathRewriteIds() 获取路径重写规则IDs
 * @method void setPathRewriteIds(array $PathRewriteIds) 设置路径重写规则IDs
 */
class DeletePathRewritesRequest extends AbstractModel
{
    /**
     * @var array 路径重写规则IDs
     */
    public $PathRewriteIds;

    /**
     * @param array $PathRewriteIds 路径重写规则IDs
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
        if (array_key_exists("PathRewriteIds",$param) and $param["PathRewriteIds"] !== null) {
            $this->PathRewriteIds = $param["PathRewriteIds"];
        }
    }
}
