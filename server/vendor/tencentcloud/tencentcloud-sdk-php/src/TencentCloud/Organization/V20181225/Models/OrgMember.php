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
namespace TencentCloud\Organization\V20181225\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业组织成员
 *
 * @method integer getUin() 获取UIN
 * @method void setUin(integer $Uin) 设置UIN
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getJoinTime() 获取加入时间
 * @method void setJoinTime(string $JoinTime) 设置加入时间
 */
class OrgMember extends AbstractModel
{
    /**
     * @var integer UIN
     */
    public $Uin;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 加入时间
     */
    public $JoinTime;

    /**
     * @param integer $Uin UIN
     * @param string $Name 名称
     * @param string $Remark 备注
     * @param string $JoinTime 加入时间
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("JoinTime",$param) and $param["JoinTime"] !== null) {
            $this->JoinTime = $param["JoinTime"];
        }
    }
}
