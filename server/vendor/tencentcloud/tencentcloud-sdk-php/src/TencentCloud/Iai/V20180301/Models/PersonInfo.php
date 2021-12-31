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
namespace TencentCloud\Iai\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回的人员信息
 *
 * @method string getPersonName() 获取人员名称
 * @method void setPersonName(string $PersonName) 设置人员名称
 * @method string getPersonId() 获取人员Id
 * @method void setPersonId(string $PersonId) 设置人员Id
 * @method integer getGender() 获取人员性别
 * @method void setGender(integer $Gender) 设置人员性别
 * @method array getPersonExDescriptions() 获取人员描述字段内容
 * @method void setPersonExDescriptions(array $PersonExDescriptions) 设置人员描述字段内容
 * @method array getFaceIds() 获取包含的人脸照片列表
 * @method void setFaceIds(array $FaceIds) 设置包含的人脸照片列表
 * @method integer getCreationTimestamp() 获取人员的创建时间和日期 CreationTimestamp。CreationTimestamp 的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。有关更多信息，请参阅 Unix 时间。
 * @method void setCreationTimestamp(integer $CreationTimestamp) 设置人员的创建时间和日期 CreationTimestamp。CreationTimestamp 的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。有关更多信息，请参阅 Unix 时间。
 */
class PersonInfo extends AbstractModel
{
    /**
     * @var string 人员名称
     */
    public $PersonName;

    /**
     * @var string 人员Id
     */
    public $PersonId;

    /**
     * @var integer 人员性别
     */
    public $Gender;

    /**
     * @var array 人员描述字段内容
     */
    public $PersonExDescriptions;

    /**
     * @var array 包含的人脸照片列表
     */
    public $FaceIds;

    /**
     * @var integer 人员的创建时间和日期 CreationTimestamp。CreationTimestamp 的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。有关更多信息，请参阅 Unix 时间。
     */
    public $CreationTimestamp;

    /**
     * @param string $PersonName 人员名称
     * @param string $PersonId 人员Id
     * @param integer $Gender 人员性别
     * @param array $PersonExDescriptions 人员描述字段内容
     * @param array $FaceIds 包含的人脸照片列表
     * @param integer $CreationTimestamp 人员的创建时间和日期 CreationTimestamp。CreationTimestamp 的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。有关更多信息，请参阅 Unix 时间。
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
        if (array_key_exists("PersonName",$param) and $param["PersonName"] !== null) {
            $this->PersonName = $param["PersonName"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("PersonExDescriptions",$param) and $param["PersonExDescriptions"] !== null) {
            $this->PersonExDescriptions = $param["PersonExDescriptions"];
        }

        if (array_key_exists("FaceIds",$param) and $param["FaceIds"] !== null) {
            $this->FaceIds = $param["FaceIds"];
        }

        if (array_key_exists("CreationTimestamp",$param) and $param["CreationTimestamp"] !== null) {
            $this->CreationTimestamp = $param["CreationTimestamp"];
        }
    }
}
