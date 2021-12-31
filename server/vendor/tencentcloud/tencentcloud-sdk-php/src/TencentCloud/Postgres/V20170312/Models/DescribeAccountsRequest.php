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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccounts请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID，形如postgres-6fego161
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID，形如postgres-6fego161
 * @method integer getLimit() 获取分页返回，每页最大返回数目，默认20，取值范围为1-100
 * @method void setLimit(integer $Limit) 设置分页返回，每页最大返回数目，默认20，取值范围为1-100
 * @method integer getOffset() 获取分页返回，返回第几页的用户数据。页码从0开始计数
 * @method void setOffset(integer $Offset) 设置分页返回，返回第几页的用户数据。页码从0开始计数
 * @method string getOrderBy() 获取返回数据按照创建时间或者用户名排序。取值只能为createTime或者name。createTime-按照创建时间排序；name-按照用户名排序
 * @method void setOrderBy(string $OrderBy) 设置返回数据按照创建时间或者用户名排序。取值只能为createTime或者name。createTime-按照创建时间排序；name-按照用户名排序
 * @method string getOrderByType() 获取返回结果是升序还是降序。取值只能为desc或者asc。desc-降序；asc-升序
 * @method void setOrderByType(string $OrderByType) 设置返回结果是升序还是降序。取值只能为desc或者asc。desc-降序；asc-升序
 */
class DescribeAccountsRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如postgres-6fego161
     */
    public $DBInstanceId;

    /**
     * @var integer 分页返回，每页最大返回数目，默认20，取值范围为1-100
     */
    public $Limit;

    /**
     * @var integer 分页返回，返回第几页的用户数据。页码从0开始计数
     */
    public $Offset;

    /**
     * @var string 返回数据按照创建时间或者用户名排序。取值只能为createTime或者name。createTime-按照创建时间排序；name-按照用户名排序
     */
    public $OrderBy;

    /**
     * @var string 返回结果是升序还是降序。取值只能为desc或者asc。desc-降序；asc-升序
     */
    public $OrderByType;

    /**
     * @param string $DBInstanceId 实例ID，形如postgres-6fego161
     * @param integer $Limit 分页返回，每页最大返回数目，默认20，取值范围为1-100
     * @param integer $Offset 分页返回，返回第几页的用户数据。页码从0开始计数
     * @param string $OrderBy 返回数据按照创建时间或者用户名排序。取值只能为createTime或者name。createTime-按照创建时间排序；name-按照用户名排序
     * @param string $OrderByType 返回结果是升序还是降序。取值只能为desc或者asc。desc-降序；asc-升序
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
