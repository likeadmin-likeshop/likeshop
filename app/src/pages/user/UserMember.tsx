import React from 'react'
import { ScreenProps } from '../../typing'
import { View, SafeAreaView, StyleSheet, Text, Image, ScrollView, ImageBackground } from 'react-native'
import { contain, rowBetween, getImageSize, columnCenter, row, rowCenter } from '../../constraint/Style'
import Theme from '../../constraint/Theme'
import { arrow_right_w, bg_silverMember_common, bg_silverMember_diamond, bg_silverMember_gold, bg_silverMember_platinum, bg_vip_grade, icon_grade_common, icon_grade_diamond, icon_grade_gold, icon_grade_platinum, my_portrait_empty, vip_baoyou, vip_coupon, vip_coutom, vip_discount } from '../../constraint/Image'
import LinearGradient from 'react-native-linear-gradient'
import { ScreenWidth } from '../../utils/app'
import PressButton from '../../components/main/PressButton'
import Carousel from 'react-native-snap-carousel';
import { navigate } from '../../utils/navigation'
import { getLevelList } from '../../api/user'
import { isSuccess } from '../../utils/request'
import Recommend from '../../components/bussiness/Recommend'
import LoadingView from '../../components/main/LoadingView'


type UserMemberProps = ScreenProps<'UserMember'>

export default class UserMember extends React.Component<UserMemberProps, any> {
    private _carousel!: Carousel<any> | null
    constructor(props: UserMemberProps) {
        super(props)
        this.state = {
            currentIndex: 0,
            userInfo: {},
            growthRule: "",
            levelList: [],
            rightsList: [{
                name: "购物折扣",
                icon: vip_discount
            }, {
                name: "全场免邮费",
                icon: vip_baoyou
            }, {
                name: "会员优惠券",
                icon: vip_coupon
            }, {
                name: "专属客服",
                icon: vip_coutom
            }]
        }
    }
    UNSAFE_componentWillMount() {
        this._getLevelList()
    }
    _getLevelList() {
        getLevelList().then((res: any) => {
            if (isSuccess(res)) {
                const { user, growth_rule, level_list } = res.data
                let index = level_list.findIndex((item: any) => item.present_level == 1)
                if(index == -1) index = 0
                this.setState({
                    userInfo: user,
                    growthRule: growth_rule,
                    levelList: level_list,
                    privilegeList: level_list[index].privilege_list
                }, )
                setTimeout(() => this._carousel?.snapToItem(index, true), 200)
            }
        })
    }
    getCurrentText(level:number) {
        switch(level) {
            case -1 : return "该会员等级尚未解锁"
            case 0 : return "已解锁"
            case 1 : return "当前等级"
        }
    }
    _renderItem = ({ item, index }: {item: any, index: any}) => {
        const { userInfo } = this.state
        return (
            <ImageBackground style={{ flex: 1, height: 160 }} source={{ uri: item.background_image }}>
                <View style={rowBetween}>
                    <View style={[item.present_level == 1? styles.grade : { marginLeft: 20 }, rowCenter]}>
                        <Text style={{ color: 'white', fontSize: Theme.font_size_sm }}>{this.getCurrentText(item.present_level)}</Text>
                    </View>
                    <Image source={{ uri: item.image }} style={{ width: 60, height: 51 }} />
                </View>
                <View style={[rowBetween, {paddingHorizontal: 15, alignItems: 'flex-end', marginTop: 10}]}>
                    <Text style={styles.vipName}>{item.name}</Text>
                    <Text style={{color: Theme.fill_base}}>{item.next_level}</Text>
                </View>
                <View style={[rowCenter, { marginTop: 25 }]}>
                    <View style={[styles.vipProgress, row]}>
                        <View style={[styles.vipProgressBar, { width: (userInfo.user_growth/item.growth_value > 1 ? 1 : userInfo.user_growth/item.growth_value)*100 + '%' }]}>
                        </View>
                    </View>
                </View>
                <View style={[rowBetween, { marginTop: 10, paddingHorizontal: 15 }]}>
                    <PressButton style={row} onPress={() => navigate("GrowthValue")}>
                        <Text style={{ fontSize: Theme.font_size_sm, color: 'white', lineHeight: 18 }}>当前成长值<Text style={{ fontWeight: "bold" }}>{userInfo.user_growth}</Text></Text>
                        <Image source={arrow_right_w} style={getImageSize(14)} />
                    </PressButton>
                    <Text style={{color: Theme.fill_base}}>{item.tips}</Text>
                </View>
            </ImageBackground>
        );
    }


