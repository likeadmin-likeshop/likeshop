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
 * 文字样本信息
 *
 * @method integer getCode() 获取处理错误码
 * @method void setCode(integer $Code) 设置处理错误码
 * @method string getContent() 获取关键词
 * @method void setContent(string $Content) 设置关键词
 * @method integer getCreatedAt() 获取创建时间戳
 * @method void setCreatedAt(integer $CreatedAt) 设置创建时间戳
 * @method integer getEvilType() 获取恶意类型
100：正常
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
20105：广告引流 
24001：暴恐
 * @method void setEvilType(integer $EvilType) 设置恶意类型
100：正常
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
20105：广告引流 
24001：暴恐
 * @method string getId() 获取唯一标识
 * @method void setId(string $Id) 设置唯一标识
 * @method integer getLabel() 获取样本类型
1：黑库
2：白库
 * @method void setLabel(integer $Label) 设置样本类型
1：黑库
2：白库
 * @method integer getStatus() 获取任务状态
1：已完成
2：处理中
 * @method void setStatus(integer $Status) 设置任务状态
1：已完成
2：处理中
 */
class TextSample extends AbstractModel
{
    /**
     * @var integer 处理错误码
     */
    public $Code;

    /**
     * @var string 关键词
     */
    public $Content;

    /**
     * @var integer 创建时间戳
     */
    public $CreatedAt;

    /**
     * @var integer 恶意类型
100：正常
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
20105：广告引流 
24001：暴恐
     */
    public $EvilType;

    /**
     * @var string 唯一标识
     */
    public $Id;

    /**
     * @var integer 样本类型
1：黑库
2：白库
     */
    public $Label;

    /**
     * @var integer 任务状态
1：已完成
2：处理中
     */
    public $Status;

    /**
     * @param integer $Code 处理错误码
     * @param string $Content 关键词
     * @param integer $CreatedAt 创建时间戳
     * @param integer $EvilType 恶意类型
100：正常
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
20105：广告引流 
24001：暴恐
     * @param string $Id 唯一标识
     * @param integer $Label 样本类型
1：黑库
2：白库
     * @param integer $Status 任务状态
1：已完成
2：处理中
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("EvilType",$param) and $param["EvilType"] !== null) {
            $this->EvilType = $param["EvilType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
