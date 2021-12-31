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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户实体
 *
 * @method integer getUserId() 获取用户id
 * @method void setUserId(integer $UserId) 设置用户id
 * @method string getName() 获取用户名称
 * @method void setName(string $Name) 设置用户名称
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取最后更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置最后更新时间
 */
class User extends AbstractModel
{
    /**
     * @var integer 用户id
     */
    public $UserId;

    /**
     * @var string 用户名称
     */
    public $Name;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 最后更新时间
     */
    public $UpdateTime;

    /**
     * @param integer $UserId 用户id
     * @param string $Name 用户名称
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 最后更新时间
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
