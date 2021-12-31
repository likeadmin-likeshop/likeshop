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
 * GetReturnCodeInfo请求参数结构体
 *
 * @method integer getTaskId() 获取正整数。验证成功的拨测任务id
 * @method void setTaskId(integer $TaskId) 设置正整数。验证成功的拨测任务id
 * @method string getBeginTime() 获取开始时间点。格式如：2017-05-09 10:20:00，最多拉群两天的数据
 * @method void setBeginTime(string $BeginTime) 设置开始时间点。格式如：2017-05-09 10:20:00，最多拉群两天的数据
 * @method string getEndTime() 获取结束时间点。格式如：2017-05-09 10:25:00，最多拉群两天的数据
 * @method void setEndTime(string $EndTime) 设置结束时间点。格式如：2017-05-09 10:25:00，最多拉群两天的数据
 * @method string getProvince() 获取省份名称的全拼
 * @method void setProvince(string $Province) 设置省份名称的全拼
 */
class GetReturnCodeInfoRequest extends AbstractModel
{
    /**
     * @var integer 正整数。验证成功的拨测任务id
     */
    public $TaskId;

    /**
     * @var string 开始时间点。格式如：2017-05-09 10:20:00，最多拉群两天的数据
     */
    public $BeginTime;

    /**
     * @var string 结束时间点。格式如：2017-05-09 10:25:00，最多拉群两天的数据
     */
    public $EndTime;

    /**
     * @var string 省份名称的全拼
     */
    public $Province;

    /**
     * @param integer $TaskId 正整数。验证成功的拨测任务id
     * @param string $BeginTime 开始时间点。格式如：2017-05-09 10:20:00，最多拉群两天的数据
     * @param string $EndTime 结束时间点。格式如：2017-05-09 10:25:00，最多拉群两天的数据
     * @param string $Province 省份名称的全拼
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }
    }
}
