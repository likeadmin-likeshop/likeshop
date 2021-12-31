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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负责均衡批量目标项
 *
 * @method string getListenerId() 获取监听器ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListenerId(string $ListenerId) 设置监听器ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取绑定端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置绑定端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取子机ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置子机ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEniIp() 获取弹性网卡ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEniIp(string $EniIp) 设置弹性网卡ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeight() 获取子机权重，范围[0, 100]。绑定时如果不存在，则默认为10。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置子机权重，范围[0, 100]。绑定时如果不存在，则默认为10。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BatchTarget extends AbstractModel
{
    /**
     * @var string 监听器ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListenerId;

    /**
     * @var integer 绑定端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 子机ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 弹性网卡ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EniIp;

    /**
     * @var integer 子机权重，范围[0, 100]。绑定时如果不存在，则默认为10。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @param string $ListenerId 监听器ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 绑定端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 子机ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EniIp 弹性网卡ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Weight 子机权重，范围[0, 100]。绑定时如果不存在，则默认为10。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EniIp",$param) and $param["EniIp"] !== null) {
            $this->EniIp = $param["EniIp"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
