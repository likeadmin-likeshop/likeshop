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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Vpc信息
 *
 * @method string getUniqVpcId() 获取VpcId： vpc-xadsafsdasd
 * @method void setUniqVpcId(string $UniqVpcId) 设置VpcId： vpc-xadsafsdasd
 * @method string getRegion() 获取Vpc所属地区: ap-guangzhou, ap-shanghai
 * @method void setRegion(string $Region) 设置Vpc所属地区: ap-guangzhou, ap-shanghai
 */
class VpcInfo extends AbstractModel
{
    /**
     * @var string VpcId： vpc-xadsafsdasd
     */
    public $UniqVpcId;

    /**
     * @var string Vpc所属地区: ap-guangzhou, ap-shanghai
     */
    public $Region;

    /**
     * @param string $UniqVpcId VpcId： vpc-xadsafsdasd
     * @param string $Region Vpc所属地区: ap-guangzhou, ap-shanghai
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
        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
