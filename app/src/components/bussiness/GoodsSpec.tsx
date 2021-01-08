import React from "react";
import { View, Image, Text, StyleSheet, ScrollView } from "react-native";
import Theme from "../../constraint/Theme";
import { getImageSize, row, rowBetween, rowCenter } from "../../constraint/Style";
import PressButton from "../main/PressButton";
import CustomImage from "../main/CustomImage";
import PriceFormate from "./PriceFormate";
import { navigate } from "../../utils/navigation";
import Popup from "../main/Popup";
import { isiPhoneX } from "../../utils/app";
import  Stepper  from "../main/Stepper";
import { addCart } from "../../api/store";
import { isSuccess } from "../../utils/request";
import { Toast } from "@ant-design/react-native";
import { postEvent } from "../../utils/event";
interface GoodsSpecProps {
    show?: boolean
    showAdd: boolean
    showBuy: boolean
    goods: any
    onClose: () => void
    onChange?: (val:any) => void
    onAdd?:() => void
}
class GoodsSpec extends React.Component<GoodsSpecProps, any> {
    [x: string]: any;
    constructor(props: GoodsSpecProps) {
        super(props);
        this.state = {
            checkedGoods: {},
            goodsNum: 1,
            specList: []
        }
    }
    static defaultProps = {
        show: false,
        goods: {},
        showAdd: true,
        showBuy: true,
        onClose: () => {},
        onChange: (val:any) => {}
    }
    UNSAFE_componentWillReceiveProps(props: GoodsSpecProps) {
        if (props.goods.id !== this.props.goods.id) {
            this.setGoods(props.goods)
        }
    }
    setGoods(goods: any) {
        const {onChange} = this.props
        let specList = goods.goods_spec || []
        let goodsItem = goods.goods_item || []
        specList.forEach((item: any) => {
            if (item.spec_value) {
                item.spec_value.forEach((specitem: any, specindex: number) => {
                    if (specindex == 0) {
                        specitem.checked = 1
                    } else {
                        specitem.checked = 0
                    }
                })
            }
        })
        const checkedGoods =  goodsItem.length ? goodsItem[0] : {}
        this.setState({
            specList,
            checkedGoods
        })
        onChange && onChange(checkedGoods)
    }
    choseSpecItem(id: any, specId: any) {
        let { specList } = this.state
        specList.forEach((item: any) => {
            if (item.spec_value && item.id == id) {
                item.spec_value.forEach((specitem: any) => {
                    specitem.checked = 0
                    if (specitem.id == specId) {
                        specitem.checked = 1
                    }
                })
            }
        })
        this.setState({
            specList
        })
        this.setCheckGoods(specList)
    }
    setCheckGoods(specList: any[]) {
        const { goods: { goods_item }, onChange } = this.props
        let keyArr: any[] = []
        specList.forEach((item) => {
            if (item.spec_value) {
                item.spec_value.forEach((specitem: any) => {
                    if (specitem.checked) {
                        keyArr.push(specitem.id)
                    }
                })
            }
        })
        if (!keyArr.length) return
        let key = keyArr.join(',')
        let index = goods_item.findIndex((item:any) => {
            return item.spec_value_ids == key
        })
        if(index == -1) return
        this.setState({
            checkedGoods: goods_item[index] 
        })
        onChange && onChange(goods_item[index])
    }
    header() {
        const { checkedGoods: { image, price, stock, spec_value_str, }, goodsNum } = this.state
        return (
            <View style={styles.header}>
                <Image source={{ uri: image }} style={{ ...getImageSize(90), borderRadius: 5 }} />
                <View style={{ marginLeft: Theme.h_spacing_md }}>
                    <PriceFormate  color={Theme.brand_primary} price={price} signSize={16} prevSize={23} nextSize={16} />
                    <Text style={{ fontSize: Theme.font_size_sm, marginTop: Theme.v_spacing_lg }}>库存：{stock}件</Text>
                    <Text style={{ fontSize: Theme.font_size_sm, marginTop: Theme.v_spacing_sm }}>已选择 {spec_value_str}，{goodsNum}件</Text>
                </View>
            </View>
        )
    }
    main() {
        const { specList , goodsNum, checkedGoods: {stock}} = this.state
        const specListView = specList.map((item: any, index: number) => {
            return (
                <View key={item.id}>
                    <Text style={{ marginBottom: Theme.v_spacing_md }}>{item.name}</Text>
                    <View style={{ flexDirection: 'row', flexWrap: "wrap" }}>
                        {item.spec_value ? item.spec_value.map((specItem: any) => (
                            <PressButton
                                key={specItem.id}
                                style={{ ...styles.specItem, backgroundColor: specItem.checked ? Theme.brand_primary : '#F4F4F4' }}
                                onPress={() => this.choseSpecItem(item.id, specItem.id)}>
                                <Text style={{ lineHeight: 26, fontSize: Theme.font_size_sm, color: specItem.checked ? Theme.fill_base : Theme.color_text_base }} key={specItem.id}>{specItem.value}</Text>
                            </PressButton>
                        )): null }
                    </View>
                </View>
            )
        })
        return (
            <View style={{ maxHeight: 350, minHeight: 200, }}>
                <ScrollView
                    showsVerticalScrollIndicator={false}
                >
                    <View style={styles.specList}>
                        {specListView}
                    </View>
                </ScrollView>
                <View style={{...rowBetween, ...styles.specList, marginBottom: 20 }}>
                    <Text>数量</Text>
                    <Stepper async={true} value={goodsNum} min={1} max={stock} changeValue={(val:any) => this.setState({goodsNum: val})} />
                </View>
            </View>
        )
    }
    footer() {
        const {showAdd, showBuy} = this.props
        return (
            <View style={{height: 50, ...rowCenter,}}>
                {showAdd && <PressButton style={{...styles.btnStyle, backgroundColor: '#FFA630'}} type='primary' round size="lg" onPress={() => this.addCart()}>加入购物车</PressButton>}
                {showBuy && <PressButton style={styles.btnStyle} type='primary' round size="lg" onPress={() => this.buyNow()}>立即购买</PressButton>}
            </View>
        )
    }
    getGoods() {
        let {checkedGoods, goodsNum} = this.state
        let goods = [{
            item_id: checkedGoods.id,
            num: goodsNum
        }]
        return goods
    }
    buyNow() {
      let goods = this.getGoods()
      this.props.onClose()
      navigate('ConfirmOrder', {
          goods
      })
    }

