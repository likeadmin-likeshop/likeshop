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
 * CreateLiveTranscodeRule请求参数结构体
 *
 * @method string getDomainName() 获取播放域名。
 * @method void setDomainName(string $DomainName) 设置播放域名。
 * @method string getAppName() 获取推流路径，与推流和播放地址中的AppName保持一致。如果只绑定域名，则此处填空。
 * @method void setAppName(string $AppName) 设置推流路径，与推流和播放地址中的AppName保持一致。如果只绑定域名，则此处填空。
 * @method string getStreamName() 获取流名称。如果只绑定域名或路径，则此处填空。
 * @method void setStreamName(string $StreamName) 设置流名称。如果只绑定域名或路径，则此处填空。
 * @method integer getTemplateId() 获取指定已有的模板Id。
 * @method void setTemplateId(integer $TemplateId) 设置指定已有的模板Id。
 */
class CreateLiveTranscodeRuleRequest extends AbstractModel
{
    /**
     * @var string 播放域名。
     */
    public $DomainName;

    /**
     * @var string 推流路径，与推流和播放地址中的AppName保持一致。如果只绑定域名，则此处填空。
     */
    public $AppName;

    /**
     * @var string 流名称。如果只绑定域名或路径，则此处填空。
     */
    public $StreamName;

    /**
     * @var integer 指定已有的模板Id。
     */
    public $TemplateId;

    /**
     * @param string $DomainName 播放域名。
     * @param string $AppName 推流路径，与推流和播放地址中的AppName保持一致。如果只绑定域名，则此处填空。
     * @param string $StreamName 流名称。如果只绑定域名或路径，则此处填空。
     * @param integer $TemplateId 指定已有的模板Id。
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

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
