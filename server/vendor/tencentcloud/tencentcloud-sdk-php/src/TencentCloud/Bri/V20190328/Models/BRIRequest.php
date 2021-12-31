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
namespace TencentCloud\Bri\V20190328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BRI请求
 *
 * @method string getService() 获取业务名, 必须是以下六个业务名之一(bri_num,bri_dev,bri_ip_bri_apk,bri_url,bri_social)
 * @method void setService(string $Service) 设置业务名, 必须是以下六个业务名之一(bri_num,bri_dev,bri_ip_bri_apk,bri_url,bri_social)
 * @method string getQQ() 获取QQ号 (业务名为bri_social时必填, 除非已填Wechat)
 * @method void setQQ(string $QQ) 设置QQ号 (业务名为bri_social时必填, 除非已填Wechat)
 * @method string getQQTag() 获取QQ号的可疑标签
 * @method void setQQTag(string $QQTag) 设置QQ号的可疑标签
 * @method string getUrl() 获取网址 (业务名为bri_url时必填)
 * @method void setUrl(string $Url) 设置网址 (业务名为bri_url时必填)
 * @method string getCertMd5() 获取Apk证书Md5  (业务名为bri_apk时必填，除非已填FileMd5)
 * @method void setCertMd5(string $CertMd5) 设置Apk证书Md5  (业务名为bri_apk时必填，除非已填FileMd5)
 * @method string getPackageName() 获取Apk安装包名 (业务名为bri_apk时必填，除非已填FileMd5)
 * @method void setPackageName(string $PackageName) 设置Apk安装包名 (业务名为bri_apk时必填，除非已填FileMd5)
 * @method string getFileMd5() 获取Apk文件Md5 (业务名为bri_apk时必填，除非已填PackageName,CertMd5,FileSize)
 * @method void setFileMd5(string $FileMd5) 设置Apk文件Md5 (业务名为bri_apk时必填，除非已填PackageName,CertMd5,FileSize)
 * @method string getScene() 获取业务场景 (1-注册, 2-登录, 3-发消息)
 * @method void setScene(string $Scene) 设置业务场景 (1-注册, 2-登录, 3-发消息)
 * @method string getPhoneNumber() 获取电话号码 (业务名为bri_num时必填)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneNumber(string $PhoneNumber) 设置电话号码 (业务名为bri_num时必填)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileSize() 获取Apk文件大小  (业务名为bri_apk时必填，除非已填FileMd5)
 * @method void setFileSize(integer $FileSize) 设置Apk文件大小  (业务名为bri_apk时必填，除非已填FileMd5)
 * @method string getIp() 获取点分格式的IP (业务名为bri_ip时必填)
 * @method void setIp(string $Ip) 设置点分格式的IP (业务名为bri_ip时必填)
 * @method string getImei() 获取安卓设备的Imei (业务名为bri_dev时必填)
 * @method void setImei(string $Imei) 设置安卓设备的Imei (业务名为bri_dev时必填)
 * @method string getWechat() 获取微信号 (业务名为bri_social时必填, 除非已填QQ)
 * @method void setWechat(string $Wechat) 设置微信号 (业务名为bri_social时必填, 除非已填QQ)
 * @method string getWechatTag() 获取微信号的可疑标签
 * @method void setWechatTag(string $WechatTag) 设置微信号的可疑标签
 */
class BRIRequest extends AbstractModel
{
    /**
     * @var string 业务名, 必须是以下六个业务名之一(bri_num,bri_dev,bri_ip_bri_apk,bri_url,bri_social)
     */
    public $Service;

    /**
     * @var string QQ号 (业务名为bri_social时必填, 除非已填Wechat)
     */
    public $QQ;

    /**
     * @var string QQ号的可疑标签
     */
    public $QQTag;

    /**
     * @var string 网址 (业务名为bri_url时必填)
     */
    public $Url;

    /**
     * @var string Apk证书Md5  (业务名为bri_apk时必填，除非已填FileMd5)
     */
    public $CertMd5;

    /**
     * @var string Apk安装包名 (业务名为bri_apk时必填，除非已填FileMd5)
     */
    public $PackageName;

    /**
     * @var string Apk文件Md5 (业务名为bri_apk时必填，除非已填PackageName,CertMd5,FileSize)
     */
    public $FileMd5;

    /**
     * @var string 业务场景 (1-注册, 2-登录, 3-发消息)
     */
    public $Scene;

    /**
     * @var string 电话号码 (业务名为bri_num时必填)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneNumber;

    /**
     * @var integer Apk文件大小  (业务名为bri_apk时必填，除非已填FileMd5)
     */
    public $FileSize;

    /**
     * @var string 点分格式的IP (业务名为bri_ip时必填)
     */
    public $Ip;

    /**
     * @var string 安卓设备的Imei (业务名为bri_dev时必填)
     */
    public $Imei;

    /**
     * @var string 微信号 (业务名为bri_social时必填, 除非已填QQ)
     */
    public $Wechat;

    /**
     * @var string 微信号的可疑标签
     */
    public $WechatTag;

    /**
     * @param string $Service 业务名, 必须是以下六个业务名之一(bri_num,bri_dev,bri_ip_bri_apk,bri_url,bri_social)
     * @param string $QQ QQ号 (业务名为bri_social时必填, 除非已填Wechat)
     * @param string $QQTag QQ号的可疑标签
     * @param string $Url 网址 (业务名为bri_url时必填)
     * @param string $CertMd5 Apk证书Md5  (业务名为bri_apk时必填，除非已填FileMd5)
     * @param string $PackageName Apk安装包名 (业务名为bri_apk时必填，除非已填FileMd5)
     * @param string $FileMd5 Apk文件Md5 (业务名为bri_apk时必填，除非已填PackageName,CertMd5,FileSize)
     * @param string $Scene 业务场景 (1-注册, 2-登录, 3-发消息)
     * @param string $PhoneNumber 电话号码 (业务名为bri_num时必填)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileSize Apk文件大小  (业务名为bri_apk时必填，除非已填FileMd5)
     * @param string $Ip 点分格式的IP (业务名为bri_ip时必填)
     * @param string $Imei 安卓设备的Imei (业务名为bri_dev时必填)
     * @param string $Wechat 微信号 (业务名为bri_social时必填, 除非已填QQ)
     * @param string $WechatTag 微信号的可疑标签
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("QQ",$param) and $param["QQ"] !== null) {
            $this->QQ = $param["QQ"];
        }

        if (array_key_exists("QQTag",$param) and $param["QQTag"] !== null) {
            $this->QQTag = $param["QQTag"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("CertMd5",$param) and $param["CertMd5"] !== null) {
            $this->CertMd5 = $param["CertMd5"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Imei",$param) and $param["Imei"] !== null) {
            $this->Imei = $param["Imei"];
        }

        if (array_key_exists("Wechat",$param) and $param["Wechat"] !== null) {
            $this->Wechat = $param["Wechat"];
        }

        if (array_key_exists("WechatTag",$param) and $param["WechatTag"] !== null) {
            $this->WechatTag = $param["WechatTag"];
        }
    }
}
