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
namespace TencentCloud\Tbm\V20180129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户好评差评个数信息
 *
 * @method string getDate() 获取评论的日期
 * @method void setDate(string $Date) 设置评论的日期
 * @method integer getNegCommentCount() 获取差评的个数
 * @method void setNegCommentCount(integer $NegCommentCount) 设置差评的个数
 * @method integer getPosCommentCount() 获取好评的个数
 * @method void setPosCommentCount(integer $PosCommentCount) 设置好评的个数
 */
class Comment extends AbstractModel
{
    /**
     * @var string 评论的日期
     */
    public $Date;

    /**
     * @var integer 差评的个数
     */
    public $NegCommentCount;

    /**
     * @var integer 好评的个数
     */
    public $PosCommentCount;

    /**
     * @param string $Date 评论的日期
     * @param integer $NegCommentCount 差评的个数
     * @param integer $PosCommentCount 好评的个数
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("NegCommentCount",$param) and $param["NegCommentCount"] !== null) {
            $this->NegCommentCount = $param["NegCommentCount"];
        }

        if (array_key_exists("PosCommentCount",$param) and $param["PosCommentCount"] !== null) {
            $this->PosCommentCount = $param["PosCommentCount"];
        }
    }
}
