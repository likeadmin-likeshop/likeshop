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
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 以图搜图检索结果
 *
 * @method string getImage() 获取图片base64数据
 * @method void setImage(string $Image) 设置图片base64数据
 * @method string getPersonId() 获取身份ID
 * @method void setPersonId(string $PersonId) 设置身份ID
 * @method float getSimilarity() 获取相似度
 * @method void setSimilarity(float $Similarity) 设置相似度
 */
class SearchResult extends AbstractModel
{
    /**
     * @var string 图片base64数据
     */
    public $Image;

    /**
     * @var string 身份ID
     */
    public $PersonId;

    /**
     * @var float 相似度
     */
    public $Similarity;

    /**
     * @param string $Image 图片base64数据
     * @param string $PersonId 身份ID
     * @param float $Similarity 相似度
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
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Similarity",$param) and $param["Similarity"] !== null) {
            $this->Similarity = $param["Similarity"];
        }
    }
}
