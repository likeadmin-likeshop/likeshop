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
namespace TencentCloud\Yunsou\V20191115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 搜索结果元素
 *
 * @method string getDocAbs() 获取动态摘要信息
 * @method void setDocAbs(string $DocAbs) 设置动态摘要信息
 * @method string getDocId() 获取检索文档id
 * @method void setDocId(string $DocId) 设置检索文档id
 * @method string getDocMeta() 获取原始文档信息
 * @method void setDocMeta(string $DocMeta) 设置原始文档信息
 * @method float getL2Score() 获取精计算得分
 * @method void setL2Score(float $L2Score) 设置精计算得分
 * @method string getSearchDebuginfo() 获取文档级回传信息
 * @method void setSearchDebuginfo(string $SearchDebuginfo) 设置文档级回传信息
 */
class SearchResultItem extends AbstractModel
{
    /**
     * @var string 动态摘要信息
     */
    public $DocAbs;

    /**
     * @var string 检索文档id
     */
    public $DocId;

    /**
     * @var string 原始文档信息
     */
    public $DocMeta;

    /**
     * @var float 精计算得分
     */
    public $L2Score;

    /**
     * @var string 文档级回传信息
     */
    public $SearchDebuginfo;

    /**
     * @param string $DocAbs 动态摘要信息
     * @param string $DocId 检索文档id
     * @param string $DocMeta 原始文档信息
     * @param float $L2Score 精计算得分
     * @param string $SearchDebuginfo 文档级回传信息
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
        if (array_key_exists("DocAbs",$param) and $param["DocAbs"] !== null) {
            $this->DocAbs = $param["DocAbs"];
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("DocMeta",$param) and $param["DocMeta"] !== null) {
            $this->DocMeta = $param["DocMeta"];
        }

        if (array_key_exists("L2Score",$param) and $param["L2Score"] !== null) {
            $this->L2Score = $param["L2Score"];
        }

        if (array_key_exists("SearchDebuginfo",$param) and $param["SearchDebuginfo"] !== null) {
            $this->SearchDebuginfo = $param["SearchDebuginfo"];
        }
    }
}
