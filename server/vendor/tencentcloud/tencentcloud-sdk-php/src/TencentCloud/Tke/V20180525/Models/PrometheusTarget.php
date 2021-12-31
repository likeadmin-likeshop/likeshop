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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * prometheus一个抓取目标的信息
 *
 * @method string getUrl() 获取抓取目标的URL
 * @method void setUrl(string $Url) 设置抓取目标的URL
 * @method string getState() 获取target当前状态,当前支持
up = 健康
down = 不健康
unknown = 未知
 * @method void setState(string $State) 设置target当前状态,当前支持
up = 健康
down = 不健康
unknown = 未知
 * @method array getLabels() 获取target的元label
 * @method void setLabels(array $Labels) 设置target的元label
 * @method string getLastScrape() 获取上一次抓取的时间
 * @method void setLastScrape(string $LastScrape) 设置上一次抓取的时间
 * @method float getScrapeDuration() 获取上一次抓取的耗时，单位是s
 * @method void setScrapeDuration(float $ScrapeDuration) 设置上一次抓取的耗时，单位是s
 * @method string getError() 获取上一次抓取如果错误，该字段存储错误信息
 * @method void setError(string $Error) 设置上一次抓取如果错误，该字段存储错误信息
 */
class PrometheusTarget extends AbstractModel
{
    /**
     * @var string 抓取目标的URL
     */
    public $Url;

    /**
     * @var string target当前状态,当前支持
up = 健康
down = 不健康
unknown = 未知
     */
    public $State;

    /**
     * @var array target的元label
     */
    public $Labels;

    /**
     * @var string 上一次抓取的时间
     */
    public $LastScrape;

    /**
     * @var float 上一次抓取的耗时，单位是s
     */
    public $ScrapeDuration;

    /**
     * @var string 上一次抓取如果错误，该字段存储错误信息
     */
    public $Error;

    /**
     * @param string $Url 抓取目标的URL
     * @param string $State target当前状态,当前支持
up = 健康
down = 不健康
unknown = 未知
     * @param array $Labels target的元label
     * @param string $LastScrape 上一次抓取的时间
     * @param float $ScrapeDuration 上一次抓取的耗时，单位是s
     * @param string $Error 上一次抓取如果错误，该字段存储错误信息
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("LastScrape",$param) and $param["LastScrape"] !== null) {
            $this->LastScrape = $param["LastScrape"];
        }

        if (array_key_exists("ScrapeDuration",$param) and $param["ScrapeDuration"] !== null) {
            $this->ScrapeDuration = $param["ScrapeDuration"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}
