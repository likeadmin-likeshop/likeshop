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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TimeInfoResult
 *
 * @method integer getDuration() 获取持续时间，单位毫秒
 * @method void setDuration(integer $Duration) 设置持续时间，单位毫秒
 * @method integer getEndTs() 获取结束时间戳，单位毫秒
 * @method void setEndTs(integer $EndTs) 设置结束时间戳，单位毫秒
 * @method integer getStartTs() 获取开始时间戳，单位毫秒
 * @method void setStartTs(integer $StartTs) 设置开始时间戳，单位毫秒
 */
class TimeInfoResult extends AbstractModel
{
    /**
     * @var integer 持续时间，单位毫秒
     */
    public $Duration;

    /**
     * @var integer 结束时间戳，单位毫秒
     */
    public $EndTs;

    /**
     * @var integer 开始时间戳，单位毫秒
     */
    public $StartTs;

    /**
     * @param integer $Duration 持续时间，单位毫秒
     * @param integer $EndTs 结束时间戳，单位毫秒
     * @param integer $StartTs 开始时间戳，单位毫秒
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("EndTs",$param) and $param["EndTs"] !== null) {
            $this->EndTs = $param["EndTs"];
        }

        if (array_key_exists("StartTs",$param) and $param["StartTs"] !== null) {
            $this->StartTs = $param["StartTs"];
        }
    }
}
