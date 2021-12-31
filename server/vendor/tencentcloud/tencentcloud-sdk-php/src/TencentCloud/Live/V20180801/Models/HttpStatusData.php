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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 播放错误码信息
 *
 * @method string getTime() 获取数据时间点，
格式：yyyy-mm-dd HH:MM:SS。
 * @method void setTime(string $Time) 设置数据时间点，
格式：yyyy-mm-dd HH:MM:SS。
 * @method array getHttpStatusInfoList() 获取播放状态码详细信息。
 * @method void setHttpStatusInfoList(array $HttpStatusInfoList) 设置播放状态码详细信息。
 */
class HttpStatusData extends AbstractModel
{
    /**
     * @var string 数据时间点，
格式：yyyy-mm-dd HH:MM:SS。
     */
    public $Time;

    /**
     * @var array 播放状态码详细信息。
     */
    public $HttpStatusInfoList;

    /**
     * @param string $Time 数据时间点，
格式：yyyy-mm-dd HH:MM:SS。
     * @param array $HttpStatusInfoList 播放状态码详细信息。
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("HttpStatusInfoList",$param) and $param["HttpStatusInfoList"] !== null) {
            $this->HttpStatusInfoList = [];
            foreach ($param["HttpStatusInfoList"] as $key => $value){
                $obj = new HttpStatusInfo();
                $obj->deserialize($value);
                array_push($this->HttpStatusInfoList, $obj);
            }
        }
    }
}
