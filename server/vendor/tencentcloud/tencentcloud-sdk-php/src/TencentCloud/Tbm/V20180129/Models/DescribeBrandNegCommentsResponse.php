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
 * DescribeBrandNegComments返回参数结构体
 *
 * @method array getBrandCommentSet() 获取评论列表
 * @method void setBrandCommentSet(array $BrandCommentSet) 设置评论列表
 * @method integer getTotalComments() 获取总的差评个数
 * @method void setTotalComments(integer $TotalComments) 设置总的差评个数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBrandNegCommentsResponse extends AbstractModel
{
    /**
     * @var array 评论列表
     */
    public $BrandCommentSet;

    /**
     * @var integer 总的差评个数
     */
    public $TotalComments;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $BrandCommentSet 评论列表
     * @param integer $TotalComments 总的差评个数
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
        if (array_key_exists("BrandCommentSet",$param) and $param["BrandCommentSet"] !== null) {
            $this->BrandCommentSet = [];
            foreach ($param["BrandCommentSet"] as $key => $value){
                $obj = new CommentInfo();
                $obj->deserialize($value);
                array_push($this->BrandCommentSet, $obj);
            }
        }

        if (array_key_exists("TotalComments",$param) and $param["TotalComments"] !== null) {
            $this->TotalComments = $param["TotalComments"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
