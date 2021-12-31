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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAttachedUserPolicies请求参数结构体
 *
 * @method integer getTargetUin() 获取子账号 uin
 * @method void setTargetUin(integer $TargetUin) 设置子账号 uin
 * @method integer getPage() 获取页码，默认值是 1，从 1 开始
 * @method void setPage(integer $Page) 设置页码，默认值是 1，从 1 开始
 * @method integer getRp() 获取每页大小，默认值是 20
 * @method void setRp(integer $Rp) 设置每页大小，默认值是 20
 */
class ListAttachedUserPoliciesRequest extends AbstractModel
{
    /**
     * @var integer 子账号 uin
     */
    public $TargetUin;

    /**
     * @var integer 页码，默认值是 1，从 1 开始
     */
    public $Page;

    /**
     * @var integer 每页大小，默认值是 20
     */
    public $Rp;

    /**
     * @param integer $TargetUin 子账号 uin
     * @param integer $Page 页码，默认值是 1，从 1 开始
     * @param integer $Rp 每页大小，默认值是 20
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
        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }
    }
}
