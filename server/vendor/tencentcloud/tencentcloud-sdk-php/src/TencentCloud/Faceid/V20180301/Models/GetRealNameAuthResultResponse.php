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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRealNameAuthResult返回参数结构体
 *
 * @method string getResultType() 获取认证结果码，收费情况如下：

收费码：
0:  姓名和身份证号一致
-1: 姓名和身份证号不一致
-2: 姓名和微信实名姓名不一致

不收费码：
-3: 微信号未实名
 * @method void setResultType(string $ResultType) 设置认证结果码，收费情况如下：

收费码：
0:  姓名和身份证号一致
-1: 姓名和身份证号不一致
-2: 姓名和微信实名姓名不一致

不收费码：
-3: 微信号未实名
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetRealNameAuthResultResponse extends AbstractModel
{
    /**
     * @var string 认证结果码，收费情况如下：

收费码：
0:  姓名和身份证号一致
-1: 姓名和身份证号不一致
-2: 姓名和微信实名姓名不一致

不收费码：
-3: 微信号未实名
     */
    public $ResultType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ResultType 认证结果码，收费情况如下：

收费码：
0:  姓名和身份证号一致
-1: 姓名和身份证号不一致
-2: 姓名和微信实名姓名不一致

不收费码：
-3: 微信号未实名
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
