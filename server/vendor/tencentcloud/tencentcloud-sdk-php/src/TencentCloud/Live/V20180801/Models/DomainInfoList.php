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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多个域名信息列表
 *
 * @method string getDomain() 获取域名。
 * @method void setDomain(string $Domain) 设置域名。
 * @method array getDetailInfoList() 获取明细信息。
 * @method void setDetailInfoList(array $DetailInfoList) 设置明细信息。
 */
class DomainInfoList extends AbstractModel
{
    /**
     * @var string 域名。
     */
    public $Domain;

    /**
     * @var array 明细信息。
     */
    public $DetailInfoList;

    /**
     * @param string $Domain 域名。
     * @param array $DetailInfoList 明细信息。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DetailInfoList",$param) and $param["DetailInfoList"] !== null) {
            $this->DetailInfoList = [];
            foreach ($param["DetailInfoList"] as $key => $value){
                $obj = new DomainDetailInfo();
                $obj->deserialize($value);
                array_push($this->DetailInfoList, $obj);
            }
        }
    }
}
