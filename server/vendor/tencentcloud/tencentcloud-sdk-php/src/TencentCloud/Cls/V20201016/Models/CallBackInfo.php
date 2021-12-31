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
 * 回调配置
 *
 * @method string getBody() 获取回调时的Body
 * @method void setBody(string $Body) 设置回调时的Body
 * @method array getHeaders() 获取回调时的Headers
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaders(array $Headers) 设置回调时的Headers
注意：此字段可能返回 null，表示取不到有效值。
 */
class CallBackInfo extends AbstractModel
{
    /**
     * @var string 回调时的Body
     */
    public $Body;

    /**
     * @var array 回调时的Headers
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Headers;

    /**
     * @param string $Body 回调时的Body
     * @param array $Headers 回调时的Headers
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
        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = $param["Body"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = $param["Headers"];
        }
    }
}
