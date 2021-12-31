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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表格字段信息列表
 *
 * @method string getFieldName() 获取表格字段名称
 * @method void setFieldName(string $FieldName) 设置表格字段名称
 * @method string getIsPrimaryKey() 获取字段是否是主键字段
 * @method void setIsPrimaryKey(string $IsPrimaryKey) 设置字段是否是主键字段
 * @method string getFieldType() 获取字段类型
 * @method void setFieldType(string $FieldType) 设置字段类型
 * @method integer getFieldSize() 获取字段长度
 * @method void setFieldSize(integer $FieldSize) 设置字段长度
 */
class FieldInfo extends AbstractModel
{
    /**
     * @var string 表格字段名称
     */
    public $FieldName;

    /**
     * @var string 字段是否是主键字段
     */
    public $IsPrimaryKey;

    /**
     * @var string 字段类型
     */
    public $FieldType;

    /**
     * @var integer 字段长度
     */
    public $FieldSize;

    /**
     * @param string $FieldName 表格字段名称
     * @param string $IsPrimaryKey 字段是否是主键字段
     * @param string $FieldType 字段类型
     * @param integer $FieldSize 字段长度
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

        if (array_key_exists("IsPrimaryKey",$param) and $param["IsPrimaryKey"] !== null) {
            $this->IsPrimaryKey = $param["IsPrimaryKey"];
        }

        if (array_key_exists("FieldType",$param) and $param["FieldType"] !== null) {
            $this->FieldType = $param["FieldType"];
        }

        if (array_key_exists("FieldSize",$param) and $param["FieldSize"] !== null) {
            $this->FieldSize = $param["FieldSize"];
        }
    }
}
