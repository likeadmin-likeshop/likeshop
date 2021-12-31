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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 相似度详情
 *
 * @method integer getEvilType() 获取恶意类型
100：正常 
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
24001：暴恐
 * @method void setEvilType(integer $EvilType) 设置恶意类型
100：正常 
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
24001：暴恐
 * @method integer getHitFlag() 获取处置判定 0：未匹配到 1：恶意 2：白样本
 * @method void setHitFlag(integer $HitFlag) 设置处置判定 0：未匹配到 1：恶意 2：白样本
 * @method string getSeedUrl() 获取返回的种子url
 * @method void setSeedUrl(string $SeedUrl) 设置返回的种子url
 */
class Similar extends AbstractModel
{
    /**
     * @var integer 恶意类型
100：正常 
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
24001：暴恐
     */
    public $EvilType;

    /**
     * @var integer 处置判定 0：未匹配到 1：恶意 2：白样本
     */
    public $HitFlag;

    /**
     * @var string 返回的种子url
     */
    public $SeedUrl;

    /**
     * @param integer $EvilType 恶意类型
100：正常 
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
24001：暴恐
     * @param integer $HitFlag 处置判定 0：未匹配到 1：恶意 2：白样本
     * @param string $SeedUrl 返回的种子url
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
        if (array_key_exists("EvilType",$param) and $param["EvilType"] !== null) {
            $this->EvilType = $param["EvilType"];
        }

        if (array_key_exists("HitFlag",$param) and $param["HitFlag"] !== null) {
            $this->HitFlag = $param["HitFlag"];
        }

        if (array_key_exists("SeedUrl",$param) and $param["SeedUrl"] !== null) {
            $this->SeedUrl = $param["SeedUrl"];
        }
    }
}
