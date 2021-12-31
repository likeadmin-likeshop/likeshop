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
 * 语音检测任务列表
 *
 * @method string getDataId() 获取数据的唯一ID
 * @method void setDataId(string $DataId) 设置数据的唯一ID
 * @method string getUrl() 获取数据文件的url，为 urlencode 编码，流式则为拉流地址
 * @method void setUrl(string $Url) 设置数据文件的url，为 urlencode 编码，流式则为拉流地址
 * @method string getRoomId() 获取gme实时语音房间ID，通过gme实时语音进行语音分析时输入
 * @method void setRoomId(string $RoomId) 设置gme实时语音房间ID，通过gme实时语音进行语音分析时输入
 * @method string getOpenId() 获取gme实时语音用户ID，通过gme实时语音进行语音分析时输入
 * @method void setOpenId(string $OpenId) 设置gme实时语音用户ID，通过gme实时语音进行语音分析时输入
 */
class Task extends AbstractModel
{
    /**
     * @var string 数据的唯一ID
     */
    public $DataId;

    /**
     * @var string 数据文件的url，为 urlencode 编码，流式则为拉流地址
     */
    public $Url;

    /**
     * @var string gme实时语音房间ID，通过gme实时语音进行语音分析时输入
     */
    public $RoomId;

    /**
     * @var string gme实时语音用户ID，通过gme实时语音进行语音分析时输入
     */
    public $OpenId;

    /**
     * @param string $DataId 数据的唯一ID
     * @param string $Url 数据文件的url，为 urlencode 编码，流式则为拉流地址
     * @param string $RoomId gme实时语音房间ID，通过gme实时语音进行语音分析时输入
     * @param string $OpenId gme实时语音用户ID，通过gme实时语音进行语音分析时输入
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
        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }
    }
}
