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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfsServiceStatus返回参数结构体
 *
 * @method string getCfsServiceStatus() 获取该用户当前 CFS 服务的状态，none 为未开通，creating 为开通中，created 为已开通
 * @method void setCfsServiceStatus(string $CfsServiceStatus) 设置该用户当前 CFS 服务的状态，none 为未开通，creating 为开通中，created 为已开通
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCfsServiceStatusResponse extends AbstractModel
{
    /**
     * @var string 该用户当前 CFS 服务的状态，none 为未开通，creating 为开通中，created 为已开通
     */
    public $CfsServiceStatus;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CfsServiceStatus 该用户当前 CFS 服务的状态，none 为未开通，creating 为开通中，created 为已开通
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
        if (array_key_exists("CfsServiceStatus",$param) and $param["CfsServiceStatus"] !== null) {
            $this->CfsServiceStatus = $param["CfsServiceStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
