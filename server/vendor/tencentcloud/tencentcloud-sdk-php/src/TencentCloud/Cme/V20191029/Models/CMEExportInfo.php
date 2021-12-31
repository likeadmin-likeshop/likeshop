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
 * 云剪导出信息。
 *
 * @method Entity getOwner() 获取导出媒体归属，个人或团队。
 * @method void setOwner(Entity $Owner) 设置导出媒体归属，个人或团队。
 * @method string getName() 获取导出的媒体名称，不得超过30个字符。
 * @method void setName(string $Name) 设置导出的媒体名称，不得超过30个字符。
 * @method string getDescription() 获取导出的媒体信息，不得超过50个字符。
 * @method void setDescription(string $Description) 设置导出的媒体信息，不得超过50个字符。
 * @method string getClassPath() 获取导出的媒体分类路径，长度不能超过15字符。
 * @method void setClassPath(string $ClassPath) 设置导出的媒体分类路径，长度不能超过15字符。
 * @method array getTagSet() 获取导出的媒体标签，单个标签不得超过10个字符。
 * @method void setTagSet(array $TagSet) 设置导出的媒体标签，单个标签不得超过10个字符。
 * @method array getThirdPartyPublishInfos() 获取第三方平台发布信息列表。暂未正式对外，请勿使用。
 * @method void setThirdPartyPublishInfos(array $ThirdPartyPublishInfos) 设置第三方平台发布信息列表。暂未正式对外，请勿使用。
 */
class CMEExportInfo extends AbstractModel
{
    /**
     * @var Entity 导出媒体归属，个人或团队。
     */
    public $Owner;

    /**
     * @var string 导出的媒体名称，不得超过30个字符。
     */
    public $Name;

    /**
     * @var string 导出的媒体信息，不得超过50个字符。
     */
    public $Description;

    /**
     * @var string 导出的媒体分类路径，长度不能超过15字符。
     */
    public $ClassPath;

    /**
     * @var array 导出的媒体标签，单个标签不得超过10个字符。
     */
    public $TagSet;

    /**
     * @var array 第三方平台发布信息列表。暂未正式对外，请勿使用。
     */
    public $ThirdPartyPublishInfos;

    /**
     * @param Entity $Owner 导出媒体归属，个人或团队。
     * @param string $Name 导出的媒体名称，不得超过30个字符。
     * @param string $Description 导出的媒体信息，不得超过50个字符。
     * @param string $ClassPath 导出的媒体分类路径，长度不能超过15字符。
     * @param array $TagSet 导出的媒体标签，单个标签不得超过10个字符。
     * @param array $ThirdPartyPublishInfos 第三方平台发布信息列表。暂未正式对外，请勿使用。
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
        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ClassPath",$param) and $param["ClassPath"] !== null) {
            $this->ClassPath = $param["ClassPath"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = $param["TagSet"];
        }

        if (array_key_exists("ThirdPartyPublishInfos",$param) and $param["ThirdPartyPublishInfos"] !== null) {
            $this->ThirdPartyPublishInfos = [];
            foreach ($param["ThirdPartyPublishInfos"] as $key => $value){
                $obj = new ThirdPartyPublishInfo();
                $obj->deserialize($value);
                array_push($this->ThirdPartyPublishInfos, $obj);
            }
        }
    }
}
