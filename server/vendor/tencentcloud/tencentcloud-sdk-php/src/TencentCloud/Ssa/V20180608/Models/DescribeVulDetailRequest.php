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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulDetail请求参数结构体
 *
 * @method string getUniqId() 获取漏洞唯一标识符
 * @method void setUniqId(string $UniqId) 设置漏洞唯一标识符
 * @method string getSource() 获取查看详情来源
 * @method void setSource(string $Source) 设置查看详情来源
 */
class DescribeVulDetailRequest extends AbstractModel
{
    /**
     * @var string 漏洞唯一标识符
     */
    public $UniqId;

    /**
     * @var string 查看详情来源
     */
    public $Source;

    /**
     * @param string $UniqId 漏洞唯一标识符
     * @param string $Source 查看详情来源
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
        if (array_key_exists("UniqId",$param) and $param["UniqId"] !== null) {
            $this->UniqId = $param["UniqId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
