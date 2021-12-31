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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询结果排序条件
 *
 * @method string getKey() 获取排序字段，当前支持：
createTime，域名创建时间
certExpireTime，证书过期时间
默认createTime。
 * @method void setKey(string $Key) 设置排序字段，当前支持：
createTime，域名创建时间
certExpireTime，证书过期时间
默认createTime。
 * @method string getSequence() 获取asc/desc，默认desc。
 * @method void setSequence(string $Sequence) 设置asc/desc，默认desc。
 */
class Sort extends AbstractModel
{
    /**
     * @var string 排序字段，当前支持：
createTime，域名创建时间
certExpireTime，证书过期时间
默认createTime。
     */
    public $Key;

    /**
     * @var string asc/desc，默认desc。
     */
    public $Sequence;

    /**
     * @param string $Key 排序字段，当前支持：
createTime，域名创建时间
certExpireTime，证书过期时间
默认createTime。
     * @param string $Sequence asc/desc，默认desc。
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }
    }
}
