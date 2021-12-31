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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAPIDocDetail请求参数结构体
 *
 * @method string getApiDocId() 获取API文档ID
 * @method void setApiDocId(string $ApiDocId) 设置API文档ID
 */
class DescribeAPIDocDetailRequest extends AbstractModel
{
    /**
     * @var string API文档ID
     */
    public $ApiDocId;

    /**
     * @param string $ApiDocId API文档ID
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
        if (array_key_exists("ApiDocId",$param) and $param["ApiDocId"] !== null) {
            $this->ApiDocId = $param["ApiDocId"];
        }
    }
}
