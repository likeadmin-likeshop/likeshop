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
 * 录制的使用信息。
 *
 * @method string getTimeKey() 获取本组数据对应的时间点，格式如:2020-09-07或2020-09-07 00:05:05。
 * @method void setTimeKey(string $TimeKey) 设置本组数据对应的时间点，格式如:2020-09-07或2020-09-07 00:05:05。
 * @method integer getClass1VideoTime() 获取视频时长-标清SD，单位：秒。
 * @method void setClass1VideoTime(integer $Class1VideoTime) 设置视频时长-标清SD，单位：秒。
 * @method integer getClass2VideoTime() 获取视频时长-高清HD，单位：秒。
 * @method void setClass2VideoTime(integer $Class2VideoTime) 设置视频时长-高清HD，单位：秒。
 * @method integer getClass3VideoTime() 获取视频时长-超清HD，单位：秒。
 * @method void setClass3VideoTime(integer $Class3VideoTime) 设置视频时长-超清HD，单位：秒。
 * @method integer getAudioTime() 获取语音时长，单位：秒。
 * @method void setAudioTime(integer $AudioTime) 设置语音时长，单位：秒。
 */
class RecordUsage extends AbstractModel
{
    /**
     * @var string 本组数据对应的时间点，格式如:2020-09-07或2020-09-07 00:05:05。
     */
    public $TimeKey;

    /**
     * @var integer 视频时长-标清SD，单位：秒。
     */
    public $Class1VideoTime;

    /**
     * @var integer 视频时长-高清HD，单位：秒。
     */
    public $Class2VideoTime;

    /**
     * @var integer 视频时长-超清HD，单位：秒。
     */
    public $Class3VideoTime;

    /**
     * @var integer 语音时长，单位：秒。
     */
    public $AudioTime;

    /**
     * @param string $TimeKey 本组数据对应的时间点，格式如:2020-09-07或2020-09-07 00:05:05。
     * @param integer $Class1VideoTime 视频时长-标清SD，单位：秒。
     * @param integer $Class2VideoTime 视频时长-高清HD，单位：秒。
     * @param integer $Class3VideoTime 视频时长-超清HD，单位：秒。
     * @param integer $AudioTime 语音时长，单位：秒。
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
        if (array_key_exists("TimeKey",$param) and $param["TimeKey"] !== null) {
            $this->TimeKey = $param["TimeKey"];
        }

        if (array_key_exists("Class1VideoTime",$param) and $param["Class1VideoTime"] !== null) {
            $this->Class1VideoTime = $param["Class1VideoTime"];
        }

        if (array_key_exists("Class2VideoTime",$param) and $param["Class2VideoTime"] !== null) {
            $this->Class2VideoTime = $param["Class2VideoTime"];
        }

        if (array_key_exists("Class3VideoTime",$param) and $param["Class3VideoTime"] !== null) {
            $this->Class3VideoTime = $param["Class3VideoTime"];
        }

        if (array_key_exists("AudioTime",$param) and $param["AudioTime"] !== null) {
            $this->AudioTime = $param["AudioTime"];
        }
    }
}
