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
 * AddLiveDomain请求参数结构体
 *
 * @method string getDomainName() 获取域名名称。
 * @method void setDomainName(string $DomainName) 设置域名名称。
 * @method integer getDomainType() 获取域名类型，
0：推流域名，
1：播放域名。
 * @method void setDomainType(integer $DomainType) 设置域名类型，
0：推流域名，
1：播放域名。
 * @method integer getPlayType() 获取拉流域名类型：
1：国内，
2：全球，
3：境外。
默认值：1。
 * @method void setPlayType(integer $PlayType) 设置拉流域名类型：
1：国内，
2：全球，
3：境外。
默认值：1。
 * @method integer getIsDelayLive() 获取是否是慢直播：
0： 普通直播，
1 ：慢直播 。
默认值： 0。
 * @method void setIsDelayLive(integer $IsDelayLive) 设置是否是慢直播：
0： 普通直播，
1 ：慢直播 。
默认值： 0。
 * @method integer getIsMiniProgramLive() 获取是否是小程序直播：
0： 标准直播，
1 ：小程序直播 。
默认值： 0。
 * @method void setIsMiniProgramLive(integer $IsMiniProgramLive) 设置是否是小程序直播：
0： 标准直播，
1 ：小程序直播 。
默认值： 0。
 */
class AddLiveDomainRequest extends AbstractModel
{
    /**
     * @var string 域名名称。
     */
    public $DomainName;

    /**
     * @var integer 域名类型，
0：推流域名，
1：播放域名。
     */
    public $DomainType;

    /**
     * @var integer 拉流域名类型：
1：国内，
2：全球，
3：境外。
默认值：1。
     */
    public $PlayType;

    /**
     * @var integer 是否是慢直播：
0： 普通直播，
1 ：慢直播 。
默认值： 0。
     */
    public $IsDelayLive;

    /**
     * @var integer 是否是小程序直播：
0： 标准直播，
1 ：小程序直播 。
默认值： 0。
     */
    public $IsMiniProgramLive;

    /**
     * @param string $DomainName 域名名称。
     * @param integer $DomainType 域名类型，
0：推流域名，
1：播放域名。
     * @param integer $PlayType 拉流域名类型：
1：国内，
2：全球，
3：境外。
默认值：1。
     * @param integer $IsDelayLive 是否是慢直播：
0： 普通直播，
1 ：慢直播 。
默认值： 0。
     * @param integer $IsMiniProgramLive 是否是小程序直播：
0： 标准直播，
1 ：小程序直播 。
默认值： 0。
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("DomainType",$param) and $param["DomainType"] !== null) {
            $this->DomainType = $param["DomainType"];
        }

        if (array_key_exists("PlayType",$param) and $param["PlayType"] !== null) {
            $this->PlayType = $param["PlayType"];
        }

        if (array_key_exists("IsDelayLive",$param) and $param["IsDelayLive"] !== null) {
            $this->IsDelayLive = $param["IsDelayLive"];
        }

        if (array_key_exists("IsMiniProgramLive",$param) and $param["IsMiniProgramLive"] !== null) {
            $this->IsMiniProgramLive = $param["IsMiniProgramLive"];
        }
    }
}
