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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTopicRuleList请求参数结构体
 *
 * @method integer getPageNum() 获取请求的页数
 * @method void setPageNum(integer $PageNum) 设置请求的页数
 * @method integer getPageSize() 获取分页的大小
 * @method void setPageSize(integer $PageSize) 设置分页的大小
 */
class GetTopicRuleListRequest extends AbstractModel
{
    /**
     * @var integer 请求的页数
     */
    public $PageNum;

    /**
     * @var integer 分页的大小
     */
    public $PageSize;

    /**
     * @param integer $PageNum 请求的页数
     * @param integer $PageSize 分页的大小
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
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
