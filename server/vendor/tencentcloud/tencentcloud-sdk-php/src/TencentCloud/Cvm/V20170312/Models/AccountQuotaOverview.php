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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配额详情概览
 *
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method AccountQuota getAccountQuota() 获取配额数据
 * @method void setAccountQuota(AccountQuota $AccountQuota) 设置配额数据
 */
class AccountQuotaOverview extends AbstractModel
{
    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var AccountQuota 配额数据
     */
    public $AccountQuota;

    /**
     * @param string $Region 地域
     * @param AccountQuota $AccountQuota 配额数据
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AccountQuota",$param) and $param["AccountQuota"] !== null) {
            $this->AccountQuota = new AccountQuota();
            $this->AccountQuota->deserialize($param["AccountQuota"]);
        }
    }
}
