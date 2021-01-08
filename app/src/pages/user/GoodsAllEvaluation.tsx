import React from 'react'
import { ScreenProps } from '../../typing';
import { View, StyleSheet, Text, Image, TouchableOpacity, SafeAreaView } from 'react-native';
import Theme from '../../constraint/Theme';
import { row, rowCenter, getImageSize, contain } from '../../constraint/Style';
import LFlatList from '../../components/main/LFlatList';
import { getCommentCategory, getCommentList } from '../../api/store';
import { isSuccess } from '../../utils/request';
import PressButton from '../../components/main/PressButton';
import StarRating from 'react-native-star-rating';
import ImagePreview from '../../components/main/ImagePreview';
import EmptyView from '../../components/bussiness/EmptyView';
import { goods_null } from '../../constraint/Image';
type GoodsAllEvaluationProps = ScreenProps<'GoodsAllEvaluation'>;

export default class GoodsAllEvaluation extends React.Component <GoodsAllEvaluationProps, any> {
    userEvaluationLf: LFlatList | null | undefined;
    id: number;
    constructor(props : GoodsAllEvaluationProps) {
        super(props);
        this.id = props.route.params?.id
        this.state = {
            active: [true, false, false, false, false],
            comment: [],
            percent: '',
            showlFlatList: false,
            preImages: [],
            showImagePreview: false
        }
    }

    $getCommentCategory() {
        getCommentCategory({
            goods_id: this.id
        }).then((res: any) => {
            if(isSuccess(res)) {
                this.setState({
                    comment: res.data.comment,
                    percent: res.data.percent,
                    showlFlatList: true,
                    listsType: 0
                })
            }
        })
    }

    UNSAFE_componentWillMount() {
        this.$getCommentCategory();
    }

    header() {
        const {comment} = this.state
        if(comment[0].count < 1) return <View />
        return (
            <View>
                <View style={Style.header}>
                    <Text style={{fontSize: Theme.font_size_xs, color: Theme.color_text_secondary}}>
                        商品好评率
                        <Text style={{fontSize: Theme.font_size_xs, color: Theme.brand_primary}}>    {this.state.percent}</Text>
                    </Text>
                </View>
                <View style={[Style.TagContain, row]}>
                    {
                       comment.map((item: any, index: number) => (
                            <PressButton 
                            key={item.id}
                            onPress={() => {
                                let {active} = this.state;
                                active.forEach((i: any, idx: number) => {
                                    if(idx == index) {
                                        active[idx] = true;
                                    } else {
                                        active[idx] = false;
                                    }
                                });
                                this.setState({
                                    active: active,
                                    listsType: index
                                }, () => {
                                    this.userEvaluationLf?.reset()
                                })
                            }}
                            style={{
                                ...Style.TagItem, 
                                ...rowCenter, 
                                backgroundColor: this.state.active[index] ? Theme.brand_primary : '#F4F4F4',
                                display: item.count > 0 ? 'flex' : 'none'
                            }}>
                                <Text style={{fontSize: Theme.font_size_xs, color: this.state.active[index] ? Theme.fill_base : Theme.color_text_paragraph}}>
                                    {item.name}<Text>({item.count})</Text>
                                </Text>
                            </PressButton>
                        ))
                    }
                </View>
            </View>
        )
    }

