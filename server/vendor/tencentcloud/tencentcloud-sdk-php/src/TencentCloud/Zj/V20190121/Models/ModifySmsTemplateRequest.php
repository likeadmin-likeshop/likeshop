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
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySmsTemplate请求参数结构体
 *
 * @method string getLicense() 获取商户证书
 * @method void setLicense(string $License) 设置商户证书
 * @method integer getTemplateId() 获取短信模板id
 * @method void setTemplateId(integer $TemplateId) 设置短信模板id
 * @method integer getSignID() 获取短信签名，创建签名时返回
 * @method void setSignID(integer $SignID) 设置短信签名，创建签名时返回
 * @method string getTemplateName() 获取模板名称
 * @method void setTemplateName(string $TemplateName) 设置模板名称
 * @method string getTemplateContent() 获取短信内容，动态内容使用占位符{1}，{2}等表示
 * @method void setTemplateContent(string $TemplateContent) 设置短信内容，动态内容使用占位符{1}，{2}等表示
 * @method integer getSmsType() 获取短信类型：{0:普通短信，1:营销短信}
 * @method void setSmsType(integer $SmsType) 设置短信类型：{0:普通短信，1:营销短信}
 * @method integer getInternational() 获取是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
 * @method void setInternational(integer $International) 设置是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
 * @method string getRemark() 获取短信模板标签
 * @method void setRemark(string $Remark) 设置短信模板标签
 * @method array getUrls() 获取发送短信活动时配置的落地链接地址,仅用作短信活动
 * @method void setUrls(array $Urls) 设置发送短信活动时配置的落地链接地址,仅用作短信活动
 * @method array getCommonParams() 获取发送短信活动时用于展示人群包动态参数模板占位符序号,仅用作短信活动
 * @method void setCommonParams(array $CommonParams) 设置发送短信活动时用于展示人群包动态参数模板占位符序号,仅用作短信活动
 * @method array getUrlParams() 获取发送短信活动时用于展示短连接模板占位符序号,仅用作短信活动
 * @method void setUrlParams(array $UrlParams) 设置发送短信活动时用于展示短连接模板占位符序号,仅用作短信活动
 */
class ModifySmsTemplateRequest extends AbstractModel
{
    /**
     * @var string 商户证书
     */
    public $License;

    /**
     * @var integer 短信模板id
     */
    public $TemplateId;

    /**
     * @var integer 短信签名，创建签名时返回
     */
    public $SignID;

    /**
     * @var string 模板名称
     */
    public $TemplateName;

    /**
     * @var string 短信内容，动态内容使用占位符{1}，{2}等表示
     */
    public $TemplateContent;

    /**
     * @var integer 短信类型：{0:普通短信，1:营销短信}
     */
    public $SmsType;

    /**
     * @var integer 是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
     */
    public $International;

    /**
     * @var string 短信模板标签
     */
    public $Remark;

    /**
     * @var array 发送短信活动时配置的落地链接地址,仅用作短信活动
     */
    public $Urls;

    /**
     * @var array 发送短信活动时用于展示人群包动态参数模板占位符序号,仅用作短信活动
     */
    public $CommonParams;

    /**
     * @var array 发送短信活动时用于展示短连接模板占位符序号,仅用作短信活动
     */
    public $UrlParams;

    /**
     * @param string $License 商户证书
     * @param integer $TemplateId 短信模板id
     * @param integer $SignID 短信签名，创建签名时返回
     * @param string $TemplateName 模板名称
     * @param string $TemplateContent 短信内容，动态内容使用占位符{1}，{2}等表示
     * @param integer $SmsType 短信类型：{0:普通短信，1:营销短信}
     * @param integer $International 是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
     * @param string $Remark 短信模板标签
     * @param array $Urls 发送短信活动时配置的落地链接地址,仅用作短信活动
     * @param array $CommonParams 发送短信活动时用于展示人群包动态参数模板占位符序号,仅用作短信活动
     * @param array $UrlParams 发送短信活动时用于展示短连接模板占位符序号,仅用作短信活动
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
        if (array_key_exists("License",$param) and $param["License"] !== null) {
            $this->License = $param["License"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("SignID",$param) and $param["SignID"] !== null) {
            $this->SignID = $param["SignID"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateContent",$param) and $param["TemplateContent"] !== null) {
            $this->TemplateContent = $param["TemplateContent"];
        }

        if (array_key_exists("SmsType",$param) and $param["SmsType"] !== null) {
            $this->SmsType = $param["SmsType"];
        }

        if (array_key_exists("International",$param) and $param["International"] !== null) {
            $this->International = $param["International"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }

        if (array_key_exists("CommonParams",$param) and $param["CommonParams"] !== null) {
            $this->CommonParams = $param["CommonParams"];
        }

        if (array_key_exists("UrlParams",$param) and $param["UrlParams"] !== null) {
            $this->UrlParams = $param["UrlParams"];
        }
    }
}
