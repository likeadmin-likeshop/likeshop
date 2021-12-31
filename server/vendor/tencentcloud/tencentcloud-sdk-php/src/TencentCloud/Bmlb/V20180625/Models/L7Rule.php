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
 * 获取七层监听器转发规则时返回的转发规则。
 *
 * @method string getDomain() 获取转发域名。
 * @method void setDomain(string $Domain) 设置转发域名。
 * @method string getDomainId() 获取转发域名实例ID。
 * @method void setDomainId(string $DomainId) 设置转发域名实例ID。
 * @method integer getStatus() 获取转发路径当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
 * @method void setStatus(integer $Status) 设置转发路径当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
 * @method string getAddTimestamp() 获取创建时间戳。
 * @method void setAddTimestamp(string $AddTimestamp) 设置创建时间戳。
 * @method array getLocationSet() 获取该转发域名下面的转发路径列表。
 * @method void setLocationSet(array $LocationSet) 设置该转发域名下面的转发路径列表。
 */
class L7Rule extends AbstractModel
{
    /**
     * @var string 转发域名。
     */
    public $Domain;

    /**
     * @var string 转发域名实例ID。
     */
    public $DomainId;

    /**
     * @var integer 转发路径当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
     */
    public $Status;

    /**
     * @var string 创建时间戳。
     */
    public $AddTimestamp;

    /**
     * @var array 该转发域名下面的转发路径列表。
     */
    public $LocationSet;

    /**
     * @param string $Domain 转发域名。
     * @param string $DomainId 转发域名实例ID。
     * @param integer $Status 转发路径当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
     * @param string $AddTimestamp 创建时间戳。
     * @param array $LocationSet 该转发域名下面的转发路径列表。
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AddTimestamp",$param) and $param["AddTimestamp"] !== null) {
            $this->AddTimestamp = $param["AddTimestamp"];
        }

        if (array_key_exists("LocationSet",$param) and $param["LocationSet"] !== null) {
            $this->LocationSet = [];
            foreach ($param["LocationSet"] as $key => $value){
                $obj = new L7RulesLocation();
                $obj->deserialize($value);
                array_push($this->LocationSet, $obj);
            }
        }
    }
}
