import React from 'react'
import { ScreenProps } from '../../typing'
import { contain, rowEnd, row, getImageSize, rowBetween } from '../../constraint/Style'
import { StyleSheet, View, Text, ScrollView, Image, SafeAreaView, Clipboard } from 'react-native'
import Theme from '../../constraint/Theme'
import {  logistics_transit, logistics_address_gray, logistics_address, logistics_success, logistics_delivered, logistics_pay } from '../../constraint/Image'
import { orderTraces } from '../../api/user'
import { isSuccess } from '../../utils/request'
import PriceFormate from '../../components/bussiness/PriceFormate'
import Recommend from '../../components/bussiness/Recommend'
import { Toast } from '@ant-design/react-native'
import { goBack } from '../../utils/navigation'

type LogisticsProps = ScreenProps<'Logistics'>

export default class Logistics extends React.Component<LogisticsProps, any> {
    [x: string]: any
    constructor(props: LogisticsProps) {
        super(props)
        this.id = props.route.params.id
        this.state = {
            shipment: {},
            buy: {},
            delivery: {},
            finish: {},
            order: {},
            take: {},
            traces: []
        }
    }
    UNSAFE_componentWillMount() {
        this._getOrderTraces()
    }
    _getOrderTraces() {
        orderTraces(this.id).then((res: any) => {
            if (isSuccess(res)) {
                let { shipment, buy, delivery, finish, order, take } = res.data
                this.setState({
                    shipment,
                    buy,
                    delivery,
                    finish,
                    order,
                    take,
                    traces: delivery.traces
                })
            }else {
                setTimeout(() => {goBack()},1000)
            }
        })
    }
    getGoodsInfo() {
        const { order: { image, shipping_name, invoice_no, tips, count } } = this.state
        return (
            <View style={styles.header}>
                <View style={{ alignItems: 'center' }}>
                    <Image source={{ uri: image }} style={getImageSize(80)} />
                    <View style={styles.count}>
                        <Text style={{ fontSize: Theme.font_size_xs, color: Theme.fill_base, }}>共{count}件商品</Text>
                    </View>
                </View>
                <View style={{ marginLeft: 10 }}>
                    <Text style={{ fontSize: Theme.font_size_md, fontWeight: 'bold', marginBottom: Theme.v_spacing_sm }}>{tips}</Text>
                    <Text style={{ marginBottom: Theme.v_spacing_sm }}>物流公司：{shipping_name}</Text>
                    <View style={{ ...row, marginBottom: Theme.v_spacing_sm }}>
                        <Text>快递单号：{invoice_no}</Text>
                        <Text style={{ fontSize: Theme.font_size_xs, marginLeft: 12, color: Theme.brand_primary }} onPress={() => { 
                            Clipboard.setString(invoice_no);
                            Toast.success('复制成功')
                        }}>复制</Text>
                    </View>
                </View>
            </View>
        )
    }
    getExpressItem(icon: any, title: any, desc: any, time?: any, hiddenLine = false) {
        return (
            <View style={styles.expressItem}>
                <View style={styles.expressLeft}>
                    {typeof icon === 'number' ? <Image source={icon} style={[getImageSize(20), { position: 'absolute', zIndex: 10 }]} /> : icon}
                    {!hiddenLine ? <View style={styles.expressLine} /> : null}
                </View>
                <View style={styles.expressRight}>
                    {typeof title === 'string' ? <Text style={styles.titleStyle}>{title}</Text> : title}
                    {typeof desc === 'string' ? <Text style={styles.descStyle}>{desc}</Text> : desc}
                    {typeof time === 'string' ? <Text style={styles.timeStyle}>{time}</Text> : time}
                </View>
            </View>
        )
    }
    getLogistics() {
        const { finish, take, shipment, buy, delivery, traces } = this.state
        console.log(traces)
        return (
            <View style={{ backgroundColor: Theme.fill_base, }}>
                <View style={styles.express}>
                    {take.contacts ? this.getExpressItem(finish.tips ? logistics_address : logistics_address_gray,
                        <Text style={{ fontWeight: 'bold', marginBottom: 5 }}>{take.contacts}  {take.mobile}</Text>,
                        take.address
                    ) : null}
                    {finish.tips ? this.getExpressItem(logistics_success,
                        finish.title,
                        finish.tips,
                        finish.time
                    ) : null}
                    {traces.length ? this.getExpressItem(logistics_transit,
                        delivery.title,
                        null,
                        null
                    ) : null}
                    {(traces as any[]).map((item: any, index: number) => {
                        return this.getExpressItem(index >= 1 ? <View style={styles.dotStyle} /> : null,
                            item[0] ? <Text style={styles.timeStyle}>{item[0]}</Text> : null,
                            item[1] ? <Text style={styles.timeStyle}>{item[1]}</Text> : null,
                            item[2] ? <Text style={styles.timeStyle}>{item[2]}</Text> : null,
                        )
                    })}
                    {shipment.tips ? this.getExpressItem(logistics_delivered,
                        shipment.title,
                        shipment.tips,
                        shipment.time
                    ) : null}
                    {buy.tips ? this.getExpressItem(logistics_pay,
                        buy.title,
                        buy.tips,
                        buy.time,
                        true
                    ) : null}
                </View>
            </View>
        )
    }
    render() {
        if (!this.state.order.tips) return null
        return (
            <SafeAreaView style={contain}>
                <ScrollView showsVerticalScrollIndicator={false}>
                    {this.getGoodsInfo()}
                    {this.getLogistics()}
                    <Recommend />
                </ScrollView>
            </SafeAreaView>
        )
    }
}

const styles = StyleSheet.create({
    header: {
        ...row,
        marginVertical: Theme.v_spacing_md,
        backgroundColor: Theme.fill_base,
        paddingHorizontal: 12,
        paddingVertical: Theme.v_spacing_md
    },
    count: {
        position: 'absolute',
        bottom: 0,
        backgroundColor: Theme.toast_fill,
        borderRadius: Theme.radius_circel,
        paddingHorizontal: 9,
        paddingVertical: 2
    },
    express: {
        marginHorizontal: 12,
        paddingTop: Theme.v_spacing_lg,
        borderRadius: 5,
    },
    expressItem: {
        ...row,
        alignItems: 'flex-start'
    },
    expressLeft: {
        marginRight: 12,
        height: '100%',
        width: 20,
        alignItems: 'center'
    },
    expressLine: {
        borderColor: '#E5E5E5',
        borderLeftWidth: Theme.border_width_sm,
        flex: 1,
        width: 0
    },
    expressRight: {
        flex: 1,
        paddingBottom: 10
    },
    titleStyle: {
        fontWeight: 'bold',
        marginBottom: 5
    },
    descStyle: {
        fontSize: Theme.font_size_sm,
        color: '#333',
        lineHeight: 18,
        marginBottom: 5
    },
    timeStyle: {
        fontSize: Theme.font_size_sm,
        color: Theme.color_text_muted,
        marginBottom: 5,
        lineHeight: 18
    },
    dotStyle: {
        width: 8,
        height: 8,
        borderRadius: 8,
        backgroundColor: '#E5E5E5',
        top: 5,
        position: 'absolute',
        zIndex: 10
    }

})