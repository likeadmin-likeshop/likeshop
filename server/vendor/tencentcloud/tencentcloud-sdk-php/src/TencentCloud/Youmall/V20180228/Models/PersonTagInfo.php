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
 * 修改顾客属性参数
 *
 * @method integer getOldType() 获取顾客原类型
 * @method void setOldType(integer $OldType) 设置顾客原类型
 * @method integer getNewType() 获取顾客新类型
 * @method void setNewType(integer $NewType) 设置顾客新类型
 * @method integer getPersonId() 获取顾客face id
 * @method void setPersonId(integer $PersonId) 设置顾客face id
 */
class PersonTagInfo extends AbstractModel
{
    /**
     * @var integer 顾客原类型
     */
    public $OldType;

    /**
     * @var integer 顾客新类型
     */
    public $NewType;

    /**
     * @var integer 顾客face id
     */
    public $PersonId;

    /**
     * @param integer $OldType 顾客原类型
     * @param integer $NewType 顾客新类型
     * @param integer $PersonId 顾客face id
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
        if (array_key_exists("OldType",$param) and $param["OldType"] !== null) {
            $this->OldType = $param["OldType"];
        }

        if (array_key_exists("NewType",$param) and $param["NewType"] !== null) {
            $this->NewType = $param["NewType"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }
    }
}
