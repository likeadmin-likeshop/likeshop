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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拨测分组
 *
 * @method integer getGroupId() 获取拨测分组ID
 * @method void setGroupId(integer $GroupId) 设置拨测分组ID
 * @method string getGroupName() 获取拨测分组名称
 * @method void setGroupName(string $GroupName) 设置拨测分组名称
 * @method integer getIsDefault() 获取是否默认拨测分组。1表示是，0表示否
 * @method void setIsDefault(integer $IsDefault) 设置是否默认拨测分组。1表示是，0表示否
 * @method integer getTaskNum() 获取使用本拨测分组的任务数
 * @method void setTaskNum(integer $TaskNum) 设置使用本拨测分组的任务数
 * @method array getGroupDetail() 获取拨测结点列表
 * @method void setGroupDetail(array $GroupDetail) 设置拨测结点列表
 * @method integer getMaxGroupNum() 获取最大拨测分组数
 * @method void setMaxGroupNum(integer $MaxGroupNum) 设置最大拨测分组数
 */
class AgentGroup extends AbstractModel
{
    /**
     * @var integer 拨测分组ID
     */
    public $GroupId;

    /**
     * @var string 拨测分组名称
     */
    public $GroupName;

    /**
     * @var integer 是否默认拨测分组。1表示是，0表示否
     */
    public $IsDefault;

    /**
     * @var integer 使用本拨测分组的任务数
     */
    public $TaskNum;

    /**
     * @var array 拨测结点列表
     */
    public $GroupDetail;

    /**
     * @var integer 最大拨测分组数
     */
    public $MaxGroupNum;

    /**
     * @param integer $GroupId 拨测分组ID
     * @param string $GroupName 拨测分组名称
     * @param integer $IsDefault 是否默认拨测分组。1表示是，0表示否
     * @param integer $TaskNum 使用本拨测分组的任务数
     * @param array $GroupDetail 拨测结点列表
     * @param integer $MaxGroupNum 最大拨测分组数
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("TaskNum",$param) and $param["TaskNum"] !== null) {
            $this->TaskNum = $param["TaskNum"];
        }

        if (array_key_exists("GroupDetail",$param) and $param["GroupDetail"] !== null) {
            $this->GroupDetail = [];
            foreach ($param["GroupDetail"] as $key => $value){
                $obj = new CatAgent();
                $obj->deserialize($value);
                array_push($this->GroupDetail, $obj);
            }
        }

        if (array_key_exists("MaxGroupNum",$param) and $param["MaxGroupNum"] !== null) {
            $this->MaxGroupNum = $param["MaxGroupNum"];
        }
    }
}
