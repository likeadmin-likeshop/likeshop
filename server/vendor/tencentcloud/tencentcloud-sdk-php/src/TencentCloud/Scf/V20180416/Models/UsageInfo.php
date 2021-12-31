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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 已使用的信息
 *
 * @method integer getNamespacesCount() 获取命名空间个数
 * @method void setNamespacesCount(integer $NamespacesCount) 设置命名空间个数
 * @method array getNamespace() 获取命名空间详情
 * @method void setNamespace(array $Namespace) 设置命名空间详情
 * @method integer getTotalConcurrencyMem() 获取当前地域用户并发内存配额上限
 * @method void setTotalConcurrencyMem(integer $TotalConcurrencyMem) 设置当前地域用户并发内存配额上限
 * @method integer getTotalAllocatedConcurrencyMem() 获取当前地域用户已配置并发内存额度
 * @method void setTotalAllocatedConcurrencyMem(integer $TotalAllocatedConcurrencyMem) 设置当前地域用户已配置并发内存额度
 * @method integer getUserConcurrencyMemLimit() 获取用户实际配置的账号并发配额
 * @method void setUserConcurrencyMemLimit(integer $UserConcurrencyMemLimit) 设置用户实际配置的账号并发配额
 */
class UsageInfo extends AbstractModel
{
    /**
     * @var integer 命名空间个数
     */
    public $NamespacesCount;

    /**
     * @var array 命名空间详情
     */
    public $Namespace;

    /**
     * @var integer 当前地域用户并发内存配额上限
     */
    public $TotalConcurrencyMem;

    /**
     * @var integer 当前地域用户已配置并发内存额度
     */
    public $TotalAllocatedConcurrencyMem;

    /**
     * @var integer 用户实际配置的账号并发配额
     */
    public $UserConcurrencyMemLimit;

    /**
     * @param integer $NamespacesCount 命名空间个数
     * @param array $Namespace 命名空间详情
     * @param integer $TotalConcurrencyMem 当前地域用户并发内存配额上限
     * @param integer $TotalAllocatedConcurrencyMem 当前地域用户已配置并发内存额度
     * @param integer $UserConcurrencyMemLimit 用户实际配置的账号并发配额
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
        if (array_key_exists("NamespacesCount",$param) and $param["NamespacesCount"] !== null) {
            $this->NamespacesCount = $param["NamespacesCount"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = [];
            foreach ($param["Namespace"] as $key => $value){
                $obj = new NamespaceUsage();
                $obj->deserialize($value);
                array_push($this->Namespace, $obj);
            }
        }

        if (array_key_exists("TotalConcurrencyMem",$param) and $param["TotalConcurrencyMem"] !== null) {
            $this->TotalConcurrencyMem = $param["TotalConcurrencyMem"];
        }

        if (array_key_exists("TotalAllocatedConcurrencyMem",$param) and $param["TotalAllocatedConcurrencyMem"] !== null) {
            $this->TotalAllocatedConcurrencyMem = $param["TotalAllocatedConcurrencyMem"];
        }

        if (array_key_exists("UserConcurrencyMemLimit",$param) and $param["UserConcurrencyMemLimit"] !== null) {
            $this->UserConcurrencyMemLimit = $param["UserConcurrencyMemLimit"];
        }
    }
}
