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
namespace TencentCloud\Npp\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetVirtualNum请求参数结构体
 *
 * @method string getBizAppId() 获取业务appid
 * @method void setBizAppId(string $BizAppId) 设置业务appid
 * @method string getDst() 获取被叫号码(号码前加 0086，如 008613631686024)
 * @method void setDst(string $Dst) 设置被叫号码(号码前加 0086，如 008613631686024)
 * @method string getSrc() 获取主叫号码(号码前加 0086，如 008613631686024)，xb 模式下是不用填写，axb 模式下是必选
 * @method void setSrc(string $Src) 设置主叫号码(号码前加 0086，如 008613631686024)，xb 模式下是不用填写，axb 模式下是必选
 * @method array getAccreditList() 获取{“accreditList”:[“008613631686024”,”008612345678910”]}，主要用于 N-1 场景，号码绑定非共享是独占型，指定了 dst 独占中间号绑定，accreditList 表示这个列表成员可以拨打 dst 绑 定的中间号，默认值为空，表示所有号码都可以拨打独占型中间号绑定，最大集合不允许超过 30 个，仅适用于xb模式
 * @method void setAccreditList(array $AccreditList) 设置{“accreditList”:[“008613631686024”,”008612345678910”]}，主要用于 N-1 场景，号码绑定非共享是独占型，指定了 dst 独占中间号绑定，accreditList 表示这个列表成员可以拨打 dst 绑 定的中间号，默认值为空，表示所有号码都可以拨打独占型中间号绑定，最大集合不允许超过 30 个，仅适用于xb模式
 * @method string getAssignVirtualNum() 获取指定中间号（格式：008617013541251），如果该中间号已被使用则返回绑定失败。如果不带该字段则由腾讯侧从号码池里自动分配
 * @method void setAssignVirtualNum(string $AssignVirtualNum) 设置指定中间号（格式：008617013541251），如果该中间号已被使用则返回绑定失败。如果不带该字段则由腾讯侧从号码池里自动分配
 * @method string getRecord() 获取是否录音，0表示不录音，1表示录音。默认为不录音，注意如果需要录音回调，通话完成后需要等待一段时间，收到录音回调之后，再解绑中间号。
 * @method void setRecord(string $Record) 设置是否录音，0表示不录音，1表示录音。默认为不录音，注意如果需要录音回调，通话完成后需要等待一段时间，收到录音回调之后，再解绑中间号。
 * @method string getCityId() 获取主被叫显号号码归属地，指定该参数说明显号归属该城市，如果没有该城市号码会随机选取一个城市或者后台配置返回107，返回码详见 《腾讯-中间号-城市id.xlsx》
 * @method void setCityId(string $CityId) 设置主被叫显号号码归属地，指定该参数说明显号归属该城市，如果没有该城市号码会随机选取一个城市或者后台配置返回107，返回码详见 《腾讯-中间号-城市id.xlsx》
 * @method string getBizId() 获取应用二级业务 ID，bizId 需保证在该 appId 下全局唯一，最大长度不超过 16 个字节。
 * @method void setBizId(string $BizId) 设置应用二级业务 ID，bizId 需保证在该 appId 下全局唯一，最大长度不超过 16 个字节。
 * @method string getMaxAssignTime() 获取号码最大绑定时间，不填默认为 24 小时，最长绑定时间是168小时，单位秒
 * @method void setMaxAssignTime(string $MaxAssignTime) 设置号码最大绑定时间，不填默认为 24 小时，最长绑定时间是168小时，单位秒
 * @method string getStatusFlag() 获取主叫发起呼叫状态：1
被叫发起呼叫状态：256
主叫响铃状态：2
被叫响铃状态：512
主叫接听状态：4
被叫接听状态：1024
主叫拒绝接听状态：8
被叫拒绝接听状态：2048
主叫正常挂机状态：16
被叫正常挂机状态：4096
主叫呼叫异常：32
被叫呼叫异常：8192

例如：
值为 0：表示所有状态不需要推送
值为 4：表示只要推送主叫接听状态
值为 16191：表示所有状态都需要推送（上面所有值和）
 * @method void setStatusFlag(string $StatusFlag) 设置主叫发起呼叫状态：1
