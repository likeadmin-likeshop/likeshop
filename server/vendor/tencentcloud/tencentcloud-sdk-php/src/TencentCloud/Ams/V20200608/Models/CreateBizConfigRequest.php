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
namespace TencentCloud\Ams\V20200608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBizConfig请求参数结构体
 *
 * @method string getBizType() 获取业务类型，仅限英文字母、数字和下划线（_）组成，长度不超过8位
 * @method void setBizType(string $BizType) 设置业务类型，仅限英文字母、数字和下划线（_）组成，长度不超过8位
 * @method MediaModerationConfig getMediaModeration() 获取配置信息，
 * @method void setMediaModeration(MediaModerationConfig $MediaModeration) 设置配置信息，
 * @method string getBizName() 获取业务名称，用于标识业务场景，长度不超过32位
 * @method void setBizName(string $BizName) 设置业务名称，用于标识业务场景，长度不超过32位
 * @method array getModerationCategories() 获取审核内容，可选：Polity (政治); Porn (色情); Illegal(违法);Abuse (谩骂); Terror (暴恐); Ad (广告);
 * @method void setModerationCategories(array $ModerationCategories) 设置审核内容，可选：Polity (政治); Porn (色情); Illegal(违法);Abuse (谩骂); Terror (暴恐); Ad (广告);
 */
class CreateBizConfigRequest extends AbstractModel
{
    /**
     * @var string 业务类型，仅限英文字母、数字和下划线（_）组成，长度不超过8位
     */
    public $BizType;

    /**
     * @var MediaModerationConfig 配置信息，
     */
    public $MediaModeration;

    /**
     * @var string 业务名称，用于标识业务场景，长度不超过32位
     */
    public $BizName;

    /**
     * @var array 审核内容，可选：Polity (政治); Porn (色情); Illegal(违法);Abuse (谩骂); Terror (暴恐); Ad (广告);
     */
    public $ModerationCategories;

    /**
     * @param string $BizType 业务类型，仅限英文字母、数字和下划线（_）组成，长度不超过8位
     * @param MediaModerationConfig $MediaModeration 配置信息，
     * @param string $BizName 业务名称，用于标识业务场景，长度不超过32位
     * @param array $ModerationCategories 审核内容，可选：Polity (政治); Porn (色情); Illegal(违法);Abuse (谩骂); Terror (暴恐); Ad (广告);
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("MediaModeration",$param) and $param["MediaModeration"] !== null) {
            $this->MediaModeration = new MediaModerationConfig();
            $this->MediaModeration->deserialize($param["MediaModeration"]);
        }

        if (array_key_exists("BizName",$param) and $param["BizName"] !== null) {
            $this->BizName = $param["BizName"];
        }

        if (array_key_exists("ModerationCategories",$param) and $param["ModerationCategories"] !== null) {
            $this->ModerationCategories = $param["ModerationCategories"];
        }
    }
}
