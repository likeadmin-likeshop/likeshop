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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代码仓库里 Repo的信息描述
 *
 * @method CloudBaseCodeRepoName getName() 获取repo的名字
 * @method void setName(CloudBaseCodeRepoName $Name) 设置repo的名字
 * @method string getUrl() 获取repo的url
 * @method void setUrl(string $Url) 设置repo的url
 */
class CloudBaseCodeRepoDetail extends AbstractModel
{
    /**
     * @var CloudBaseCodeRepoName repo的名字
     */
    public $Name;

    /**
     * @var string repo的url
     */
    public $Url;

    /**
     * @param CloudBaseCodeRepoName $Name repo的名字
     * @param string $Url repo的url
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = new CloudBaseCodeRepoName();
            $this->Name->deserialize($param["Name"]);
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
