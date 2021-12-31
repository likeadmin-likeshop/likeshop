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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSession请求参数结构体
 *
 * @method string getClientSession() 获取客户端session信息，从JSSDK请求中获得
 * @method void setClientSession(string $ClientSession) 设置客户端session信息，从JSSDK请求中获得
 * @method string getUserId() 获取游戏用户ID
 * @method void setUserId(string $UserId) 设置游戏用户ID
 * @method string getGameId() 获取游戏ID
 * @method void setGameId(string $GameId) 设置游戏ID
 * @method string getGameRegion() 获取【已废弃】只在TrylockWorker时生效
 * @method void setGameRegion(string $GameRegion) 设置【已废弃】只在TrylockWorker时生效
 * @method string getGameParas() 获取游戏参数
 * @method void setGameParas(string $GameParas) 设置游戏参数
 * @method string getResolution() 获取分辨率,，可设置为1080p或720p或1920x1080格式
 * @method void setResolution(string $Resolution) 设置分辨率,，可设置为1080p或720p或1920x1080格式
 * @method string getImageUrl() 获取背景图url，格式为png或jpeg，宽高1920*1080
 * @method void setImageUrl(string $ImageUrl) 设置背景图url，格式为png或jpeg，宽高1920*1080
 * @method integer getSetNo() 获取【已废弃】
 * @method void setSetNo(integer $SetNo) 设置【已废弃】
 * @method integer getBitrate() 获取单位Mbps，固定码率建议值，有一定浮动范围，后端不动态调整(MaxBitrate和MinBitrate将无效)
 * @method void setBitrate(integer $Bitrate) 设置单位Mbps，固定码率建议值，有一定浮动范围，后端不动态调整(MaxBitrate和MinBitrate将无效)
 * @method integer getMaxBitrate() 获取单位Mbps，动态调整最大码率建议值，会按实际情况调整
 * @method void setMaxBitrate(integer $MaxBitrate) 设置单位Mbps，动态调整最大码率建议值，会按实际情况调整
 * @method integer getMinBitrate() 获取单位Mbps，动态调整最小码率建议值，会按实际情况调整
 * @method void setMinBitrate(integer $MinBitrate) 设置单位Mbps，动态调整最小码率建议值，会按实际情况调整
 * @method integer getFps() 获取帧率，可设置为30、45、60、90、120、144
 * @method void setFps(integer $Fps) 设置帧率，可设置为30、45、60、90、120、144
 * @method string getUserIp() 获取【已废弃】只在TrylockWorker时生效
 * @method void setUserIp(string $UserIp) 设置【已废弃】只在TrylockWorker时生效
 * @method integer getOptimization() 获取【已废弃】优化项，便于客户灰度开启新的优化项，默认为0
 * @method void setOptimization(integer $Optimization) 设置【已废弃】优化项，便于客户灰度开启新的优化项，默认为0
 * @method string getHostUserId() 获取【互动云游】游戏主机用户ID
 * @method void setHostUserId(string $HostUserId) 设置【互动云游】游戏主机用户ID
 * @method string getRole() 获取【互动云游】角色；Player表示玩家；Viewer表示观察者
 * @method void setRole(string $Role) 设置【互动云游】角色；Player表示玩家；Viewer表示观察者
 * @method string getGameContext() 获取游戏相关参数
 * @method void setGameContext(string $GameContext) 设置游戏相关参数
 */
class CreateSessionRequest extends AbstractModel
{
    /**
     * @var string 客户端session信息，从JSSDK请求中获得
     */
    public $ClientSession;

    /**
     * @var string 游戏用户ID
     */
    public $UserId;

    /**
     * @var string 游戏ID
     */
    public $GameId;

    /**
     * @var string 【已废弃】只在TrylockWorker时生效
     */
    public $GameRegion;

    /**
     * @var string 游戏参数
     */
    public $GameParas;

    /**
     * @var string 分辨率,，可设置为1080p或720p或1920x1080格式
     */
    public $Resolution;

