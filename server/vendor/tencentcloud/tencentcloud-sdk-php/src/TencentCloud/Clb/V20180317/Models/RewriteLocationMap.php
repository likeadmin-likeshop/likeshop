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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转发规则之间的重定向关系
 *
 * @method string getSourceLocationId() 获取源转发规则ID
 * @method void setSourceLocationId(string $SourceLocationId) 设置源转发规则ID
 * @method string getTargetLocationId() 获取重定向至的目标转发规则ID
 * @method void setTargetLocationId(string $TargetLocationId) 设置重定向至的目标转发规则ID
 * @method integer getRewriteCode() 获取重定向状态码，可取值301,302,307
 * @method void setRewriteCode(integer $RewriteCode) 设置重定向状态码，可取值301,302,307
 * @method boolean getTakeUrl() 获取重定向是否携带匹配的url，配置RewriteCode时必填
 * @method void setTakeUrl(boolean $TakeUrl) 设置重定向是否携带匹配的url，配置RewriteCode时必填
 * @method string getSourceDomain() 获取源转发的域名，必须是SourceLocationId对应的域名，配置RewriteCode时必填
 * @method void setSourceDomain(string $SourceDomain) 设置源转发的域名，必须是SourceLocationId对应的域名，配置RewriteCode时必填
 */
class RewriteLocationMap extends AbstractModel
{
    /**
     * @var string 源转发规则ID
     */
    public $SourceLocationId;

    /**
     * @var string 重定向至的目标转发规则ID
     */
    public $TargetLocationId;

    /**
     * @var integer 重定向状态码，可取值301,302,307
     */
    public $RewriteCode;

    /**
     * @var boolean 重定向是否携带匹配的url，配置RewriteCode时必填
     */
    public $TakeUrl;

    /**
     * @var string 源转发的域名，必须是SourceLocationId对应的域名，配置RewriteCode时必填
     */
    public $SourceDomain;

    /**
     * @param string $SourceLocationId 源转发规则ID
     * @param string $TargetLocationId 重定向至的目标转发规则ID
     * @param integer $RewriteCode 重定向状态码，可取值301,302,307
     * @param boolean $TakeUrl 重定向是否携带匹配的url，配置RewriteCode时必填
     * @param string $SourceDomain 源转发的域名，必须是SourceLocationId对应的域名，配置RewriteCode时必填
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
        if (array_key_exists("SourceLocationId",$param) and $param["SourceLocationId"] !== null) {
            $this->SourceLocationId = $param["SourceLocationId"];
        }

        if (array_key_exists("TargetLocationId",$param) and $param["TargetLocationId"] !== null) {
            $this->TargetLocationId = $param["TargetLocationId"];
        }

        if (array_key_exists("RewriteCode",$param) and $param["RewriteCode"] !== null) {
            $this->RewriteCode = $param["RewriteCode"];
        }

        if (array_key_exists("TakeUrl",$param) and $param["TakeUrl"] !== null) {
            $this->TakeUrl = $param["TakeUrl"];
        }

        if (array_key_exists("SourceDomain",$param) and $param["SourceDomain"] !== null) {
            $this->SourceDomain = $param["SourceDomain"];
        }
    }
}
