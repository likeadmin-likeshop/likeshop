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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 播放统计信息。
 *
 * @method string getDate() 获取播放媒体文件的日期，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setDate(string $Date) 设置播放媒体文件的日期，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getFileId() 获取媒体文件ID。
 * @method void setFileId(string $FileId) 设置媒体文件ID。
 * @method integer getPlayTimes() 获取播放次数。
 * @method void setPlayTimes(integer $PlayTimes) 设置播放次数。
 * @method integer getTraffic() 获取播放流量，单位：字节。
 * @method void setTraffic(integer $Traffic) 设置播放流量，单位：字节。
 */
class DailyPlayStatInfo extends AbstractModel
{
    /**
     * @var string 播放媒体文件的日期，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $Date;

    /**
     * @var string 媒体文件ID。
     */
    public $FileId;

    /**
     * @var integer 播放次数。
     */
    public $PlayTimes;

    /**
     * @var integer 播放流量，单位：字节。
     */
    public $Traffic;

    /**
     * @param string $Date 播放媒体文件的日期，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $FileId 媒体文件ID。
     * @param integer $PlayTimes 播放次数。
     * @param integer $Traffic 播放流量，单位：字节。
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("PlayTimes",$param) and $param["PlayTimes"] !== null) {
            $this->PlayTimes = $param["PlayTimes"];
        }

        if (array_key_exists("Traffic",$param) and $param["Traffic"] !== null) {
            $this->Traffic = $param["Traffic"];
        }
    }
}
