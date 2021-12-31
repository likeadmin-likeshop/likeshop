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
 * DescribeIndustryNews返回参数结构体
 *
 * @method integer getNewsCount() 获取总计文章数量
 * @method void setNewsCount(integer $NewsCount) 设置总计文章数量
 * @method integer getFromCount() 获取总计来源数量
 * @method void setFromCount(integer $FromCount) 设置总计来源数量
 * @method integer getAdverseCount() 获取总计疑似负面数量
 * @method void setAdverseCount(integer $AdverseCount) 设置总计疑似负面数量
 * @method array getNewsSet() 获取文章列表
 * @method void setNewsSet(array $NewsSet) 设置文章列表
 * @method array getDateCountSet() 获取按天统计的数量列表
 * @method void setDateCountSet(array $DateCountSet) 设置按天统计的数量列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIndustryNewsResponse extends AbstractModel
{
    /**
     * @var integer 总计文章数量
     */
    public $NewsCount;

    /**
     * @var integer 总计来源数量
     */
    public $FromCount;

    /**
     * @var integer 总计疑似负面数量
     */
    public $AdverseCount;

    /**
     * @var array 文章列表
     */
    public $NewsSet;

    /**
     * @var array 按天统计的数量列表
     */
    public $DateCountSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $NewsCount 总计文章数量
     * @param integer $FromCount 总计来源数量
     * @param integer $AdverseCount 总计疑似负面数量
     * @param array $NewsSet 文章列表
     * @param array $DateCountSet 按天统计的数量列表
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
        if (array_key_exists("NewsCount",$param) and $param["NewsCount"] !== null) {
            $this->NewsCount = $param["NewsCount"];
        }

        if (array_key_exists("FromCount",$param) and $param["FromCount"] !== null) {
            $this->FromCount = $param["FromCount"];
        }

        if (array_key_exists("AdverseCount",$param) and $param["AdverseCount"] !== null) {
            $this->AdverseCount = $param["AdverseCount"];
        }

        if (array_key_exists("NewsSet",$param) and $param["NewsSet"] !== null) {
            $this->NewsSet = [];
            foreach ($param["NewsSet"] as $key => $value){
                $obj = new IndustryNews();
                $obj->deserialize($value);
                array_push($this->NewsSet, $obj);
            }
        }

        if (array_key_exists("DateCountSet",$param) and $param["DateCountSet"] !== null) {
            $this->DateCountSet = [];
            foreach ($param["DateCountSet"] as $key => $value){
                $obj = new DateCount();
                $obj->deserialize($value);
                array_push($this->DateCountSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
