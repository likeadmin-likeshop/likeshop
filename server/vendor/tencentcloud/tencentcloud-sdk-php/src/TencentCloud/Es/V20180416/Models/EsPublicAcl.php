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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ES公网访问访问控制信息
 *
 * @method array getBlackIpList() 获取访问黑名单
 * @method void setBlackIpList(array $BlackIpList) 设置访问黑名单
 * @method array getWhiteIpList() 获取访问白名单
 * @method void setWhiteIpList(array $WhiteIpList) 设置访问白名单
 */
class EsPublicAcl extends AbstractModel
{
    /**
     * @var array 访问黑名单
     */
    public $BlackIpList;

    /**
     * @var array 访问白名单
     */
    public $WhiteIpList;

    /**
     * @param array $BlackIpList 访问黑名单
     * @param array $WhiteIpList 访问白名单
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
        if (array_key_exists("BlackIpList",$param) and $param["BlackIpList"] !== null) {
            $this->BlackIpList = $param["BlackIpList"];
        }

        if (array_key_exists("WhiteIpList",$param) and $param["WhiteIpList"] !== null) {
            $this->WhiteIpList = $param["WhiteIpList"];
        }
    }
}
