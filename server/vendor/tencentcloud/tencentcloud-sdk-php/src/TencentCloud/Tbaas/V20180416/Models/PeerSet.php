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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PeerSet
 *
 * @method string getPeerName() 获取节点名称
 * @method void setPeerName(string $PeerName) 设置节点名称
 * @method string getOrgName() 获取组织名称
 * @method void setOrgName(string $OrgName) 设置组织名称
 */
class PeerSet extends AbstractModel
{
    /**
     * @var string 节点名称
     */
    public $PeerName;

    /**
     * @var string 组织名称
     */
    public $OrgName;

    /**
     * @param string $PeerName 节点名称
     * @param string $OrgName 组织名称
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
        if (array_key_exists("PeerName",$param) and $param["PeerName"] !== null) {
            $this->PeerName = $param["PeerName"];
        }

        if (array_key_exists("OrgName",$param) and $param["OrgName"] !== null) {
            $this->OrgName = $param["OrgName"];
        }
    }
}
