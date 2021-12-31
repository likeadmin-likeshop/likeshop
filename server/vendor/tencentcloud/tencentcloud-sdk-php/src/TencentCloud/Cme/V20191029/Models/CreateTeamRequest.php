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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTeam请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。
 * @method string getName() 获取团队名称，限30个字符。
 * @method void setName(string $Name) 设置团队名称，限30个字符。
 * @method string getOwnerId() 获取团队所有者，指定用户 ID。
 * @method void setOwnerId(string $OwnerId) 设置团队所有者，指定用户 ID。
 * @method string getOwnerRemark() 获取团队所有者的备注，限30个字符。
 * @method void setOwnerRemark(string $OwnerRemark) 设置团队所有者的备注，限30个字符。
 * @method string getTeamId() 获取自定义团队 ID。创建后不可修改，限20个英文字符及"-"。同时不能以 cmetid_开头。不填会生成默认团队 ID。
 * @method void setTeamId(string $TeamId) 设置自定义团队 ID。创建后不可修改，限20个英文字符及"-"。同时不能以 cmetid_开头。不填会生成默认团队 ID。
 */
class CreateTeamRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。
     */
    public $Platform;

    /**
     * @var string 团队名称，限30个字符。
     */
    public $Name;

    /**
     * @var string 团队所有者，指定用户 ID。
     */
    public $OwnerId;

    /**
     * @var string 团队所有者的备注，限30个字符。
     */
    public $OwnerRemark;

    /**
     * @var string 自定义团队 ID。创建后不可修改，限20个英文字符及"-"。同时不能以 cmetid_开头。不填会生成默认团队 ID。
     */
    public $TeamId;

    /**
     * @param string $Platform 平台名称，指定访问的平台。
     * @param string $Name 团队名称，限30个字符。
     * @param string $OwnerId 团队所有者，指定用户 ID。
     * @param string $OwnerRemark 团队所有者的备注，限30个字符。
     * @param string $TeamId 自定义团队 ID。创建后不可修改，限20个英文字符及"-"。同时不能以 cmetid_开头。不填会生成默认团队 ID。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }

        if (array_key_exists("OwnerRemark",$param) and $param["OwnerRemark"] !== null) {
            $this->OwnerRemark = $param["OwnerRemark"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }
    }
}
