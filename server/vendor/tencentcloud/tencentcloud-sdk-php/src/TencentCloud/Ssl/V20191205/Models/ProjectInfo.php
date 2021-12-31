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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取证书列表（DescribeCertificates）返回参数键为 Certificates 下，key为 ProjectInfo 的内容。
 *
 * @method string getProjectName() 获取项目名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectCreatorUin() 获取项目创建用户 UIN。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectCreatorUin(integer $ProjectCreatorUin) 设置项目创建用户 UIN。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectCreateTime() 获取项目创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectCreateTime(string $ProjectCreateTime) 设置项目创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectResume() 获取项目信息简述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectResume(string $ProjectResume) 设置项目信息简述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOwnerUin() 获取用户 UIN。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(integer $OwnerUin) 设置用户 UIN。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目 ID。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProjectInfo extends AbstractModel
{
    /**
     * @var string 项目名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var integer 项目创建用户 UIN。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectCreatorUin;

    /**
     * @var string 项目创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectCreateTime;

    /**
     * @var string 项目信息简述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectResume;

    /**
     * @var integer 用户 UIN。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 项目 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @param string $ProjectName 项目名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectCreatorUin 项目创建用户 UIN。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectCreateTime 项目创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectResume 项目信息简述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OwnerUin 用户 UIN。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目 ID。
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
        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectCreatorUin",$param) and $param["ProjectCreatorUin"] !== null) {
            $this->ProjectCreatorUin = $param["ProjectCreatorUin"];
        }

        if (array_key_exists("ProjectCreateTime",$param) and $param["ProjectCreateTime"] !== null) {
            $this->ProjectCreateTime = $param["ProjectCreateTime"];
        }

        if (array_key_exists("ProjectResume",$param) and $param["ProjectResume"] !== null) {
            $this->ProjectResume = $param["ProjectResume"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
