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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签
 *
 * @method integer getFid() 获取数据库标识
 * @method void setFid(integer $Fid) 设置数据库标识
 * @method string getFname() 获取标签名称
 * @method void setFname(string $Fname) 设置标签名称
 */
class Tag extends AbstractModel
{
    /**
     * @var integer 数据库标识
     */
    public $Fid;

    /**
     * @var string 标签名称
     */
    public $Fname;

    /**
     * @param integer $Fid 数据库标识
     * @param string $Fname 标签名称
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
        if (array_key_exists("Fid",$param) and $param["Fid"] !== null) {
            $this->Fid = $param["Fid"];
        }

        if (array_key_exists("Fname",$param) and $param["Fname"] !== null) {
            $this->Fname = $param["Fname"];
        }
    }
}
