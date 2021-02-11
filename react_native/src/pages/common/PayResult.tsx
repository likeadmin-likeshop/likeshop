import React from 'react';
import { StyleSheet, Text, View, Image, SafeAreaView, ScrollView } from 'react-native';
import Theme from '../../constraint/Theme'
import { contain, row, rowCenter, getImageSize, rowBetween } from '../../constraint/Style';
import { StatusBarHeight } from '../../utils/app';
import { isSuccess } from '../../utils/request';
import { icon_paySuccess } from '../../constraint/Image';
import PriceFormate from '../../components/bussiness/PriceFormate';
import { ScreenProps } from '../../typing';
import PressButton from '../../components/main/PressButton';
import Recommend from '../../components/bussiness/Recommend';
import { navigate, replace } from '../../utils/navigation';
import { getOrderDetail } from '../../api/user';

type PayResultProps = ScreenProps<'PayResult'>
class PayResult extends React.Component<PayResultProps, any> {
    [x: string]: any;
    constructor(props: PayResultProps) {
        super(props)
        this.id = props.route.params.id
        this.state = {
            payInfo: {

            }
        }
    }
    UNSAFE_componentWillMount() {
        this._getOrderResult()
    }   
    _getOrderResult() {
        getOrderDetail( this.id).then((res: any) => {
            if (isSuccess(res)) {
               this.setState({
                    payInfo: res.data
               })
            }
        });
    }
    infoItem(name: string, content: any) {
        return (
            <View style={{...rowBetween, marginTop: 12, alignItems: 'flex-start'}}>
                <Text>{name}</Text>
                {typeof content == 'string' ? <Text>{content}</Text> : content}
            </View>
        )
    }
    render() {
        const {payInfo} = this.state
        if(!payInfo.order_sn) return null
        return (
            <SafeAreaView style={[contain]}>
                <ScrollView showsVerticalScrollIndicator={false}  >
                    <View style={{backgroundColor: Theme.fill_base, marginTop: 50, marginHorizontal: 12, paddingHorizontal: 14}}>
                        <View style={{alignItems: 'center', marginTop: -28}}>
                            <Image source={icon_paySuccess} style={getImageSize(56)} />
                            <Text style={{fontSize: Theme.font_size_xl}}>订单支付成功</Text>
                        </View>
                        <View style={{paddingVertical: 20}}>
                            {this.infoItem('订单编号', payInfo.order_sn)}
                            {this.infoItem('付款时间', payInfo.pay_time)}
                            {this.infoItem('支付方式', payInfo.pay_way_text)}
                            {this.infoItem('支付金额', <PriceFormate price={payInfo.order_amount} />)}
                        </View>
                        <View style={{marginBottom: 20}}>
                            <PressButton type="primary" size="lg" round onPress={() => replace('UserOrder')}>查看订单</PressButton>
                            <PressButton 
                            type="primary"
                             size="lg" 
                             round
                             style={{borderColor: Theme.brand_primary, backgroundColor: '', borderWidth: Theme.border_width_sm, marginTop: 15}} 
                            textStyle={{color: Theme.brand_primary}}
                            onPress={() => navigate('Home')}
                            >返回首页</PressButton>
                        </View>
                    </View>
                    <Recommend />
                </ScrollView>
            </SafeAreaView>
        );
    }
};

const styles = StyleSheet.create({
    
});

export default PayResult;