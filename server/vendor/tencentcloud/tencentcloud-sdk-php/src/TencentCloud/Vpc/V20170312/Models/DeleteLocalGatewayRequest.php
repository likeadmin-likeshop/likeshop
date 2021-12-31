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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLocalGateway请求参数结构体
 *
 * @method string getLocalGatewayId() 获取本地网关实例ID
 * @method void setLocalGatewayId(string $LocalGatewayId) 设置本地网关实例ID
 * @method string getCdcId() 获取CDC实例ID
 * @method void setCdcId(string $CdcId) 设置CDC实例ID
 * @method string getVpcId() 获取VPC实例ID
 * @method void setVpcId(string $VpcId) 设置VPC实例ID
 */
class DeleteLocalGatewayRequest extends AbstractModel
{
    /**
     * @var string 本地网关实例ID
     */
    public $LocalGatewayId;

    /**
     * @var string CDC实例ID
     */
    public $CdcId;

    /**
     * @var string VPC实例ID
     */
    public $VpcId;

    /**
     * @param string $LocalGatewayId 本地网关实例ID
     * @param string $CdcId CDC实例ID
     * @param string $VpcId VPC实例ID
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
        if (array_key_exists("LocalGatewayId",$param) and $param["LocalGatewayId"] !== null) {
            $this->LocalGatewayId = $param["LocalGatewayId"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
