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
namespace TencentCloud\Tbm\V20180129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBrandSocialOpinion返回参数结构体
 *
 * @method integer getArticleCount() 获取文章总数
 * @method void setArticleCount(integer $ArticleCount) 设置文章总数
 * @method integer getFromCount() 获取来源统计总数
 * @method void setFromCount(integer $FromCount) 设置来源统计总数
 * @method integer getAdverseCount() 获取疑似负面报道总数
 * @method void setAdverseCount(integer $AdverseCount) 设置疑似负面报道总数
 * @method array getArticleSet() 获取文章列表详情
 * @method void setArticleSet(array $ArticleSet) 设置文章列表详情
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBrandSocialOpinionResponse extends AbstractModel
{
    /**
     * @var integer 文章总数
     */
    public $ArticleCount;

    /**
     * @var integer 来源统计总数
     */
    public $FromCount;

    /**
     * @var integer 疑似负面报道总数
     */
    public $AdverseCount;

    /**
     * @var array 文章列表详情
     */
    public $ArticleSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ArticleCount 文章总数
     * @param integer $FromCount 来源统计总数
     * @param integer $AdverseCount 疑似负面报道总数
     * @param array $ArticleSet 文章列表详情
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ArticleCount",$param) and $param["ArticleCount"] !== null) {
            $this->ArticleCount = $param["ArticleCount"];
        }

        if (array_key_exists("FromCount",$param) and $param["FromCount"] !== null) {
            $this->FromCount = $param["FromCount"];
        }

        if (array_key_exists("AdverseCount",$param) and $param["AdverseCount"] !== null) {
            $this->AdverseCount = $param["AdverseCount"];
        }

        if (array_key_exists("ArticleSet",$param) and $param["ArticleSet"] !== null) {
            $this->ArticleSet = [];
            foreach ($param["ArticleSet"] as $key => $value){
                $obj = new BrandReportArticle();
                $obj->deserialize($value);
                array_push($this->ArticleSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
