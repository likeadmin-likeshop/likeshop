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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本pod列表
 *
 * @method integer getOffset() 获取分页下标
 * @method void setOffset(integer $Offset) 设置分页下标
 * @method integer getLimit() 获取单页条数
 * @method void setLimit(integer $Limit) 设置单页条数
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method string getRequestId() 获取请求id
 * @method void setRequestId(string $RequestId) 设置请求id
 * @method array getPodList() 获取条目
 * @method void setPodList(array $PodList) 设置条目
 */
class DescribeRunPodPage extends AbstractModel
{
    /**
     * @var integer 分页下标
     */
    public $Offset;

    /**
     * @var integer 单页条数
     */
    public $Limit;

    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var string 请求id
     */
    public $RequestId;

    /**
     * @var array 条目
     */
    public $PodList;

    /**
     * @param integer $Offset 分页下标
     * @param integer $Limit 单页条数
     * @param integer $TotalCount 总数
     * @param string $RequestId 请求id
     * @param array $PodList 条目
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("PodList",$param) and $param["PodList"] !== null) {
            $this->PodList = [];
            foreach ($param["PodList"] as $key => $value){
                $obj = new RunVersionPod();
                $obj->deserialize($value);
                array_push($this->PodList, $obj);
            }
        }
    }
}
