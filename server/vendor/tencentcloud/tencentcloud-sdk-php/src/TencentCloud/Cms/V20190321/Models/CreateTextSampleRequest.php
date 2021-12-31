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
 * CreateTextSample请求参数结构体
 *
 * @method array getContents() 获取关键词数组
 * @method void setContents(array $Contents) 设置关键词数组
 * @method integer getEvilType() 获取恶意类型
100：正常
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
24001：暴恐
20105：广告引流
 * @method void setEvilType(integer $EvilType) 设置恶意类型
100：正常
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
24001：暴恐
20105：广告引流
 * @method integer getLabel() 获取样本类型
1：黑库
2：白库
 * @method void setLabel(integer $Label) 设置样本类型
1：黑库
2：白库
 * @method string getTest() 获取测试修改参数
 * @method void setTest(string $Test) 设置测试修改参数
 */
class CreateTextSampleRequest extends AbstractModel
{
    /**
     * @var array 关键词数组
     */
    public $Contents;

    /**
     * @var integer 恶意类型
100：正常
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
24001：暴恐
20105：广告引流
     */
    public $EvilType;

    /**
     * @var integer 样本类型
1：黑库
2：白库
     */
    public $Label;

    /**
     * @var string 测试修改参数
     */
    public $Test;

    /**
     * @param array $Contents 关键词数组
     * @param integer $EvilType 恶意类型
100：正常
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
24001：暴恐
20105：广告引流
     * @param integer $Label 样本类型
1：黑库
2：白库
     * @param string $Test 测试修改参数
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
        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            $this->Contents = $param["Contents"];
        }

        if (array_key_exists("EvilType",$param) and $param["EvilType"] !== null) {
            $this->EvilType = $param["EvilType"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Test",$param) and $param["Test"] !== null) {
            $this->Test = $param["Test"];
        }
    }
}
