import React from "react";
import { Image, View, Text, ViewStyle, TextStyle } from "react-native";
import { parseTimeData, parseFormat } from "../../utils/parseTime";

interface CountDownProps {
    style?: TextStyle
    time: number
    format?: string
    autoStart?: boolean
    onFinish?: () => void
    onChange?: (_:any) => void
}

function createTimer(fn:() => void) {
    return setTimeout(fn, 30)
}
function isSameSecond(time1:number, time2: number) {
    return Math.floor(time1 / 1000) === Math.floor(time2 / 1000);
}

class CountDown extends React.Component<CountDownProps, any> {
    counting: any;
    endTime: any;
    remain!: number;
    tid: any;
    constructor(props: CountDownProps) {
        super(props);
        this.state = {
            timeObj: {},
            formateTime: ''
        }
    }

    static defaultProps = {
        format: 'hh:mm:ss',
        autoStart: true
    };
    UNSAFE_componentWillMount() {
        this.reset()
    }
    componentWillUnmount() {
        clearTimeout(this.tid)
    }
    UNSAFE_componentWillReceiveProps(nextProps: CountDownProps) {
        if(nextProps.time !== this.props.time) {
            this.reset(nextProps.time)
        }
    }
 
    start () {
        if (this.counting) {
            return;
        }
        this.counting = true;
        this.endTime = Date.now() + this.remain;
        this.setTimer();
    }


    setTimer () {
        this.tid = createTimer(() => {
            let remain = this.getRemain();
            if (!isSameSecond(remain, this.remain) || remain === 0) {
                this.setRemain(remain);
            }
            if (this.remain !== 0) {
                this.setTimer();
            }
        });
    }

    getRemain() {
        return Math.max(this.endTime - Date.now(), 0);
    }

    pause() {
        this.counting = false;
        clearTimeout(this.tid);
    }
    reset (time?: number) {
        this.pause();
        this.remain = time ||  this.props.time;
        this.setRemain(this.remain);
        if (this.props.autoStart) {
            this.start();
        }
    }
    setRemain(remain: number) {
        const {onFinish, format, onChange} = this.props
        this.remain = remain;
        const timeData = parseTimeData(remain)
        this.setState({
            formateTime: parseFormat(format as string, timeData)
        })
        onChange && onChange(timeData)
        if (remain === 0) {
            this.pause();
            onFinish && onFinish()
        }
    }
    render() {
        const { formateTime } = this.state
        const { children, style } = this.props
        return (
            <View>
                {children ? children : <Text style={style}>{formateTime}</Text>}
            </View>
        );
    }
}

export default CountDown;