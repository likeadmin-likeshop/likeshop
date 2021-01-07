// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------



<template>
    <div class="user-vip-container bg-white" v-if="userInfo.nickname">
        <div class="header">
            <div class="user-vip-info row">
                <van-image
                    width="55"
                    height="55"
                    round
                    :src="
                        userInfo.avatar ||
                        require('@A/images/default_avatar.png')
                    "
                />
                <div class="ml10 column">
                    <div class="user-text white xxl row">
                        {{ userInfo.nickname }}
                    </div>
                    <div class="user-level white xs row-center">
                        当前等级：{{userInfo.level_name || "无"}}
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="vip-swiper-container">
                <swiper class="swiper" :options="swiperOption" ref="vipSwiper" @slideChangeTransitionEnd="slideChangeTransitionEnd" >
                    <swiper-slide class="vip-card-item" v-for="(item, index) in levelList" :key="index" :style="{'background-image': `url(${item.background_image})`}">
                        <div class="row-between">
                            <div v-if="item.present_level == 1" class="row grade white sm">当前等级</div>
                            <div v-else-if="item.present_level == -1" class="row user-grade white sm">该会员等级尚未解锁</div>
                            <div v-else-if="item.present_level == 0" class="row user-grade white sm">已解锁</div>
                            <img
                                class="grade-icon"
                                :src="item.image"
                            />
                        </div>
                        <div class="row-between vip-name white">
                            <div class="bold">{{item.name}}</div>
                            <div class="sm">{{item.next_level}}</div>
                        </div>
                        <div class="row-center" style="margin-top: 25px">
                            <div class="vip-progress bg-white row">
                                <div
                                    class="vip-progress-bar"
                                    :style="{'width': `${ (userInfo.user_growth/item.growth_value > 1 ? 1 : userInfo.user_growth/item.growth_value)*100}%`}"
                                ></div>
                            </div>
                        </div>
                        <div class="row-between mt10" style="padding: 0 15px">
                            <router-link
                                :to="{ name: 'userVipGrow' }"
                                class="row"
                            >
                                <div class="sm white" style="line-height: 18px">
                                    当前成长值 <span class="bold">{{userInfo.user_growth}}</span>
                                </div>
                                <van-icon
                                    color="white"
                                    name="arrow"
                                    size="14"
                                />
                            </router-link>
                            <div class="white">{{item.tips}}</div>
                        </div>
                    </swiper-slide>
                </swiper>
            </div>
            <div class="vip-grade-rule">
                <div class="title row">
                    <div class="line br60"></div>
                    <div class="xl ml10 bold">成长值规则</div>
                </div>
                <div class="rule-content column mt10">
                    <div class="lighter" style="white-space:pre" v-html="growthRule">
                    </div>
                </div>
            </div>
            <div class="vip-rights">
                <div class="title row">
                    <div class="line br60"></div>
                    <div class="xl ml10 bold">会员权益</div>
                </div>
                <div class="rights-list row">
                    <div class="rights-item column-center" v-for="(item, index) in privilegeList" :key="index">
                        <img class="mb5" :src="item.image" />
                        <div class="sm">{{item.name}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Swiper, SwiperSlide } from "vue-awesome-swiper";
import Recommend from "@C/Recommend";
import "swiper/swiper-bundle.css";
import { getLevelList } from "@API/user";
export default {
    name: "userVip",
    components: {
        Swiper,
        SwiperSlide,
        Recommend,
    },
    data() {
        return {
            currentIndex: 0,
            swiperOption: {
                slidesPerView: "auto",
                centeredSlides: true,
                spaceBetween: 15,
                initialSlide: 0
            },
            userInfo: {},
            growthRule: "",
            levelList: [],
            privilegeList: []
        };
    },
    methods: {
        $getLevelList() {
            getLevelList().then(res => {
                const {code, data} = res
                if(code != 1) return
                const {user, growth_rule, level_list} = data
                    let index = level_list.findIndex(item => item.present_level == 1)
                    if(index == -1) index = 0
                
                    this.userInfo=user
                    this.growthRule=growth_rule
                    this.levelList=level_list
                    setTimeout(()=> {
                        this.$refs.vipSwiper.$swiper.slideTo(index, 0, false)
                        this.privilegeList = level_list[index].privilege_list
                    })
            })
        },
        slideChangeTransitionEnd(e) {
            const {levelList} = this
            this.privilegeList = levelList[e.activeIndex].privilege_list
        }
    },
    created() {
       this.$getLevelList()
    },
};
</script>

<style lang="scss" scoped>
.user-vip-container {
    background: #fff;
    min-height: 100vh;
    .header {
        padding-top: 15px;
        background-image: url(./../../assets/images/vip_gradeBg.png);
        background-size: 100% 100%;
        height: 191px;
        .user-vip-info {
            padding-left: 15px;
            .user-text {
                line-height: 25px;
                font-weight: bold;
            }
            .user-level {
                border: 1px solid white;
                border-radius: 50px;
                padding: 2px 10px;
                line-height: 15px;
            }
        }
    }
    .content {
        margin-top: -120px;
        .vip-swiper-container {
            .swiper {
                .vip-card-item {
                    background-size: 100% 100%;
                    height: 160px;
                    width: 300px;
                    position: relative;
                    .grade {
                        line-height: 18px;
                        background-color: rgba(0, 0, 0, 0.5);
                        border-top-right-radius: 50px;
                        border-bottom-right-radius: 50px;
                        height: 25px;
                        padding: 0 14px;
                    }
                    .user-grade {
                        line-height: 18px;
                        margin-left: 15px;
                    }
                    .grade-icon {
                        width: 60px;
                        height: 50px;
                    }
                    .vip-name {
                        font-size: 23px;
                        font-weight: bold;
                        text-align: center;
                        padding: 0 15px;
                        align-items: flex-end;
                        margin-top: 10px;
                    }
                    .vip-progress {
                        height: 4px;
                        width: 270px;
                        .vip-progress-bar {
                            background-color: #f8d07c;
                            height: 100%;
                        }
                    }
                }
            }
        }
        .vip-grade-rule {
            margin: 12px 20px;
            .title {
                .line {
                    width: 4px;
                    height: 17px;
                    background-color: #f79c0c;
                }
            }
            .rule-content {
                padding-left: 12px;
                ul {
                    li {
                        list-style-type: decimal;
                        font-size: 13px;
                        p {
                            text-align: left;
                            font-size: 13px;
                            line-height: 18px;
                            margin-bottom: 7px;
                        }
                    }
                }
            }
        }
        .vip-rights {
            margin: 12px 20px;
            .title {
                padding: 14px 0;
                .line {
                    width: 4px;
                    height: 17px;
                    background-color: #f79c0c;
                }
            }
            .rights-list {
                flex-wrap: wrap;
                .rights-item {
                    width: 25%;
                    padding-bottom: 15px;
                    img {
                        width: 41px;
                        height: 41px;
                    }
                }
            }
        }
    }
}
</style>