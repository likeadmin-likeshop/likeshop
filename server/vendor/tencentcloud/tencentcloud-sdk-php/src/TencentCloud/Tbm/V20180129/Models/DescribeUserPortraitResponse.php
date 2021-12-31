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
namespace TencentCloud\Tbm\V20180129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserPortrait返回参数结构体
 *
 * @method AgePortraitInfo getAge() 获取年龄画像
 * @method void setAge(AgePortraitInfo $Age) 设置年龄画像
 * @method GenderPortraitInfo getGender() 获取性别画像
 * @method void setGender(GenderPortraitInfo $Gender) 设置性别画像
 * @method ProvincePortraitInfo getProvince() 获取省份画像
 * @method void setProvince(ProvincePortraitInfo $Province) 设置省份画像
 * @method MoviePortraitInfo getMovie() 获取电影喜好画像
 * @method void setMovie(MoviePortraitInfo $Movie) 设置电影喜好画像
 * @method StarPortraitInfo getStar() 获取明星喜好画像
 * @method void setStar(StarPortraitInfo $Star) 设置明星喜好画像
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUserPortraitResponse extends AbstractModel
{
    /**
     * @var AgePortraitInfo 年龄画像
     */
    public $Age;

    /**
     * @var GenderPortraitInfo 性别画像
     */
    public $Gender;

    /**
     * @var ProvincePortraitInfo 省份画像
     */
    public $Province;

    /**
     * @var MoviePortraitInfo 电影喜好画像
     */
    public $Movie;

    /**
     * @var StarPortraitInfo 明星喜好画像
     */
    public $Star;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param AgePortraitInfo $Age 年龄画像
     * @param GenderPortraitInfo $Gender 性别画像
     * @param ProvincePortraitInfo $Province 省份画像
     * @param MoviePortraitInfo $Movie 电影喜好画像
     * @param StarPortraitInfo $Star 明星喜好画像
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = new AgePortraitInfo();
            $this->Age->deserialize($param["Age"]);
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = new GenderPortraitInfo();
            $this->Gender->deserialize($param["Gender"]);
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = new ProvincePortraitInfo();
            $this->Province->deserialize($param["Province"]);
        }

        if (array_key_exists("Movie",$param) and $param["Movie"] !== null) {
            $this->Movie = new MoviePortraitInfo();
            $this->Movie->deserialize($param["Movie"]);
        }

        if (array_key_exists("Star",$param) and $param["Star"] !== null) {
            $this->Star = new StarPortraitInfo();
            $this->Star->deserialize($param["Star"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
