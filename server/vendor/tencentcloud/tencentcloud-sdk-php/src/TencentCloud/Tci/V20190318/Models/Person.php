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
 * 人员描述
 *
 * @method string getLibraryId() 获取人员库唯一标识符
 * @method void setLibraryId(string $LibraryId) 设置人员库唯一标识符
 * @method string getPersonId() 获取人员唯一标识符
 * @method void setPersonId(string $PersonId) 设置人员唯一标识符
 * @method string getPersonName() 获取人员名称
 * @method void setPersonName(string $PersonName) 设置人员名称
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getJobNumber() 获取工作号码
 * @method void setJobNumber(string $JobNumber) 设置工作号码
 * @method string getMail() 获取邮箱
 * @method void setMail(string $Mail) 设置邮箱
 * @method integer getMale() 获取性别
 * @method void setMale(integer $Male) 设置性别
 * @method string getPhoneNumber() 获取电话号码
 * @method void setPhoneNumber(string $PhoneNumber) 设置电话号码
 * @method string getStudentNumber() 获取学生号码
 * @method void setStudentNumber(string $StudentNumber) 设置学生号码
 * @method string getUpdateTime() 获取修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
 */
class Person extends AbstractModel
{
    /**
     * @var string 人员库唯一标识符
     */
    public $LibraryId;

    /**
     * @var string 人员唯一标识符
     */
    public $PersonId;

    /**
     * @var string 人员名称
     */
    public $PersonName;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 工作号码
     */
    public $JobNumber;

    /**
     * @var string 邮箱
     */
    public $Mail;

    /**
     * @var integer 性别
     */
    public $Male;

    /**
     * @var string 电话号码
     */
    public $PhoneNumber;

    /**
     * @var string 学生号码
     */
    public $StudentNumber;

    /**
     * @var string 修改时间
     */
    public $UpdateTime;

    /**
     * @param string $LibraryId 人员库唯一标识符
     * @param string $PersonId 人员唯一标识符
     * @param string $PersonName 人员名称
     * @param string $CreateTime 创建时间
     * @param string $JobNumber 工作号码
     * @param string $Mail 邮箱
     * @param integer $Male 性别
     * @param string $PhoneNumber 电话号码
     * @param string $StudentNumber 学生号码
     * @param string $UpdateTime 修改时间
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
        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("PersonName",$param) and $param["PersonName"] !== null) {
            $this->PersonName = $param["PersonName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("JobNumber",$param) and $param["JobNumber"] !== null) {
            $this->JobNumber = $param["JobNumber"];
        }

        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("Male",$param) and $param["Male"] !== null) {
            $this->Male = $param["Male"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("StudentNumber",$param) and $param["StudentNumber"] !== null) {
            $this->StudentNumber = $param["StudentNumber"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
