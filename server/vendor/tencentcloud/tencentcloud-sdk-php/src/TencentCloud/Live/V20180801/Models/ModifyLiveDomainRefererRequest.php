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
 * ModifyLiveDomainReferer请求参数结构体
 *
 * @method string getDomainName() 获取播放域名。
 * @method void setDomainName(string $DomainName) 设置播放域名。
 * @method integer getEnable() 获取是否开启当前域名的 Referer 黑白名单鉴权。
 * @method void setEnable(integer $Enable) 设置是否开启当前域名的 Referer 黑白名单鉴权。
 * @method integer getType() 获取名单类型，0：黑名单，1：白名单。
 * @method void setType(integer $Type) 设置名单类型，0：黑名单，1：白名单。
 * @method integer getAllowEmpty() 获取是否允许空 Referer，0：不允许，1：允许。
 * @method void setAllowEmpty(integer $AllowEmpty) 设置是否允许空 Referer，0：不允许，1：允许。
 * @method string getRules() 获取Referer 名单列表，以;分隔。
 * @method void setRules(string $Rules) 设置Referer 名单列表，以;分隔。
 */
class ModifyLiveDomainRefererRequest extends AbstractModel
{
    /**
     * @var string 播放域名。
     */
    public $DomainName;

    /**
     * @var integer 是否开启当前域名的 Referer 黑白名单鉴权。
     */
    public $Enable;

    /**
     * @var integer 名单类型，0：黑名单，1：白名单。
     */
    public $Type;

    /**
     * @var integer 是否允许空 Referer，0：不允许，1：允许。
     */
    public $AllowEmpty;

    /**
     * @var string Referer 名单列表，以;分隔。
     */
    public $Rules;

    /**
     * @param string $DomainName 播放域名。
     * @param integer $Enable 是否开启当前域名的 Referer 黑白名单鉴权。
     * @param integer $Type 名单类型，0：黑名单，1：白名单。
     * @param integer $AllowEmpty 是否允许空 Referer，0：不允许，1：允许。
     * @param string $Rules Referer 名单列表，以;分隔。
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

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AllowEmpty",$param) and $param["AllowEmpty"] !== null) {
            $this->AllowEmpty = $param["AllowEmpty"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = $param["Rules"];
        }
    }
}
