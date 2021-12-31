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
namespace TencentCloud\Apcas\V20201127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务列表对象
 *
 * @method integer getPageNumber() 获取查询分页页码
 * @method void setPageNumber(integer $PageNumber) 设置查询分页页码
 * @method integer getPageSize() 获取查询分页大小
 * @method void setPageSize(integer $PageSize) 设置查询分页大小
 * @method integer getTotalCount() 获取任务列表总记录数
 * @method void setTotalCount(integer $TotalCount) 设置任务列表总记录数
 * @method array getTaskList() 获取任务列表
 * @method void setTaskList(array $TaskList) 设置任务列表
 */
class TaskListData extends AbstractModel
{
    /**
     * @var integer 查询分页页码
     */
    public $PageNumber;

    /**
     * @var integer 查询分页大小
     */
    public $PageSize;

    /**
     * @var integer 任务列表总记录数
     */
    public $TotalCount;

    /**
     * @var array 任务列表
     */
    public $TaskList;

    /**
     * @param integer $PageNumber 查询分页页码
     * @param integer $PageSize 查询分页大小
     * @param integer $TotalCount 任务列表总记录数
     * @param array $TaskList 任务列表
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TaskList",$param) and $param["TaskList"] !== null) {
            $this->TaskList = [];
            foreach ($param["TaskList"] as $key => $value){
                $obj = new ListModel();
                $obj->deserialize($value);
                array_push($this->TaskList, $obj);
            }
        }
    }
}
