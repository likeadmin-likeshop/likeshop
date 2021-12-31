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
 * DescribeStreamPlayInfoList请求参数结构体
 *
 * @method string getStartTime() 获取开始时间，北京时间，格式为yyyy-mm-dd HH:MM:SS
 * @method void setStartTime(string $StartTime) 设置开始时间，北京时间，格式为yyyy-mm-dd HH:MM:SS
 * @method string getEndTime() 获取结束时间，北京时间，格式为yyyy-mm-dd HH:MM:SS，
结束时间 和 开始时间跨度不支持超过24小时，支持距当前时间30天内的数据查询。
 * @method void setEndTime(string $EndTime) 设置结束时间，北京时间，格式为yyyy-mm-dd HH:MM:SS，
结束时间 和 开始时间跨度不支持超过24小时，支持距当前时间30天内的数据查询。
 * @method string getPlayDomain() 获取播放域名，
若不填，则为查询所有播放域名的在线流数据。
 * @method void setPlayDomain(string $PlayDomain) 设置播放域名，
若不填，则为查询所有播放域名的在线流数据。
 * @method string getStreamName() 获取流名称，精确匹配。
若不填，则为查询总体播放数据。
 * @method void setStreamName(string $StreamName) 设置流名称，精确匹配。
若不填，则为查询总体播放数据。
 * @method string getAppName() 获取推流路径，与播放地址中的AppName保持一致，会精确匹配，在同时传递了StreamName时生效。
若不填，则为查询总体播放数据。
注意：按AppName查询请先联系工单申请，开通后配置生效预计需要5个工作日左右，具体时间以最终回复为准。
 * @method void setAppName(string $AppName) 设置推流路径，与播放地址中的AppName保持一致，会精确匹配，在同时传递了StreamName时生效。
若不填，则为查询总体播放数据。
注意：按AppName查询请先联系工单申请，开通后配置生效预计需要5个工作日左右，具体时间以最终回复为准。
 * @method string getServiceName() 获取服务名称，可选值包括LVB(标准直播)，LEB(快直播)，不填则查LVB+LEB总值。
 * @method void setServiceName(string $ServiceName) 设置服务名称，可选值包括LVB(标准直播)，LEB(快直播)，不填则查LVB+LEB总值。
 */
class DescribeStreamPlayInfoListRequest extends AbstractModel
{
    /**
     * @var string 开始时间，北京时间，格式为yyyy-mm-dd HH:MM:SS
     */
    public $StartTime;

    /**
     * @var string 结束时间，北京时间，格式为yyyy-mm-dd HH:MM:SS，
结束时间 和 开始时间跨度不支持超过24小时，支持距当前时间30天内的数据查询。
     */
    public $EndTime;

    /**
     * @var string 播放域名，
若不填，则为查询所有播放域名的在线流数据。
     */
    public $PlayDomain;

    /**
     * @var string 流名称，精确匹配。
若不填，则为查询总体播放数据。
     */
    public $StreamName;

    /**
     * @var string 推流路径，与播放地址中的AppName保持一致，会精确匹配，在同时传递了StreamName时生效。
若不填，则为查询总体播放数据。
注意：按AppName查询请先联系工单申请，开通后配置生效预计需要5个工作日左右，具体时间以最终回复为准。
     */
    public $AppName;

    /**
     * @var string 服务名称，可选值包括LVB(标准直播)，LEB(快直播)，不填则查LVB+LEB总值。
     */
    public $ServiceName;

    /**
     * @param string $StartTime 开始时间，北京时间，格式为yyyy-mm-dd HH:MM:SS
     * @param string $EndTime 结束时间，北京时间，格式为yyyy-mm-dd HH:MM:SS，
结束时间 和 开始时间跨度不支持超过24小时，支持距当前时间30天内的数据查询。
     * @param string $PlayDomain 播放域名，
若不填，则为查询所有播放域名的在线流数据。
     * @param string $StreamName 流名称，精确匹配。
若不填，则为查询总体播放数据。
     * @param string $AppName 推流路径，与播放地址中的AppName保持一致，会精确匹配，在同时传递了StreamName时生效。
若不填，则为查询总体播放数据。
注意：按AppName查询请先联系工单申请，开通后配置生效预计需要5个工作日左右，具体时间以最终回复为准。
     * @param string $ServiceName 服务名称，可选值包括LVB(标准直播)，LEB(快直播)，不填则查LVB+LEB总值。
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

        if (array_key_exists("PlayDomain",$param) and $param["PlayDomain"] !== null) {
            $this->PlayDomain = $param["PlayDomain"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}