被叫发起呼叫状态：256
主叫响铃状态：2
被叫响铃状态：512
主叫接听状态：4
被叫接听状态：1024
主叫拒绝接听状态：8
被叫拒绝接听状态：2048
主叫正常挂机状态：16
被叫正常挂机状态：4096
主叫呼叫异常：32
被叫呼叫异常：8192

例如：
值为 0：表示所有状态不需要推送
值为 4：表示只要推送主叫接听状态
值为 16191：表示所有状态都需要推送（上面所有值和）
 * @method string getStatusUrl() 获取请填写statusFlag并设置值，状态回调通知地址，正式环境可以配置默认推送地址
 * @method void setStatusUrl(string $StatusUrl) 设置请填写statusFlag并设置值，状态回调通知地址，正式环境可以配置默认推送地址
 * @method string getHangupUrl() 获取话单回调通知地址，正式环境可以配置默认推送地址
 * @method void setHangupUrl(string $HangupUrl) 设置话单回调通知地址，正式环境可以配置默认推送地址
 * @method string getRecordUrl() 获取录单 URL 回调通知地址，正式环境可以配置默认推送地址
 * @method void setRecordUrl(string $RecordUrl) 设置录单 URL 回调通知地址，正式环境可以配置默认推送地址
 */
class GetVirtualNumRequest extends AbstractModel
{
    /**
     * @var string 业务appid
     */
    public $BizAppId;

    /**
     * @var string 被叫号码(号码前加 0086，如 008613631686024)
     */
    public $Dst;

    /**
     * @var string 主叫号码(号码前加 0086，如 008613631686024)，xb 模式下是不用填写，axb 模式下是必选
     */
    public $Src;

    /**
     * @var array {“accreditList”:[“008613631686024”,”008612345678910”]}，主要用于 N-1 场景，号码绑定非共享是独占型，指定了 dst 独占中间号绑定，accreditList 表示这个列表成员可以拨打 dst 绑 定的中间号，默认值为空，表示所有号码都可以拨打独占型中间号绑定，最大集合不允许超过 30 个，仅适用于xb模式
     */
    public $AccreditList;

    /**
     * @var string 指定中间号（格式：008617013541251），如果该中间号已被使用则返回绑定失败。如果不带该字段则由腾讯侧从号码池里自动分配
     */
    public $AssignVirtualNum;

    /**
     * @var string 是否录音，0表示不录音，1表示录音。默认为不录音，注意如果需要录音回调，通话完成后需要等待一段时间，收到录音回调之后，再解绑中间号。
     */
    public $Record;

    /**
     * @var string 主被叫显号号码归属地，指定该参数说明显号归属该城市，如果没有该城市号码会随机选取一个城市或者后台配置返回107，返回码详见 《腾讯-中间号-城市id.xlsx》
     */
    public $CityId;

    /**
     * @var string 应用二级业务 ID，bizId 需保证在该 appId 下全局唯一，最大长度不超过 16 个字节。
     */
    public $BizId;

    /**
     * @var string 号码最大绑定时间，不填默认为 24 小时，最长绑定时间是168小时，单位秒
     */
    public $MaxAssignTime;

    /**
     * @var string 主叫发起呼叫状态：1
被叫发起呼叫状态：256
主叫响铃状态：2
被叫响铃状态：512
主叫接听状态：4
被叫接听状态：1024
主叫拒绝接听状态：8
被叫拒绝接听状态：2048
主叫正常挂机状态：16
被叫正常挂机状态：4096
主叫呼叫异常：32
被叫呼叫异常：8192

例如：
值为 0：表示所有状态不需要推送
值为 4：表示只要推送主叫接听状态
值为 16191：表示所有状态都需要推送（上面所有值和）
     */
    public $StatusFlag;

    /**
     * @var string 请填写statusFlag并设置值，状态回调通知地址，正式环境可以配置默认推送地址
     */
    public $StatusUrl;

    /**
     * @var string 话单回调通知地址，正式环境可以配置默认推送地址
     */
    public $HangupUrl;

