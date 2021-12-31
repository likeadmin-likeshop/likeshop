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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIotDataType请求参数结构体
 *
 * @method string getTypeId() 获取自定义数据类型的标识符，为空则返回全量自定义类型的列表
 * @method void setTypeId(string $TypeId) 设置自定义数据类型的标识符，为空则返回全量自定义类型的列表
 */
class DescribeIotDataTypeRequest extends AbstractModel
{
    /**
     * @var string 自定义数据类型的标识符，为空则返回全量自定义类型的列表
     */
    public $TypeId;

    /**
     * @param string $TypeId 自定义数据类型的标识符，为空则返回全量自定义类型的列表
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
        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }
    }
}
