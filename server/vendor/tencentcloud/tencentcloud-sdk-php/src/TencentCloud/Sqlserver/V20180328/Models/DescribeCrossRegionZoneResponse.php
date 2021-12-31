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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCrossRegionZone返回参数结构体
 *
 * @method string getRegion() 获取备机所在地域的字符串ID，形如：ap-guangzhou
 * @method void setRegion(string $Region) 设置备机所在地域的字符串ID，形如：ap-guangzhou
 * @method string getZone() 获取备机所在可用区的字符串ID，形如：ap-guangzhou-1
 * @method void setZone(string $Zone) 设置备机所在可用区的字符串ID，形如：ap-guangzhou-1
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCrossRegionZoneResponse extends AbstractModel
{
    /**
     * @var string 备机所在地域的字符串ID，形如：ap-guangzhou
     */
    public $Region;

    /**
     * @var string 备机所在可用区的字符串ID，形如：ap-guangzhou-1
     */
    public $Zone;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Region 备机所在地域的字符串ID，形如：ap-guangzhou
     * @param string $Zone 备机所在可用区的字符串ID，形如：ap-guangzhou-1
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
