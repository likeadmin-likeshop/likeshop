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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 违规 URL 详情
 *
 * @method integer getId() 获取ID
 * @method void setId(integer $Id) 设置ID
 * @method string getRealUrl() 获取违规资源原始访问 URL
 * @method void setRealUrl(string $RealUrl) 设置违规资源原始访问 URL
 * @method string getDownloadUrl() 获取快照路径，用于控制台展示违规内容快照
 * @method void setDownloadUrl(string $DownloadUrl) 设置快照路径，用于控制台展示违规内容快照
 * @method string getUrlStatus() 获取违规资源当前状态
forbid：已封禁
release：已解封
delay ： 延迟处理
reject ：申诉驳回，状态仍为封禁态
complain：申诉进行中
 * @method void setUrlStatus(string $UrlStatus) 设置违规资源当前状态
forbid：已封禁
release：已解封
delay ： 延迟处理
reject ：申诉驳回，状态仍为封禁态
complain：申诉进行中
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class ViolationUrl extends AbstractModel
{
    /**
     * @var integer ID
     */
    public $Id;

    /**
     * @var string 违规资源原始访问 URL
     */
    public $RealUrl;

    /**
     * @var string 快照路径，用于控制台展示违规内容快照
     */
    public $DownloadUrl;

    /**
     * @var string 违规资源当前状态
forbid：已封禁
release：已解封
delay ： 延迟处理
reject ：申诉驳回，状态仍为封禁态
complain：申诉进行中
     */
    public $UrlStatus;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param integer $Id ID
     * @param string $RealUrl 违规资源原始访问 URL
     * @param string $DownloadUrl 快照路径，用于控制台展示违规内容快照
     * @param string $UrlStatus 违规资源当前状态
forbid：已封禁
release：已解封
delay ： 延迟处理
reject ：申诉驳回，状态仍为封禁态
complain：申诉进行中
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RealUrl",$param) and $param["RealUrl"] !== null) {
            $this->RealUrl = $param["RealUrl"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("UrlStatus",$param) and $param["UrlStatus"] !== null) {
            $this->UrlStatus = $param["UrlStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
