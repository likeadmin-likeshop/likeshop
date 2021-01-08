import React from 'react';
import { StyleSheet, Text, View, SectionList, Image,FlatList } from 'react-native';
import Theme from '../../constraint/Theme'
import CustomImage from '../../components/main/CustomImage';
import { contain, row, rowCenter } from '../../constraint/Style';
import Search from '../../components/main/Search';
import { navigate } from '../../utils/navigation';
import { ScreenWidth, StatusBarHeight } from '../../utils/app';
import { getCatrgory } from '../../api/store';
import { isSuccess } from '../../utils/request';
import PressButton from '../../components/main/PressButton';
import AdSwiper from '../../components/bussiness/AdSwiper';
class Classify extends React.Component<any, any> {
    [x: string]: any;
    constructor(props: any) {
        super(props)
        this.state = {
            catrgory: [],
            currentIndex: 0,
            selectCatrgory: [],
            bannerList: []
        }
    }
    UNSAFE_componentWillMount() {
        this._getCatrgory()
    }

    _getCatrgory() {
        getCatrgory().then((res: any) => {
            if (isSuccess(res)) {
                this.setState({
                    catrgory: res.data,
                    selectCatrgory: res.data[0]?.sons
                })
            }
        })
    }
    oneItem(item: any, index: number) {
        const { currentIndex, catrgory } = this.state
        const { name, id } = item
        return (
            <PressButton style={{ paddingHorizontal: 5, paddingVertical: 13, ...row }} onPress={() => {
                this.setState({
                    currentIndex: index,
                    selectCatrgory: catrgory[index].sons
                })
            }}>
                {currentIndex == index && <Text style={{ backgroundColor: Theme.brand_primary, width: 2, height: 15, position: 'absolute', left: 5 }} />}
                <Text numberOfLines={1} style={[currentIndex == index ? { color: Theme.brand_primary, fontWeight: 'bold' } : { color: Theme.color_text_base }, { flex: 1, textAlign: 'center' }]}>{name}</Text>
            </PressButton>
        )
    }
    dataFormate(data: any[]) {
        data = data.map((item) => {
            return {
                id: item.id,
                title: item.name,
                data: [item.sons]
            }
        })
        return data
    }
    threeItem(data: any) {
        return (
            <FlatList
                data={data}
                keyExtractor={(item: any, index) => item.id}
                style={{ backgroundColor: Theme.fill_base, paddingBottom: Theme.v_spacing_md, marginBottom: Theme.v_spacing_md }}
                numColumns={3}
                renderItem={({item}) => {
                    return (
                        <PressButton style={{width: '33%', alignItems: 'center', marginBottom: Theme.v_spacing_md}} onPress={() => navigate('GoodsSearch', {id: item.id, name: item.name, type: item.type})}>
                            <CustomImage source={{uri: item.image}} resizeMode="contain" width={70} height={70} />
                            <Text style={{fontSize: Theme.font_size_xs, marginTop: Theme.v_spacing_sm, textAlign: 'center'}}>{item.name}</Text>
                        </PressButton>
                    )
                }}
            />

        )
    }
    twoItem(title: string) {
        return (
            <View style={{ height: 35, ...rowCenter, backgroundColor: Theme.fill_base, marginTop: Theme.v_spacing_sm }}>
                <Text style={styles.lineStyle} />
                <Text style={{ fontWeight: 'bold', marginHorizontal: Theme.h_spacing_md }}>{title}</Text>
                <Text style={styles.lineStyle} />
            </View>
        )
    }
    render() {
        const { catrgory, selectCatrgory } = this.state
        let data = this.dataFormate(selectCatrgory)
        return (
            <View style={[contain, { paddingTop: StatusBarHeight, backgroundColor: Theme.fill_base }]}>
                <Search editable={false} link={true} onPress={() => navigate('GoodsSearch')} />
                <View style={{ flex: 1, ...row }}>
                    <FlatList
                        style={{ height: '100%', flexBasis: 100, flexGrow: 0 }}
                        data={catrgory}
                        showsVerticalScrollIndicator={false}
                        keyExtractor={(item: any, index) => item.id}
                        renderItem={({ item, index }) => this.oneItem(item, index)}
                    />
                    <SectionList
                        style={{ flex: 1, backgroundColor: Theme.fill_body, height: '100%', paddingHorizontal: 10 }}
                        sections={data}
                        removeClippedSubviews={true}
                        showsVerticalScrollIndicator={false}
                        keyExtractor={(item, index) => item.id}
                        renderItem={({ item }) => this.threeItem(item)}
                        ListHeaderComponent={() => <AdSwiper pid={6} width={ScreenWidth - 120} height={(ScreenWidth - 120)*0.3} style={{marginVertical: 5}} />}
                        renderSectionHeader={({ section: { title } }) => this.twoItem(title)}
                    />
                </View>
            </View>
        );
    }
};

const styles = StyleSheet.create({
    lineStyle: {
        height: 0.5,
        width: 20,
        backgroundColor: Theme.color_text_disabled
    }
});

export default Classify;