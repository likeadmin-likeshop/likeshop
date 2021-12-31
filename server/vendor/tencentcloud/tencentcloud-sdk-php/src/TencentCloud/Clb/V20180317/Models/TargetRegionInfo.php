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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负载均衡实例所绑定的后端服务的信息，包括所属地域、所属网络。
 *
 * @method string getRegion() 获取Target所属地域，如 ap-guangzhou
 * @method void setRegion(string $Region) 设置Target所属地域，如 ap-guangzhou
 * @method string getVpcId() 获取Target所属网络，私有网络格式如 vpc-abcd1234，如果是基础网络，则为"0"
 * @method void setVpcId(string $VpcId) 设置Target所属网络，私有网络格式如 vpc-abcd1234，如果是基础网络，则为"0"
 */
class TargetRegionInfo extends AbstractModel
{
    /**
     * @var string Target所属地域，如 ap-guangzhou
     */
    public $Region;

    /**
     * @var string Target所属网络，私有网络格式如 vpc-abcd1234，如果是基础网络，则为"0"
     */
    public $VpcId;

    /**
     * @param string $Region Target所属地域，如 ap-guangzhou
     * @param string $VpcId Target所属网络，私有网络格式如 vpc-abcd1234，如果是基础网络，则为"0"
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
