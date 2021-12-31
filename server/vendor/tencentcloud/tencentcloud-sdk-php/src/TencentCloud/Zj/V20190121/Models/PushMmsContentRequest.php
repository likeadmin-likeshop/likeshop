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
 * PushMmsContent请求参数结构体
 *
 * @method string getLicense() 获取商户证书
 * @method void setLicense(string $License) 设置商户证书
 * @method integer getInstanceId() 获取素材样例id
 * @method void setInstanceId(integer $InstanceId) 设置素材样例id
 * @method string getTel() 获取手机号
 * @method void setTel(string $Tel) 设置手机号
 * @method string getSession() 获取附带数据字段
 * @method void setSession(string $Session) 设置附带数据字段
 * @method array getDynamicParaKey() 获取动态参数key(即申请样例时设置的u_或p_开头的动态参数,要求序号有序)
 * @method void setDynamicParaKey(array $DynamicParaKey) 设置动态参数key(即申请样例时设置的u_或p_开头的动态参数,要求序号有序)
 * @method array getDynamicParaValue() 获取动态参数值,和DynamicParaKey对应
 * @method void setDynamicParaValue(array $DynamicParaValue) 设置动态参数值,和DynamicParaKey对应
 */
class PushMmsContentRequest extends AbstractModel
{
    /**
     * @var string 商户证书
     */
    public $License;

    /**
     * @var integer 素材样例id
     */
    public $InstanceId;

    /**
     * @var string 手机号
     */
    public $Tel;

    /**
     * @var string 附带数据字段
     */
    public $Session;

    /**
     * @var array 动态参数key(即申请样例时设置的u_或p_开头的动态参数,要求序号有序)
     */
    public $DynamicParaKey;

    /**
     * @var array 动态参数值,和DynamicParaKey对应
     */
    public $DynamicParaValue;

    /**
     * @param string $License 商户证书
     * @param integer $InstanceId 素材样例id
     * @param string $Tel 手机号
     * @param string $Session 附带数据字段
     * @param array $DynamicParaKey 动态参数key(即申请样例时设置的u_或p_开头的动态参数,要求序号有序)
     * @param array $DynamicParaValue 动态参数值,和DynamicParaKey对应
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Tel",$param) and $param["Tel"] !== null) {
            $this->Tel = $param["Tel"];
        }

        if (array_key_exists("Session",$param) and $param["Session"] !== null) {
            $this->Session = $param["Session"];
        }

        if (array_key_exists("DynamicParaKey",$param) and $param["DynamicParaKey"] !== null) {
            $this->DynamicParaKey = $param["DynamicParaKey"];
        }

        if (array_key_exists("DynamicParaValue",$param) and $param["DynamicParaValue"] !== null) {
            $this->DynamicParaValue = $param["DynamicParaValue"];
        }
    }
}
