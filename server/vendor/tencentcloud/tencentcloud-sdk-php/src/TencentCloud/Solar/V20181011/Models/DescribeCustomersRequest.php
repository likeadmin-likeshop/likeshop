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
namespace TencentCloud\Solar\V20181011\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomers请求参数结构体
 *
 * @method string getQueryType() 获取查询类型，0.个人，1负责部门，2.指定部门
 * @method void setQueryType(string $QueryType) 设置查询类型，0.个人，1负责部门，2.指定部门
 * @method string getGroupId() 获取分组ID
 * @method void setGroupId(string $GroupId) 设置分组ID
 * @method integer getMarkFlag() 获取是否星级标记 1是 0否
 * @method void setMarkFlag(integer $MarkFlag) 设置是否星级标记 1是 0否
 * @method string getTagIds() 获取客户标签，多个标签用逗号隔开
 * @method void setTagIds(string $TagIds) 设置客户标签，多个标签用逗号隔开
 * @method string getRelChannelFlag() 获取员工标识筛选，0：非员工，1：员工
 * @method void setRelChannelFlag(string $RelChannelFlag) 设置员工标识筛选，0：非员工，1：员工
 * @method integer getNeedPhoneFlag() 获取必须存在手机 1是 0否
 * @method void setNeedPhoneFlag(integer $NeedPhoneFlag) 设置必须存在手机 1是 0否
 * @method string getProvince() 获取省份
 * @method void setProvince(string $Province) 设置省份
 * @method string getCity() 获取城市
 * @method void setCity(string $City) 设置城市
 * @method string getSex() 获取性别 1男 2女
 * @method void setSex(string $Sex) 设置性别 1男 2女
 * @method string getKeyWord() 获取城市
 * @method void setKeyWord(string $KeyWord) 设置城市
 * @method integer getOffset() 获取查询开始位置
 * @method void setOffset(integer $Offset) 设置查询开始位置
 * @method integer getLimit() 获取每页记录条数
 * @method void setLimit(integer $Limit) 设置每页记录条数
 * @method string getSubProjectId() 获取子项目ID
 * @method void setSubProjectId(string $SubProjectId) 设置子项目ID
 */
class DescribeCustomersRequest extends AbstractModel
{
    /**
     * @var string 查询类型，0.个人，1负责部门，2.指定部门
     */
    public $QueryType;

    /**
     * @var string 分组ID
     */
    public $GroupId;

    /**
     * @var integer 是否星级标记 1是 0否
     */
    public $MarkFlag;

    /**
     * @var string 客户标签，多个标签用逗号隔开
     */
    public $TagIds;

    /**
     * @var string 员工标识筛选，0：非员工，1：员工
     */
    public $RelChannelFlag;

    /**
     * @var integer 必须存在手机 1是 0否
     */
    public $NeedPhoneFlag;

    /**
     * @var string 省份
     */
    public $Province;

    /**
     * @var string 城市
     */
    public $City;

    /**
     * @var string 性别 1男 2女
     */
    public $Sex;

    /**
     * @var string 城市
     */
    public $KeyWord;

    /**
     * @var integer 查询开始位置
     */
    public $Offset;

    /**
     * @var integer 每页记录条数
     */
    public $Limit;

    /**
     * @var string 子项目ID
     */
    public $SubProjectId;

    /**
     * @param string $QueryType 查询类型，0.个人，1负责部门，2.指定部门
     * @param string $GroupId 分组ID
     * @param integer $MarkFlag 是否星级标记 1是 0否
     * @param string $TagIds 客户标签，多个标签用逗号隔开
     * @param string $RelChannelFlag 员工标识筛选，0：非员工，1：员工
     * @param integer $NeedPhoneFlag 必须存在手机 1是 0否
     * @param string $Province 省份
     * @param string $City 城市
     * @param string $Sex 性别 1男 2女
     * @param string $KeyWord 城市
     * @param integer $Offset 查询开始位置
     * @param integer $Limit 每页记录条数
     * @param string $SubProjectId 子项目ID
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
        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("MarkFlag",$param) and $param["MarkFlag"] !== null) {
            $this->MarkFlag = $param["MarkFlag"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }

        if (array_key_exists("RelChannelFlag",$param) and $param["RelChannelFlag"] !== null) {
            $this->RelChannelFlag = $param["RelChannelFlag"];
        }

        if (array_key_exists("NeedPhoneFlag",$param) and $param["NeedPhoneFlag"] !== null) {
            $this->NeedPhoneFlag = $param["NeedPhoneFlag"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SubProjectId",$param) and $param["SubProjectId"] !== null) {
            $this->SubProjectId = $param["SubProjectId"];
        }
    }
}
