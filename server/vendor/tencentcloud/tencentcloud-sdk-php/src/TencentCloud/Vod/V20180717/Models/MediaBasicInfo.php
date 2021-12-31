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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 点播媒体文件基础信息
 *
 * @method string getName() 获取媒体文件名称。
 * @method void setName(string $Name) 设置媒体文件名称。
 * @method string getDescription() 获取媒体文件描述。
 * @method void setDescription(string $Description) 设置媒体文件描述。
 * @method string getCreateTime() 获取媒体文件的创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setCreateTime(string $CreateTime) 设置媒体文件的创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getUpdateTime() 获取媒体文件的最近更新时间（如修改视频属性、发起视频处理等会触发更新媒体文件信息的操作），使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setUpdateTime(string $UpdateTime) 设置媒体文件的最近更新时间（如修改视频属性、发起视频处理等会触发更新媒体文件信息的操作），使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getExpireTime() 获取媒体文件的过期时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。“9999-12-31T23:59:59Z”表示永不过期。
 * @method void setExpireTime(string $ExpireTime) 设置媒体文件的过期时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。“9999-12-31T23:59:59Z”表示永不过期。
 * @method integer getClassId() 获取媒体文件的分类 ID。
 * @method void setClassId(integer $ClassId) 设置媒体文件的分类 ID。
 * @method string getClassName() 获取媒体文件的分类名称。
 * @method void setClassName(string $ClassName) 设置媒体文件的分类名称。
 * @method string getClassPath() 获取媒体文件的分类路径，分类间以“-”分隔，如“新的一级分类 - 新的二级分类”。
 * @method void setClassPath(string $ClassPath) 设置媒体文件的分类路径，分类间以“-”分隔，如“新的一级分类 - 新的二级分类”。
 * @method string getCoverUrl() 获取媒体文件的封面图片地址。
 * @method void setCoverUrl(string $CoverUrl) 设置媒体文件的封面图片地址。
 * @method string getType() 获取媒体文件的封装格式，例如 mp4、flv 等。
 * @method void setType(string $Type) 设置媒体文件的封装格式，例如 mp4、flv 等。
 * @method string getMediaUrl() 获取原始媒体文件的 URL 地址。
 * @method void setMediaUrl(string $MediaUrl) 设置原始媒体文件的 URL 地址。
 * @method MediaSourceData getSourceInfo() 获取该媒体文件的来源信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceInfo(MediaSourceData $SourceInfo) 设置该媒体文件的来源信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageRegion() 获取媒体文件存储地区，如 ap-chongqing，参见[地域列表](https://cloud.tencent.com/document/product/266/9760#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8)。
 * @method void setStorageRegion(string $StorageRegion) 设置媒体文件存储地区，如 ap-chongqing，参见[地域列表](https://cloud.tencent.com/document/product/266/9760#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8)。
 * @method array getTagSet() 获取媒体文件的标签信息。
 * @method void setTagSet(array $TagSet) 设置媒体文件的标签信息。
 * @method string getVid() 获取直播录制文件的唯一标识。
 * @method void setVid(string $Vid) 设置直播录制文件的唯一标识。
 * @method string getCategory() 获取文件类型：
<li>Video: 视频文件</li>
<li>Audio: 音频文件</li>
<li>Image: 图片文件</li>
 * @method void setCategory(string $Category) 设置文件类型：
<li>Video: 视频文件</li>
<li>Audio: 音频文件</li>
<li>Image: 图片文件</li>
 * @method string getStatus() 获取文件状态：Normal：正常，Forbidden：封禁。

*注意：此字段暂不支持。
 * @method void setStatus(string $Status) 设置文件状态：Normal：正常，Forbidden：封禁。

*注意：此字段暂不支持。
 * @method string getStorageClass() 获取媒体文件的存储类别：
<li>STANDARD：标准存储。</li>
<li>STANDARD_IA：低频存储。</li>
 * @method void setStorageClass(string $StorageClass) 设置媒体文件的存储类别：
<li>STANDARD：标准存储。</li>
<li>STANDARD_IA：低频存储。</li>
 */
class MediaBasicInfo extends AbstractModel
{
    /**
     * @var string 媒体文件名称。
     */
    public $Name;

    /**
     * @var string 媒体文件描述。
     */
    public $Description;

    /**
     * @var string 媒体文件的创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $CreateTime;

    /**
     * @var string 媒体文件的最近更新时间（如修改视频属性、发起视频处理等会触发更新媒体文件信息的操作），使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $UpdateTime;

    /**
     * @var string 媒体文件的过期时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。“9999-12-31T23:59:59Z”表示永不过期。
     */
    public $ExpireTime;

    /**
     * @var integer 媒体文件的分类 ID。
     */
    public $ClassId;

    /**
     * @var string 媒体文件的分类名称。
     */
    public $ClassName;

    /**
     * @var string 媒体文件的分类路径，分类间以“-”分隔，如“新的一级分类 - 新的二级分类”。
     */
    public $ClassPath;

    /**
     * @var string 媒体文件的封面图片地址。
     */
    public $CoverUrl;

    /**
     * @var string 媒体文件的封装格式，例如 mp4、flv 等。
     */
    public $Type;

    /**
     * @var string 原始媒体文件的 URL 地址。
     */
    public $MediaUrl;

    /**
     * @var MediaSourceData 该媒体文件的来源信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceInfo;

    /**
     * @var string 媒体文件存储地区，如 ap-chongqing，参见[地域列表](https://cloud.tencent.com/document/product/266/9760#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8)。
     */
    public $StorageRegion;

    /**
     * @var array 媒体文件的标签信息。
     */
    public $TagSet;

    /**
     * @var string 直播录制文件的唯一标识。
     */
    public $Vid;

    /**
     * @var string 文件类型：
<li>Video: 视频文件</li>
<li>Audio: 音频文件</li>
<li>Image: 图片文件</li>
     */
    public $Category;

    /**
     * @var string 文件状态：Normal：正常，Forbidden：封禁。

*注意：此字段暂不支持。
     */
    public $Status;

    /**
     * @var string 媒体文件的存储类别：
<li>STANDARD：标准存储。</li>
<li>STANDARD_IA：低频存储。</li>
     */
    public $StorageClass;

    /**
     * @param string $Name 媒体文件名称。
     * @param string $Description 媒体文件描述。
     * @param string $CreateTime 媒体文件的创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $UpdateTime 媒体文件的最近更新时间（如修改视频属性、发起视频处理等会触发更新媒体文件信息的操作），使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $ExpireTime 媒体文件的过期时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。“9999-12-31T23:59:59Z”表示永不过期。
     * @param integer $ClassId 媒体文件的分类 ID。
     * @param string $ClassName 媒体文件的分类名称。
     * @param string $ClassPath 媒体文件的分类路径，分类间以“-”分隔，如“新的一级分类 - 新的二级分类”。
     * @param string $CoverUrl 媒体文件的封面图片地址。
     * @param string $Type 媒体文件的封装格式，例如 mp4、flv 等。
     * @param string $MediaUrl 原始媒体文件的 URL 地址。
     * @param MediaSourceData $SourceInfo 该媒体文件的来源信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageRegion 媒体文件存储地区，如 ap-chongqing，参见[地域列表](https://cloud.tencent.com/document/product/266/9760#.E5.B7.B2.E6.94.AF.E6.8C.81.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8)。
     * @param array $TagSet 媒体文件的标签信息。
     * @param string $Vid 直播录制文件的唯一标识。
     * @param string $Category 文件类型：
<li>Video: 视频文件</li>
<li>Audio: 音频文件</li>
<li>Image: 图片文件</li>
     * @param string $Status 文件状态：Normal：正常，Forbidden：封禁。

*注意：此字段暂不支持。
     * @param string $StorageClass 媒体文件的存储类别：
<li>STANDARD：标准存储。</li>
<li>STANDARD_IA：低频存储。</li>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }

        if (array_key_exists("ClassPath",$param) and $param["ClassPath"] !== null) {
            $this->ClassPath = $param["ClassPath"];
        }

        if (array_key_exists("CoverUrl",$param) and $param["CoverUrl"] !== null) {
            $this->CoverUrl = $param["CoverUrl"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MediaUrl",$param) and $param["MediaUrl"] !== null) {
            $this->MediaUrl = $param["MediaUrl"];
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = new MediaSourceData();
            $this->SourceInfo->deserialize($param["SourceInfo"]);
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = $param["TagSet"];
        }

        if (array_key_exists("Vid",$param) and $param["Vid"] !== null) {
            $this->Vid = $param["Vid"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StorageClass",$param) and $param["StorageClass"] !== null) {
            $this->StorageClass = $param["StorageClass"];
        }
    }
}
