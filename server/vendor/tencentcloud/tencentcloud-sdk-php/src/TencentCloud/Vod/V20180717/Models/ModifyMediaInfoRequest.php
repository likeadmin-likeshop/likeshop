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
 * ModifyMediaInfo请求参数结构体
 *
 * @method string getFileId() 获取媒体文件唯一标识。
 * @method void setFileId(string $FileId) 设置媒体文件唯一标识。
 * @method string getName() 获取媒体文件名称，最长 64 个字符。
 * @method void setName(string $Name) 设置媒体文件名称，最长 64 个字符。
 * @method string getDescription() 获取媒体文件描述，最长 128 个字符。
 * @method void setDescription(string $Description) 设置媒体文件描述，最长 128 个字符。
 * @method integer getClassId() 获取媒体文件分类 ID。
 * @method void setClassId(integer $ClassId) 设置媒体文件分类 ID。
 * @method string getExpireTime() 获取媒体文件过期时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。
 * @method void setExpireTime(string $ExpireTime) 设置媒体文件过期时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。
 * @method string getCoverData() 获取视频封面图片文件（如 jpeg, png 等）进行 [Base64](https://tools.ietf.org/html/rfc4648) 编码后的字符串，仅支持 gif、jpeg、png 三种图片格式。
 * @method void setCoverData(string $CoverData) 设置视频封面图片文件（如 jpeg, png 等）进行 [Base64](https://tools.ietf.org/html/rfc4648) 编码后的字符串，仅支持 gif、jpeg、png 三种图片格式。
 * @method array getAddKeyFrameDescs() 获取新增的一组视频打点信息，如果某个偏移时间已存在打点，则会进行覆盖操作，单个媒体文件最多 100 个打点信息。同一个请求里，AddKeyFrameDescs 的时间偏移参数必须与 DeleteKeyFrameDescs 都不同。
 * @method void setAddKeyFrameDescs(array $AddKeyFrameDescs) 设置新增的一组视频打点信息，如果某个偏移时间已存在打点，则会进行覆盖操作，单个媒体文件最多 100 个打点信息。同一个请求里，AddKeyFrameDescs 的时间偏移参数必须与 DeleteKeyFrameDescs 都不同。
 * @method array getDeleteKeyFrameDescs() 获取要删除的一组视频打点信息的时间偏移，单位：秒。同一个请求里，AddKeyFrameDescs 的时间偏移参数必须与 DeleteKeyFrameDescs 都不同。
 * @method void setDeleteKeyFrameDescs(array $DeleteKeyFrameDescs) 设置要删除的一组视频打点信息的时间偏移，单位：秒。同一个请求里，AddKeyFrameDescs 的时间偏移参数必须与 DeleteKeyFrameDescs 都不同。
 * @method integer getClearKeyFrameDescs() 获取取值 1 表示清空视频打点信息，其他值无意义。
同一个请求里，ClearKeyFrameDescs 与 AddKeyFrameDescs 不能同时出现。
 * @method void setClearKeyFrameDescs(integer $ClearKeyFrameDescs) 设置取值 1 表示清空视频打点信息，其他值无意义。
同一个请求里，ClearKeyFrameDescs 与 AddKeyFrameDescs 不能同时出现。
 * @method array getAddTags() 获取新增的一组标签，单个媒体文件最多 16 个标签，单个标签最多 16 个字符。同一个请求里，AddTags 参数必须与 DeleteTags 都不同。
 * @method void setAddTags(array $AddTags) 设置新增的一组标签，单个媒体文件最多 16 个标签，单个标签最多 16 个字符。同一个请求里，AddTags 参数必须与 DeleteTags 都不同。
 * @method array getDeleteTags() 获取要删除的一组标签。同一个请求里，AddTags 参数必须与 DeleteTags 都不同。
 * @method void setDeleteTags(array $DeleteTags) 设置要删除的一组标签。同一个请求里，AddTags 参数必须与 DeleteTags 都不同。
 * @method integer getClearTags() 获取取值 1 表示清空媒体文件所有标签，其他值无意义。
同一个请求里，ClearTags 与 AddTags 不能同时出现。
 * @method void setClearTags(integer $ClearTags) 设置取值 1 表示清空媒体文件所有标签，其他值无意义。
同一个请求里，ClearTags 与 AddTags 不能同时出现。
 * @method array getAddSubtitles() 获取新增一组字幕。单个媒体文件最多 16 个字幕。同一个请求中，AddSubtitles 中指定的字幕 Id 必须与 DeleteSubtitleIds 都不相同。
 * @method void setAddSubtitles(array $AddSubtitles) 设置新增一组字幕。单个媒体文件最多 16 个字幕。同一个请求中，AddSubtitles 中指定的字幕 Id 必须与 DeleteSubtitleIds 都不相同。
 * @method array getDeleteSubtitleIds() 获取待删除字幕的唯一标识。同一个请求中，AddSubtitles 中指定的字幕 Id 必须与 DeleteSubtitleIds 都不相同。
 * @method void setDeleteSubtitleIds(array $DeleteSubtitleIds) 设置待删除字幕的唯一标识。同一个请求中，AddSubtitles 中指定的字幕 Id 必须与 DeleteSubtitleIds 都不相同。
 * @method integer getClearSubtitles() 获取取值 1 表示清空媒体文件所有的字幕信息，其他值无意义。
同一个请求里，ClearSubtitles 与 AddSubtitles不能同时出现。
 * @method void setClearSubtitles(integer $ClearSubtitles) 设置取值 1 表示清空媒体文件所有的字幕信息，其他值无意义。
同一个请求里，ClearSubtitles 与 AddSubtitles不能同时出现。
 * @method integer getSubAppId() 获取点播[子应用](/document/product/266/14574) ID 。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 * @method void setSubAppId(integer $SubAppId) 设置点播[子应用](/document/product/266/14574) ID 。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 */
class ModifyMediaInfoRequest extends AbstractModel
{
    /**
     * @var string 媒体文件唯一标识。
     */
    public $FileId;

    /**
     * @var string 媒体文件名称，最长 64 个字符。
     */
    public $Name;

    /**
     * @var string 媒体文件描述，最长 128 个字符。
     */
    public $Description;

    /**
     * @var integer 媒体文件分类 ID。
     */
    public $ClassId;

    /**
     * @var string 媒体文件过期时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。
     */
    public $ExpireTime;

    /**
     * @var string 视频封面图片文件（如 jpeg, png 等）进行 [Base64](https://tools.ietf.org/html/rfc4648) 编码后的字符串，仅支持 gif、jpeg、png 三种图片格式。
     */
    public $CoverData;

    /**
     * @var array 新增的一组视频打点信息，如果某个偏移时间已存在打点，则会进行覆盖操作，单个媒体文件最多 100 个打点信息。同一个请求里，AddKeyFrameDescs 的时间偏移参数必须与 DeleteKeyFrameDescs 都不同。
     */
    public $AddKeyFrameDescs;

    /**
     * @var array 要删除的一组视频打点信息的时间偏移，单位：秒。同一个请求里，AddKeyFrameDescs 的时间偏移参数必须与 DeleteKeyFrameDescs 都不同。
     */
    public $DeleteKeyFrameDescs;

    /**
     * @var integer 取值 1 表示清空视频打点信息，其他值无意义。
同一个请求里，ClearKeyFrameDescs 与 AddKeyFrameDescs 不能同时出现。
     */
    public $ClearKeyFrameDescs;

    /**
     * @var array 新增的一组标签，单个媒体文件最多 16 个标签，单个标签最多 16 个字符。同一个请求里，AddTags 参数必须与 DeleteTags 都不同。
     */
    public $AddTags;

    /**
     * @var array 要删除的一组标签。同一个请求里，AddTags 参数必须与 DeleteTags 都不同。
     */
    public $DeleteTags;

    /**
     * @var integer 取值 1 表示清空媒体文件所有标签，其他值无意义。
同一个请求里，ClearTags 与 AddTags 不能同时出现。
     */
    public $ClearTags;

    /**
     * @var array 新增一组字幕。单个媒体文件最多 16 个字幕。同一个请求中，AddSubtitles 中指定的字幕 Id 必须与 DeleteSubtitleIds 都不相同。
     */
    public $AddSubtitles;

    /**
     * @var array 待删除字幕的唯一标识。同一个请求中，AddSubtitles 中指定的字幕 Id 必须与 DeleteSubtitleIds 都不相同。
     */
    public $DeleteSubtitleIds;

    /**
     * @var integer 取值 1 表示清空媒体文件所有的字幕信息，其他值无意义。
同一个请求里，ClearSubtitles 与 AddSubtitles不能同时出现。
     */
    public $ClearSubtitles;

    /**
     * @var integer 点播[子应用](/document/product/266/14574) ID 。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    public $SubAppId;

    /**
     * @param string $FileId 媒体文件唯一标识。
     * @param string $Name 媒体文件名称，最长 64 个字符。
     * @param string $Description 媒体文件描述，最长 128 个字符。
     * @param integer $ClassId 媒体文件分类 ID。
     * @param string $ExpireTime 媒体文件过期时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。填“9999-12-31T23:59:59Z”表示永不过期。过期后该媒体文件及其相关资源（转码结果、雪碧图等）将被永久删除。
     * @param string $CoverData 视频封面图片文件（如 jpeg, png 等）进行 [Base64](https://tools.ietf.org/html/rfc4648) 编码后的字符串，仅支持 gif、jpeg、png 三种图片格式。
     * @param array $AddKeyFrameDescs 新增的一组视频打点信息，如果某个偏移时间已存在打点，则会进行覆盖操作，单个媒体文件最多 100 个打点信息。同一个请求里，AddKeyFrameDescs 的时间偏移参数必须与 DeleteKeyFrameDescs 都不同。
     * @param array $DeleteKeyFrameDescs 要删除的一组视频打点信息的时间偏移，单位：秒。同一个请求里，AddKeyFrameDescs 的时间偏移参数必须与 DeleteKeyFrameDescs 都不同。
     * @param integer $ClearKeyFrameDescs 取值 1 表示清空视频打点信息，其他值无意义。
同一个请求里，ClearKeyFrameDescs 与 AddKeyFrameDescs 不能同时出现。
     * @param array $AddTags 新增的一组标签，单个媒体文件最多 16 个标签，单个标签最多 16 个字符。同一个请求里，AddTags 参数必须与 DeleteTags 都不同。
     * @param array $DeleteTags 要删除的一组标签。同一个请求里，AddTags 参数必须与 DeleteTags 都不同。
     * @param integer $ClearTags 取值 1 表示清空媒体文件所有标签，其他值无意义。
同一个请求里，ClearTags 与 AddTags 不能同时出现。
     * @param array $AddSubtitles 新增一组字幕。单个媒体文件最多 16 个字幕。同一个请求中，AddSubtitles 中指定的字幕 Id 必须与 DeleteSubtitleIds 都不相同。
     * @param array $DeleteSubtitleIds 待删除字幕的唯一标识。同一个请求中，AddSubtitles 中指定的字幕 Id 必须与 DeleteSubtitleIds 都不相同。
     * @param integer $ClearSubtitles 取值 1 表示清空媒体文件所有的字幕信息，其他值无意义。
同一个请求里，ClearSubtitles 与 AddSubtitles不能同时出现。
     * @param integer $SubAppId 点播[子应用](/document/product/266/14574) ID 。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CoverData",$param) and $param["CoverData"] !== null) {
            $this->CoverData = $param["CoverData"];
        }

        if (array_key_exists("AddKeyFrameDescs",$param) and $param["AddKeyFrameDescs"] !== null) {
            $this->AddKeyFrameDescs = [];
            foreach ($param["AddKeyFrameDescs"] as $key => $value){
                $obj = new MediaKeyFrameDescItem();
                $obj->deserialize($value);
                array_push($this->AddKeyFrameDescs, $obj);
            }
        }

        if (array_key_exists("DeleteKeyFrameDescs",$param) and $param["DeleteKeyFrameDescs"] !== null) {
            $this->DeleteKeyFrameDescs = $param["DeleteKeyFrameDescs"];
        }

        if (array_key_exists("ClearKeyFrameDescs",$param) and $param["ClearKeyFrameDescs"] !== null) {
            $this->ClearKeyFrameDescs = $param["ClearKeyFrameDescs"];
        }

        if (array_key_exists("AddTags",$param) and $param["AddTags"] !== null) {
            $this->AddTags = $param["AddTags"];
        }

        if (array_key_exists("DeleteTags",$param) and $param["DeleteTags"] !== null) {
            $this->DeleteTags = $param["DeleteTags"];
        }

        if (array_key_exists("ClearTags",$param) and $param["ClearTags"] !== null) {
            $this->ClearTags = $param["ClearTags"];
        }

        if (array_key_exists("AddSubtitles",$param) and $param["AddSubtitles"] !== null) {
            $this->AddSubtitles = [];
            foreach ($param["AddSubtitles"] as $key => $value){
                $obj = new MediaSubtitleInput();
                $obj->deserialize($value);
                array_push($this->AddSubtitles, $obj);
            }
        }

        if (array_key_exists("DeleteSubtitleIds",$param) and $param["DeleteSubtitleIds"] !== null) {
            $this->DeleteSubtitleIds = $param["DeleteSubtitleIds"];
        }

        if (array_key_exists("ClearSubtitles",$param) and $param["ClearSubtitles"] !== null) {
            $this->ClearSubtitles = $param["ClearSubtitles"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
