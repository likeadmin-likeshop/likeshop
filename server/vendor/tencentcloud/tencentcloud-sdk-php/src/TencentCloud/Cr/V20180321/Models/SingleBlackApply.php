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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 黑名单申请信息
 *
 * @method string getBlackType() 获取黑名单类型，01代表手机号码。
 * @method void setBlackType(string $BlackType) 设置黑名单类型，01代表手机号码。
 * @method string getOperationType() 获取操作类型，A为新增，D为删除。
 * @method void setOperationType(string $OperationType) 设置操作类型，A为新增，D为删除。
 * @method string getBlackValue() 获取黑名单值，BlackType为01时，填写11位手机号码。
 * @method void setBlackValue(string $BlackValue) 设置黑名单值，BlackType为01时，填写11位手机号码。
 * @method string getBlackDescription() 获取备注。
 * @method void setBlackDescription(string $BlackDescription) 设置备注。
 * @method string getBlackValidDate() 获取黑名单生效截止日期，格式为YYYY-MM-DD，不填默认为永久。
 * @method void setBlackValidDate(string $BlackValidDate) 设置黑名单生效截止日期，格式为YYYY-MM-DD，不填默认为永久。
 */
class SingleBlackApply extends AbstractModel
{
    /**
     * @var string 黑名单类型，01代表手机号码。
     */
    public $BlackType;

    /**
     * @var string 操作类型，A为新增，D为删除。
     */
    public $OperationType;

    /**
     * @var string 黑名单值，BlackType为01时，填写11位手机号码。
     */
    public $BlackValue;

    /**
     * @var string 备注。
     */
    public $BlackDescription;

    /**
     * @var string 黑名单生效截止日期，格式为YYYY-MM-DD，不填默认为永久。
     */
    public $BlackValidDate;

    /**
     * @param string $BlackType 黑名单类型，01代表手机号码。
     * @param string $OperationType 操作类型，A为新增，D为删除。
     * @param string $BlackValue 黑名单值，BlackType为01时，填写11位手机号码。
     * @param string $BlackDescription 备注。
     * @param string $BlackValidDate 黑名单生效截止日期，格式为YYYY-MM-DD，不填默认为永久。
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
        if (array_key_exists("BlackType",$param) and $param["BlackType"] !== null) {
            $this->BlackType = $param["BlackType"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("BlackValue",$param) and $param["BlackValue"] !== null) {
            $this->BlackValue = $param["BlackValue"];
        }

        if (array_key_exists("BlackDescription",$param) and $param["BlackDescription"] !== null) {
            $this->BlackDescription = $param["BlackDescription"];
        }

        if (array_key_exists("BlackValidDate",$param) and $param["BlackValidDate"] !== null) {
            $this->BlackValidDate = $param["BlackValidDate"];
        }
    }
}
