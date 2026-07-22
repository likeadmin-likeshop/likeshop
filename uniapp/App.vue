<script>
import { mapMutations, mapActions, mapGetters } from 'vuex'
import { inputInviteCode, userLogout } from '@/api/user'
import { userShare, getConfig } from '@/api/app'
import Cache from '@/utils/cache'
import { strToParams, showModal, setTabbar } from '@/utils/tools'
export default {
    globalData: {
        navHeight: ''
    },
    onLaunch: async function (options) {
        uni.hideTabBar({
            animation: false
        })
        // 获取配置
        this.getConfigFun()

        const data = await this.getUser()

        // 获取分享
        this.getShareInfo()
        //获取系统信息
        this.getSystemInfo()
        if (this.bindMobile && !data.mobile) {
            userLogout({
                token: this.token
            }).then((res) => {
                if (res.code == 1) {
                    this.$store.commit('LOGOUT')
                    // setTimeout(() => {
                    //     uni.navigateTo({
                    //         url: '/pages/login/login'
                    //     })
                    // }, 500)
                }
            })
        }
        //#ifdef H5
        const { clarity_app_id } = this.site_statistic
        if (clarity_app_id) {
            ;(function (c, l, a, r, i, t, y) {
                c[a] =
                    c[a] ||
                    function () {
                        ;(c[a].q = c[a].q || []).push(arguments)
                    }
                t = l.createElement(r)
                t.async = 1
                t.src = 'https://www.clarity.ms/tag/' + i
                y = l.getElementsByTagName(r)[0]
                y.parentNode.insertBefore(t, y)
            })(window, document, 'clarity', 'script', clarity_app_id)
        }
        //#endif
    },
    onShow: function (options) {
        //绑定邀请码
        this.bindCode(options)
    },
    onHide: function () {
        console.log('App Hide')
    },
    computed: {
        ...mapGetters(['site_statistic', 'appConfig']),
        bindMobile() {
            // 强制绑定手机号
            return this.appConfig.register_setting_must_bind_mobile
        }
    },
    methods: {
        ...mapMutations(['SETCONFIG']),
        ...mapActions(['getUser']),
        getSystemInfo() {
            uni.getSystemInfo({
                success: (res) => {
                    let { statusBarHeight, platform } = res
                    let navHeight

                    if (platform == 'ios' || platform == 'devtools') {
                        navHeight = statusBarHeight + 44
                    } else {
                        navHeight = statusBarHeight + 48
                    }
                    this.globalData.navHeight = navHeight
                },
                fail(err) {
                    console.log(err)
                }
            })
        },
        async getShareInfo() {
            const { code, data } = await userShare()
            if (code == 1) {
                Cache.set('shareInfo', data)
            }
        },
        async getConfigFun() {
            try {
                const { code, data } = await getConfig()
                if (code == 1) {
                    this.SETCONFIG(data)
                    setTabbar()
                }
            } catch (e) {
                uni.showTabBar()
            }
        },
        bindCode(options) {
            if (!options.query) return
            let invite_code =
                options.query.invite_code ||
                strToParams(decodeURIComponent(options.query.scene)).invite_code
            if (invite_code) {
                inputInviteCode({
                    code: invite_code
                }).then((res) => {
                    if (res.code == -1) {
                        Cache.set('INVITE_CODE', invite_code)
                    }
                })
            }
        }
    }
}
</script>

<style lang="scss">
@import 'styles/base.scss';
/*每个页面公共css */
@import 'components/uview-ui/index.scss';
</style>
