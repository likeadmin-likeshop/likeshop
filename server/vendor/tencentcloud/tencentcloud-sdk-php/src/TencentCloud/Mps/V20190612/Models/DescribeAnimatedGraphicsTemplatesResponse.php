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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAnimatedGraphicsTemplates返回参数结构体
 *
 * @method integer getTotalCount() 获取符合过滤条件的记录总数。
 * @method void setTotalCount(integer $TotalCount) 设置符合过滤条件的记录总数。
 * @method array getAnimatedGraphicsTemplateSet() 获取转动图模板详情列表。
 * @method void setAnimatedGraphicsTemplateSet(array $AnimatedGraphicsTemplateSet) 设置转动图模板详情列表。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAnimatedGraphicsTemplatesResponse extends AbstractModel
{
    /**
     * @var integer 符合过滤条件的记录总数。
     */
    public $TotalCount;

    /**
     * @var array 转动图模板详情列表。
     */
    public $AnimatedGraphicsTemplateSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 符合过滤条件的记录总数。
     * @param array $AnimatedGraphicsTemplateSet 转动图模板详情列表。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("AnimatedGraphicsTemplateSet",$param) and $param["AnimatedGraphicsTemplateSet"] !== null) {
            $this->AnimatedGraphicsTemplateSet = [];
            foreach ($param["AnimatedGraphicsTemplateSet"] as $key => $value){
                $obj = new AnimatedGraphicsTemplate();
                $obj->deserialize($value);
                array_push($this->AnimatedGraphicsTemplateSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
