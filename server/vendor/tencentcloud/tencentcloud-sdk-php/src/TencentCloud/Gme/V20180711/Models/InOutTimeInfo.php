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
 * 用户进出房间信息
 *
 * @method integer getStartTime() 获取进入房间时间
 * @method void setStartTime(integer $StartTime) 设置进入房间时间
 * @method integer getEndTime() 获取退出房间时间
 * @method void setEndTime(integer $EndTime) 设置退出房间时间
 */
class InOutTimeInfo extends AbstractModel
{
    /**
     * @var integer 进入房间时间
     */
    public $StartTime;

    /**
     * @var integer 退出房间时间
     */
    public $EndTime;

    /**
     * @param integer $StartTime 进入房间时间
     * @param integer $EndTime 退出房间时间
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
