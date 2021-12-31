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
 * 本地网关信息
 *
 * @method string getCdcId() 获取CDC实例ID
 * @method void setCdcId(string $CdcId) 设置CDC实例ID
 * @method string getVpcId() 获取VPC实例ID
 * @method void setVpcId(string $VpcId) 设置VPC实例ID
 * @method string getUniqLocalGwId() 获取本地网关实例ID
 * @method void setUniqLocalGwId(string $UniqLocalGwId) 设置本地网关实例ID
 * @method string getLocalGatewayName() 获取本地网关名称
 * @method void setLocalGatewayName(string $LocalGatewayName) 设置本地网关名称
 * @method string getLocalGwIp() 获取本地网关IP地址
 * @method void setLocalGwIp(string $LocalGwIp) 设置本地网关IP地址
 * @method string getCreateTime() 获取本地网关创建时间
 * @method void setCreateTime(string $CreateTime) 设置本地网关创建时间
 */
class LocalGateway extends AbstractModel
{
    /**
     * @var string CDC实例ID
     */
    public $CdcId;

    /**
     * @var string VPC实例ID
     */
    public $VpcId;

    /**
     * @var string 本地网关实例ID
     */
    public $UniqLocalGwId;

    /**
     * @var string 本地网关名称
     */
    public $LocalGatewayName;

    /**
     * @var string 本地网关IP地址
     */
    public $LocalGwIp;

    /**
     * @var string 本地网关创建时间
     */
    public $CreateTime;

    /**
     * @param string $CdcId CDC实例ID
     * @param string $VpcId VPC实例ID
     * @param string $UniqLocalGwId 本地网关实例ID
     * @param string $LocalGatewayName 本地网关名称
     * @param string $LocalGwIp 本地网关IP地址
     * @param string $CreateTime 本地网关创建时间
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
        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("UniqLocalGwId",$param) and $param["UniqLocalGwId"] !== null) {
            $this->UniqLocalGwId = $param["UniqLocalGwId"];
        }

        if (array_key_exists("LocalGatewayName",$param) and $param["LocalGatewayName"] !== null) {
            $this->LocalGatewayName = $param["LocalGatewayName"];
        }

        if (array_key_exists("LocalGwIp",$param) and $param["LocalGwIp"] !== null) {
            $this->LocalGwIp = $param["LocalGwIp"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
