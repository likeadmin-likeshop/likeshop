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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据信息
 *
 * @method string getName() 获取Song Name
 * @method void setName(string $Name) 设置Song Name
 * @method string getVersion() 获取歌曲版本
 * @method void setVersion(string $Version) 设置歌曲版本
 * @method string getDuration() 获取歌曲总时长（非试听时长）
 * @method void setDuration(string $Duration) 设置歌曲总时长（非试听时长）
 * @method integer getAuditionBegin() 获取试听开始时间
 * @method void setAuditionBegin(integer $AuditionBegin) 设置试听开始时间
 * @method integer getAuditionEnd() 获取试听结束时间
 * @method void setAuditionEnd(integer $AuditionEnd) 设置试听结束时间
 */
class DataInfo extends AbstractModel
{
    /**
     * @var string Song Name
     */
    public $Name;

    /**
     * @var string 歌曲版本
     */
    public $Version;

    /**
     * @var string 歌曲总时长（非试听时长）
     */
    public $Duration;

    /**
     * @var integer 试听开始时间
     */
    public $AuditionBegin;

    /**
     * @var integer 试听结束时间
     */
    public $AuditionEnd;

    /**
     * @param string $Name Song Name
     * @param string $Version 歌曲版本
     * @param string $Duration 歌曲总时长（非试听时长）
     * @param integer $AuditionBegin 试听开始时间
     * @param integer $AuditionEnd 试听结束时间
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("AuditionBegin",$param) and $param["AuditionBegin"] !== null) {
            $this->AuditionBegin = $param["AuditionBegin"];
        }

        if (array_key_exists("AuditionEnd",$param) and $param["AuditionEnd"] !== null) {
            $this->AuditionEnd = $param["AuditionEnd"];
        }
    }
}
