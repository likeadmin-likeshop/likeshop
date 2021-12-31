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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnbindPsaTag请求参数结构体
 *
 * @method string getPsaId() 获取预授权规则ID
 * @method void setPsaId(string $PsaId) 设置预授权规则ID
 * @method string getTagKey() 获取需要解绑的标签key
 * @method void setTagKey(string $TagKey) 设置需要解绑的标签key
 * @method string getTagValue() 获取需要解绑的标签value
 * @method void setTagValue(string $TagValue) 设置需要解绑的标签value
 */
class UnbindPsaTagRequest extends AbstractModel
{
    /**
     * @var string 预授权规则ID
     */
    public $PsaId;

    /**
     * @var string 需要解绑的标签key
     */
    public $TagKey;

    /**
     * @var string 需要解绑的标签value
     */
    public $TagValue;

    /**
     * @param string $PsaId 预授权规则ID
     * @param string $TagKey 需要解绑的标签key
     * @param string $TagValue 需要解绑的标签value
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
        if (array_key_exists("PsaId",$param) and $param["PsaId"] !== null) {
            $this->PsaId = $param["PsaId"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }
    }
}
