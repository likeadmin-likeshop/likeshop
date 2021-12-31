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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceGTID返回参数结构体
 *
 * @method integer getIsGTIDOpen() 获取GTID 是否开通的标记，可能的取值为：0 - 未开通，1 - 已开通。
 * @method void setIsGTIDOpen(integer $IsGTIDOpen) 设置GTID 是否开通的标记，可能的取值为：0 - 未开通，1 - 已开通。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBInstanceGTIDResponse extends AbstractModel
{
    /**
     * @var integer GTID 是否开通的标记，可能的取值为：0 - 未开通，1 - 已开通。
     */
    public $IsGTIDOpen;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $IsGTIDOpen GTID 是否开通的标记，可能的取值为：0 - 未开通，1 - 已开通。
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
        if (array_key_exists("IsGTIDOpen",$param) and $param["IsGTIDOpen"] !== null) {
            $this->IsGTIDOpen = $param["IsGTIDOpen"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
