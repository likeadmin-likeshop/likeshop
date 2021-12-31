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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopic请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID
 * @method void setInstanceId(string $InstanceId) 设置实例 ID
 * @method string getSearchWord() 获取过滤条件，按照 topicName 过滤，支持模糊查询
 * @method void setSearchWord(string $SearchWord) 设置过滤条件，按照 topicName 过滤，支持模糊查询
 * @method integer getOffset() 获取偏移量，不填默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，不填默认为0
 * @method integer getLimit() 获取返回数量，不填则默认为10，最大值为50
 * @method void setLimit(integer $Limit) 设置返回数量，不填则默认为10，最大值为50
 */
class DescribeTopicRequest extends AbstractModel
{
    /**
     * @var string 实例 ID
     */
    public $InstanceId;

    /**
     * @var string 过滤条件，按照 topicName 过滤，支持模糊查询
     */
    public $SearchWord;

    /**
     * @var integer 偏移量，不填默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，不填则默认为10，最大值为50
     */
    public $Limit;

    /**
     * @param string $InstanceId 实例 ID
     * @param string $SearchWord 过滤条件，按照 topicName 过滤，支持模糊查询
     * @param integer $Offset 偏移量，不填默认为0
     * @param integer $Limit 返回数量，不填则默认为10，最大值为50
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
