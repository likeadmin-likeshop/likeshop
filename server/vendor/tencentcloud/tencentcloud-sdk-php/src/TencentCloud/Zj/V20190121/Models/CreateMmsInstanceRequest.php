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
 * CreateMmsInstance请求参数结构体
 *
 * @method string getLicense() 获取商户证书
 * @method void setLicense(string $License) 设置商户证书
 * @method string getInstanceName() 获取样例名称
 * @method void setInstanceName(string $InstanceName) 设置样例名称
 * @method string getTitle() 获取标题
 * @method void setTitle(string $Title) 设置标题
 * @method string getSign() 获取签名
 * @method void setSign(string $Sign) 设置签名
 * @method array getContents() 获取素材内容
 * @method void setContents(array $Contents) 设置素材内容
 * @method array getUrls() 获取样例中链接动态变量对应的链接，和占位符顺序一致
 * @method void setUrls(array $Urls) 设置样例中链接动态变量对应的链接，和占位符顺序一致
 * @method array getPhoneType() 获取机型列表
 * @method void setPhoneType(array $PhoneType) 设置机型列表
 * @method array getCommonParams() 获取发送超短活动时用于展示人群包动态参数模板占位符序号或接口发送时变量占位符序号
 * @method void setCommonParams(array $CommonParams) 设置发送超短活动时用于展示人群包动态参数模板占位符序号或接口发送时变量占位符序号
 * @method array getUrlParams() 获取发送超短活动时用于展示短连接模板占位符序号,仅用作超短活动
 * @method void setUrlParams(array $UrlParams) 设置发送超短活动时用于展示短连接模板占位符序号,仅用作超短活动
 */
class CreateMmsInstanceRequest extends AbstractModel
{
    /**
     * @var string 商户证书
     */
    public $License;

    /**
     * @var string 样例名称
     */
    public $InstanceName;

    /**
     * @var string 标题
     */
    public $Title;

    /**
     * @var string 签名
     */
    public $Sign;

    /**
     * @var array 素材内容
     */
    public $Contents;

    /**
     * @var array 样例中链接动态变量对应的链接，和占位符顺序一致
     */
    public $Urls;

    /**
     * @var array 机型列表
     */
    public $PhoneType;

    /**
     * @var array 发送超短活动时用于展示人群包动态参数模板占位符序号或接口发送时变量占位符序号
     */
    public $CommonParams;

    /**
     * @var array 发送超短活动时用于展示短连接模板占位符序号,仅用作超短活动
     */
    public $UrlParams;

    /**
     * @param string $License 商户证书
     * @param string $InstanceName 样例名称
     * @param string $Title 标题
     * @param string $Sign 签名
     * @param array $Contents 素材内容
     * @param array $Urls 样例中链接动态变量对应的链接，和占位符顺序一致
     * @param array $PhoneType 机型列表
     * @param array $CommonParams 发送超短活动时用于展示人群包动态参数模板占位符序号或接口发送时变量占位符序号
     * @param array $UrlParams 发送超短活动时用于展示短连接模板占位符序号,仅用作超短活动
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Sign",$param) and $param["Sign"] !== null) {
            $this->Sign = $param["Sign"];
        }

        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            $this->Contents = [];
            foreach ($param["Contents"] as $key => $value){
                $obj = new CreateMmsInstanceItem();
                $obj->deserialize($value);
                array_push($this->Contents, $obj);
            }
        }

        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }

        if (array_key_exists("PhoneType",$param) and $param["PhoneType"] !== null) {
            $this->PhoneType = $param["PhoneType"];
        }

        if (array_key_exists("CommonParams",$param) and $param["CommonParams"] !== null) {
            $this->CommonParams = $param["CommonParams"];
        }

        if (array_key_exists("UrlParams",$param) and $param["UrlParams"] !== null) {
            $this->UrlParams = $param["UrlParams"];
        }
    }
}
