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
 * ListAlgorithms返回参数结构体
 *
 * @method array getSymmetricAlgorithms() 获取本地区支持的对称加密算法
 * @method void setSymmetricAlgorithms(array $SymmetricAlgorithms) 设置本地区支持的对称加密算法
 * @method array getAsymmetricAlgorithms() 获取本地区支持的非对称加密算法
 * @method void setAsymmetricAlgorithms(array $AsymmetricAlgorithms) 设置本地区支持的非对称加密算法
 * @method array getAsymmetricSignVerifyAlgorithms() 获取本地区支持的非对称签名验签算法
 * @method void setAsymmetricSignVerifyAlgorithms(array $AsymmetricSignVerifyAlgorithms) 设置本地区支持的非对称签名验签算法
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ListAlgorithmsResponse extends AbstractModel
{
    /**
     * @var array 本地区支持的对称加密算法
     */
    public $SymmetricAlgorithms;

    /**
     * @var array 本地区支持的非对称加密算法
     */
    public $AsymmetricAlgorithms;

    /**
     * @var array 本地区支持的非对称签名验签算法
     */
    public $AsymmetricSignVerifyAlgorithms;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SymmetricAlgorithms 本地区支持的对称加密算法
     * @param array $AsymmetricAlgorithms 本地区支持的非对称加密算法
     * @param array $AsymmetricSignVerifyAlgorithms 本地区支持的非对称签名验签算法
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SymmetricAlgorithms",$param) and $param["SymmetricAlgorithms"] !== null) {
            $this->SymmetricAlgorithms = [];
            foreach ($param["SymmetricAlgorithms"] as $key => $value){
                $obj = new AlgorithmInfo();
                $obj->deserialize($value);
                array_push($this->SymmetricAlgorithms, $obj);
            }
        }

        if (array_key_exists("AsymmetricAlgorithms",$param) and $param["AsymmetricAlgorithms"] !== null) {
            $this->AsymmetricAlgorithms = [];
            foreach ($param["AsymmetricAlgorithms"] as $key => $value){
                $obj = new AlgorithmInfo();
                $obj->deserialize($value);
                array_push($this->AsymmetricAlgorithms, $obj);
            }
        }

        if (array_key_exists("AsymmetricSignVerifyAlgorithms",$param) and $param["AsymmetricSignVerifyAlgorithms"] !== null) {
            $this->AsymmetricSignVerifyAlgorithms = [];
            foreach ($param["AsymmetricSignVerifyAlgorithms"] as $key => $value){
                $obj = new AlgorithmInfo();
                $obj->deserialize($value);
                array_push($this->AsymmetricSignVerifyAlgorithms, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
