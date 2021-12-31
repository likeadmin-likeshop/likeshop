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
 * DeleteImage请求参数结构体
 *
 * @method array getImageIDSet() 获取镜像ID列表。
 * @method void setImageIDSet(array $ImageIDSet) 设置镜像ID列表。
 */
class DeleteImageRequest extends AbstractModel
{
    /**
     * @var array 镜像ID列表。
     */
    public $ImageIDSet;

    /**
     * @param array $ImageIDSet 镜像ID列表。
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
        if (array_key_exists("ImageIDSet",$param) and $param["ImageIDSet"] !== null) {
            $this->ImageIDSet = $param["ImageIDSet"];
        }
    }
}
