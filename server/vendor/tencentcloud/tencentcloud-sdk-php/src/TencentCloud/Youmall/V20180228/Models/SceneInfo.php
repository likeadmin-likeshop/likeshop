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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 场景图信息
 *
 * @method string getScenePictureURL() 获取场景图
 * @method void setScenePictureURL(string $ScenePictureURL) 设置场景图
 * @method integer getHeadX() 获取抓拍头像左上角X坐标在场景图中的像素点位置
 * @method void setHeadX(integer $HeadX) 设置抓拍头像左上角X坐标在场景图中的像素点位置
 * @method integer getHeadY() 获取抓拍头像左上角Y坐标在场景图中的像素点位置
 * @method void setHeadY(integer $HeadY) 设置抓拍头像左上角Y坐标在场景图中的像素点位置
 * @method integer getHeadWidth() 获取抓拍头像在场景图中占有的像素宽度
 * @method void setHeadWidth(integer $HeadWidth) 设置抓拍头像在场景图中占有的像素宽度
 * @method integer getHeadHeight() 获取抓拍头像在场景图中占有的像素高度
 * @method void setHeadHeight(integer $HeadHeight) 设置抓拍头像在场景图中占有的像素高度
 */
class SceneInfo extends AbstractModel
{
    /**
     * @var string 场景图
     */
    public $ScenePictureURL;

    /**
     * @var integer 抓拍头像左上角X坐标在场景图中的像素点位置
     */
    public $HeadX;

    /**
     * @var integer 抓拍头像左上角Y坐标在场景图中的像素点位置
     */
    public $HeadY;

    /**
     * @var integer 抓拍头像在场景图中占有的像素宽度
     */
    public $HeadWidth;

    /**
     * @var integer 抓拍头像在场景图中占有的像素高度
     */
    public $HeadHeight;

    /**
     * @param string $ScenePictureURL 场景图
     * @param integer $HeadX 抓拍头像左上角X坐标在场景图中的像素点位置
     * @param integer $HeadY 抓拍头像左上角Y坐标在场景图中的像素点位置
     * @param integer $HeadWidth 抓拍头像在场景图中占有的像素宽度
     * @param integer $HeadHeight 抓拍头像在场景图中占有的像素高度
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
        if (array_key_exists("ScenePictureURL",$param) and $param["ScenePictureURL"] !== null) {
            $this->ScenePictureURL = $param["ScenePictureURL"];
        }

        if (array_key_exists("HeadX",$param) and $param["HeadX"] !== null) {
            $this->HeadX = $param["HeadX"];
        }

        if (array_key_exists("HeadY",$param) and $param["HeadY"] !== null) {
            $this->HeadY = $param["HeadY"];
        }

        if (array_key_exists("HeadWidth",$param) and $param["HeadWidth"] !== null) {
            $this->HeadWidth = $param["HeadWidth"];
        }

        if (array_key_exists("HeadHeight",$param) and $param["HeadHeight"] !== null) {
            $this->HeadHeight = $param["HeadHeight"];
        }
    }
}
