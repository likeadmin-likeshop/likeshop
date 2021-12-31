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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListBlackEmailAddress请求参数结构体
 *
 * @method string getStartDate() 获取开始日期，格式为YYYY-MM-DD
 * @method void setStartDate(string $StartDate) 设置开始日期，格式为YYYY-MM-DD
 * @method string getEndDate() 获取结束日期，格式为YYYY-MM-DD
 * @method void setEndDate(string $EndDate) 设置结束日期，格式为YYYY-MM-DD
 * @method integer getLimit() 获取规范，配合Offset使用
 * @method void setLimit(integer $Limit) 设置规范，配合Offset使用
 * @method integer getOffset() 获取规范，配合Limit使用，Limit最大取值为100
 * @method void setOffset(integer $Offset) 设置规范，配合Limit使用，Limit最大取值为100
 * @method string getEmailAddress() 获取可以指定邮箱进行查询
 * @method void setEmailAddress(string $EmailAddress) 设置可以指定邮箱进行查询
 * @method string getTaskID() 获取可以指定任务ID进行查询
 * @method void setTaskID(string $TaskID) 设置可以指定任务ID进行查询
 */
class ListBlackEmailAddressRequest extends AbstractModel
{
    /**
     * @var string 开始日期，格式为YYYY-MM-DD
     */
    public $StartDate;

    /**
     * @var string 结束日期，格式为YYYY-MM-DD
     */
    public $EndDate;

    /**
     * @var integer 规范，配合Offset使用
     */
    public $Limit;

    /**
     * @var integer 规范，配合Limit使用，Limit最大取值为100
     */
    public $Offset;

    /**
     * @var string 可以指定邮箱进行查询
     */
    public $EmailAddress;

    /**
     * @var string 可以指定任务ID进行查询
     */
    public $TaskID;

    /**
     * @param string $StartDate 开始日期，格式为YYYY-MM-DD
     * @param string $EndDate 结束日期，格式为YYYY-MM-DD
     * @param integer $Limit 规范，配合Offset使用
     * @param integer $Offset 规范，配合Limit使用，Limit最大取值为100
     * @param string $EmailAddress 可以指定邮箱进行查询
     * @param string $TaskID 可以指定任务ID进行查询
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
        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }

        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }
    }
}
