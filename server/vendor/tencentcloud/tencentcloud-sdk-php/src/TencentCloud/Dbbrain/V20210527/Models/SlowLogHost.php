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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 慢日志来源地址详情。
 *
 * @method string getUserHost() 获取来源地址。
 * @method void setUserHost(string $UserHost) 设置来源地址。
 * @method float getRatio() 获取该来源地址的慢日志数目占总数目的比例，单位%。
 * @method void setRatio(float $Ratio) 设置该来源地址的慢日志数目占总数目的比例，单位%。
 * @method integer getCount() 获取该来源地址的慢日志数目。
 * @method void setCount(integer $Count) 设置该来源地址的慢日志数目。
 */
class SlowLogHost extends AbstractModel
{
    /**
     * @var string 来源地址。
     */
    public $UserHost;

    /**
     * @var float 该来源地址的慢日志数目占总数目的比例，单位%。
     */
    public $Ratio;

    /**
     * @var integer 该来源地址的慢日志数目。
     */
    public $Count;

    /**
     * @param string $UserHost 来源地址。
     * @param float $Ratio 该来源地址的慢日志数目占总数目的比例，单位%。
     * @param integer $Count 该来源地址的慢日志数目。
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
        if (array_key_exists("UserHost",$param) and $param["UserHost"] !== null) {
            $this->UserHost = $param["UserHost"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