    render() {
        const { userInfo, levelList, growthRule, privilegeList, currentIndex } = this.state
        if (!userInfo.nickname) return <LoadingView />
        return (
            <SafeAreaView style={{ flex: 1, backgroundColor: Theme.fill_base }}>
                <ScrollView showsVerticalScrollIndicator={false}>
                    <Image source={bg_vip_grade} style={{ position: 'absolute', width: ScreenWidth, height: 206 / 375 * ScreenWidth }} />
                    <View style={{ ...row, padding: 15 }}>
                        <Image source={{ uri: userInfo.avatar }} style={[getImageSize(55), { borderRadius: 55 }]} />
                        <View style={{ marginLeft: 10 }}>
                            <Text style={{ fontSize: Theme.font_size_xxl, color: Theme.fill_base, fontWeight: 'bold' }} onPress={() => { navigate('GrowthValue') }}>{userInfo.nickname}</Text>
                            <View style={{ marginTop: 5, borderColor: '#F6F6F6', borderWidth: Theme.border_width_sm, borderRadius: 30, paddingHorizontal: 10, paddingVertical: 2 }}>
                                <Text style={{ color: '#F6F6F6', fontSize: Theme.font_size_xs }}>当前等级：{userInfo.level_name || "无"}</Text>
                            </View>
                        </View>
                    </View>
                    <Carousel
                        ref={(ref) => this._carousel = ref}
                        data={levelList}
                        // loop={true}
                        renderItem={this._renderItem}
                        sliderWidth={ScreenWidth}
                        itemWidth={300}
                        onSnapToItem={(index) => { this.setState({ privilegeList: levelList[index].privilege_list }) }}
                    />
                    <View style={styles.content}>
                        <View style={row}>
                            <View style={styles.titleLeft} />
                            <Text style={styles.title}>成长值规则</Text>
                        </View>
                        <View style={{ marginLeft: 23, marginTop: 10 }}>
                            <Text style={styles.desc}>{growthRule}</Text>
                        </View>
                    </View>
                    <View style={styles.content}>
                        <View style={row}>
                            <View style={styles.titleLeft} />
                            <Text style={styles.title}>会员权益</Text>
                        </View>
                        <View style={{ marginTop: 15, ...row, flexWrap: "wrap" }}>
                            {privilegeList.map((item: any, index: any) => (
                                <View style={styles.rightsItem}>
                                    <Image source={{uri:item.image}} style={getImageSize(41)} />
                                    <Text style={{ marginTop: 11, fontSize: Theme.font_size_sm }}>{item.name}</Text>
                                </View>
                            ))}
                        </View>
                    </View>
                    {/* <Recommend /> */}
                </ScrollView>
            </SafeAreaView>
        )
    }
}

const styles = StyleSheet.create({
    content: {
        marginTop: 15,
        marginHorizontal: 10
    },
    titleLeft: {
        width: 3,
        height: 15,
        backgroundColor: '#F79C0C',
        borderRadius: 30,
        marginHorizontal: 10
    },
    title: {
        fontSize: Theme.font_size_lg,
        fontWeight: 'bold'
    },
    desc: {
        color: Theme.color_text_secondary,
        marginBottom: 7,
        lineHeight: 24
    },
    rightsItem: {
        ...columnCenter,
        width: '25%',
        marginBottom: 10
    },
    grade: {
        backgroundColor: 'rgba(0, 0, 0, 0.5)',
        lineHeight: 18,
        borderTopRightRadius: 50,
        borderBottomRightRadius: 50,
        height: 25,
        paddingHorizontal: 14
    },
    vipName: {
        fontSize: 23,
        fontWeight: 'bold',
        textAlign: "center",
        color: 'white'
    },
    vipProgress: {
        backgroundColor: 'white',
        height: 4,
        width: 270,
        borderRadius: 6,
        overflow: "hidden"
    },
    vipProgressBar: {
        backgroundColor: '#f8d07c',
        height: '100%'
    }
})