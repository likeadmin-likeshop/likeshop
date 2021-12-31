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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNamespaces请求参数结构体
 *
 * @method integer getLimit() 获取分页limit
 * @method void setLimit(integer $Limit) 设置分页limit
 * @method integer getOffset() 获取分页下标
 * @method void setOffset(integer $Offset) 设置分页下标
 * @method integer getSourceChannel() 获取来源source
 * @method void setSourceChannel(integer $SourceChannel) 设置来源source
 */
class DescribeNamespacesRequest extends AbstractModel
{
    /**
     * @var integer 分页limit
     */
    public $Limit;

    /**
     * @var integer 分页下标
     */
    public $Offset;

    /**
     * @var integer 来源source
     */
    public $SourceChannel;

    /**
     * @param integer $Limit 分页limit
     * @param integer $Offset 分页下标
     * @param integer $SourceChannel 来源source
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
