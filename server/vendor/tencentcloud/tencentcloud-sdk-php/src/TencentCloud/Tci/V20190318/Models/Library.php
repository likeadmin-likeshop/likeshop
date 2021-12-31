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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人员库描述
 *
 * @method string getCreateTime() 获取人员库创建时间
 * @method void setCreateTime(string $CreateTime) 设置人员库创建时间
 * @method string getLibraryId() 获取人员库唯一标识符
 * @method void setLibraryId(string $LibraryId) 设置人员库唯一标识符
 * @method string getLibraryName() 获取人员库名称
 * @method void setLibraryName(string $LibraryName) 设置人员库名称
 * @method integer getPersonCount() 获取人员库人员数量
 * @method void setPersonCount(integer $PersonCount) 设置人员库人员数量
 * @method string getUpdateTime() 获取人员库修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置人员库修改时间
 */
class Library extends AbstractModel
{
    /**
     * @var string 人员库创建时间
     */
    public $CreateTime;

    /**
     * @var string 人员库唯一标识符
     */
    public $LibraryId;

    /**
     * @var string 人员库名称
     */
    public $LibraryName;

    /**
     * @var integer 人员库人员数量
     */
    public $PersonCount;

    /**
     * @var string 人员库修改时间
     */
    public $UpdateTime;

    /**
     * @param string $CreateTime 人员库创建时间
     * @param string $LibraryId 人员库唯一标识符
     * @param string $LibraryName 人员库名称
     * @param integer $PersonCount 人员库人员数量
     * @param string $UpdateTime 人员库修改时间
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
        }

        if (array_key_exists("LibraryName",$param) and $param["LibraryName"] !== null) {
            $this->LibraryName = $param["LibraryName"];
        }

        if (array_key_exists("PersonCount",$param) and $param["PersonCount"] !== null) {
            $this->PersonCount = $param["PersonCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
