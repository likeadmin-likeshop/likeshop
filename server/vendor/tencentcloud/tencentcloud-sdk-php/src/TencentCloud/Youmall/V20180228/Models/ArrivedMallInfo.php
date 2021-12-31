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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户到场信息
 *
 * @method string getArrivedTime() 获取到场时间
 * @method void setArrivedTime(string $ArrivedTime) 设置到场时间
 * @method string getLeaveTime() 获取出场时间
 * @method void setLeaveTime(string $LeaveTime) 设置出场时间
 * @method integer getStaySecond() 获取停留时间，秒
 * @method void setStaySecond(integer $StaySecond) 设置停留时间，秒
 * @method string getInCapPic() 获取到场抓拍图片
 * @method void setInCapPic(string $InCapPic) 设置到场抓拍图片
 * @method string getOutCapPic() 获取出场抓拍图片
 * @method void setOutCapPic(string $OutCapPic) 设置出场抓拍图片
 * @method string getTraceId() 获取轨迹编码
 * @method void setTraceId(string $TraceId) 设置轨迹编码
 */
class ArrivedMallInfo extends AbstractModel
{
    /**
     * @var string 到场时间
     */
    public $ArrivedTime;

    /**
     * @var string 出场时间
     */
    public $LeaveTime;

    /**
     * @var integer 停留时间，秒
     */
    public $StaySecond;

    /**
     * @var string 到场抓拍图片
     */
    public $InCapPic;

    /**
     * @var string 出场抓拍图片
     */
    public $OutCapPic;

    /**
     * @var string 轨迹编码
     */
    public $TraceId;

    /**
     * @param string $ArrivedTime 到场时间
     * @param string $LeaveTime 出场时间
     * @param integer $StaySecond 停留时间，秒
     * @param string $InCapPic 到场抓拍图片
     * @param string $OutCapPic 出场抓拍图片
     * @param string $TraceId 轨迹编码
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
        if (array_key_exists("ArrivedTime",$param) and $param["ArrivedTime"] !== null) {
            $this->ArrivedTime = $param["ArrivedTime"];
        }

        if (array_key_exists("LeaveTime",$param) and $param["LeaveTime"] !== null) {
            $this->LeaveTime = $param["LeaveTime"];
        }

        if (array_key_exists("StaySecond",$param) and $param["StaySecond"] !== null) {
            $this->StaySecond = $param["StaySecond"];
        }

        if (array_key_exists("InCapPic",$param) and $param["InCapPic"] !== null) {
            $this->InCapPic = $param["InCapPic"];
        }

        if (array_key_exists("OutCapPic",$param) and $param["OutCapPic"] !== null) {
            $this->OutCapPic = $param["OutCapPic"];
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }
    }
}
