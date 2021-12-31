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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取应用用量统计数据输出参数
 *
 * @method array getAppStatistics() 获取应用用量统计数据
 * @method void setAppStatistics(array $AppStatistics) 设置应用用量统计数据
 */
class DescribeAppStatisticsResponse extends AbstractModel
{
    /**
     * @var array 应用用量统计数据
     */
    public $AppStatistics;

    /**
     * @param array $AppStatistics 应用用量统计数据
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
        if (array_key_exists("AppStatistics",$param) and $param["AppStatistics"] !== null) {
            $this->AppStatistics = [];
            foreach ($param["AppStatistics"] as $key => $value){
                $obj = new AppStatisticsItem();
                $obj->deserialize($value);
                array_push($this->AppStatistics, $obj);
            }
        }
    }
}
