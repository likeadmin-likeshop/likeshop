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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 操作系统类型
 *
 * @method integer getOsTypeId() 获取操作系统ID
 * @method void setOsTypeId(integer $OsTypeId) 设置操作系统ID
 * @method string getOsName() 获取操作系统名称
 * @method void setOsName(string $OsName) 设置操作系统名称
 * @method string getOsDescription() 获取操作系统名称描述
 * @method void setOsDescription(string $OsDescription) 设置操作系统名称描述
 * @method string getOsEnglishDescription() 获取操作系统英文名称
 * @method void setOsEnglishDescription(string $OsEnglishDescription) 设置操作系统英文名称
 * @method string getOsClass() 获取操作系统的分类，如CentOs Debian
 * @method void setOsClass(string $OsClass) 设置操作系统的分类，如CentOs Debian
 * @method string getImageTag() 获取标识镜像分类。public:公共镜像; private: 专属镜像
 * @method void setImageTag(string $ImageTag) 设置标识镜像分类。public:公共镜像; private: 专属镜像
 * @method integer getMaxPartitionSize() 获取操作系统，ext4文件下所支持的最大的磁盘大小。单位为T
 * @method void setMaxPartitionSize(integer $MaxPartitionSize) 设置操作系统，ext4文件下所支持的最大的磁盘大小。单位为T
 * @method string getOsMinorVersion() 获取黑石版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOsMinorVersion(string $OsMinorVersion) 设置黑石版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOsMinorClass() 获取黑石版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOsMinorClass(string $OsMinorClass) 设置黑石版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class OsInfo extends AbstractModel
{
    /**
     * @var integer 操作系统ID
     */
    public $OsTypeId;

    /**
     * @var string 操作系统名称
     */
    public $OsName;

    /**
     * @var string 操作系统名称描述
     */
    public $OsDescription;

    /**
     * @var string 操作系统英文名称
     */
    public $OsEnglishDescription;

    /**
     * @var string 操作系统的分类，如CentOs Debian
     */
    public $OsClass;

    /**
     * @var string 标识镜像分类。public:公共镜像; private: 专属镜像
     */
    public $ImageTag;

    /**
     * @var integer 操作系统，ext4文件下所支持的最大的磁盘大小。单位为T
     */
    public $MaxPartitionSize;

    /**
     * @var string 黑石版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OsMinorVersion;

    /**
     * @var string 黑石版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OsMinorClass;

    /**
     * @param integer $OsTypeId 操作系统ID
     * @param string $OsName 操作系统名称
     * @param string $OsDescription 操作系统名称描述
     * @param string $OsEnglishDescription 操作系统英文名称
     * @param string $OsClass 操作系统的分类，如CentOs Debian
     * @param string $ImageTag 标识镜像分类。public:公共镜像; private: 专属镜像
     * @param integer $MaxPartitionSize 操作系统，ext4文件下所支持的最大的磁盘大小。单位为T
     * @param string $OsMinorVersion 黑石版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OsMinorClass 黑石版本
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
        if (array_key_exists("OsTypeId",$param) and $param["OsTypeId"] !== null) {
            $this->OsTypeId = $param["OsTypeId"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("OsDescription",$param) and $param["OsDescription"] !== null) {
            $this->OsDescription = $param["OsDescription"];
        }

        if (array_key_exists("OsEnglishDescription",$param) and $param["OsEnglishDescription"] !== null) {
            $this->OsEnglishDescription = $param["OsEnglishDescription"];
        }

        if (array_key_exists("OsClass",$param) and $param["OsClass"] !== null) {
            $this->OsClass = $param["OsClass"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("MaxPartitionSize",$param) and $param["MaxPartitionSize"] !== null) {
            $this->MaxPartitionSize = $param["MaxPartitionSize"];
        }

        if (array_key_exists("OsMinorVersion",$param) and $param["OsMinorVersion"] !== null) {
            $this->OsMinorVersion = $param["OsMinorVersion"];
        }

        if (array_key_exists("OsMinorClass",$param) and $param["OsMinorClass"] !== null) {
            $this->OsMinorClass = $param["OsMinorClass"];
        }
    }
}
