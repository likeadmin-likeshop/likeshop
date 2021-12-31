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
namespace TencentCloud\Habo\V20181203\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStatus请求参数结构体
 *
 * @method string getPk() 获取购买服务后获得的授权帐号，用于保证请求有效性
 * @method void setPk(string $Pk) 设置购买服务后获得的授权帐号，用于保证请求有效性
 * @method string getMd5() 获取需要获取分析结果的样本md5
 * @method void setMd5(string $Md5) 设置需要获取分析结果的样本md5
 */
class DescribeStatusRequest extends AbstractModel
{
    /**
     * @var string 购买服务后获得的授权帐号，用于保证请求有效性
     */
    public $Pk;

    /**
     * @var string 需要获取分析结果的样本md5
     */
    public $Md5;

    /**
     * @param string $Pk 购买服务后获得的授权帐号，用于保证请求有效性
     * @param string $Md5 需要获取分析结果的样本md5
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
        if (array_key_exists("Pk",$param) and $param["Pk"] !== null) {
            $this->Pk = $param["Pk"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }
    }
}
