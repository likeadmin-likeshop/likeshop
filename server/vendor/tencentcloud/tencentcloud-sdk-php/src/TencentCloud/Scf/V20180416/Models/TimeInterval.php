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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 左闭右开时间区间，包括起始时间和结束时间，格式为"%Y-%m-%d %H:%M:%S"
 *
 * @method string getStart() 获取起始时间（包括在内），格式"%Y-%m-%d %H:%M:%S"
 * @method void setStart(string $Start) 设置起始时间（包括在内），格式"%Y-%m-%d %H:%M:%S"
 * @method string getEnd() 获取结束时间（不包括在内），格式"%Y-%m-%d %H:%M:%S"
 * @method void setEnd(string $End) 设置结束时间（不包括在内），格式"%Y-%m-%d %H:%M:%S"
 */
class TimeInterval extends AbstractModel
{
    /**
     * @var string 起始时间（包括在内），格式"%Y-%m-%d %H:%M:%S"
     */
    public $Start;

    /**
     * @var string 结束时间（不包括在内），格式"%Y-%m-%d %H:%M:%S"
     */
    public $End;

    /**
     * @param string $Start 起始时间（包括在内），格式"%Y-%m-%d %H:%M:%S"
     * @param string $End 结束时间（不包括在内），格式"%Y-%m-%d %H:%M:%S"
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
        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }
    }
}
