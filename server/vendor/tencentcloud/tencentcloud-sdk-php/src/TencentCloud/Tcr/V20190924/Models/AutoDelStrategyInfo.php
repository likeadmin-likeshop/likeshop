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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自动删除策略信息
 *
 * @method string getUsername() 获取用户名
 * @method void setUsername(string $Username) 设置用户名
 * @method string getRepoName() 获取仓库名
 * @method void setRepoName(string $RepoName) 设置仓库名
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method integer getValue() 获取策略值
 * @method void setValue(integer $Value) 设置策略值
 * @method integer getValid() 获取Valid
 * @method void setValid(integer $Valid) 设置Valid
 * @method string getCreationTime() 获取创建时间
 * @method void setCreationTime(string $CreationTime) 设置创建时间
 */
class AutoDelStrategyInfo extends AbstractModel
{
    /**
     * @var string 用户名
     */
    public $Username;

    /**
     * @var string 仓库名
     */
    public $RepoName;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var integer 策略值
     */
    public $Value;

    /**
     * @var integer Valid
     */
    public $Valid;

    /**
     * @var string 创建时间
     */
    public $CreationTime;

    /**
     * @param string $Username 用户名
     * @param string $RepoName 仓库名
     * @param string $Type 类型
     * @param integer $Value 策略值
     * @param integer $Valid Valid
     * @param string $CreationTime 创建时间
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
        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Valid",$param) and $param["Valid"] !== null) {
            $this->Valid = $param["Valid"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }
    }
}
