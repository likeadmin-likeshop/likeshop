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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EncryptByWhiteBox请求参数结构体
 *
 * @method string getKeyId() 获取白盒密钥的全局唯一标识符
 * @method void setKeyId(string $KeyId) 设置白盒密钥的全局唯一标识符
 * @method string getPlainText() 获取待加密的文本， base64编码，文本的原始长度最大不超过4KB
 * @method void setPlainText(string $PlainText) 设置待加密的文本， base64编码，文本的原始长度最大不超过4KB
 * @method string getInitializationVector() 获取初始化向量，大小为 16 Bytes，加密算法会使用到, base64编码；如果不传，则由后端服务随机生成。用户需要自行保存该值，作为解密的参数。
 * @method void setInitializationVector(string $InitializationVector) 设置初始化向量，大小为 16 Bytes，加密算法会使用到, base64编码；如果不传，则由后端服务随机生成。用户需要自行保存该值，作为解密的参数。
 */
class EncryptByWhiteBoxRequest extends AbstractModel
{
    /**
     * @var string 白盒密钥的全局唯一标识符
     */
    public $KeyId;

    /**
     * @var string 待加密的文本， base64编码，文本的原始长度最大不超过4KB
     */
    public $PlainText;

    /**
     * @var string 初始化向量，大小为 16 Bytes，加密算法会使用到, base64编码；如果不传，则由后端服务随机生成。用户需要自行保存该值，作为解密的参数。
     */
    public $InitializationVector;

    /**
     * @param string $KeyId 白盒密钥的全局唯一标识符
     * @param string $PlainText 待加密的文本， base64编码，文本的原始长度最大不超过4KB
     * @param string $InitializationVector 初始化向量，大小为 16 Bytes，加密算法会使用到, base64编码；如果不传，则由后端服务随机生成。用户需要自行保存该值，作为解密的参数。
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("PlainText",$param) and $param["PlainText"] !== null) {
            $this->PlainText = $param["PlainText"];
        }

        if (array_key_exists("InitializationVector",$param) and $param["InitializationVector"] !== null) {
            $this->InitializationVector = $param["InitializationVector"];
        }
    }
}
