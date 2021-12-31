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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务视频cos授权信息
 *
 * @method integer getType() 获取授权类型，可选值： 
0：bucket授权，需要将对应bucket授权给本服务帐号（3020447271），否则会读写cos失败； 
1：key托管，把cos的账号id和key托管于本服务，本服务会提供一个托管id； 
3：临时key授权。
注意：目前智能编辑还不支持临时key授权；画质重生目前只支持bucket授权
 * @method void setType(integer $Type) 设置授权类型，可选值： 
0：bucket授权，需要将对应bucket授权给本服务帐号（3020447271），否则会读写cos失败； 
1：key托管，把cos的账号id和key托管于本服务，本服务会提供一个托管id； 
3：临时key授权。
注意：目前智能编辑还不支持临时key授权；画质重生目前只支持bucket授权
 * @method string getHostedId() 获取cos账号托管id，Type等于1时必选。
 * @method void setHostedId(string $HostedId) 设置cos账号托管id，Type等于1时必选。
 * @method string getSecretId() 获取cos身份识别id，Type等于3时必选。
 * @method void setSecretId(string $SecretId) 设置cos身份识别id，Type等于3时必选。
 * @method string getSecretKey() 获取cos身份秘钥，Type等于3时必选。
 * @method void setSecretKey(string $SecretKey) 设置cos身份秘钥，Type等于3时必选。
 * @method string getToken() 获取临时授权 token，Type等于3时必选。
 * @method void setToken(string $Token) 设置临时授权 token，Type等于3时必选。
 */
class CosAuthMode extends AbstractModel
{
    /**
     * @var integer 授权类型，可选值： 
0：bucket授权，需要将对应bucket授权给本服务帐号（3020447271），否则会读写cos失败； 
1：key托管，把cos的账号id和key托管于本服务，本服务会提供一个托管id； 
3：临时key授权。
注意：目前智能编辑还不支持临时key授权；画质重生目前只支持bucket授权
     */
    public $Type;

    /**
     * @var string cos账号托管id，Type等于1时必选。
     */
    public $HostedId;

    /**
     * @var string cos身份识别id，Type等于3时必选。
     */
    public $SecretId;

    /**
     * @var string cos身份秘钥，Type等于3时必选。
     */
    public $SecretKey;

    /**
     * @var string 临时授权 token，Type等于3时必选。
     */
    public $Token;

    /**
     * @param integer $Type 授权类型，可选值： 
0：bucket授权，需要将对应bucket授权给本服务帐号（3020447271），否则会读写cos失败； 
1：key托管，把cos的账号id和key托管于本服务，本服务会提供一个托管id； 
3：临时key授权。
注意：目前智能编辑还不支持临时key授权；画质重生目前只支持bucket授权
     * @param string $HostedId cos账号托管id，Type等于1时必选。
     * @param string $SecretId cos身份识别id，Type等于3时必选。
     * @param string $SecretKey cos身份秘钥，Type等于3时必选。
     * @param string $Token 临时授权 token，Type等于3时必选。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("HostedId",$param) and $param["HostedId"] !== null) {
            $this->HostedId = $param["HostedId"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }
    }
}
