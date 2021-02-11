import React from "react";
import { View, StyleSheet, Text, TextInput } from "react-native"
import Theme from '../../constraint/Theme';
import { row, rowCenter } from "../../constraint/Style";
import PressButton from "./PressButton";



interface StepperProps {
    readonly?: Boolean
    value: number,
    changeValue: Function,
    max?: number,
    min?: number,
    async?: Boolean
}

export default class Stepper extends React.Component<StepperProps, any> {
    constructor(props: StepperProps) {
        super(props)
        this.state = {
            inputValue: props.value,
            min: props.min,
            max: props.max
        }
    }

    UNSAFE_componentWillReceiveProps() {
    }

    componentDidUpdate() {
    }

    static defaultProps = {
        readonly: false,
        value: 1,
        min: 0,
        async: false
    }

    decreaseShopCount(value: number) {
        if(this.state.min) {
            if (value <= this.state.min) {
                return;
            }
        }
        else {
            if(value <= 0) {
                return;
            }
        }
        if(this.props.async) {
            this.props.changeValue(-- value);
            return;
        }
        this.setState({
            inputValue: --value
        })
        this.props.changeValue(this.state.inputValue)
    }

    addShopCount(value: number) {
        if(this.state.max) {
            if(value >= this.state.max) {
                return;
            }
        }
        if(this.props.async) {
            this.props.changeValue(++ value);
            return;
        }
        this.setState({
            inputValue: ++ value
        })
        this.props.changeValue(this.state.inputValue)
    }

    render() {
        const {changeValue, max, min, value} = this.props
        return (
            <View style={[Style.Stepper, row]}>
                <PressButton style={{ ...Style.stepperBtn, ...rowCenter, borderColor: value == min ? '#E5E5E5' : '#bbb' }} onPress={this.decreaseShopCount.bind(this, this.props.async ? this.props.value : this.state.inputValue)}>
                    <Text style={[{ fontSize: Theme.font_size_xxl, color: value == min ? Theme.color_text_muted : '#bbb' }, Style.normal]}>-</Text>
                </PressButton>
                <TextInput
                    keyboardType="numeric"
                    style={[{ padding: 0, textAlign: 'center' }, Style.stepperInput]}
                    value={this.props.async ? this.props.value.toString() : this.state.inputValue.toString()}
                    onChangeText={(text) => {
                        let newText = text.replace(/[^\d]+/, '');
                        if(min && Number(newText) <= min) {
                            newText = String(min)
                        }
                        if(max && Number(newText) >= max) {
                            newText = String(max)
                        }
                        changeValue(newText)
                    }}
                    maxLength={2}
                />
                <PressButton disabled={value == max} style={{ ...Style.stepperBtn, ...rowCenter, borderColor: value == max ? '#E5E5E5' : '#bbb' }} onPress={this.addShopCount.bind(this, this.props.async ? this.props.value : this.state.inputValue)}>
                    <Text style={[{ fontSize: Theme.font_size_xxl }, Style.normal]}>+</Text>
                </PressButton>
            </View>
        )
    }
}

const Style = StyleSheet.create({
    Stepper: {
        paddingVertical: 0
    },
    stepperBtn: {
        width: 30,
        height: 26,
        borderWidth: 0.5
    },
    stepperInput: {
        width: 40,
        height: 26,
        borderColor: '#BBB',
        borderWidth: 0.5
    },
    gray: {
        color: Theme.border_color_base
    },
    normal: {
        color: Theme.color_text_paragraph
    }
})