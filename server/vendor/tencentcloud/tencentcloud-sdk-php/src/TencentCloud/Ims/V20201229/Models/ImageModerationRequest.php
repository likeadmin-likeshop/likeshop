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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageModeration请求参数结构体
 *
 * @method string getBizType() 获取该字段用于标识业务场景。您可以在内容安全控制台创建对应的ID，配置不同的内容审核策略，通过接口调用，默认不填为0，后端使用默认策略。 -- 该字段暂未开放。
 * @method void setBizType(string $BizType) 设置该字段用于标识业务场景。您可以在内容安全控制台创建对应的ID，配置不同的内容审核策略，通过接口调用，默认不填为0，后端使用默认策略。 -- 该字段暂未开放。
 * @method string getDataId() 获取数据ID，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符
 * @method void setDataId(string $DataId) 设置数据ID，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符
 * @method string getFileContent() 获取数据Base64编码，图片检测接口为图片文件内容，大小不能超过5M
 * @method void setFileContent(string $FileContent) 设置数据Base64编码，图片检测接口为图片文件内容，大小不能超过5M
 * @method string getFileUrl() 获取图片资源访问链接，__与FileContent参数必须二选一输入__
 * @method void setFileUrl(string $FileUrl) 设置图片资源访问链接，__与FileContent参数必须二选一输入__
 * @method integer getInterval() 获取截帧频率，GIF图/长图检测专用，默认值为0，表示只会检测GIF图/长图的第一帧
 * @method void setInterval(integer $Interval) 设置截帧频率，GIF图/长图检测专用，默认值为0，表示只会检测GIF图/长图的第一帧
 * @method integer getMaxFrames() 获取GIF图/长图检测专用，代表均匀最大截帧数量，默认值为1（即只取GIF第一张，或长图不做切分处理（可能会造成处理超时））。
 * @method void setMaxFrames(integer $MaxFrames) 设置GIF图/长图检测专用，代表均匀最大截帧数量，默认值为1（即只取GIF第一张，或长图不做切分处理（可能会造成处理超时））。
 * @method User getUser() 获取账号相关信息字段，填入后可识别违规风险账号。
 * @method void setUser(User $User) 设置账号相关信息字段，填入后可识别违规风险账号。
 * @method Device getDevice() 获取设备相关信息字段，填入后可识别违规风险设备。
 * @method void setDevice(Device $Device) 设置设备相关信息字段，填入后可识别违规风险设备。
 */
class ImageModerationRequest extends AbstractModel
{
    /**
     * @var string 该字段用于标识业务场景。您可以在内容安全控制台创建对应的ID，配置不同的内容审核策略，通过接口调用，默认不填为0，后端使用默认策略。 -- 该字段暂未开放。
     */
    public $BizType;

    /**
     * @var string 数据ID，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符
     */
    public $DataId;

    /**
     * @var string 数据Base64编码，图片检测接口为图片文件内容，大小不能超过5M
     */
    public $FileContent;

    /**
     * @var string 图片资源访问链接，__与FileContent参数必须二选一输入__
     */
    public $FileUrl;

    /**
     * @var integer 截帧频率，GIF图/长图检测专用，默认值为0，表示只会检测GIF图/长图的第一帧
     */
    public $Interval;

    /**
     * @var integer GIF图/长图检测专用，代表均匀最大截帧数量，默认值为1（即只取GIF第一张，或长图不做切分处理（可能会造成处理超时））。
     */
    public $MaxFrames;

    /**
     * @var User 账号相关信息字段，填入后可识别违规风险账号。
     */
    public $User;

    /**
     * @var Device 设备相关信息字段，填入后可识别违规风险设备。
     */
    public $Device;

    /**
     * @param string $BizType 该字段用于标识业务场景。您可以在内容安全控制台创建对应的ID，配置不同的内容审核策略，通过接口调用，默认不填为0，后端使用默认策略。 -- 该字段暂未开放。
     * @param string $DataId 数据ID，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符
     * @param string $FileContent 数据Base64编码，图片检测接口为图片文件内容，大小不能超过5M
     * @param string $FileUrl 图片资源访问链接，__与FileContent参数必须二选一输入__
     * @param integer $Interval 截帧频率，GIF图/长图检测专用，默认值为0，表示只会检测GIF图/长图的第一帧
     * @param integer $MaxFrames GIF图/长图检测专用，代表均匀最大截帧数量，默认值为1（即只取GIF第一张，或长图不做切分处理（可能会造成处理超时））。
     * @param User $User 账号相关信息字段，填入后可识别违规风险账号。
     * @param Device $Device 设备相关信息字段，填入后可识别违规风险设备。
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("MaxFrames",$param) and $param["MaxFrames"] !== null) {
            $this->MaxFrames = $param["MaxFrames"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = new User();
            $this->User->deserialize($param["User"]);
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = new Device();
            $this->Device->deserialize($param["Device"]);
        }
    }
}
