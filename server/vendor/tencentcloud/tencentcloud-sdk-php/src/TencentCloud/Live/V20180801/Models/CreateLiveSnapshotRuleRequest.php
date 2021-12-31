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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLiveSnapshotRule请求参数结构体
 *
 * @method string getDomainName() 获取推流域名。
 * @method void setDomainName(string $DomainName) 设置推流域名。
 * @method integer getTemplateId() 获取模板 ID。
 * @method void setTemplateId(integer $TemplateId) 设置模板 ID。
 * @method string getAppName() 获取推流路径，与推流和播放地址中的 AppName 保持一致，默认为 live。
 * @method void setAppName(string $AppName) 设置推流路径，与推流和播放地址中的 AppName 保持一致，默认为 live。
 * @method string getStreamName() 获取流名称。
注：如果本参数设置为非空字符串，规则将只对此推流起作用。
 * @method void setStreamName(string $StreamName) 设置流名称。
注：如果本参数设置为非空字符串，规则将只对此推流起作用。
 */
class CreateLiveSnapshotRuleRequest extends AbstractModel
{
    /**
     * @var string 推流域名。
     */
    public $DomainName;

    /**
     * @var integer 模板 ID。
     */
    public $TemplateId;

    /**
     * @var string 推流路径，与推流和播放地址中的 AppName 保持一致，默认为 live。
     */
    public $AppName;

    /**
     * @var string 流名称。
注：如果本参数设置为非空字符串，规则将只对此推流起作用。
     */
    public $StreamName;

    /**
     * @param string $DomainName 推流域名。
     * @param integer $TemplateId 模板 ID。
     * @param string $AppName 推流路径，与推流和播放地址中的 AppName 保持一致，默认为 live。
     * @param string $StreamName 流名称。
注：如果本参数设置为非空字符串，规则将只对此推流起作用。
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }
    }
}
