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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyConnectionConfig请求参数结构体
 *
 * @method string getInstanceId() 获取实例的ID，长度在12-36之间。
 * @method void setInstanceId(string $InstanceId) 设置实例的ID，长度在12-36之间。
 * @method integer getBandwidth() 获取附加带宽，大于0，单位MB。
 * @method void setBandwidth(integer $Bandwidth) 设置附加带宽，大于0，单位MB。
 * @method integer getClientLimit() 获取单分片的总连接数。
未开启副本只读时，下限为10000，上限为40000；
开启副本只读时，下限为10000，上限为10000×(只读副本数+3)。
 * @method void setClientLimit(integer $ClientLimit) 设置单分片的总连接数。
未开启副本只读时，下限为10000，上限为40000；
开启副本只读时，下限为10000，上限为10000×(只读副本数+3)。
 */
class ModifyConnectionConfigRequest extends AbstractModel
{
    /**
     * @var string 实例的ID，长度在12-36之间。
     */
    public $InstanceId;

    /**
     * @var integer 附加带宽，大于0，单位MB。
     */
    public $Bandwidth;

    /**
     * @var integer 单分片的总连接数。
未开启副本只读时，下限为10000，上限为40000；
开启副本只读时，下限为10000，上限为10000×(只读副本数+3)。
     */
    public $ClientLimit;

    /**
     * @param string $InstanceId 实例的ID，长度在12-36之间。
     * @param integer $Bandwidth 附加带宽，大于0，单位MB。
     * @param integer $ClientLimit 单分片的总连接数。
未开启副本只读时，下限为10000，上限为40000；
开启副本只读时，下限为10000，上限为10000×(只读副本数+3)。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("ClientLimit",$param) and $param["ClientLimit"] !== null) {
            $this->ClientLimit = $param["ClientLimit"];
        }
    }
}
