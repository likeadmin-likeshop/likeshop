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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户信息
 *
 * @method integer getPersonId() 获取用户ID
 * @method void setPersonId(integer $PersonId) 设置用户ID
 * @method string getPersonPicture() 获取人脸图片Base64内容，已弃用，返回默认空值
 * @method void setPersonPicture(string $PersonPicture) 设置人脸图片Base64内容，已弃用，返回默认空值
 * @method integer getGender() 获取性别：0男1女
 * @method void setGender(integer $Gender) 设置性别：0男1女
 * @method integer getAge() 获取年龄
 * @method void setAge(integer $Age) 设置年龄
 * @method integer getPersonType() 获取身份类型（0表示普通顾客，1 白名单，2 表示黑名单）
 * @method void setPersonType(integer $PersonType) 设置身份类型（0表示普通顾客，1 白名单，2 表示黑名单）
 * @method string getPersonPictureUrl() 获取人脸图片Url，在有效期内可以访问下载
 * @method void setPersonPictureUrl(string $PersonPictureUrl) 设置人脸图片Url，在有效期内可以访问下载
 * @method integer getPersonSubType() 获取身份子类型:
PersonType=0时(普通顾客)，0普通顾客
PersonType=1时(白名单)，0店员，1商场人员，2其他类型人员，3区域经理，4注册用户，5VIP用户
PersonType=2时(黑名单)，0普通黑名单，1小偷)
 * @method void setPersonSubType(integer $PersonSubType) 设置身份子类型:
PersonType=0时(普通顾客)，0普通顾客
PersonType=1时(白名单)，0店员，1商场人员，2其他类型人员，3区域经理，4注册用户，5VIP用户
PersonType=2时(黑名单)，0普通黑名单，1小偷)
 * @method integer getVisitTimes() 获取到访次数，-1表示未知
 * @method void setVisitTimes(integer $VisitTimes) 设置到访次数，-1表示未知
 * @method integer getVisitDays() 获取到访天数，-1表示未知
 * @method void setVisitDays(integer $VisitDays) 设置到访天数，-1表示未知
 */
class PersonInfo extends AbstractModel
{
    /**
     * @var integer 用户ID
     */
    public $PersonId;

    /**
     * @var string 人脸图片Base64内容，已弃用，返回默认空值
     */
    public $PersonPicture;

    /**
     * @var integer 性别：0男1女
     */
    public $Gender;

    /**
     * @var integer 年龄
     */
    public $Age;

    /**
     * @var integer 身份类型（0表示普通顾客，1 白名单，2 表示黑名单）
     */
    public $PersonType;

    /**
     * @var string 人脸图片Url，在有效期内可以访问下载
     */
    public $PersonPictureUrl;

    /**
     * @var integer 身份子类型:
PersonType=0时(普通顾客)，0普通顾客
PersonType=1时(白名单)，0店员，1商场人员，2其他类型人员，3区域经理，4注册用户，5VIP用户
PersonType=2时(黑名单)，0普通黑名单，1小偷)
     */
    public $PersonSubType;

    /**
     * @var integer 到访次数，-1表示未知
     */
    public $VisitTimes;

    /**
     * @var integer 到访天数，-1表示未知
     */
    public $VisitDays;

    /**
     * @param integer $PersonId 用户ID
     * @param string $PersonPicture 人脸图片Base64内容，已弃用，返回默认空值
     * @param integer $Gender 性别：0男1女
     * @param integer $Age 年龄
     * @param integer $PersonType 身份类型（0表示普通顾客，1 白名单，2 表示黑名单）
     * @param string $PersonPictureUrl 人脸图片Url，在有效期内可以访问下载
     * @param integer $PersonSubType 身份子类型:
PersonType=0时(普通顾客)，0普通顾客
PersonType=1时(白名单)，0店员，1商场人员，2其他类型人员，3区域经理，4注册用户，5VIP用户
PersonType=2时(黑名单)，0普通黑名单，1小偷)
     * @param integer $VisitTimes 到访次数，-1表示未知
     * @param integer $VisitDays 到访天数，-1表示未知
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("PersonPicture",$param) and $param["PersonPicture"] !== null) {
            $this->PersonPicture = $param["PersonPicture"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("PersonType",$param) and $param["PersonType"] !== null) {
            $this->PersonType = $param["PersonType"];
        }

        if (array_key_exists("PersonPictureUrl",$param) and $param["PersonPictureUrl"] !== null) {
            $this->PersonPictureUrl = $param["PersonPictureUrl"];
        }

        if (array_key_exists("PersonSubType",$param) and $param["PersonSubType"] !== null) {
            $this->PersonSubType = $param["PersonSubType"];
        }

        if (array_key_exists("VisitTimes",$param) and $param["VisitTimes"] !== null) {
            $this->VisitTimes = $param["VisitTimes"];
        }

        if (array_key_exists("VisitDays",$param) and $param["VisitDays"] !== null) {
            $this->VisitDays = $param["VisitDays"];
        }
    }
}
