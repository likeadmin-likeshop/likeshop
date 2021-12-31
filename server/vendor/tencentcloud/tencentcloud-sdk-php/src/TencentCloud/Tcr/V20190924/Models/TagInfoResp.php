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
 * Tag列表的返回值
 *
 * @method integer getTagCount() 获取Tag的总数
 * @method void setTagCount(integer $TagCount) 设置Tag的总数
 * @method array getTagInfo() 获取TagInfo列表
 * @method void setTagInfo(array $TagInfo) 设置TagInfo列表
 * @method string getServer() 获取Server
 * @method void setServer(string $Server) 设置Server
 * @method string getRepoName() 获取仓库名称
 * @method void setRepoName(string $RepoName) 设置仓库名称
 */
class TagInfoResp extends AbstractModel
{
    /**
     * @var integer Tag的总数
     */
    public $TagCount;

    /**
     * @var array TagInfo列表
     */
    public $TagInfo;

    /**
     * @var string Server
     */
    public $Server;

    /**
     * @var string 仓库名称
     */
    public $RepoName;

    /**
     * @param integer $TagCount Tag的总数
     * @param array $TagInfo TagInfo列表
     * @param string $Server Server
     * @param string $RepoName 仓库名称
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
        if (array_key_exists("TagCount",$param) and $param["TagCount"] !== null) {
            $this->TagCount = $param["TagCount"];
        }

        if (array_key_exists("TagInfo",$param) and $param["TagInfo"] !== null) {
            $this->TagInfo = [];
            foreach ($param["TagInfo"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagInfo, $obj);
            }
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }
    }
}
