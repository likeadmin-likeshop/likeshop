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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmTopic请求参数结构体
 *
 * @method integer getNeedAdd() 获取如果不存在拨测相关的主题，是否自动创建一个。取值可为0, 1，默认为0
 * @method void setNeedAdd(integer $NeedAdd) 设置如果不存在拨测相关的主题，是否自动创建一个。取值可为0, 1，默认为0
 */
class DescribeAlarmTopicRequest extends AbstractModel
{
    /**
     * @var integer 如果不存在拨测相关的主题，是否自动创建一个。取值可为0, 1，默认为0
     */
    public $NeedAdd;

    /**
     * @param integer $NeedAdd 如果不存在拨测相关的主题，是否自动创建一个。取值可为0, 1，默认为0
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
        if (array_key_exists("NeedAdd",$param) and $param["NeedAdd"] !== null) {
            $this->NeedAdd = $param["NeedAdd"];
        }
    }
}
