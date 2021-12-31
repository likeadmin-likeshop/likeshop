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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pod的存储设备描述信息。
 *
 * @method string getVolumeType() 获取存储类型，可为"pvc"，"hostpath"。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeType(string $VolumeType) 设置存储类型，可为"pvc"，"hostpath"。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PersistentVolumeContext getPVCVolume() 获取当VolumeType为"pvc"时，该字段生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPVCVolume(PersistentVolumeContext $PVCVolume) 设置当VolumeType为"pvc"时，该字段生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method HostVolumeContext getHostVolume() 获取当VolumeType为"hostpath"时，该字段生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostVolume(HostVolumeContext $HostVolume) 设置当VolumeType为"hostpath"时，该字段生效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class PodVolume extends AbstractModel
{
    /**
     * @var string 存储类型，可为"pvc"，"hostpath"。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeType;

    /**
     * @var PersistentVolumeContext 当VolumeType为"pvc"时，该字段生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PVCVolume;

    /**
     * @var HostVolumeContext 当VolumeType为"hostpath"时，该字段生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostVolume;

    /**
     * @param string $VolumeType 存储类型，可为"pvc"，"hostpath"。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PersistentVolumeContext $PVCVolume 当VolumeType为"pvc"时，该字段生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param HostVolumeContext $HostVolume 当VolumeType为"hostpath"时，该字段生效。
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
        if (array_key_exists("VolumeType",$param) and $param["VolumeType"] !== null) {
            $this->VolumeType = $param["VolumeType"];
        }

        if (array_key_exists("PVCVolume",$param) and $param["PVCVolume"] !== null) {
            $this->PVCVolume = new PersistentVolumeContext();
            $this->PVCVolume->deserialize($param["PVCVolume"]);
        }

        if (array_key_exists("HostVolume",$param) and $param["HostVolume"] !== null) {
            $this->HostVolume = new HostVolumeContext();
            $this->HostVolume->deserialize($param["HostVolume"]);
        }
    }
}