    renderItem(data: any) {
        const items = data.item;
        const preImage = items.image.map((item: any) => ({ url: item }))
        return (
            <View style={Style.userEvaluationItem}>
                <View style={row}>
                    <Image style={[getImageSize(35), {borderRadius: Theme.radius_circel}]} source={{uri: items.avatar}}></Image>
                    <Text style={{fontSize: Theme.font_size_sm, marginLeft: 10}}>{items.nickname}</Text>
                    <StarRating
                    fullStarColor={'#FF2C3C'}
                    emptyStarColor={'#e2e2e2'}
                    starStyle={{marginLeft: 4}}
                    containerStyle={{marginLeft: 4}}
                    starSize={13}
                    maxStars={5}
                    rating={items.goods_comment}
                    disabled={true}
                    />
                </View>
                <View style={[row, {marginTop: 10}]}>
                    <Text style={{fontSize: Theme.font_size_xs, color: Theme.color_text_muted}}>{items.create_time}</Text>
                    <Text style={{fontSize: Theme.font_size_xs, color: Theme.color_text_muted, marginLeft: 10}}>{items.spec_value_str}</Text>
                </View>
                <View style={[Style.userEvaluationContent, {display: items.comment ? 'flex' : "none"}]}>
                    <Text style={{fontSize: Theme.font_size_base, lineHeight: 19}}>{items.comment}</Text>
                </View>
                <View style={[row, {flexWrap: "wrap"}]}>
                    {
                        items.image.map((item: any, index: number) => (
                            <TouchableOpacity activeOpacity={1} style={{marginRight: 10, marginTop: 10}} key={index} onPress={() => {
                                this.setState({
                                    showImagePreview: true,
                                    preImages: preImage
                                })
                            }}>
                                <Image source={{uri: item}} style={getImageSize(70)} />
                            </TouchableOpacity>
                        ))
                    }
                </View>
                {
                    items.reply &&
                    <View style={Style.sellerRecallContainer}>
                        <Text style={{color: Theme.color_text_secondary}}>
                            商家回复：<Text numberOfLines={2} style={{color: Theme.color_text_base}}>{items.reply}</Text>
                        </Text>
                    </View>
                }
            </View>
        )
    }

    _onLoadUserEvaluation(pageNum = 1, callback: any) {
        this._getUserEvaluationData(pageNum, callback)
    }

    _getUserEvaluationData(pageNum:number, callback: any) {
        getCommentList({ page_no: pageNum, id: this.state.listsType, goods_id: this.id })
        .then((res: any) => {
            callback(res.data.list, { haveNext: res.data.more })
        }).catch(e => {
        })
    }

    _onRefresh(callback: any) {
        this._getUserEvaluationData(1, callback)
    }

    userEvaluationContain() {
        return (
            <View style={Style.userEvaluationContain}>
                {
                  this.state.showlFlatList &&  (<LFlatList
                    ListHeaderComponent={() => this.header()}
                    style={{ flex: 1 }}
                    ref={(lf) => {this.userEvaluationLf = lf}}
                    showsHorizontalScrollIndicator={false}
                    onLoadMore={this._onLoadUserEvaluation.bind(this)}
                    onRefresh={this._onRefresh.bind(this)}
                    loadMoreable={true}
                    refreshable={true}
                    keyExtractor={(item: any, index: any) => index}
                    renderItem={(data) => this.renderItem(data)}
                    emptyView={() => <EmptyView source={goods_null} text={"暂无评价"}  />}
                    />)
                }
            </View>
        )
    }

    render() {
        return (
            <SafeAreaView style={contain}>
                <View style={Style.goodsAllEvaluationContainer}>
                    {this.userEvaluationContain()}
                    <ImagePreview imageUrls={this.state.preImages} show={this.state.showImagePreview} imgfield="url" onClose={() => this.setState({ showImagePreview: false })} />
                </View>
            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({
    goodsAllEvaluationContainer: {
        flex: 1,
    },
    header: {
        marginTop: 10,
        paddingVertical: 12.5,
        paddingHorizontal: 13.5,
        backgroundColor: Theme.fill_base,
        borderBottomColor: Theme.border_color_base,
        borderBottomWidth: Theme.border_width_md
    },
    TagContain: {
        paddingVertical: 15,
        paddingLeft: 10,
        flexWrap: 'wrap',
        backgroundColor: Theme.fill_base
    },
    TagItem: {
        paddingHorizontal: 14.5,
        paddingVertical: 4,
        backgroundColor: Theme.brand_primary,
        borderRadius: Theme.radius_circel,
        marginRight: 5,
        marginBottom: 5
    },
    userEvaluationContain: {
        flex: 1
    },
    userEvaluationItem: {
        flex: 1,
        borderColor: Theme.border_color_base,
        borderBottomWidth: Theme.border_width_md,
        backgroundColor: Theme.fill_base,
        padding: 10,
    },
    userEvaluationContent: {
        minHeight: 20,
        marginTop: 8,
    },
    sellerRecallContainer: {
        backgroundColor: Theme.fill_grey,
        paddingVertical: 12,
        paddingHorizontal: 10,
        borderRadius: 6
    }
})