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
 * 企鹅号发布信息。
 *
 * @method string getTitle() 获取视频发布标题。
 * @method void setTitle(string $Title) 设置视频发布标题。
 * @method string getDescription() 获取视频发布描述信息。
 * @method void setDescription(string $Description) 设置视频发布描述信息。
 * @method array getTags() 获取视频标签。
 * @method void setTags(array $Tags) 设置视频标签。
 * @method integer getCategory() 获取视频分类，详见[企鹅号官网](https://open.om.qq.com/resources/resourcesCenter)视频分类。
 * @method void setCategory(integer $Category) 设置视频分类，详见[企鹅号官网](https://open.om.qq.com/resources/resourcesCenter)视频分类。
 */
class PenguinMediaPlatformPublishInfo extends AbstractModel
{
    /**
     * @var string 视频发布标题。
     */
    public $Title;

    /**
     * @var string 视频发布描述信息。
     */
    public $Description;

    /**
     * @var array 视频标签。
     */
    public $Tags;

    /**
     * @var integer 视频分类，详见[企鹅号官网](https://open.om.qq.com/resources/resourcesCenter)视频分类。
     */
    public $Category;

    /**
     * @param string $Title 视频发布标题。
     * @param string $Description 视频发布描述信息。
     * @param array $Tags 视频标签。
     * @param integer $Category 视频分类，详见[企鹅号官网](https://open.om.qq.com/resources/resourcesCenter)视频分类。
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
