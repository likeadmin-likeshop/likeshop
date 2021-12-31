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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回调地址
 *
 * @method string getUrl() 获取回调地址。
 * @method void setUrl(string $Url) 设置回调地址。
 * @method string getCallbackType() 获取回调的类型。可选值：
<br><li> WeCom
<br><li> Http
 * @method void setCallbackType(string $CallbackType) 设置回调的类型。可选值：
<br><li> WeCom
<br><li> Http
 * @method string getMethod() 获取回调方法。可选值：
<br><li> POST
<br><li> PUT
默认值为POST。CallbackType为Http时为必选。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(string $Method) 设置回调方法。可选值：
<br><li> POST
<br><li> PUT
默认值为POST。CallbackType为Http时为必选。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeaders() 获取请求头。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaders(array $Headers) 设置请求头。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBody() 获取请求内容。CallbackType为Http时为必选。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBody(string $Body) 设置请求内容。CallbackType为Http时为必选。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndex() 获取序号
 * @method void setIndex(integer $Index) 设置序号
 */
class WebCallback extends AbstractModel
{
    /**
     * @var string 回调地址。
     */
    public $Url;

    /**
     * @var string 回调的类型。可选值：
<br><li> WeCom
<br><li> Http
     */
    public $CallbackType;

    /**
     * @var string 回调方法。可选值：
<br><li> POST
<br><li> PUT
默认值为POST。CallbackType为Http时为必选。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var array 请求头。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Headers;

    /**
     * @var string 请求内容。CallbackType为Http时为必选。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Body;

    /**
     * @var integer 序号
     */
    public $Index;

    /**
     * @param string $Url 回调地址。
     * @param string $CallbackType 回调的类型。可选值：
<br><li> WeCom
<br><li> Http
     * @param string $Method 回调方法。可选值：
<br><li> POST
<br><li> PUT
默认值为POST。CallbackType为Http时为必选。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Headers 请求头。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Body 请求内容。CallbackType为Http时为必选。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Index 序号
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("CallbackType",$param) and $param["CallbackType"] !== null) {
            $this->CallbackType = $param["CallbackType"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = $param["Headers"];
        }

        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