    addCart() {
        let {checkedGoods, goodsNum} = this.state
        const {onClose, onAdd} = this.props
        onClose()
        addCart({
            item_id: checkedGoods.id,
            goods_num: goodsNum
        }).then((res: any) => {
            if(isSuccess(res)) {
                onAdd && onAdd()
            }
        })
    }
    render() {
        const { show, onClose } = this.props
        return (
            <Popup
                isVisible={show}
                position="bottom"
                closeable={true}
                round={true}
                onClose={onClose}
            >
                <View>
                    {this.header()}
                    {this.main()}
                    {this.footer()}
                </View>
            </Popup>
        );
    }
}
const styles = StyleSheet.create({
    header: {
        flexDirection: 'row',
        padding: 15,
        paddingRight: 35,
        borderColor: Theme.border_color_base,
        borderBottomWidth: Theme.border_width_sm
    },
    specList: {
        paddingHorizontal: Theme.h_spacing_md,
        paddingVertical: Theme.h_spacing_md,
    },
    specItem: {
        paddingHorizontal: Theme.h_spacing_md,
        borderRadius: Theme.radius_circel,
        marginRight: Theme.h_spacing_md,
        marginBottom: Theme.v_spacing_lg
    },
    btnStyle: {
        flex: 1,
        marginHorizontal: Theme.h_spacing_md
    }
})
export default GoodsSpec