    /**
     * @var string 背景图url，格式为png或jpeg，宽高1920*1080
     */
    public $ImageUrl;

    /**
     * @var integer 【已废弃】
     */
    public $SetNo;

    /**
     * @var integer 单位Mbps，固定码率建议值，有一定浮动范围，后端不动态调整(MaxBitrate和MinBitrate将无效)
     */
    public $Bitrate;

    /**
     * @var integer 单位Mbps，动态调整最大码率建议值，会按实际情况调整
     */
    public $MaxBitrate;

    /**
     * @var integer 单位Mbps，动态调整最小码率建议值，会按实际情况调整
     */
    public $MinBitrate;

    /**
     * @var integer 帧率，可设置为30、45、60、90、120、144
     */
    public $Fps;

    /**
     * @var string 【已废弃】只在TrylockWorker时生效
     */
    public $UserIp;

    /**
     * @var integer 【已废弃】优化项，便于客户灰度开启新的优化项，默认为0
     */
    public $Optimization;

    /**
     * @var string 【互动云游】游戏主机用户ID
     */
    public $HostUserId;

    /**
     * @var string 【互动云游】角色；Player表示玩家；Viewer表示观察者
     */
    public $Role;

    /**
     * @var string 游戏相关参数
     */
    public $GameContext;

    /**
     * @param string $ClientSession 客户端session信息，从JSSDK请求中获得
     * @param string $UserId 游戏用户ID
     * @param string $GameId 游戏ID
     * @param string $GameRegion 【已废弃】只在TrylockWorker时生效
     * @param string $GameParas 游戏参数
     * @param string $Resolution 分辨率,，可设置为1080p或720p或1920x1080格式
     * @param string $ImageUrl 背景图url，格式为png或jpeg，宽高1920*1080
     * @param integer $SetNo 【已废弃】
     * @param integer $Bitrate 单位Mbps，固定码率建议值，有一定浮动范围，后端不动态调整(MaxBitrate和MinBitrate将无效)
     * @param integer $MaxBitrate 单位Mbps，动态调整最大码率建议值，会按实际情况调整
     * @param integer $MinBitrate 单位Mbps，动态调整最小码率建议值，会按实际情况调整
     * @param integer $Fps 帧率，可设置为30、45、60、90、120、144
     * @param string $UserIp 【已废弃】只在TrylockWorker时生效
     * @param integer $Optimization 【已废弃】优化项，便于客户灰度开启新的优化项，默认为0
     * @param string $HostUserId 【互动云游】游戏主机用户ID
     * @param string $Role 【互动云游】角色；Player表示玩家；Viewer表示观察者
     * @param string $GameContext 游戏相关参数
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
        if (array_key_exists("ClientSession",$param) and $param["ClientSession"] !== null) {
            $this->ClientSession = $param["ClientSession"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("GameId",$param) and $param["GameId"] !== null) {
            $this->GameId = $param["GameId"];
        }

        if (array_key_exists("GameRegion",$param) and $param["GameRegion"] !== null) {
            $this->GameRegion = $param["GameRegion"];
        }

        if (array_key_exists("GameParas",$param) and $param["GameParas"] !== null) {
            $this->GameParas = $param["GameParas"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("SetNo",$param) and $param["SetNo"] !== null) {
            $this->SetNo = $param["SetNo"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("MaxBitrate",$param) and $param["MaxBitrate"] !== null) {
            $this->MaxBitrate = $param["MaxBitrate"];
        }

        if (array_key_exists("MinBitrate",$param) and $param["MinBitrate"] !== null) {
            $this->MinBitrate = $param["MinBitrate"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("Optimization",$param) and $param["Optimization"] !== null) {
            $this->Optimization = $param["Optimization"];
        }

        if (array_key_exists("HostUserId",$param) and $param["HostUserId"] !== null) {
            $this->HostUserId = $param["HostUserId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("GameContext",$param) and $param["GameContext"] !== null) {
            $this->GameContext = $param["GameContext"];
        }
    }
}
