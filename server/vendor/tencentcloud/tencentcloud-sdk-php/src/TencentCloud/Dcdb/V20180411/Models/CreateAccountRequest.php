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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccount请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，形如：dcdbt-ow728lmc，可以通过 DescribeDCDBInstances 查询实例详情获得。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，形如：dcdbt-ow728lmc，可以通过 DescribeDCDBInstances 查询实例详情获得。
 * @method string getUserName() 获取AccountName
 * @method void setUserName(string $UserName) 设置AccountName
 * @method string getHost() 获取可以登录的主机，与mysql 账号的 host 格式一致，可以支持通配符，例如 %，10.%，10.20.%。
 * @method void setHost(string $Host) 设置可以登录的主机，与mysql 账号的 host 格式一致，可以支持通配符，例如 %，10.%，10.20.%。
 * @method string getPassword() 获取账号密码，由字母、数字或常见符号组成，不能包含分号、单引号和双引号，长度为6~32位。
 * @method void setPassword(string $Password) 设置账号密码，由字母、数字或常见符号组成，不能包含分号、单引号和双引号，长度为6~32位。
 * @method integer getReadOnly() 获取是否创建为只读账号，0：否， 1：该账号的sql请求优先选择备机执行，备机不可用时选择主机执行，2：优先选择备机执行，备机不可用时操作失败，3：只从备机读取。
 * @method void setReadOnly(integer $ReadOnly) 设置是否创建为只读账号，0：否， 1：该账号的sql请求优先选择备机执行，备机不可用时选择主机执行，2：优先选择备机执行，备机不可用时操作失败，3：只从备机读取。
 * @method string getDescription() 获取账号备注，可以包含中文、英文字符、常见符号和数字，长度为0~256字符
 * @method void setDescription(string $Description) 设置账号备注，可以包含中文、英文字符、常见符号和数字，长度为0~256字符
 * @method integer getDelayThresh() 获取如果备机延迟超过本参数设置值，系统将认为备机发生故障
建议该参数值大于10。当ReadOnly选择1、2时该参数生效。
 * @method void setDelayThresh(integer $DelayThresh) 设置如果备机延迟超过本参数设置值，系统将认为备机发生故障
建议该参数值大于10。当ReadOnly选择1、2时该参数生效。
 */
class CreateAccountRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，形如：dcdbt-ow728lmc，可以通过 DescribeDCDBInstances 查询实例详情获得。
     */
    public $InstanceId;

    /**
     * @var string AccountName
     */
    public $UserName;

    /**
     * @var string 可以登录的主机，与mysql 账号的 host 格式一致，可以支持通配符，例如 %，10.%，10.20.%。
     */
    public $Host;

    /**
     * @var string 账号密码，由字母、数字或常见符号组成，不能包含分号、单引号和双引号，长度为6~32位。
     */
    public $Password;

    /**
     * @var integer 是否创建为只读账号，0：否， 1：该账号的sql请求优先选择备机执行，备机不可用时选择主机执行，2：优先选择备机执行，备机不可用时操作失败，3：只从备机读取。
     */
    public $ReadOnly;

    /**
     * @var string 账号备注，可以包含中文、英文字符、常见符号和数字，长度为0~256字符
     */
    public $Description;

    /**
     * @var integer 如果备机延迟超过本参数设置值，系统将认为备机发生故障
建议该参数值大于10。当ReadOnly选择1、2时该参数生效。
     */
    public $DelayThresh;

    /**
     * @param string $InstanceId 实例 ID，形如：dcdbt-ow728lmc，可以通过 DescribeDCDBInstances 查询实例详情获得。
     * @param string $UserName AccountName
     * @param string $Host 可以登录的主机，与mysql 账号的 host 格式一致，可以支持通配符，例如 %，10.%，10.20.%。
     * @param string $Password 账号密码，由字母、数字或常见符号组成，不能包含分号、单引号和双引号，长度为6~32位。
     * @param integer $ReadOnly 是否创建为只读账号，0：否， 1：该账号的sql请求优先选择备机执行，备机不可用时选择主机执行，2：优先选择备机执行，备机不可用时操作失败，3：只从备机读取。
     * @param string $Description 账号备注，可以包含中文、英文字符、常见符号和数字，长度为0~256字符
     * @param integer $DelayThresh 如果备机延迟超过本参数设置值，系统将认为备机发生故障
建议该参数值大于10。当ReadOnly选择1、2时该参数生效。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DelayThresh",$param) and $param["DelayThresh"] !== null) {
            $this->DelayThresh = $param["DelayThresh"];
        }
    }
}
