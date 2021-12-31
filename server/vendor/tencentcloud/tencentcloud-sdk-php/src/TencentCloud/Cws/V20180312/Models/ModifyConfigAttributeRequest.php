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
namespace TencentCloud\Cws\V20180312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyConfigAttribute请求参数结构体
 *
 * @method string getNoticeLevel() 获取漏洞告警通知等级，4位分别代表：高危、中危、低危、提示
 * @method void setNoticeLevel(string $NoticeLevel) 设置漏洞告警通知等级，4位分别代表：高危、中危、低危、提示
 */
class ModifyConfigAttributeRequest extends AbstractModel
{
    /**
     * @var string 漏洞告警通知等级，4位分别代表：高危、中危、低危、提示
     */
    public $NoticeLevel;

    /**
     * @param string $NoticeLevel 漏洞告警通知等级，4位分别代表：高危、中危、低危、提示
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
        if (array_key_exists("NoticeLevel",$param) and $param["NoticeLevel"] !== null) {
            $this->NoticeLevel = $param["NoticeLevel"];
        }
    }
}
