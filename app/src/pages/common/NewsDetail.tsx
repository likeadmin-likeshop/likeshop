import React from 'react'
import { ScreenProps } from '../../typing';
import { contain, getImageSize, rowBetween, row } from '../../constraint/Style';
import { View, StyleSheet, Text, Image, ScrollView, SafeAreaView } from 'react-native';
import { getArticleDetail } from '../../api/store';
import { isSuccess } from '../../utils/request';
import { icon_see } from '../../constraint/Image';
import Theme from '../../constraint/Theme';
import HTML from 'react-native-render-html';
import { ScreenWidth } from '../../utils/app';

type NewsDetailProps = ScreenProps<'NewsDetail'>

export default class NewsDetail extends React.Component<NewsDetailProps, any> {
    [x: string]: any;
    id: number | undefined;
    constructor(props: NewsDetailProps) {
        super(props);
        this.id = props.route.params.id;
        this.type =  props.route.params.type
        this.state = {
            articleObj: {}
        }
    }

    $getArticleDetail() {
        getArticleDetail({type: this.type,id: this.id}).then((res: any) => {
            if(isSuccess(res)) {
                this.setState({
                    articleObj: res.data
                }, () => {
                    console.log(res.data)
                })
            }
        })
    }

    UNSAFE_componentWillMount() {
        this.$getArticleDetail();
    }

    render() {
        let {articleObj: articleDetailObj} = this.state; 
        return (
            <SafeAreaView style={contain}>
                <ScrollView style={{backgroundColor: Theme.fill_base}}>
                    <View style={Style.header}>
                        <Text style={Style.title}>{articleDetailObj.title}</Text>
                        <View style={rowBetween}>
                            <Text style={{fontSize: Theme.font_size_xs, color: Theme.color_text_secondary}}>发布时间: {articleDetailObj.create_time}</Text>
                            <View style={row}>
                                <Image source={icon_see} style={getImageSize(15)} />
                                <Text style={{marginLeft: 5, color: Theme.color_text_muted, fontSize: Theme.font_size_xs}}>{articleDetailObj.visit}人浏览</Text>
                            </View>
                        </View>
                    </View>
                    <View style={Style.main}>
                        {
                            articleDetailObj.content ? <HTML html={articleDetailObj.content} 
                        imagesMaxWidth={ScreenWidth - 20} baseFontStyle={{ fontSize: 14 }} >
                        </HTML> : null
                        }
                    </View>
                </ScrollView>
            </SafeAreaView>
        )
    }
}

const Style = StyleSheet.create({
    header: {
        paddingVertical: 10,
        paddingHorizontal: 8,
        borderBottomColor: Theme.border_color_base,
        borderBottomWidth: Theme.border_width_sm
    },
    title: {
        fontSize: Theme.font_size_xxl,
        marginBottom: 10
    },
    main: {
        paddingVertical: 20,
        paddingHorizontal: 8,
    }
})