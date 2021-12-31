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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 入参的详细参数信息
 *
 * @method string getFieldName() 获取字段名称
 * @method void setFieldName(string $FieldName) 设置字段名称
 * @method string getFieldValue() 获取字段值
 * @method void setFieldValue(string $FieldValue) 设置字段值
 */
class InputDetails extends AbstractModel
{
    /**
     * @var string 字段名称
     */
    public $FieldName;

    /**
     * @var string 字段值
     */
    public $FieldValue;

    /**
     * @param string $FieldName 字段名称
     * @param string $FieldValue 字段值
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
        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("FieldValue",$param) and $param["FieldValue"] !== null) {
            $this->FieldValue = $param["FieldValue"];
        }
    }
}
