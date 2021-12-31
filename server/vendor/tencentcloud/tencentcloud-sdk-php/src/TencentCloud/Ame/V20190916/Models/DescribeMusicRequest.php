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
 * DescribeMusic请求参数结构体
 *
 * @method string getItemId() 获取歌曲ID
 * @method void setItemId(string $ItemId) 设置歌曲ID
 * @method string getIdentityId() 获取在应用前端播放音乐C端用户的唯一标识。无需是账户信息，用户唯一标识即可。
 * @method void setIdentityId(string $IdentityId) 设置在应用前端播放音乐C端用户的唯一标识。无需是账户信息，用户唯一标识即可。
 * @method string getSubItemType() 获取MP3-320K-FTD-P  为获取64kbps歌曲热门片段。
MP3-320K-FTD 为获取320kbps已核验歌曲完整资源。
 * @method void setSubItemType(string $SubItemType) 设置MP3-320K-FTD-P  为获取64kbps歌曲热门片段。
MP3-320K-FTD 为获取320kbps已核验歌曲完整资源。
 * @method string getSsl() 获取CDN URL Protocol:HTTP or HTTPS/SSL
Values:Y , N(default)
 * @method void setSsl(string $Ssl) 设置CDN URL Protocol:HTTP or HTTPS/SSL
Values:Y , N(default)
 */
class DescribeMusicRequest extends AbstractModel
{
    /**
     * @var string 歌曲ID
     */
    public $ItemId;

    /**
     * @var string 在应用前端播放音乐C端用户的唯一标识。无需是账户信息，用户唯一标识即可。
     */
    public $IdentityId;

    /**
     * @var string MP3-320K-FTD-P  为获取64kbps歌曲热门片段。
MP3-320K-FTD 为获取320kbps已核验歌曲完整资源。
     */
    public $SubItemType;

    /**
     * @var string CDN URL Protocol:HTTP or HTTPS/SSL
Values:Y , N(default)
     */
    public $Ssl;

    /**
     * @param string $ItemId 歌曲ID
     * @param string $IdentityId 在应用前端播放音乐C端用户的唯一标识。无需是账户信息，用户唯一标识即可。
     * @param string $SubItemType MP3-320K-FTD-P  为获取64kbps歌曲热门片段。
MP3-320K-FTD 为获取320kbps已核验歌曲完整资源。
     * @param string $Ssl CDN URL Protocol:HTTP or HTTPS/SSL
Values:Y , N(default)
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("IdentityId",$param) and $param["IdentityId"] !== null) {
            $this->IdentityId = $param["IdentityId"];
        }

        if (array_key_exists("SubItemType",$param) and $param["SubItemType"] !== null) {
            $this->SubItemType = $param["SubItemType"];
        }

        if (array_key_exists("Ssl",$param) and $param["Ssl"] !== null) {
            $this->Ssl = $param["Ssl"];
        }
    }
}
