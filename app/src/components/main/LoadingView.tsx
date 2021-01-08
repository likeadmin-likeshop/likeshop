import React from "react";
import { View, ActivityIndicator } from "react-native";
import { connect } from "react-redux";
import Theme from "../../constraint/Theme";
import { RootState } from "../../typing";



export type LoadingViewProps = {}



class LoadingView extends React.Component<LoadingViewProps, any> {
    constructor(props: LoadingViewProps) {
        super(props);
    }

    render() {
        return (
            <View
                style={{
                    height: '100%',
                    alignItems: 'center',
                    justifyContent: 'center',
                    backgroundColor: Theme.color_text_base_inverse,
                    position: 'absolute',
                    width: '100%',
                    zIndex: 100,
                    left: 0
                }}>
                <ActivityIndicator
                    animating={true}
                    size="large"
                    color="#666"
                />
            </View>
        );
    }
}

export default connect()(LoadingView);
