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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体基本信息。
 *
 * @method string getMaterialId() 获取媒体 Id。
 * @method void setMaterialId(string $MaterialId) 设置媒体 Id。
 * @method string getMaterialType() 获取媒体类型，取值为：
<li> AUDIO :音频;</li>
<li> VIDEO :视频;</li>
<li> IMAGE :图片;</li>
<li> LINK  :链接.</li>
<li> OTHER : 其他.</li>
 * @method void setMaterialType(string $MaterialType) 设置媒体类型，取值为：
<li> AUDIO :音频;</li>
<li> VIDEO :视频;</li>
<li> IMAGE :图片;</li>
<li> LINK  :链接.</li>
<li> OTHER : 其他.</li>
 * @method Entity getOwner() 获取媒体归属实体。
 * @method void setOwner(Entity $Owner) 设置媒体归属实体。
 * @method string getName() 获取媒体名称。
 * @method void setName(string $Name) 设置媒体名称。
 * @method string getCreateTime() 获取媒体文件的创建时间，使用 ISO 日期格式。
 * @method void setCreateTime(string $CreateTime) 设置媒体文件的创建时间，使用 ISO 日期格式。
 * @method string getUpdateTime() 获取媒体文件的最近更新时间（如修改视频属性、发起视频处理等会触发更新媒体文件信息的操作），使用 ISO 日期格式。
 * @method void setUpdateTime(string $UpdateTime) 设置媒体文件的最近更新时间（如修改视频属性、发起视频处理等会触发更新媒体文件信息的操作），使用 ISO 日期格式。
 * @method string getClassPath() 获取媒体的分类路径。
 * @method void setClassPath(string $ClassPath) 设置媒体的分类路径。
 * @method array getPresetTagSet() 获取预置标签列表。
 * @method void setPresetTagSet(array $PresetTagSet) 设置预置标签列表。
 * @method array getTagSet() 获取人工标签列表。
 * @method void setTagSet(array $TagSet) 设置人工标签列表。
 * @method string getPreviewUrl() 获取媒体文件的预览图。
 * @method void setPreviewUrl(string $PreviewUrl) 设置媒体文件的预览图。
 * @method array getTagInfoSet() 获取媒体绑定的标签信息列表 。
该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagInfoSet(array $TagInfoSet) 设置媒体绑定的标签信息列表 。
该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MaterialBasicInfo extends AbstractModel
{
    /**
     * @var string 媒体 Id。
     */
    public $MaterialId;

    /**
     * @var string 媒体类型，取值为：
<li> AUDIO :音频;</li>
<li> VIDEO :视频;</li>
<li> IMAGE :图片;</li>
<li> LINK  :链接.</li>
<li> OTHER : 其他.</li>
     */
    public $MaterialType;

    /**
     * @var Entity 媒体归属实体。
     */
    public $Owner;

    /**
     * @var string 媒体名称。
     */
    public $Name;

    /**
     * @var string 媒体文件的创建时间，使用 ISO 日期格式。
     */
    public $CreateTime;

    /**
     * @var string 媒体文件的最近更新时间（如修改视频属性、发起视频处理等会触发更新媒体文件信息的操作），使用 ISO 日期格式。
     */
    public $UpdateTime;

    /**
     * @var string 媒体的分类路径。
     */
    public $ClassPath;

    /**
     * @var array 预置标签列表。
     */
    public $PresetTagSet;

    /**
     * @var array 人工标签列表。
     */
    public $TagSet;

    /**
     * @var string 媒体文件的预览图。
     */
    public $PreviewUrl;

    /**
     * @var array 媒体绑定的标签信息列表 。
该字段已废弃。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagInfoSet;

    /**
     * @param string $MaterialId 媒体 Id。
     * @param string $MaterialType 媒体类型，取值为：
<li> AUDIO :音频;</li>
<li> VIDEO :视频;</li>
<li> IMAGE :图片;</li>
<li> LINK  :链接.</li>
<li> OTHER : 其他.</li>
     * @param Entity $Owner 媒体归属实体。
     * @param string $Name 媒体名称。
     * @param string $CreateTime 媒体文件的创建时间，使用 ISO 日期格式。
     * @param string $UpdateTime 媒体文件的最近更新时间（如修改视频属性、发起视频处理等会触发更新媒体文件信息的操作），使用 ISO 日期格式。
     * @param string $ClassPath 媒体的分类路径。
     * @param array $PresetTagSet 预置标签列表。
     * @param array $TagSet 人工标签列表。
     * @param string $PreviewUrl 媒体文件的预览图。
     * @param array $TagInfoSet 媒体绑定的标签信息列表 。
该字段已废弃。
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
        if (array_key_exists("MaterialId",$param) and $param["MaterialId"] !== null) {
            $this->MaterialId = $param["MaterialId"];
        }

        if (array_key_exists("MaterialType",$param) and $param["MaterialType"] !== null) {
            $this->MaterialType = $param["MaterialType"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ClassPath",$param) and $param["ClassPath"] !== null) {
            $this->ClassPath = $param["ClassPath"];
        }

        if (array_key_exists("PresetTagSet",$param) and $param["PresetTagSet"] !== null) {
            $this->PresetTagSet = [];
            foreach ($param["PresetTagSet"] as $key => $value){
                $obj = new PresetTagInfo();
                $obj->deserialize($value);
                array_push($this->PresetTagSet, $obj);
            }
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = $param["TagSet"];
        }

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }

        if (array_key_exists("TagInfoSet",$param) and $param["TagInfoSet"] !== null) {
            $this->TagInfoSet = [];
            foreach ($param["TagInfoSet"] as $key => $value){
                $obj = new MaterialTagInfo();
                $obj->deserialize($value);
                array_push($this->TagInfoSet, $obj);
            }
        }
    }
}
