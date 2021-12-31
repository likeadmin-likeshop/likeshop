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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetBashEventsStatus请求参数结构体
 *
 * @method array getIds() 获取ID数组，最大100条。
 * @method void setIds(array $Ids) 设置ID数组，最大100条。
 * @method integer getStatus() 获取新状态(0-待处理 1-高危 2-正常)
 * @method void setStatus(integer $Status) 设置新状态(0-待处理 1-高危 2-正常)
 */
class SetBashEventsStatusRequest extends AbstractModel
{
    /**
     * @var array ID数组，最大100条。
     */
    public $Ids;

    /**
     * @var integer 新状态(0-待处理 1-高危 2-正常)
     */
    public $Status;

    /**
     * @param array $Ids ID数组，最大100条。
     * @param integer $Status 新状态(0-待处理 1-高危 2-正常)
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
