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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRecordBatch请求参数结构体
 *
 * @method array getRecordIdList() 获取记录ID数组
 * @method void setRecordIdList(array $RecordIdList) 设置记录ID数组
 * @method string getChange() 获取要修改的字段，可选值为 [“sub_domain”、”record_type”、”area”、”value”、”mx”、”ttl”、”status”] 中的某一个。
 * @method void setChange(string $Change) 设置要修改的字段，可选值为 [“sub_domain”、”record_type”、”area”、”value”、”mx”、”ttl”、”status”] 中的某一个。
 * @method string getChangeTo() 获取修改为，具体依赖 change 字段，必填参数。
 * @method void setChangeTo(string $ChangeTo) 设置修改为，具体依赖 change 字段，必填参数。
 * @method string getValue() 获取要修改到的记录值，仅当 change 字段为 “record_type” 时为必填参数。
 * @method void setValue(string $Value) 设置要修改到的记录值，仅当 change 字段为 “record_type” 时为必填参数。
 * @method string getMX() 获取MX记录优先级，仅当修改为 MX 记录时为必填参数。
 * @method void setMX(string $MX) 设置MX记录优先级，仅当修改为 MX 记录时为必填参数。
 */
class ModifyRecordBatchRequest extends AbstractModel
{
    /**
     * @var array 记录ID数组
     */
    public $RecordIdList;

    /**
     * @var string 要修改的字段，可选值为 [“sub_domain”、”record_type”、”area”、”value”、”mx”、”ttl”、”status”] 中的某一个。
     */
    public $Change;

    /**
     * @var string 修改为，具体依赖 change 字段，必填参数。
     */
    public $ChangeTo;

    /**
     * @var string 要修改到的记录值，仅当 change 字段为 “record_type” 时为必填参数。
     */
    public $Value;

    /**
     * @var string MX记录优先级，仅当修改为 MX 记录时为必填参数。
     */
    public $MX;

    /**
     * @param array $RecordIdList 记录ID数组
     * @param string $Change 要修改的字段，可选值为 [“sub_domain”、”record_type”、”area”、”value”、”mx”、”ttl”、”status”] 中的某一个。
     * @param string $ChangeTo 修改为，具体依赖 change 字段，必填参数。
     * @param string $Value 要修改到的记录值，仅当 change 字段为 “record_type” 时为必填参数。
     * @param string $MX MX记录优先级，仅当修改为 MX 记录时为必填参数。
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
        if (array_key_exists("RecordIdList",$param) and $param["RecordIdList"] !== null) {
            $this->RecordIdList = $param["RecordIdList"];
        }

        if (array_key_exists("Change",$param) and $param["Change"] !== null) {
            $this->Change = $param["Change"];
        }

        if (array_key_exists("ChangeTo",$param) and $param["ChangeTo"] !== null) {
            $this->ChangeTo = $param["ChangeTo"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("MX",$param) and $param["MX"] !== null) {
            $this->MX = $param["MX"];
        }
    }
}
