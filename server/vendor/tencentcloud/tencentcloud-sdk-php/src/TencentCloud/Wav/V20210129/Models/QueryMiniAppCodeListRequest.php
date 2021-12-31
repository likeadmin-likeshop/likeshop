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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryMiniAppCodeList请求参数结构体
 *
 * @method string getCursor() 获取用于分页查询的游标，字符串类型，由上一次调用返回，首次调用可不填
 * @method void setCursor(string $Cursor) 设置用于分页查询的游标，字符串类型，由上一次调用返回，首次调用可不填
 * @method integer getLimit() 获取返回的最大记录数，整型，最大值100，默认值50，超过最大值时取最大值
 * @method void setLimit(integer $Limit) 设置返回的最大记录数，整型，最大值100，默认值50，超过最大值时取最大值
 */
class QueryMiniAppCodeListRequest extends AbstractModel
{
    /**
     * @var string 用于分页查询的游标，字符串类型，由上一次调用返回，首次调用可不填
     */
    public $Cursor;

    /**
     * @var integer 返回的最大记录数，整型，最大值100，默认值50，超过最大值时取最大值
     */
    public $Limit;

    /**
     * @param string $Cursor 用于分页查询的游标，字符串类型，由上一次调用返回，首次调用可不填
     * @param integer $Limit 返回的最大记录数，整型，最大值100，默认值50，超过最大值时取最大值
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
        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
