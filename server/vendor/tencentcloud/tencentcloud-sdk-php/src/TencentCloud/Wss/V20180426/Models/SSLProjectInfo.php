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
namespace TencentCloud\Wss\V20180426\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取证书列表接口（SSLProjectInfo）出参键为CertificateSet下的元素ProjectIno详情
 *
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOwnerUin() 获取项目所属的 uin（默认项目为0）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(integer $OwnerUin) 设置项目所属的 uin（默认项目为0）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreatorUin() 获取创建项目的 uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(integer $CreatorUin) 设置创建项目的 uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取项目创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置项目创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInfo() 获取项目说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInfo(string $Info) 设置项目说明
注意：此字段可能返回 null，表示取不到有效值。
 */
class SSLProjectInfo extends AbstractModel
{
    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var integer 项目所属的 uin（默认项目为0）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 创建项目的 uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorUin;

    /**
     * @var string 项目创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 项目说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Info;

    /**
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OwnerUin 项目所属的 uin（默认项目为0）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreatorUin 创建项目的 uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 项目创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Info 项目说明
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }
    }
}
