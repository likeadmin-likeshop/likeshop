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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 访问协议强制跳转配置，默认为关闭状态
 *
 * @method string getSwitch() 获取访问强制跳转配置开关
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置访问强制跳转配置开关
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRedirectType() 获取访问强制跳转类型
http：强制 http 跳转
https：强制 https 跳转
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedirectType(string $RedirectType) 设置访问强制跳转类型
http：强制 http 跳转
https：强制 https 跳转
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRedirectStatusCode() 获取强制跳转时返回状态码 
支持 301、302
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedirectStatusCode(integer $RedirectStatusCode) 设置强制跳转时返回状态码 
支持 301、302
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCarryHeaders() 获取强制跳转时是否返回增加的头部。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCarryHeaders(string $CarryHeaders) 设置强制跳转时是否返回增加的头部。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ForceRedirect extends AbstractModel
{
    /**
     * @var string 访问强制跳转配置开关
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var string 访问强制跳转类型
http：强制 http 跳转
https：强制 https 跳转
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedirectType;

    /**
     * @var integer 强制跳转时返回状态码 
支持 301、302
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedirectStatusCode;

    /**
     * @var string 强制跳转时是否返回增加的头部。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CarryHeaders;

    /**
     * @param string $Switch 访问强制跳转配置开关
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RedirectType 访问强制跳转类型
http：强制 http 跳转
https：强制 https 跳转
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RedirectStatusCode 强制跳转时返回状态码 
支持 301、302
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CarryHeaders 强制跳转时是否返回增加的头部。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("RedirectType",$param) and $param["RedirectType"] !== null) {
            $this->RedirectType = $param["RedirectType"];
        }

        if (array_key_exists("RedirectStatusCode",$param) and $param["RedirectStatusCode"] !== null) {
            $this->RedirectStatusCode = $param["RedirectStatusCode"];
        }

        if (array_key_exists("CarryHeaders",$param) and $param["CarryHeaders"] !== null) {
            $this->CarryHeaders = $param["CarryHeaders"];
        }
    }
}
