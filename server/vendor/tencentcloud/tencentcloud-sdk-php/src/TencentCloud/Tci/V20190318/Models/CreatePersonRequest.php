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
 * CreatePerson请求参数结构体
 *
 * @method string getLibraryId() 获取人员库唯一标识符
 * @method void setLibraryId(string $LibraryId) 设置人员库唯一标识符
 * @method string getPersonName() 获取人员名称
 * @method void setPersonName(string $PersonName) 设置人员名称
 * @method array getImages() 获取图片数据 base64 字符串，与 Urls 参数选择一个输入
 * @method void setImages(array $Images) 设置图片数据 base64 字符串，与 Urls 参数选择一个输入
 * @method string getJobNumber() 获取人员工作号码
 * @method void setJobNumber(string $JobNumber) 设置人员工作号码
 * @method string getMail() 获取人员邮箱
 * @method void setMail(string $Mail) 设置人员邮箱
 * @method integer getMale() 获取人员性别，0：未知 1：男性，2：女性
 * @method void setMale(integer $Male) 设置人员性别，0：未知 1：男性，2：女性
 * @method string getPersonId() 获取自定义人员 ID，注意不能使用 tci_person_ 前缀
 * @method void setPersonId(string $PersonId) 设置自定义人员 ID，注意不能使用 tci_person_ 前缀
 * @method string getPhoneNumber() 获取人员电话号码
 * @method void setPhoneNumber(string $PhoneNumber) 设置人员电话号码
 * @method string getStudentNumber() 获取人员学生号码
 * @method void setStudentNumber(string $StudentNumber) 设置人员学生号码
 * @method array getUrls() 获取图片下载地址，与 Images 参数选择一个输入
 * @method void setUrls(array $Urls) 设置图片下载地址，与 Images 参数选择一个输入
 */
class CreatePersonRequest extends AbstractModel
{
    /**
     * @var string 人员库唯一标识符
     */
    public $LibraryId;

    /**
     * @var string 人员名称
     */
    public $PersonName;

    /**
     * @var array 图片数据 base64 字符串，与 Urls 参数选择一个输入
     */
    public $Images;

    /**
     * @var string 人员工作号码
     */
    public $JobNumber;

    /**
     * @var string 人员邮箱
     */
    public $Mail;

    /**
     * @var integer 人员性别，0：未知 1：男性，2：女性
     */
    public $Male;

    /**
     * @var string 自定义人员 ID，注意不能使用 tci_person_ 前缀
     */
    public $PersonId;

    /**
     * @var string 人员电话号码
     */
    public $PhoneNumber;

    /**
     * @var string 人员学生号码
     */
    public $StudentNumber;

    /**
     * @var array 图片下载地址，与 Images 参数选择一个输入
     */
    public $Urls;

    /**
     * @param string $LibraryId 人员库唯一标识符
     * @param string $PersonName 人员名称
     * @param array $Images 图片数据 base64 字符串，与 Urls 参数选择一个输入
     * @param string $JobNumber 人员工作号码
     * @param string $Mail 人员邮箱
     * @param integer $Male 人员性别，0：未知 1：男性，2：女性
     * @param string $PersonId 自定义人员 ID，注意不能使用 tci_person_ 前缀
     * @param string $PhoneNumber 人员电话号码
     * @param string $StudentNumber 人员学生号码
     * @param array $Urls 图片下载地址，与 Images 参数选择一个输入
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

        if (array_key_exists("PersonName",$param) and $param["PersonName"] !== null) {
            $this->PersonName = $param["PersonName"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
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

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("StudentNumber",$param) and $param["StudentNumber"] !== null) {
            $this->StudentNumber = $param["StudentNumber"];
        }

        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }
    }
}
