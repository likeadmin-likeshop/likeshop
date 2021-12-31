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
 * CreateLoRaGateway请求参数结构体
 *
 * @method string getGatewayId() 获取LoRa 网关Id
 * @method void setGatewayId(string $GatewayId) 设置LoRa 网关Id
 * @method string getName() 获取网关名称
 * @method void setName(string $Name) 设置网关名称
 * @method string getDescription() 获取详情描述
 * @method void setDescription(string $Description) 设置详情描述
 * @method LoRaGatewayLocation getLocation() 获取位置坐标
 * @method void setLocation(LoRaGatewayLocation $Location) 设置位置坐标
 * @method string getPosition() 获取位置信息
 * @method void setPosition(string $Position) 设置位置信息
 * @method string getPositionDetails() 获取位置详情
 * @method void setPositionDetails(string $PositionDetails) 设置位置详情
 * @method boolean getIsPublic() 获取是否公开
 * @method void setIsPublic(boolean $IsPublic) 设置是否公开
 * @method string getFrequencyId() 获取频点ID
 * @method void setFrequencyId(string $FrequencyId) 设置频点ID
 */
class CreateLoRaGatewayRequest extends AbstractModel
{
    /**
     * @var string LoRa 网关Id
     */
    public $GatewayId;

    /**
     * @var string 网关名称
     */
    public $Name;

    /**
     * @var string 详情描述
     */
    public $Description;

    /**
     * @var LoRaGatewayLocation 位置坐标
     */
    public $Location;

    /**
     * @var string 位置信息
     */
    public $Position;

    /**
     * @var string 位置详情
     */
    public $PositionDetails;

    /**
     * @var boolean 是否公开
     */
    public $IsPublic;

    /**
     * @var string 频点ID
     */
    public $FrequencyId;

    /**
     * @param string $GatewayId LoRa 网关Id
     * @param string $Name 网关名称
     * @param string $Description 详情描述
     * @param LoRaGatewayLocation $Location 位置坐标
     * @param string $Position 位置信息
     * @param string $PositionDetails 位置详情
     * @param boolean $IsPublic 是否公开
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new LoRaGatewayLocation();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("PositionDetails",$param) and $param["PositionDetails"] !== null) {
            $this->PositionDetails = $param["PositionDetails"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }

        if (array_key_exists("FrequencyId",$param) and $param["FrequencyId"] !== null) {
            $this->FrequencyId = $param["FrequencyId"];
        }
    }
}
