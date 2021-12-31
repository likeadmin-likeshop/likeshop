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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运营商信息
 *
 * @method string getISPId() 获取运营商ID
 * @method void setISPId(string $ISPId) 设置运营商ID
 * @method string getISPName() 获取运营商名称
 * @method void setISPName(string $ISPName) 设置运营商名称
 */
class ISP extends AbstractModel
{
    /**
     * @var string 运营商ID
     */
    public $ISPId;

    /**
     * @var string 运营商名称
     */
    public $ISPName;

    /**
     * @param string $ISPId 运营商ID
     * @param string $ISPName 运营商名称
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
        if (array_key_exists("ISPId",$param) and $param["ISPId"] !== null) {
            $this->ISPId = $param["ISPId"];
        }

        if (array_key_exists("ISPName",$param) and $param["ISPName"] !== null) {
            $this->ISPName = $param["ISPName"];
        }
    }
}
