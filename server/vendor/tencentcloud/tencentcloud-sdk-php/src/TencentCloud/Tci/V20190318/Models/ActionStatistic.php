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
 * 统计结果
 *
 * @method array getActionCount() 获取数量统计
 * @method void setActionCount(array $ActionCount) 设置数量统计
 * @method array getActionDuration() 获取时长统计
 * @method void setActionDuration(array $ActionDuration) 设置时长统计
 * @method array getActionDurationRatio() 获取时长比例统计
 * @method void setActionDurationRatio(array $ActionDurationRatio) 设置时长比例统计
 */
class ActionStatistic extends AbstractModel
{
    /**
     * @var array 数量统计
     */
    public $ActionCount;

    /**
     * @var array 时长统计
     */
    public $ActionDuration;

    /**
     * @var array 时长比例统计
     */
    public $ActionDurationRatio;

    /**
     * @param array $ActionCount 数量统计
     * @param array $ActionDuration 时长统计
     * @param array $ActionDurationRatio 时长比例统计
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
        if (array_key_exists("ActionCount",$param) and $param["ActionCount"] !== null) {
            $this->ActionCount = [];
            foreach ($param["ActionCount"] as $key => $value){
                $obj = new ActionCountStatistic();
                $obj->deserialize($value);
                array_push($this->ActionCount, $obj);
            }
        }

        if (array_key_exists("ActionDuration",$param) and $param["ActionDuration"] !== null) {
            $this->ActionDuration = [];
            foreach ($param["ActionDuration"] as $key => $value){
                $obj = new ActionDurationStatistic();
                $obj->deserialize($value);
                array_push($this->ActionDuration, $obj);
            }
        }

        if (array_key_exists("ActionDurationRatio",$param) and $param["ActionDurationRatio"] !== null) {
            $this->ActionDurationRatio = [];
            foreach ($param["ActionDurationRatio"] as $key => $value){
                $obj = new ActionDurationRatioStatistic();
                $obj->deserialize($value);
                array_push($this->ActionDurationRatio, $obj);
            }
        }
    }
}
