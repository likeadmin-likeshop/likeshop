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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志搜索上下文
 *
 * @method string getOffset() 获取偏移量
 * @method void setOffset(string $Offset) 设置偏移量
 * @method integer getLimit() 获取日志条数
 * @method void setLimit(integer $Limit) 设置日志条数
 * @method string getKeyword() 获取日志关键词
 * @method void setKeyword(string $Keyword) 设置日志关键词
 * @method string getType() 获取日志类型，支持Application和Platform，默认为Application
 * @method void setType(string $Type) 设置日志类型，支持Application和Platform，默认为Application
 */
class LogSearchContext extends AbstractModel
{
    /**
     * @var string 偏移量
     */
    public $Offset;

    /**
     * @var integer 日志条数
     */
    public $Limit;

    /**
     * @var string 日志关键词
     */
    public $Keyword;

    /**
     * @var string 日志类型，支持Application和Platform，默认为Application
     */
    public $Type;

    /**
     * @param string $Offset 偏移量
     * @param integer $Limit 日志条数
     * @param string $Keyword 日志关键词
     * @param string $Type 日志类型，支持Application和Platform，默认为Application
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
