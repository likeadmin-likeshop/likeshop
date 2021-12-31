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
 * 实例所在物理机内存监控信息
 *
 * @method array getTotal() 获取总内存大小。free命令中Mem:一行total的值,单位：KB
 * @method void setTotal(array $Total) 设置总内存大小。free命令中Mem:一行total的值,单位：KB
 * @method array getUsed() 获取已使用内存。free命令中Mem:一行used的值,单位：KB
 * @method void setUsed(array $Used) 设置已使用内存。free命令中Mem:一行used的值,单位：KB
 */
class DeviceMemInfo extends AbstractModel
{
    /**
     * @var array 总内存大小。free命令中Mem:一行total的值,单位：KB
     */
    public $Total;

    /**
     * @var array 已使用内存。free命令中Mem:一行used的值,单位：KB
     */
    public $Used;

    /**
     * @param array $Total 总内存大小。free命令中Mem:一行total的值,单位：KB
     * @param array $Used 已使用内存。free命令中Mem:一行used的值,单位：KB
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }
    }
}
