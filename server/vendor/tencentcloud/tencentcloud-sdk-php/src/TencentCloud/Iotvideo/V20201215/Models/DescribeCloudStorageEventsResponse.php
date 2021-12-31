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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudStorageEvents返回参数结构体
 *
 * @method array getEvents() 获取云存事件列表
 * @method void setEvents(array $Events) 设置云存事件列表
 * @method string getContext() 获取请求上下文, 用作查询游标
 * @method void setContext(string $Context) 设置请求上下文, 用作查询游标
 * @method boolean getListover() 获取拉取结果是否已经结束
 * @method void setListover(boolean $Listover) 设置拉取结果是否已经结束
 * @method integer getTotal() 获取拉取结果数量
 * @method void setTotal(integer $Total) 设置拉取结果数量
 * @method string getVideoURL() 获取视频播放URL
 * @method void setVideoURL(string $VideoURL) 设置视频播放URL
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudStorageEventsResponse extends AbstractModel
{
    /**
     * @var array 云存事件列表
     */
    public $Events;

    /**
     * @var string 请求上下文, 用作查询游标
     */
    public $Context;

    /**
     * @var boolean 拉取结果是否已经结束
     */
    public $Listover;

    /**
     * @var integer 拉取结果数量
     */
    public $Total;

    /**
     * @var string 视频播放URL
     */
    public $VideoURL;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Events 云存事件列表
     * @param string $Context 请求上下文, 用作查询游标
     * @param boolean $Listover 拉取结果是否已经结束
     * @param integer $Total 拉取结果数量
     * @param string $VideoURL 视频播放URL
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = [];
            foreach ($param["Events"] as $key => $value){
                $obj = new CloudStorageEvent();
                $obj->deserialize($value);
                array_push($this->Events, $obj);
            }
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Listover",$param) and $param["Listover"] !== null) {
            $this->Listover = $param["Listover"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("VideoURL",$param) and $param["VideoURL"] !== null) {
            $this->VideoURL = $param["VideoURL"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
