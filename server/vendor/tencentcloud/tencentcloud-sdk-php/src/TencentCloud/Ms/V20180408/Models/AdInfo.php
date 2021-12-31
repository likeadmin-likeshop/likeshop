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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 广告信息
 *
 * @method array getSpots() 获取插播广告列表
 * @method void setSpots(array $Spots) 设置插播广告列表
 * @method array getBoutiqueRecommands() 获取精品推荐广告列表
 * @method void setBoutiqueRecommands(array $BoutiqueRecommands) 设置精品推荐广告列表
 * @method array getFloatWindowses() 获取悬浮窗广告列表
 * @method void setFloatWindowses(array $FloatWindowses) 设置悬浮窗广告列表
 * @method array getBanners() 获取banner广告列表
 * @method void setBanners(array $Banners) 设置banner广告列表
 * @method array getIntegralWalls() 获取积分墙广告列表
 * @method void setIntegralWalls(array $IntegralWalls) 设置积分墙广告列表
 * @method array getNotifyBars() 获取通知栏广告列表
 * @method void setNotifyBars(array $NotifyBars) 设置通知栏广告列表
 */
class AdInfo extends AbstractModel
{
    /**
     * @var array 插播广告列表
     */
    public $Spots;

    /**
     * @var array 精品推荐广告列表
     */
    public $BoutiqueRecommands;

    /**
     * @var array 悬浮窗广告列表
     */
    public $FloatWindowses;

    /**
     * @var array banner广告列表
     */
    public $Banners;

    /**
     * @var array 积分墙广告列表
     */
    public $IntegralWalls;

    /**
     * @var array 通知栏广告列表
     */
    public $NotifyBars;

    /**
     * @param array $Spots 插播广告列表
     * @param array $BoutiqueRecommands 精品推荐广告列表
     * @param array $FloatWindowses 悬浮窗广告列表
     * @param array $Banners banner广告列表
     * @param array $IntegralWalls 积分墙广告列表
     * @param array $NotifyBars 通知栏广告列表
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
        if (array_key_exists("Spots",$param) and $param["Spots"] !== null) {
            $this->Spots = [];
            foreach ($param["Spots"] as $key => $value){
                $obj = new PluginInfo();
                $obj->deserialize($value);
                array_push($this->Spots, $obj);
            }
        }

        if (array_key_exists("BoutiqueRecommands",$param) and $param["BoutiqueRecommands"] !== null) {
            $this->BoutiqueRecommands = [];
            foreach ($param["BoutiqueRecommands"] as $key => $value){
                $obj = new PluginInfo();
                $obj->deserialize($value);
                array_push($this->BoutiqueRecommands, $obj);
            }
        }

        if (array_key_exists("FloatWindowses",$param) and $param["FloatWindowses"] !== null) {
            $this->FloatWindowses = [];
            foreach ($param["FloatWindowses"] as $key => $value){
                $obj = new PluginInfo();
                $obj->deserialize($value);
                array_push($this->FloatWindowses, $obj);
            }
        }

        if (array_key_exists("Banners",$param) and $param["Banners"] !== null) {
            $this->Banners = [];
            foreach ($param["Banners"] as $key => $value){
                $obj = new PluginInfo();
                $obj->deserialize($value);
                array_push($this->Banners, $obj);
            }
        }

        if (array_key_exists("IntegralWalls",$param) and $param["IntegralWalls"] !== null) {
            $this->IntegralWalls = [];
            foreach ($param["IntegralWalls"] as $key => $value){
                $obj = new PluginInfo();
                $obj->deserialize($value);
                array_push($this->IntegralWalls, $obj);
            }
        }

        if (array_key_exists("NotifyBars",$param) and $param["NotifyBars"] !== null) {
            $this->NotifyBars = [];
            foreach ($param["NotifyBars"] as $key => $value){
                $obj = new PluginInfo();
                $obj->deserialize($value);
                array_push($this->NotifyBars, $obj);
            }
        }
    }
}
