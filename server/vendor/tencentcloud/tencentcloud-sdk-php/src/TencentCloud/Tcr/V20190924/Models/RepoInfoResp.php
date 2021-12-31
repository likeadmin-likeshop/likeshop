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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 仓库信息的返回信息
 *
 * @method integer getTotalCount() 获取仓库总数
 * @method void setTotalCount(integer $TotalCount) 设置仓库总数
 * @method array getRepoInfo() 获取仓库信息列表
 * @method void setRepoInfo(array $RepoInfo) 设置仓库信息列表
 * @method string getServer() 获取Server信息
 * @method void setServer(string $Server) 设置Server信息
 */
class RepoInfoResp extends AbstractModel
{
    /**
     * @var integer 仓库总数
     */
    public $TotalCount;

    /**
     * @var array 仓库信息列表
     */
    public $RepoInfo;

    /**
     * @var string Server信息
     */
    public $Server;

    /**
     * @param integer $TotalCount 仓库总数
     * @param array $RepoInfo 仓库信息列表
     * @param string $Server Server信息
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RepoInfo",$param) and $param["RepoInfo"] !== null) {
            $this->RepoInfo = [];
            foreach ($param["RepoInfo"] as $key => $value){
                $obj = new RepoInfo();
                $obj->deserialize($value);
                array_push($this->RepoInfo, $obj);
            }
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }
    }
}
