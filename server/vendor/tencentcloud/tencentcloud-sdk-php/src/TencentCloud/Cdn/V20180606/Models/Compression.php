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
 * 智能压缩配置，默认对 js、html、css、xml、json、shtml、htm 后缀且大小为 256 ~ 2097152 字节的文件进行 GZIP 压缩
 *
 * @method string getSwitch() 获取智能压缩配置开关
on：开启
off：关闭
 * @method void setSwitch(string $Switch) 设置智能压缩配置开关
on：开启
off：关闭
 * @method array getCompressionRules() 获取压缩规则数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompressionRules(array $CompressionRules) 设置压缩规则数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class Compression extends AbstractModel
{
    /**
     * @var string 智能压缩配置开关
on：开启
off：关闭
     */
    public $Switch;

    /**
     * @var array 压缩规则数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompressionRules;

    /**
     * @param string $Switch 智能压缩配置开关
on：开启
off：关闭
     * @param array $CompressionRules 压缩规则数组
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

        if (array_key_exists("CompressionRules",$param) and $param["CompressionRules"] !== null) {
            $this->CompressionRules = [];
            foreach ($param["CompressionRules"] as $key => $value){
                $obj = new CompressionRule();
                $obj->deserialize($value);
                array_push($this->CompressionRules, $obj);
            }
        }
    }
}
