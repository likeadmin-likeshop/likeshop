import React from 'react'
import { View, StyleSheet, ViewStyle } from 'react-native';
import Theme from '../../constraint/Theme';

interface ProgressProps {
    left: number;
    progressBarColor?: string;
    style?: ViewStyle;
    progressWidth?: number
    barWidth?: number 
}


export default class Progress extends React.Component <ProgressProps, any> {
    [x: string]: any;
    offsetPer: number | undefined;
    constructor(props : ProgressProps) {
        super(props);
        this.state = {
            barLeftPer: 0
        }
    }

    static defaultProps = {
        progressBarColor: Theme.brand_primary,
        left: 0,
        progressWidth: 45,
        barWidth: 15
    }

    UNSAFE_componentWillMount() {
        
    }

    UNSAFE_componentWillReceiveProps(props: ProgressProps) {
        const {progressWidth, barWidth} = this.props
        let offset = progressWidth as number - (barWidth as number)
        let {left} = props;
        let barLeft = (left / 100) * offset;
        barLeft = barLeft <= 0 ? 0 : barLeft
        barLeft = barLeft >= offset ? offset : barLeft
        this.setState({
            barLeftPer: barLeft
        })
    }

    render() {
        const { barWidth, progressWidth } = this.props
        return (
            <View style={[Style.progress, {width: progressWidth}]} >
                <View style={[Style.progressBar, {width: barWidth, backgroundColor: this.props.progressBarColor, left: this.state.barLeftPer}]}>
                </View>
            </View>
        )
    }
}

const Style = StyleSheet.create({
    progress: {
        backgroundColor: '#E5E5E5',
        height: 3, 
        position: 'relative'
    },
    progressBar: {
        position: "absolute",
        height: '100%'
    }
})