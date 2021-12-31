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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LoRa 网关信息
 *
 * @method string getGatewayId() 获取LoRa 网关Id
 * @method void setGatewayId(string $GatewayId) 设置LoRa 网关Id
 * @method boolean getIsPublic() 获取是否是公开网关
 * @method void setIsPublic(boolean $IsPublic) 设置是否是公开网关
 * @method string getDescription() 获取网关描述
 * @method void setDescription(string $Description) 设置网关描述
 * @method string getName() 获取网关名称
 * @method void setName(string $Name) 设置网关名称
 * @method string getPosition() 获取网关位置信息
 * @method void setPosition(string $Position) 设置网关位置信息
 * @method string getPositionDetails() 获取网关位置详情
 * @method void setPositionDetails(string $PositionDetails) 设置网关位置详情
 * @method LoRaGatewayLocation getLocation() 获取LoRa 网关位置坐标
 * @method void setLocation(LoRaGatewayLocation $Location) 设置LoRa 网关位置坐标
 * @method string getUpdatedAt() 获取最后更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置最后更新时间
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getLastSeenAt() 获取最后上报时间
 * @method void setLastSeenAt(string $LastSeenAt) 设置最后上报时间
 * @method string getFrequencyId() 获取频点ID
 * @method void setFrequencyId(string $FrequencyId) 设置频点ID
 */
class LoRaGatewayItem extends AbstractModel
{
    /**
     * @var string LoRa 网关Id
     */
    public $GatewayId;

    /**
     * @var boolean 是否是公开网关
     */
    public $IsPublic;

    /**
     * @var string 网关描述
     */
    public $Description;

    /**
     * @var string 网关名称
     */
    public $Name;

    /**
     * @var string 网关位置信息
     */
    public $Position;

    /**
     * @var string 网关位置详情
     */
    public $PositionDetails;

    /**
     * @var LoRaGatewayLocation LoRa 网关位置坐标
     */
    public $Location;

    /**
     * @var string 最后更新时间
     */
    public $UpdatedAt;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 最后上报时间
     */
    public $LastSeenAt;

    /**
     * @var string 频点ID
     */
    public $FrequencyId;

    /**
     * @param string $GatewayId LoRa 网关Id
     * @param boolean $IsPublic 是否是公开网关
     * @param string $Description 网关描述
     * @param string $Name 网关名称
     * @param string $Position 网关位置信息
     * @param string $PositionDetails 网关位置详情
     * @param LoRaGatewayLocation $Location LoRa 网关位置坐标
     * @param string $UpdatedAt 最后更新时间
     * @param string $CreatedAt 创建时间
     * @param string $LastSeenAt 最后上报时间
     * @param string $FrequencyId 频点ID
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("PositionDetails",$param) and $param["PositionDetails"] !== null) {
            $this->PositionDetails = $param["PositionDetails"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new LoRaGatewayLocation();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("LastSeenAt",$param) and $param["LastSeenAt"] !== null) {
            $this->LastSeenAt = $param["LastSeenAt"];
        }

        if (array_key_exists("FrequencyId",$param) and $param["FrequencyId"] !== null) {
            $this->FrequencyId = $param["FrequencyId"];
        }
    }
}
