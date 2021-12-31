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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PurgePathCache请求参数结构体
 *
 * @method array getPaths() 获取要刷新的目录列表，必须包含协议头部。
 * @method void setPaths(array $Paths) 设置要刷新的目录列表，必须包含协议头部。
 * @method string getFlushType() 获取刷新类型，flush 代表刷新有更新的资源，delete 表示刷新全部资源。
 * @method void setFlushType(string $FlushType) 设置刷新类型，flush 代表刷新有更新的资源，delete 表示刷新全部资源。
 */
class PurgePathCacheRequest extends AbstractModel
{
    /**
     * @var array 要刷新的目录列表，必须包含协议头部。
     */
    public $Paths;

    /**
     * @var string 刷新类型，flush 代表刷新有更新的资源，delete 表示刷新全部资源。
     */
    public $FlushType;

    /**
     * @param array $Paths 要刷新的目录列表，必须包含协议头部。
     * @param string $FlushType 刷新类型，flush 代表刷新有更新的资源，delete 表示刷新全部资源。
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
        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }

        if (array_key_exists("FlushType",$param) and $param["FlushType"] !== null) {
            $this->FlushType = $param["FlushType"];
        }
    }
}
