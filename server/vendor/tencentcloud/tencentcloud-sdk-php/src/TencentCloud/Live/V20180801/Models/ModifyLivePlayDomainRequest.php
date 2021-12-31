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
 * ModifyLivePlayDomain请求参数结构体
 *
 * @method string getDomainName() 获取播放域名。
 * @method void setDomainName(string $DomainName) 设置播放域名。
 * @method integer getPlayType() 获取拉流域名类型。1-国内；2-全球；3-境外
 * @method void setPlayType(integer $PlayType) 设置拉流域名类型。1-国内；2-全球；3-境外
 */
class ModifyLivePlayDomainRequest extends AbstractModel
{
    /**
     * @var string 播放域名。
     */
    public $DomainName;

    /**
     * @var integer 拉流域名类型。1-国内；2-全球；3-境外
     */
    public $PlayType;

    /**
     * @param string $DomainName 播放域名。
     * @param integer $PlayType 拉流域名类型。1-国内；2-全球；3-境外
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

        if (array_key_exists("PlayType",$param) and $param["PlayType"] !== null) {
            $this->PlayType = $param["PlayType"];
        }
    }
}
