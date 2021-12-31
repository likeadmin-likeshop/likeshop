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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 敏感数据加密
 *
 * @method string getCiphertextBlob() 获取有加密需求的用户，接入传入kms的CiphertextBlob，关于数据加密可查阅<a href="https://cloud.tencent.com/document/product/1007/47180">数据加密</a> 文档。
 * @method void setCiphertextBlob(string $CiphertextBlob) 设置有加密需求的用户，接入传入kms的CiphertextBlob，关于数据加密可查阅<a href="https://cloud.tencent.com/document/product/1007/47180">数据加密</a> 文档。
 * @method array getEncryptList() 获取在使用加密服务时，填入要被加密的字段。本接口中可填入加密后的一个或多个字段
 * @method void setEncryptList(array $EncryptList) 设置在使用加密服务时，填入要被加密的字段。本接口中可填入加密后的一个或多个字段
 * @method string getIv() 获取有加密需求的用户，传入CBC加密的初始向量
 * @method void setIv(string $Iv) 设置有加密需求的用户，传入CBC加密的初始向量
 */
class Encryption extends AbstractModel
{
    /**
     * @var string 有加密需求的用户，接入传入kms的CiphertextBlob，关于数据加密可查阅<a href="https://cloud.tencent.com/document/product/1007/47180">数据加密</a> 文档。
     */
    public $CiphertextBlob;

    /**
     * @var array 在使用加密服务时，填入要被加密的字段。本接口中可填入加密后的一个或多个字段
     */
    public $EncryptList;

    /**
     * @var string 有加密需求的用户，传入CBC加密的初始向量
     */
    public $Iv;

    /**
     * @param string $CiphertextBlob 有加密需求的用户，接入传入kms的CiphertextBlob，关于数据加密可查阅<a href="https://cloud.tencent.com/document/product/1007/47180">数据加密</a> 文档。
     * @param array $EncryptList 在使用加密服务时，填入要被加密的字段。本接口中可填入加密后的一个或多个字段
     * @param string $Iv 有加密需求的用户，传入CBC加密的初始向量
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
        if (array_key_exists("CiphertextBlob",$param) and $param["CiphertextBlob"] !== null) {
            $this->CiphertextBlob = $param["CiphertextBlob"];
        }

        if (array_key_exists("EncryptList",$param) and $param["EncryptList"] !== null) {
            $this->EncryptList = $param["EncryptList"];
        }

        if (array_key_exists("Iv",$param) and $param["Iv"] !== null) {
            $this->Iv = $param["Iv"];
        }
    }
}
