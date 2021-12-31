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
 * CreateWhiteBoxKey请求参数结构体
 *
 * @method string getAlias() 获取作为密钥更容易辨识，更容易被人看懂的别名， 不可为空，1-60个字母数字 - _ 的组合，首字符必须为字母或者数字。Alias不可重复。
 * @method void setAlias(string $Alias) 设置作为密钥更容易辨识，更容易被人看懂的别名， 不可为空，1-60个字母数字 - _ 的组合，首字符必须为字母或者数字。Alias不可重复。
 * @method string getAlgorithm() 获取创建密钥所有的算法类型，支持的取值：AES_256,SM4
 * @method void setAlgorithm(string $Algorithm) 设置创建密钥所有的算法类型，支持的取值：AES_256,SM4
 * @method string getDescription() 获取密钥的描述，最大1024字节
 * @method void setDescription(string $Description) 设置密钥的描述，最大1024字节
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 */
class CreateWhiteBoxKeyRequest extends AbstractModel
{
    /**
     * @var string 作为密钥更容易辨识，更容易被人看懂的别名， 不可为空，1-60个字母数字 - _ 的组合，首字符必须为字母或者数字。Alias不可重复。
     */
    public $Alias;

    /**
     * @var string 创建密钥所有的算法类型，支持的取值：AES_256,SM4
     */
    public $Algorithm;

    /**
     * @var string 密钥的描述，最大1024字节
     */
    public $Description;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @param string $Alias 作为密钥更容易辨识，更容易被人看懂的别名， 不可为空，1-60个字母数字 - _ 的组合，首字符必须为字母或者数字。Alias不可重复。
     * @param string $Algorithm 创建密钥所有的算法类型，支持的取值：AES_256,SM4
     * @param string $Description 密钥的描述，最大1024字节
     * @param array $Tags 标签列表
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
