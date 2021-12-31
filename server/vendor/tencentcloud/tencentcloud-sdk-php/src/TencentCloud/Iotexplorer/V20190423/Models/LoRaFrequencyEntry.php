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
 * LoRa自定义频点信息
 *
 * @method string getFreqId() 获取频点唯一ID
 * @method void setFreqId(string $FreqId) 设置频点唯一ID
 * @method string getFreqName() 获取频点名称
 * @method void setFreqName(string $FreqName) 设置频点名称
 * @method string getDescription() 获取频点描述
 * @method void setDescription(string $Description) 设置频点描述
 * @method array getChannelsDataUp() 获取数据上行信道
 * @method void setChannelsDataUp(array $ChannelsDataUp) 设置数据上行信道
 * @method array getChannelsDataRX1() 获取数据下行信道RX1
 * @method void setChannelsDataRX1(array $ChannelsDataRX1) 设置数据下行信道RX1
 * @method array getChannelsDataRX2() 获取数据下行信道RX2
 * @method void setChannelsDataRX2(array $ChannelsDataRX2) 设置数据下行信道RX2
 * @method array getChannelsJoinUp() 获取入网上行信道
 * @method void setChannelsJoinUp(array $ChannelsJoinUp) 设置入网上行信道
 * @method array getChannelsJoinRX1() 获取入网下行RX1信道
 * @method void setChannelsJoinRX1(array $ChannelsJoinRX1) 设置入网下行RX1信道
 * @method array getChannelsJoinRX2() 获取入网下行RX2信道
 * @method void setChannelsJoinRX2(array $ChannelsJoinRX2) 设置入网下行RX2信道
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 */
class LoRaFrequencyEntry extends AbstractModel
{
    /**
     * @var string 频点唯一ID
     */
    public $FreqId;

    /**
     * @var string 频点名称
     */
    public $FreqName;

    /**
     * @var string 频点描述
     */
    public $Description;

    /**
     * @var array 数据上行信道
     */
    public $ChannelsDataUp;

    /**
     * @var array 数据下行信道RX1
     */
    public $ChannelsDataRX1;

    /**
     * @var array 数据下行信道RX2
     */
    public $ChannelsDataRX2;

    /**
     * @var array 入网上行信道
     */
    public $ChannelsJoinUp;

    /**
     * @var array 入网下行RX1信道
     */
    public $ChannelsJoinRX1;

    /**
     * @var array 入网下行RX2信道
     */
    public $ChannelsJoinRX2;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @param string $FreqId 频点唯一ID
     * @param string $FreqName 频点名称
     * @param string $Description 频点描述
     * @param array $ChannelsDataUp 数据上行信道
     * @param array $ChannelsDataRX1 数据下行信道RX1
     * @param array $ChannelsDataRX2 数据下行信道RX2
     * @param array $ChannelsJoinUp 入网上行信道
     * @param array $ChannelsJoinRX1 入网下行RX1信道
     * @param array $ChannelsJoinRX2 入网下行RX2信道
     * @param integer $CreateTime 创建时间
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
        if (array_key_exists("FreqId",$param) and $param["FreqId"] !== null) {
            $this->FreqId = $param["FreqId"];
        }

        if (array_key_exists("FreqName",$param) and $param["FreqName"] !== null) {
            $this->FreqName = $param["FreqName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ChannelsDataUp",$param) and $param["ChannelsDataUp"] !== null) {
            $this->ChannelsDataUp = $param["ChannelsDataUp"];
        }

        if (array_key_exists("ChannelsDataRX1",$param) and $param["ChannelsDataRX1"] !== null) {
            $this->ChannelsDataRX1 = $param["ChannelsDataRX1"];
        }

        if (array_key_exists("ChannelsDataRX2",$param) and $param["ChannelsDataRX2"] !== null) {
            $this->ChannelsDataRX2 = $param["ChannelsDataRX2"];
        }

        if (array_key_exists("ChannelsJoinUp",$param) and $param["ChannelsJoinUp"] !== null) {
            $this->ChannelsJoinUp = $param["ChannelsJoinUp"];
        }

        if (array_key_exists("ChannelsJoinRX1",$param) and $param["ChannelsJoinRX1"] !== null) {
            $this->ChannelsJoinRX1 = $param["ChannelsJoinRX1"];
        }

        if (array_key_exists("ChannelsJoinRX2",$param) and $param["ChannelsJoinRX2"] !== null) {
            $this->ChannelsJoinRX2 = $param["ChannelsJoinRX2"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
