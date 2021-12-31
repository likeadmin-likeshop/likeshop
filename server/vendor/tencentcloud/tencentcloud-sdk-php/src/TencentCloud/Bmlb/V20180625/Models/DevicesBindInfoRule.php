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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取设备绑定信息时返回的设备所绑定的转发规则信息。
 *
 * @method string getDomain() 获取转发域名。
 * @method void setDomain(string $Domain) 设置转发域名。
 * @method string getDomainId() 获取转发域名ID。
 * @method void setDomainId(string $DomainId) 设置转发域名ID。
 * @method array getLocationSet() 获取转发路径列表。
 * @method void setLocationSet(array $LocationSet) 设置转发路径列表。
 */
class DevicesBindInfoRule extends AbstractModel
{
    /**
     * @var string 转发域名。
     */
    public $Domain;

    /**
     * @var string 转发域名ID。
     */
    public $DomainId;

    /**
     * @var array 转发路径列表。
     */
    public $LocationSet;

    /**
     * @param string $Domain 转发域名。
     * @param string $DomainId 转发域名ID。
     * @param array $LocationSet 转发路径列表。
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

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("LocationSet",$param) and $param["LocationSet"] !== null) {
            $this->LocationSet = [];
            foreach ($param["LocationSet"] as $key => $value){
                $obj = new DevicesBindInfoLocation();
                $obj->deserialize($value);
                array_push($this->LocationSet, $obj);
            }
        }
    }
}
