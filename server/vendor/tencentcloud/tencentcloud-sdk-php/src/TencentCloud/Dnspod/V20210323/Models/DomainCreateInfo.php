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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名信息（创建域名时返回）
 *
 * @method integer getId() 获取域名ID
 * @method void setId(integer $Id) 设置域名ID
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getPunycode() 获取域名的punycode
 * @method void setPunycode(string $Punycode) 设置域名的punycode
 * @method array getGradeNsList() 获取域名的NS列表
 * @method void setGradeNsList(array $GradeNsList) 设置域名的NS列表
 */
class DomainCreateInfo extends AbstractModel
{
    /**
     * @var integer 域名ID
     */
    public $Id;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 域名的punycode
     */
    public $Punycode;

    /**
     * @var array 域名的NS列表
     */
    public $GradeNsList;

    /**
     * @param integer $Id 域名ID
     * @param string $Domain 域名
     * @param string $Punycode 域名的punycode
     * @param array $GradeNsList 域名的NS列表
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Punycode",$param) and $param["Punycode"] !== null) {
            $this->Punycode = $param["Punycode"];
        }

        if (array_key_exists("GradeNsList",$param) and $param["GradeNsList"] !== null) {
            $this->GradeNsList = $param["GradeNsList"];
        }
    }
}
