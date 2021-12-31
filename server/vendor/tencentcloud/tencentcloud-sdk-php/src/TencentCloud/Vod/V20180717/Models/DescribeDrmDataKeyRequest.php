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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDrmDataKey请求参数结构体
 *
 * @method array getEdkList() 获取加密后的数据密钥列表，最大支持10个。
 * @method void setEdkList(array $EdkList) 设置加密后的数据密钥列表，最大支持10个。
 */
class DescribeDrmDataKeyRequest extends AbstractModel
{
    /**
     * @var array 加密后的数据密钥列表，最大支持10个。
     */
    public $EdkList;

    /**
     * @param array $EdkList 加密后的数据密钥列表，最大支持10个。
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
        if (array_key_exists("EdkList",$param) and $param["EdkList"] !== null) {
            $this->EdkList = $param["EdkList"];
        }
    }
}
