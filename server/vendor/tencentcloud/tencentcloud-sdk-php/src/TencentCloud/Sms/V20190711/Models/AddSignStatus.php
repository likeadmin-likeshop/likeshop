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
namespace TencentCloud\Sms\V20190711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 添加签名响应 
 *
 * @method integer getSignId() 获取签名Id。
 * @method void setSignId(integer $SignId) 设置签名Id。
 * @method integer getSignApplyId() 获取签名申请Id。
 * @method void setSignApplyId(integer $SignApplyId) 设置签名申请Id。
 */
class AddSignStatus extends AbstractModel
{
    /**
     * @var integer 签名Id。
     */
    public $SignId;

    /**
     * @var integer 签名申请Id。
     */
    public $SignApplyId;

    /**
     * @param integer $SignId 签名Id。
     * @param integer $SignApplyId 签名申请Id。
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
        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("SignApplyId",$param) and $param["SignApplyId"] !== null) {
            $this->SignApplyId = $param["SignApplyId"];
        }
    }
}
