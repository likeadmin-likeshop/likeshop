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
 * DescribeConfig返回参数结构体
 *
 * @method string getNoticeLevel() 获取漏洞告警通知等级，4位分别代表：高危、中危、低危、提示。
 * @method void setNoticeLevel(string $NoticeLevel) 设置漏洞告警通知等级，4位分别代表：高危、中危、低危、提示。
 * @method integer getId() 获取配置ID。
 * @method void setId(integer $Id) 设置配置ID。
 * @method string getCreatedAt() 获取记录创建时间。
 * @method void setCreatedAt(string $CreatedAt) 设置记录创建时间。
 * @method string getUpdatedAt() 获取记录更新新建。
 * @method void setUpdatedAt(string $UpdatedAt) 设置记录更新新建。
 * @method integer getAppid() 获取云用户appid。
 * @method void setAppid(integer $Appid) 设置云用户appid。
 * @method integer getContentLevel() 获取内容检测通知等级-1:通知,0-不通知
 * @method void setContentLevel(integer $ContentLevel) 设置内容检测通知等级-1:通知,0-不通知
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeConfigResponse extends AbstractModel
{
    /**
     * @var string 漏洞告警通知等级，4位分别代表：高危、中危、低危、提示。
     */
    public $NoticeLevel;

    /**
     * @var integer 配置ID。
     */
    public $Id;

    /**
     * @var string 记录创建时间。
     */
    public $CreatedAt;

    /**
     * @var string 记录更新新建。
     */
    public $UpdatedAt;

    /**
     * @var integer 云用户appid。
     */
    public $Appid;

    /**
     * @var integer 内容检测通知等级-1:通知,0-不通知
     */
    public $ContentLevel;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $NoticeLevel 漏洞告警通知等级，4位分别代表：高危、中危、低危、提示。
     * @param integer $Id 配置ID。
     * @param string $CreatedAt 记录创建时间。
     * @param string $UpdatedAt 记录更新新建。
     * @param integer $Appid 云用户appid。
     * @param integer $ContentLevel 内容检测通知等级-1:通知,0-不通知
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("ContentLevel",$param) and $param["ContentLevel"] !== null) {
            $this->ContentLevel = $param["ContentLevel"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
