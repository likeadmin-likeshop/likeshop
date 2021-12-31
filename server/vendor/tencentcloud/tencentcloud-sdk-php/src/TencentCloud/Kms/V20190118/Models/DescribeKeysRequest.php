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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKeys请求参数结构体
 *
 * @method array getKeyIds() 获取查询CMK的ID列表，批量查询一次最多支持100个KeyId
 * @method void setKeyIds(array $KeyIds) 设置查询CMK的ID列表，批量查询一次最多支持100个KeyId
 */
class DescribeKeysRequest extends AbstractModel
{
    /**
     * @var array 查询CMK的ID列表，批量查询一次最多支持100个KeyId
     */
    public $KeyIds;

    /**
     * @param array $KeyIds 查询CMK的ID列表，批量查询一次最多支持100个KeyId
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
        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }
    }
}
