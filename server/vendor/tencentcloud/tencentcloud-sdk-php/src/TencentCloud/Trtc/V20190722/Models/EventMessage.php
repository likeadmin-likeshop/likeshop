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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件信息，包括，事件时间戳，事件ID,
 *
 * @method integer getType() 获取视频流类型：
0：与视频无关的事件；
2：视频为大画面；
3：视频为小画面；
7：视频为旁路画面；
 * @method void setType(integer $Type) 设置视频流类型：
0：与视频无关的事件；
2：视频为大画面；
3：视频为小画面；
7：视频为旁路画面；
 * @method integer getTime() 获取事件上报的时间戳，unix时间（1589891188801ms)
 * @method void setTime(integer $Time) 设置事件上报的时间戳，unix时间（1589891188801ms)
 * @method integer getEventId() 获取事件Id：分为sdk的事件和webrtc的事件，详情见：附录/事件 ID 映射表：https://cloud.tencent.com/document/product/647/44916
 * @method void setEventId(integer $EventId) 设置事件Id：分为sdk的事件和webrtc的事件，详情见：附录/事件 ID 映射表：https://cloud.tencent.com/document/product/647/44916
 * @method integer getParamOne() 获取事件的第一个参数，如视频分辨率宽
 * @method void setParamOne(integer $ParamOne) 设置事件的第一个参数，如视频分辨率宽
 * @method integer getParamTwo() 获取事件的第二个参数，如视频分辨率高
 * @method void setParamTwo(integer $ParamTwo) 设置事件的第二个参数，如视频分辨率高
 */
class EventMessage extends AbstractModel
{
    /**
     * @var integer 视频流类型：
0：与视频无关的事件；
2：视频为大画面；
3：视频为小画面；
7：视频为旁路画面；
     */
    public $Type;

    /**
     * @var integer 事件上报的时间戳，unix时间（1589891188801ms)
     */
    public $Time;

    /**
     * @var integer 事件Id：分为sdk的事件和webrtc的事件，详情见：附录/事件 ID 映射表：https://cloud.tencent.com/document/product/647/44916
     */
    public $EventId;

    /**
     * @var integer 事件的第一个参数，如视频分辨率宽
     */
    public $ParamOne;

    /**
     * @var integer 事件的第二个参数，如视频分辨率高
     */
    public $ParamTwo;

    /**
     * @param integer $Type 视频流类型：
0：与视频无关的事件；
2：视频为大画面；
3：视频为小画面；
7：视频为旁路画面；
     * @param integer $Time 事件上报的时间戳，unix时间（1589891188801ms)
     * @param integer $EventId 事件Id：分为sdk的事件和webrtc的事件，详情见：附录/事件 ID 映射表：https://cloud.tencent.com/document/product/647/44916
     * @param integer $ParamOne 事件的第一个参数，如视频分辨率宽
     * @param integer $ParamTwo 事件的第二个参数，如视频分辨率高
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("ParamOne",$param) and $param["ParamOne"] !== null) {
            $this->ParamOne = $param["ParamOne"];
        }

        if (array_key_exists("ParamTwo",$param) and $param["ParamTwo"] !== null) {
            $this->ParamTwo = $param["ParamTwo"];
        }
    }
}