    /**
     * @var string 录单 URL 回调通知地址，正式环境可以配置默认推送地址
     */
    public $RecordUrl;

    /**
     * @param string $BizAppId 业务appid
     * @param string $Dst 被叫号码(号码前加 0086，如 008613631686024)
     * @param string $Src 主叫号码(号码前加 0086，如 008613631686024)，xb 模式下是不用填写，axb 模式下是必选
     * @param array $AccreditList {“accreditList”:[“008613631686024”,”008612345678910”]}，主要用于 N-1 场景，号码绑定非共享是独占型，指定了 dst 独占中间号绑定，accreditList 表示这个列表成员可以拨打 dst 绑 定的中间号，默认值为空，表示所有号码都可以拨打独占型中间号绑定，最大集合不允许超过 30 个，仅适用于xb模式
     * @param string $AssignVirtualNum 指定中间号（格式：008617013541251），如果该中间号已被使用则返回绑定失败。如果不带该字段则由腾讯侧从号码池里自动分配
     * @param string $Record 是否录音，0表示不录音，1表示录音。默认为不录音，注意如果需要录音回调，通话完成后需要等待一段时间，收到录音回调之后，再解绑中间号。
     * @param string $CityId 主被叫显号号码归属地，指定该参数说明显号归属该城市，如果没有该城市号码会随机选取一个城市或者后台配置返回107，返回码详见 《腾讯-中间号-城市id.xlsx》
     * @param string $BizId 应用二级业务 ID，bizId 需保证在该 appId 下全局唯一，最大长度不超过 16 个字节。
     * @param string $MaxAssignTime 号码最大绑定时间，不填默认为 24 小时，最长绑定时间是168小时，单位秒
     * @param string $StatusFlag 主叫发起呼叫状态：1
被叫发起呼叫状态：256
主叫响铃状态：2
被叫响铃状态：512
主叫接听状态：4
被叫接听状态：1024
主叫拒绝接听状态：8
被叫拒绝接听状态：2048
主叫正常挂机状态：16
被叫正常挂机状态：4096
主叫呼叫异常：32
被叫呼叫异常：8192

例如：
值为 0：表示所有状态不需要推送
值为 4：表示只要推送主叫接听状态
值为 16191：表示所有状态都需要推送（上面所有值和）
     * @param string $StatusUrl 请填写statusFlag并设置值，状态回调通知地址，正式环境可以配置默认推送地址
     * @param string $HangupUrl 话单回调通知地址，正式环境可以配置默认推送地址
     * @param string $RecordUrl 录单 URL 回调通知地址，正式环境可以配置默认推送地址
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
        if (array_key_exists("BizAppId",$param) and $param["BizAppId"] !== null) {
            $this->BizAppId = $param["BizAppId"];
        }

        if (array_key_exists("Dst",$param) and $param["Dst"] !== null) {
            $this->Dst = $param["Dst"];
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("AccreditList",$param) and $param["AccreditList"] !== null) {
            $this->AccreditList = $param["AccreditList"];
        }

        if (array_key_exists("AssignVirtualNum",$param) and $param["AssignVirtualNum"] !== null) {
            $this->AssignVirtualNum = $param["AssignVirtualNum"];
        }

        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = $param["Record"];
        }

        if (array_key_exists("CityId",$param) and $param["CityId"] !== null) {
            $this->CityId = $param["CityId"];
        }

        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("MaxAssignTime",$param) and $param["MaxAssignTime"] !== null) {
            $this->MaxAssignTime = $param["MaxAssignTime"];
        }

        if (array_key_exists("StatusFlag",$param) and $param["StatusFlag"] !== null) {
            $this->StatusFlag = $param["StatusFlag"];
        }

        if (array_key_exists("StatusUrl",$param) and $param["StatusUrl"] !== null) {
            $this->StatusUrl = $param["StatusUrl"];
        }

        if (array_key_exists("HangupUrl",$param) and $param["HangupUrl"] !== null) {
            $this->HangupUrl = $param["HangupUrl"];
        }

        if (array_key_exists("RecordUrl",$param) and $param["RecordUrl"] !== null) {
            $this->RecordUrl = $param["RecordUrl"];
        }
    }
}
