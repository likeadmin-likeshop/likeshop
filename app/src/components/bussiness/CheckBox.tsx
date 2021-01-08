import React from 'react'
import { View, StyleSheet, Image, Text, TextStyle} from 'react-native'
import Theme from '../../constraint/Theme'
import { checkedIcon } from '../../constraint/Image';
import PressButton from '../main/PressButton';
import { row } from '../../constraint/Style';

interface CheckBoxProps {
    iconSize?: number,
    checked: Boolean | number,
    onClick?: Function,
    TextStyle?: TextStyle,
}

export default class CheckBox extends React.Component <CheckBoxProps, any> {
    constructor(props : CheckBoxProps) {
        super(props);
        this.state = {
            
        }
    }

    static defaultProps = {
        value: 0,
        iconSize: 17,
        onChange: function () {}
    }

    render() {
        let {iconSize, children, onClick} = this.props;
        let textS: TextStyle = { ...Style.textStyle }
        return (
            <PressButton 
            onPress={() => {
                onClick && onClick()
            }}
            style={{...row}}
            >
                <View style={[Style.checkBoxContain, {borderWidth: this.props.checked ? 0 : Theme.border_width_sm, width: iconSize, height: iconSize, display: this.props.checked ? "none" : "flex"}]} />
                <Image source={checkedIcon} style={{width: iconSize, height: iconSize, display: this.props.checked ? "flex" : "none"}} />
                {typeof children == 'string' ? <Text style={textS}>{children}</Text> : children}
            </PressButton>
        )
    }
}


const Style = StyleSheet.create({
    checkBoxContain: {
        borderRadius: 160,
        borderColor: "#999999",
    },
    textStyle: {
        fontSize: Theme.font_size_base,
    }
})