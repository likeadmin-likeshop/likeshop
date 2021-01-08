import React from 'react'
import { View, StyleSheet, Image, Text, Platform, TextInput, SafeAreaView, ScrollView } from 'react-native'
import { ScreenProps } from '../../typing'
import Theme from '../../constraint/Theme'
import { getImageSize, row, rowCenter, rowBetween, contain } from '../../constraint/Style'
import OrderGoods from '../../components/bussiness/OrderGoods'
import StarRating from 'react-native-star-rating';
import PriceFormate from '../../components/bussiness/PriceFormate'
import { getCommentInfo, addGoodsComment } from '../../api/user'
import { host, isSuccess } from '../../utils/request'
import { loading_img } from '../../constraint/Image'
import PressButton from '../../components/main/PressButton'
import { Portal, Toast } from '@ant-design/react-native'
import { goBack, navigate } from '../../utils/navigation'
import UploadProfile from '../../components/bussiness/UploadProfile'
import { getToken } from '../../utils/auth'
import { imageUpload } from '../../utils/imageUpload'

type GoodsReviewProps = ScreenProps<'GoodsReview'>

const DescType = {
    BEST: '好评',
    MIDDLE: '中评',
    BAD: '差评',
    NONE: ''
}

export default class GoodsReview extends React.Component<GoodsReviewProps, any> {
    id: number
    constructor(props: GoodsReviewProps) {
        super(props);
        this.id = props.route.params.id;
        this.state = {
            goodsList: {},
            goodsDesc: DescType.NONE,
            goodsStar: 0,
            descStar: 0,
            serviceStar: 0,
            expressStar: 0,
            comment: '',
            fileList: []
        }
    }

    $getCommentInfo() {
        getCommentInfo({ id: this.id }).then((res: any) => {
            if (isSuccess(res)) {
                this.setState({
                    goodsList: res.data,
                })
            }
        })
    }

    $addGoodsComment() {
        const { goodsStar, descStar, serviceStar, expressStar, comment, fileList } = this.state;
        let image = fileList.map((item: any) => item.url);
        if (goodsStar == 0) { Toast.info('请给商品评个分吧～'); return; }
        if (descStar == 0) { Toast.info('请给描述相符评个分吧～'); return; }
        if (serviceStar == 0) { Toast.info('请给服务态度评个分吧～'); return; }
        if (expressStar == 0) { Toast.info('请给配送服务评个分吧～'); return; }
        addGoodsComment({
            id: this.id,
            goods_comment: goodsStar,
            service_comment: serviceStar,
            express_comment: expressStar,
            description_comment: descStar,
            comment: comment,
            image
        }).then((res: any) => {
            if (isSuccess(res)) {
                Toast.info('评价成功', 1, () => {
                    navigate("UserEvaluation", {
                        active: 1
                    })
                })
            }
        })
    }

