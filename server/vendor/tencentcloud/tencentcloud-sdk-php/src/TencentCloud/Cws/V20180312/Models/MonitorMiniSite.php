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
 * 监控任务中的站点信息。
 *
 * @method integer getSiteId() 获取站点ID。
 * @method void setSiteId(integer $SiteId) 设置站点ID。
 * @method string getUrl() 获取站点Url。
 * @method void setUrl(string $Url) 设置站点Url。
 */
class MonitorMiniSite extends AbstractModel
{
    /**
     * @var integer 站点ID。
     */
    public $SiteId;

    /**
     * @var string 站点Url。
     */
    public $Url;

    /**
     * @param integer $SiteId 站点ID。
     * @param string $Url 站点Url。
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
        if (array_key_exists("SiteId",$param) and $param["SiteId"] !== null) {
            $this->SiteId = $param["SiteId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
