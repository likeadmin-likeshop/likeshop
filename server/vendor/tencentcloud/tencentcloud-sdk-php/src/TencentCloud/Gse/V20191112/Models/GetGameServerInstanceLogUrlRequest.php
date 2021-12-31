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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetGameServerInstanceLogUrl请求参数结构体
 *
 * @method string getFleetId() 获取游戏舰队ID
 * @method void setFleetId(string $FleetId) 设置游戏舰队ID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getServerIp() 获取实例IP
 * @method void setServerIp(string $ServerIp) 设置实例IP
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getSize() 获取每次条数
 * @method void setSize(integer $Size) 设置每次条数
 */
class GetGameServerInstanceLogUrlRequest extends AbstractModel
{
    /**
     * @var string 游戏舰队ID
     */
    public $FleetId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例IP
     */
    public $ServerIp;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 每次条数
     */
    public $Size;

    /**
     * @param string $FleetId 游戏舰队ID
     * @param string $InstanceId 实例ID
     * @param string $ServerIp 实例IP
     * @param integer $Offset 偏移量
     * @param integer $Size 每次条数
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ServerIp",$param) and $param["ServerIp"] !== null) {
            $this->ServerIp = $param["ServerIp"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
