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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmNotice请求参数结构体
 *
 * @method string getModule() 获取模块名，这里填“monitor”
 * @method void setModule(string $Module) 设置模块名，这里填“monitor”
 * @method string getName() 获取告警通知规则名称 60字符以内
 * @method void setName(string $Name) 设置告警通知规则名称 60字符以内
 * @method string getNoticeType() 获取通知类型 ALARM=未恢复通知 OK=已恢复通知 ALL=都通知
 * @method void setNoticeType(string $NoticeType) 设置通知类型 ALARM=未恢复通知 OK=已恢复通知 ALL=都通知
 * @method string getNoticeLanguage() 获取通知语言 zh-CN=中文 en-US=英文
 * @method void setNoticeLanguage(string $NoticeLanguage) 设置通知语言 zh-CN=中文 en-US=英文
 * @method string getNoticeId() 获取告警通知模板 ID
 * @method void setNoticeId(string $NoticeId) 设置告警通知模板 ID
 * @method array getUserNotices() 获取用户通知 最多5个
 * @method void setUserNotices(array $UserNotices) 设置用户通知 最多5个
 * @method array getURLNotices() 获取回调通知 最多3个
 * @method void setURLNotices(array $URLNotices) 设置回调通知 最多3个
 */
class ModifyAlarmNoticeRequest extends AbstractModel
{
    /**
     * @var string 模块名，这里填“monitor”
     */
    public $Module;

    /**
     * @var string 告警通知规则名称 60字符以内
     */
    public $Name;

    /**
     * @var string 通知类型 ALARM=未恢复通知 OK=已恢复通知 ALL=都通知
     */
    public $NoticeType;

    /**
     * @var string 通知语言 zh-CN=中文 en-US=英文
     */
    public $NoticeLanguage;

    /**
     * @var string 告警通知模板 ID
     */
    public $NoticeId;

    /**
     * @var array 用户通知 最多5个
     */
    public $UserNotices;

    /**
     * @var array 回调通知 最多3个
     */
    public $URLNotices;

    /**
     * @param string $Module 模块名，这里填“monitor”
     * @param string $Name 告警通知规则名称 60字符以内
     * @param string $NoticeType 通知类型 ALARM=未恢复通知 OK=已恢复通知 ALL=都通知
     * @param string $NoticeLanguage 通知语言 zh-CN=中文 en-US=英文
     * @param string $NoticeId 告警通知模板 ID
     * @param array $UserNotices 用户通知 最多5个
     * @param array $URLNotices 回调通知 最多3个
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NoticeType",$param) and $param["NoticeType"] !== null) {
            $this->NoticeType = $param["NoticeType"];
        }

        if (array_key_exists("NoticeLanguage",$param) and $param["NoticeLanguage"] !== null) {
            $this->NoticeLanguage = $param["NoticeLanguage"];
        }

        if (array_key_exists("NoticeId",$param) and $param["NoticeId"] !== null) {
            $this->NoticeId = $param["NoticeId"];
        }

        if (array_key_exists("UserNotices",$param) and $param["UserNotices"] !== null) {
            $this->UserNotices = [];
            foreach ($param["UserNotices"] as $key => $value){
                $obj = new UserNotice();
                $obj->deserialize($value);
                array_push($this->UserNotices, $obj);
            }
        }

        if (array_key_exists("URLNotices",$param) and $param["URLNotices"] !== null) {
            $this->URLNotices = [];
            foreach ($param["URLNotices"] as $key => $value){
                $obj = new URLNotice();
                $obj->deserialize($value);
                array_push($this->URLNotices, $obj);
            }
        }
    }
}
