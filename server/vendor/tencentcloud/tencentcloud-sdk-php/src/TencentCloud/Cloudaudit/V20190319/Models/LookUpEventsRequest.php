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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LookUpEvents请求参数结构体
 *
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method array getLookupAttributes() 获取检索条件
 * @method void setLookupAttributes(array $LookupAttributes) 设置检索条件
 * @method string getNextToken() 获取查看更多日志的凭证
 * @method void setNextToken(string $NextToken) 设置查看更多日志的凭证
 * @method integer getMaxResults() 获取返回日志的最大条数
 * @method void setMaxResults(integer $MaxResults) 设置返回日志的最大条数
 * @method string getMode() 获取云审计模式，有效值：standard | quick，其中standard是标准模式，quick是极速模式。默认为标准模式
 * @method void setMode(string $Mode) 设置云审计模式，有效值：standard | quick，其中standard是标准模式，quick是极速模式。默认为标准模式
 */
class LookUpEventsRequest extends AbstractModel
{
    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var array 检索条件
     */
    public $LookupAttributes;

    /**
     * @var string 查看更多日志的凭证
     */
    public $NextToken;

    /**
     * @var integer 返回日志的最大条数
     */
    public $MaxResults;

    /**
     * @var string 云审计模式，有效值：standard | quick，其中standard是标准模式，quick是极速模式。默认为标准模式
     */
    public $Mode;

    /**
     * @param integer $StartTime 开始时间
     * @param integer $EndTime 结束时间
     * @param array $LookupAttributes 检索条件
     * @param string $NextToken 查看更多日志的凭证
     * @param integer $MaxResults 返回日志的最大条数
     * @param string $Mode 云审计模式，有效值：standard | quick，其中standard是标准模式，quick是极速模式。默认为标准模式
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LookupAttributes",$param) and $param["LookupAttributes"] !== null) {
            $this->LookupAttributes = [];
            foreach ($param["LookupAttributes"] as $key => $value){
                $obj = new LookupAttribute();
                $obj->deserialize($value);
                array_push($this->LookupAttributes, $obj);
            }
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