    UNSAFE_componentWillMount() {
        this.$getCommentInfo();
    }
    unLoadImage() {

    }
    render() {
        let { goodsList } = this.state;
        console.log(goodsList)
        return (
            <SafeAreaView style={contain}>
                <ScrollView>
                    <View style={Style.goodsReviewContainer}>
                        <View style={[Style.goodsCart, row]}>
                            <Image source={{ uri: goodsList.image }} style={getImageSize(80)} />
                            <View style={Style.goodsInfo} >
                                <Text numberOfLines={2} style={Style.goodsName} >{goodsList.name}</Text>
                                {/* <Text style={{ fontSize: Theme.font_size_xs, color: Theme.color_text_muted, marginBottom: 10 }}>{goodsList.spec_value}</Text> */}
                                <View style={rowBetween}>
                                    <PriceFormate price={goodsList.goods_price} color={Theme.brand_primary} prevSize={Theme.font_size_md} signSize={Theme.font_size_md} />
                                    <Text>x{goodsList.goods_num}</Text>
                                </View>
                            </View>
                        </View>
                        <View style={[row, Style.goodsEvaluate]}>
                            <Text style={{ fontSize: Theme.font_size_base }}>商品评价</Text>
                            <StarRating
                                fullStarColor={'#FF2C3C'}
                                emptyStarColor={'#e2e2e2'}
                                starStyle={{ marginRight: 4 }}
                                containerStyle={{ marginLeft: 15 }}
                                starSize={19}
                                maxStars={5}
                                rating={this.state.goodsStar}
                                selectedStar={(rating: number) => {
                                    let { goodsDesc } = this.state
                                    switch (rating) {
                                        case 0:
                                            goodsDesc = DescType.NONE;
                                            break;
                                        case 1:
                                        case 2:
                                            goodsDesc = DescType.BAD;
                                            break;
                                        case 3:
                                            goodsDesc = DescType.MIDDLE;
                                            break;
                                        default:
                                            goodsDesc = DescType.BEST;
                                            break;
                                    }
                                    this.setState({
                                        goodsStar: rating,
                                        goodsDesc: goodsDesc
                                    })
                                }}
                            />
                            <Text
                                style={{ marginLeft: 5, color: this.state.goodsDesc == DescType.BAD ? Theme.color_text_muted : Theme.brand_primary }}>{this.state.goodsDesc}</Text>
                        </View>
                        <View style={Style.storeEvaluateContain}>
                            {/* <Text style={Style.storeName}>{goodsList.name}</Text> */}
                            <View style={{ ...row, ...Style.inputItem }}>
                                <Text style={{ fontSize: Theme.font_size_base }}>描述相符</Text>
                                <StarRating
                                    fullStarColor={'#FF2C3C'}
                                    emptyStarColor={'#e2e2e2'}
                                    starStyle={{ marginRight: 4 }}
                                    containerStyle={{ marginLeft: 15 }}
                                    starSize={19}
                                    maxStars={5}
                                    rating={this.state.descStar}
                                    selectedStar={(rating: number) => {
                                        this.setState({
                                            descStar: rating
                                        })
                                    }}
                                />
                            </View>
                            <View style={{ ...row, ...Style.inputItem }}>
                                <Text style={{ fontSize: Theme.font_size_base }}>服务态度</Text>
                                <StarRating
                                    fullStarColor={'#FF2C3C'}
                                    emptyStarColor={'#e2e2e2'}
                                    starStyle={{ marginRight: 4 }}
                                    containerStyle={{ marginLeft: 15 }}
                                    starSize={19}
                                    maxStars={5}
                                    rating={this.state.serviceStar}
                                    selectedStar={(rating: number) => {
                                        this.setState({
                                            serviceStar: rating
                                        })
                                    }}
                                />
                            </View>
                            <View style={{ ...row }}>
                                <Text style={{ fontSize: Theme.font_size_base }}>配送服务</Text>
                                <StarRating
                                    fullStarColor={'#FF2C3C'}
                                    emptyStarColor={'#e2e2e2'}
                                    starStyle={{ marginRight: 4 }}
                                    containerStyle={{ marginLeft: 15 }}
                                    starSize={19}
                                    maxStars={5}
                                    rating={this.state.expressStar}
                                    selectedStar={(rating: number) => {
                                        this.setState({
                                            expressStar: rating
                                        })
                                    }}
                                />
                            </View>
                        </View>
                        <View style={Style.goodsDescContain}>
                            <Text style={{ fontSize: Theme.font_size_sm, fontWeight: 'bold', lineHeight: 21 }}>商品描述</Text>
                            <View style={Style.textInputContain}>
                                <TextInput
                                    blurOnSubmit={false}
                                    multiline={true} style={Style.textInputMuti}
                                    placeholder={"宝贝收到还满意吗，说说你的使用心得。分享给想买的他们吧！！"}
                                    onChangeText={(text) => {
                                        this.setState({
                                            comment: text
                                        })
                                    }}
                                />
                            </View>
                            <UploadProfile
                                style={{ marginTop: 10 }}
                                maxCount={5}
                                deleteImage={(index) => {
                                    let { fileList } = this.state;
                                    fileList.splice(index, 1)
                                    this.setState({
                                        fileList: fileList
                                    })
                                }}
                                fileList={this.state.fileList}
                                afterRead={(files) => {
                                    const unloadArr: Promise<unknown>[] = []
                                    files.forEach((item) => {
                                        unloadArr.push(imageUpload(item))
                                    })
                                    Promise.all(unloadArr).then((res) => {
                                        this.setState({
                                            fileList: res
                                        })
                                    }).catch((res) => {

                                        Toast.info(res)
                                    })

                                }} />
                        </View>
                        <PressButton style={{ ...Style.primaryBtn, marginHorizontal: 13, marginVertical: 25 }} onPress={() => {
                            this.$addGoodsComment()
                        }}>
                            <Text style={{ color: 'white' }}>立即评价</Text>
                        </PressButton>
                    </View>
                </ScrollView>

            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({
    goodsReviewContainer: {
        marginTop: 10
    },
    goodsContainer: {
        backgroundColor: 'white',
        paddingHorizontal: 12,
        paddingVertical: 10
    },
    goodsCart: {
        paddingHorizontal: 12,
        paddingVertical: 10,
        backgroundColor: Theme.fill_base
    },
    goodsInfo: {
        flex: 1,
        marginLeft: 12
    },
    goodsEvaluate: {
        paddingVertical: 15,
        paddingHorizontal: 10,
        backgroundColor: "white",
        borderColor: Theme.border_color_base,
        borderTopWidth: Theme.border_width_sm,
        borderBottomWidth: Theme.border_width_sm
    },
    storeName: {
        color: Theme.color_text_secondary,
        fontSize: Theme.font_size_base,
        marginBottom: 10
    },
    storeEvaluateContain: {
        padding: 10,
        backgroundColor: "white"
    },
    goodsName: {
        marginBottom: 5
    },
    inputItem: {
        marginBottom: 10
    },
    goodsDescContain: {
        marginTop: 10,
        backgroundColor: 'white',
        paddingHorizontal: 10,
        paddingTop: 10,
        paddingBottom: 19
    },
    textInputContain: {
        marginTop: 10
    },
    textInputMuti: {
        backgroundColor: '#F8F8F8',
        padding: 10,
        height: 120,
        fontSize: Theme.font_size_base,
        lineHeight: 23,
        textAlignVertical: "top"
    },
    primaryBtn: {
        backgroundColor: Theme.brand_primary,
        paddingVertical: 10,
        alignItems: 'center',
        borderRadius: Theme.radius_circel
    }
})