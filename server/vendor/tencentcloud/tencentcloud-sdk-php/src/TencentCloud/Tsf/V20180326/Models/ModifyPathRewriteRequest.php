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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPathRewrite请求参数结构体
 *
 * @method string getPathRewriteId() 获取路径重写规则ID
 * @method void setPathRewriteId(string $PathRewriteId) 设置路径重写规则ID
 * @method string getRegex() 获取正则表达式
 * @method void setRegex(string $Regex) 设置正则表达式
 * @method string getReplacement() 获取替换的内容
 * @method void setReplacement(string $Replacement) 设置替换的内容
 * @method string getBlocked() 获取是否屏蔽映射后路径，Y: 是 N: 否
 * @method void setBlocked(string $Blocked) 设置是否屏蔽映射后路径，Y: 是 N: 否
 * @method integer getOrder() 获取规则顺序，越小优先级越高
 * @method void setOrder(integer $Order) 设置规则顺序，越小优先级越高
 */
class ModifyPathRewriteRequest extends AbstractModel
{
    /**
     * @var string 路径重写规则ID
     */
    public $PathRewriteId;

    /**
     * @var string 正则表达式
     */
    public $Regex;

    /**
     * @var string 替换的内容
     */
    public $Replacement;

    /**
     * @var string 是否屏蔽映射后路径，Y: 是 N: 否
     */
    public $Blocked;

    /**
     * @var integer 规则顺序，越小优先级越高
     */
    public $Order;

    /**
     * @param string $PathRewriteId 路径重写规则ID
     * @param string $Regex 正则表达式
     * @param string $Replacement 替换的内容
     * @param string $Blocked 是否屏蔽映射后路径，Y: 是 N: 否
     * @param integer $Order 规则顺序，越小优先级越高
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
        if (array_key_exists("PathRewriteId",$param) and $param["PathRewriteId"] !== null) {
            $this->PathRewriteId = $param["PathRewriteId"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("Replacement",$param) and $param["Replacement"] !== null) {
            $this->Replacement = $param["Replacement"];
        }

        if (array_key_exists("Blocked",$param) and $param["Blocked"] !== null) {
            $this->Blocked = $param["Blocked"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
