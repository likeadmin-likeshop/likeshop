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
 * 来访客人基本资料
 *
 * @method string getPersonId() 获取客人编码
 * @method void setPersonId(string $PersonId) 设置客人编码
 * @method integer getGender() 获取性别
 * @method void setGender(integer $Gender) 设置性别
 * @method integer getAge() 获取年龄
 * @method void setAge(integer $Age) 设置年龄
 * @method string getFirstArrivedTime() 获取首次到场时间
 * @method void setFirstArrivedTime(string $FirstArrivedTime) 设置首次到场时间
 * @method integer getArrivedCount() 获取来访次数
 * @method void setArrivedCount(integer $ArrivedCount) 设置来访次数
 * @method string getPicUrl() 获取客户图片
 * @method void setPicUrl(string $PicUrl) 设置客户图片
 * @method float getSimilarity() 获取置信度
 * @method void setSimilarity(float $Similarity) 设置置信度
 */
class PersonProfile extends AbstractModel
{
    /**
     * @var string 客人编码
     */
    public $PersonId;

    /**
     * @var integer 性别
     */
    public $Gender;

    /**
     * @var integer 年龄
     */
    public $Age;

    /**
     * @var string 首次到场时间
     */
    public $FirstArrivedTime;

    /**
     * @var integer 来访次数
     */
    public $ArrivedCount;

    /**
     * @var string 客户图片
     */
    public $PicUrl;

    /**
     * @var float 置信度
     */
    public $Similarity;

    /**
     * @param string $PersonId 客人编码
     * @param integer $Gender 性别
     * @param integer $Age 年龄
     * @param string $FirstArrivedTime 首次到场时间
     * @param integer $ArrivedCount 来访次数
     * @param string $PicUrl 客户图片
     * @param float $Similarity 置信度
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

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("FirstArrivedTime",$param) and $param["FirstArrivedTime"] !== null) {
            $this->FirstArrivedTime = $param["FirstArrivedTime"];
        }

        if (array_key_exists("ArrivedCount",$param) and $param["ArrivedCount"] !== null) {
            $this->ArrivedCount = $param["ArrivedCount"];
        }

        if (array_key_exists("PicUrl",$param) and $param["PicUrl"] !== null) {
            $this->PicUrl = $param["PicUrl"];
        }

        if (array_key_exists("Similarity",$param) and $param["Similarity"] !== null) {
            $this->Similarity = $param["Similarity"];
        }
    }
}
