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
 * CreateImageLifecyclePersonal请求参数结构体
 *
 * @method string getRepoName() 获取仓库名称
 * @method void setRepoName(string $RepoName) 设置仓库名称
 * @method string getType() 获取keep_last_days:保留最近几天的数据;keep_last_nums:保留最近多少个
 * @method void setType(string $Type) 设置keep_last_days:保留最近几天的数据;keep_last_nums:保留最近多少个
 * @method integer getVal() 获取策略值
 * @method void setVal(integer $Val) 设置策略值
 */
class CreateImageLifecyclePersonalRequest extends AbstractModel
{
    /**
     * @var string 仓库名称
     */
    public $RepoName;

    /**
     * @var string keep_last_days:保留最近几天的数据;keep_last_nums:保留最近多少个
     */
    public $Type;

    /**
     * @var integer 策略值
     */
    public $Val;

    /**
     * @param string $RepoName 仓库名称
     * @param string $Type keep_last_days:保留最近几天的数据;keep_last_nums:保留最近多少个
     * @param integer $Val 策略值
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
        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Val",$param) and $param["Val"] !== null) {
            $this->Val = $param["Val"];
        }
    }
}
