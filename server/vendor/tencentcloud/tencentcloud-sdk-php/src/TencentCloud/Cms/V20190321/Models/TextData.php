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
 * 文本识别结果详情
 *
 * @method integer getEvilFlag() 获取是否恶意 0：正常 1：可疑
 * @method void setEvilFlag(integer $EvilFlag) 设置是否恶意 0：正常 1：可疑
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
 * @method TextOutputComm getCommon() 获取消息类公共相关参数
 * @method void setCommon(TextOutputComm $Common) 设置消息类公共相关参数
 * @method array getCustomResult() 获取返回的自定义词库结果
 * @method void setCustomResult(array $CustomResult) 设置返回的自定义词库结果
 * @method array getDetailResult() 获取返回的详细结果
 * @method void setDetailResult(array $DetailResult) 设置返回的详细结果
 * @method TextOutputID getID() 获取消息类ID信息
 * @method void setID(TextOutputID $ID) 设置消息类ID信息
 * @method TextOutputRes getRes() 获取消息类输出结果
 * @method void setRes(TextOutputRes $Res) 设置消息类输出结果
 * @method array getRiskDetails() 获取账号风险检测结果
 * @method void setRiskDetails(array $RiskDetails) 设置账号风险检测结果
 * @method integer getBizType() 获取最终使用的BizType
 * @method void setBizType(integer $BizType) 设置最终使用的BizType
 * @method string getDataId() 获取和请求中的DataId一致，原样返回
 * @method void setDataId(string $DataId) 设置和请求中的DataId一致，原样返回
 * @method string getEvilLabel() 获取恶意标签，Normal：正常，Polity：涉政，Porn：色情，Illegal：违法，Abuse：谩骂，Terror：暴恐，Ad：广告，Custom：自定义关键词
 * @method void setEvilLabel(string $EvilLabel) 设置恶意标签，Normal：正常，Polity：涉政，Porn：色情，Illegal：违法，Abuse：谩骂，Terror：暴恐，Ad：广告，Custom：自定义关键词
 * @method string getExtra() 获取输出的其他信息，不同客户内容不同
 * @method void setExtra(string $Extra) 设置输出的其他信息，不同客户内容不同
 * @method array getKeywords() 获取命中的关键词
 * @method void setKeywords(array $Keywords) 设置命中的关键词
 * @method integer getScore() 获取命中的模型分值
 * @method void setScore(integer $Score) 设置命中的模型分值
 * @method string getSuggestion() 获取建议值,Block：打击,Review：待复审,Normal：正常
 * @method void setSuggestion(string $Suggestion) 设置建议值,Block：打击,Review：待复审,Normal：正常
 */
class TextData extends AbstractModel
{
    /**
     * @var integer 是否恶意 0：正常 1：可疑
     */
    public $EvilFlag;

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
     * @var TextOutputComm 消息类公共相关参数
     */
    public $Common;

    /**
     * @var array 返回的自定义词库结果
     */
    public $CustomResult;

    /**
     * @var array 返回的详细结果
     */
    public $DetailResult;

    /**
     * @var TextOutputID 消息类ID信息
     */
    public $ID;

    /**
     * @var TextOutputRes 消息类输出结果
     */
    public $Res;

    /**
     * @var array 账号风险检测结果
     */
    public $RiskDetails;

    /**
     * @var integer 最终使用的BizType
     */
    public $BizType;

    /**
     * @var string 和请求中的DataId一致，原样返回
     */
    public $DataId;

    /**
     * @var string 恶意标签，Normal：正常，Polity：涉政，Porn：色情，Illegal：违法，Abuse：谩骂，Terror：暴恐，Ad：广告，Custom：自定义关键词
     */
    public $EvilLabel;

    /**
     * @var string 输出的其他信息，不同客户内容不同
     */
    public $Extra;

    /**
     * @var array 命中的关键词
     */
    public $Keywords;

    /**
     * @var integer 命中的模型分值
     */
    public $Score;

    /**
     * @var string 建议值,Block：打击,Review：待复审,Normal：正常
     */
    public $Suggestion;

    /**
     * @param integer $EvilFlag 是否恶意 0：正常 1：可疑
     * @param integer $EvilType 恶意类型
100：正常
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂
20105：广告引流 
24001：暴恐
     * @param TextOutputComm $Common 消息类公共相关参数
     * @param array $CustomResult 返回的自定义词库结果
     * @param array $DetailResult 返回的详细结果
     * @param TextOutputID $ID 消息类ID信息
     * @param TextOutputRes $Res 消息类输出结果
     * @param array $RiskDetails 账号风险检测结果
     * @param integer $BizType 最终使用的BizType
     * @param string $DataId 和请求中的DataId一致，原样返回
     * @param string $EvilLabel 恶意标签，Normal：正常，Polity：涉政，Porn：色情，Illegal：违法，Abuse：谩骂，Terror：暴恐，Ad：广告，Custom：自定义关键词
     * @param string $Extra 输出的其他信息，不同客户内容不同
     * @param array $Keywords 命中的关键词
     * @param integer $Score 命中的模型分值
     * @param string $Suggestion 建议值,Block：打击,Review：待复审,Normal：正常
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
        if (array_key_exists("EvilFlag",$param) and $param["EvilFlag"] !== null) {
            $this->EvilFlag = $param["EvilFlag"];
        }

        if (array_key_exists("EvilType",$param) and $param["EvilType"] !== null) {
            $this->EvilType = $param["EvilType"];
        }

        if (array_key_exists("Common",$param) and $param["Common"] !== null) {
            $this->Common = new TextOutputComm();
            $this->Common->deserialize($param["Common"]);
        }

        if (array_key_exists("CustomResult",$param) and $param["CustomResult"] !== null) {
            $this->CustomResult = [];
            foreach ($param["CustomResult"] as $key => $value){
                $obj = new CustomResult();
                $obj->deserialize($value);
                array_push($this->CustomResult, $obj);
            }
        }

        if (array_key_exists("DetailResult",$param) and $param["DetailResult"] !== null) {
            $this->DetailResult = [];
            foreach ($param["DetailResult"] as $key => $value){
                $obj = new DetailResult();
                $obj->deserialize($value);
                array_push($this->DetailResult, $obj);
            }
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = new TextOutputID();
            $this->ID->deserialize($param["ID"]);
        }

        if (array_key_exists("Res",$param) and $param["Res"] !== null) {
            $this->Res = new TextOutputRes();
            $this->Res->deserialize($param["Res"]);
        }

        if (array_key_exists("RiskDetails",$param) and $param["RiskDetails"] !== null) {
            $this->RiskDetails = [];
            foreach ($param["RiskDetails"] as $key => $value){
                $obj = new RiskDetails();
                $obj->deserialize($value);
                array_push($this->RiskDetails, $obj);
            }
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("EvilLabel",$param) and $param["EvilLabel"] !== null) {
            $this->EvilLabel = $param["EvilLabel"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }
    }
}
