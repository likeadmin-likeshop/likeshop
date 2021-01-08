"use strict";

import React from "react";
import { ActivityIndicator, FlatList, FlatListProps, Text, View, ViewStyle, StyleSheet, Platform } from "react-native";
import PropTypes from "prop-types";
const STATE_NO_MORE = 'noMore';
const STATE_LOADING = 'loading';
const STATE_ERROR = 'requestError';
interface options {
    pageNumber?: number;
    haveNext?: boolean;
    requestError?: boolean;
}
interface LFlatListProps {
    containerStyle?: ViewStyle;
    style?: ViewStyle;
    loadMoreable?: boolean;
    isShowFirstLoadView?: boolean;
    refreshable?: boolean;
    numColumns?: number;
    columnWrapperStyle?: ViewStyle;
    onLoadMore: (page: number, callback: () => void, options?: options) => void;
    noMoreFooterView?: () => React.ReactElement;
    loadingFooterView?: () => React.ReactElement;
    loadingErrorFooterView?: () => React.ReactElement;
    emptyView?: () => React.ReactElement;
    ListHeaderComponent?: () => React.ReactElement;
    ListFooterComponent?: () => React.ReactElement;
    renderItem: ({ item, index }: { item: any, index: number }) => React.ReactElement;
    onRefresh: (callback: (arr: object[]) => void) => void;
    [propName: string]: any;
}
export default class LFlatList extends React.Component<LFlatListProps, any> {
    _rows: object[] | undefined;
    _page: number | undefined;
    _loadingState: boolean | undefined;
    flatList!: FlatList;
    constructor(props: LFlatListProps) {
        super(props);
        this._updateListUI = this._updateListUI.bind(this);
        this._refreshCallback = this._refreshCallback.bind(this);
        this._loadMoreCallback = this._loadMoreCallback.bind(this);
        this.state = { ...this.getInitialState() }
    }

    getInitialState() {
        this._setPage(1);
        this._setRows([]);
        return {
            dataSource: [],
            loadMoreable: this.props.loadMoreable,
            isRefreshing: false,
            isLoading: false,
            loadingStatus: this.props.loadMoreable ? STATE_LOADING : STATE_NO_MORE,
            isShowFirstLoadView: this.props.isShowFirstLoadView,
        };
    }

    static defaultProps = {
        isShowFirstLoadView: true,
        refreshable: true,
        loadMoreable: false,
        onLoadMore(page: number, callback: (arr: object[]) => void, options: any) {
            callback([]);
        },
        onRefresh(callback: (arr: object[]) => void, options: any) {
            callback([]);
        },
        loadingFooterView: null,
        loadingErrorFooterView: null,
        noMoreFooterView: null,
        emptyView: null,
        renderSeparator: null,
        showFirstLoadView: null,
        containerStyle: null,
        ListFooterComponent: null,
    };

    static propTypes = {
        isShowFirstLoadView: PropTypes.bool,
        refreshable: PropTypes.bool,
        loadMoreable: PropTypes.bool,
        onLoadMore: PropTypes.func,
        onRefresh: PropTypes.func,
        containerStyle: PropTypes.object,
        loadingFooterView: PropTypes.func,
        loadingErrorFooterView: PropTypes.func,
        noMoreFooterView: PropTypes.func,
        emptyView: PropTypes.func,
        renderSeparator: PropTypes.func,
        showFirstLoadView: PropTypes.func,
        ListFooterComponent: PropTypes.func,
    };

    UNSAFE_componentWillMount() {
        if (this.props.refreshable && this.props.isShowFirstLoadView) {
            this._onRefresh()
        } else if (this.props.loadMoreable && this.props.onLoadMore) {
            this._toEnd()
        }
    }

    updateDataSource(data: object[], options: options = {}) {
        this._rows = [];
        if (options.pageNumber !== undefined && !isNaN(options.pageNumber)) {
            this._setPage(options.pageNumber)
        }
        this._updateListUI(data, options);
    }

    //重置
    reset() {
        this.setState({
            ...this.getInitialState()
        }, () => {
            if (this.props.refreshable) {
                this._onRefresh()
            } else if (this.props.loadMoreable) {
                this._loadMore();
            }
        })
    }

    _setPage(page: number) {
        this._page = page;
    }
    _getPage(): number {
        return typeof this._page === 'number' ? this._page : 1;
    }
    _setRows(rows: object[]) {
        this._rows = rows;
    }
    _getRows(): object[] {
        return typeof this._rows !== 'undefined' ? this._rows : [];
    }
    _isLoading() {
        return this._loadingState;
    }
    _setLoading(state: boolean) {
        this._loadingState = state;
    }


    /**
     * 加载更多数据中
     * @returns {XML}
     */
    _getloadingFooterView(): React.ReactElement {
        if (this.props.loadingFooterView) {
            return this.props.loadingFooterView();
        }
        return (
            <View style={defaultStyles.paginationView}>
                <ActivityIndicator
                    animating={true}
                    size="small"
                    color="gray"
                />
                <Text style={defaultStyles.actionsLabel}>
                    加载中...
                </Text>
            </View>
        );
    }

    /**
     * 请求失败
     * @returns {XML}
     */
    _getErrorFooterView(): React.ReactElement {
        if (this.props.loadingErrorFooterView) {
            return this.props.loadingErrorFooterView();
        }
        return (
            <View
                style={defaultStyles.paginationView}>
                <Text style={defaultStyles.actionsLabel}>
                    请求出现异常
                </Text>
                <Text
                    onPress={() => {
                        this.setState({
                            loadingStatus: STATE_LOADING
                        });
                        this._loadMore();
                    }}
                    style={defaultStyles.actionsLabel}>
                    点击重试
                </Text>
            </View>
        );
    }

    /**
     * 所有数据已经加载完毕
     * @returns {XML}
     */
    _getNoMoreFooterView(): React.ReactElement {
        if (this.props.noMoreFooterView) {
            return this.props.noMoreFooterView();
        }
        return (
            <View style={defaultStyles.paginationView}>
                <Text style={defaultStyles.actionsLabel}>
                    我可是有底线的～
                </Text>
            </View>
        );
    }

    _getDefaultEmptyView(): React.ReactElement {
        if (this.props.emptyView) {
            return this.props.emptyView();
        }

        return (
            <View style={defaultStyles.defaultView}>
                <Text style={defaultStyles.defaultViewTitle}>
                    暂无数据
                </Text>
            </View>
        );
    }


    _onRefresh() {

        this._setPage(1);
        this.props.onRefresh(this._refreshCallback.bind(this));
    }

    /**
     * 刷新时候的回调
     * @param rows
     * @param options
     */
    _refreshCallback(rows: object[] = [], options: options = {}) {
        if (options.pageNumber !== undefined && !isNaN(options.pageNumber)) {
            this._setPage(options.pageNumber)
        } else {
            this._setPage(this._getPage() + 1);
        }
        this._updateListUI(rows, options);
    }


    _loadMore() {
        if (this.state.loadingStatus !== STATE_NO_MORE) {
            this.props.onLoadMore(this._getPage(), this._loadMoreCallback);
        }
    }

    _loadMoreCallback(rows = [], options = {}) {

        this._setPage(this._getPage() + 1);
        let mergedRows = this._getRows().concat(rows);
        this._updateListUI(mergedRows, options);
    }

    _updateListUI(rows: object[] = [], options: options = {}) {
        if (rows !== null) {
            let { haveNext } = options;
            this._setRows(rows);
            if (options.requestError === true) {
                this._setPage(this._getPage() - 1);
                this.setState({
                    dataSource: this._getRows(),
                    isRefreshing: false,
                    loadingStatus: STATE_ERROR,
                    loadMoreable: haveNext ? haveNext : false,
                    isShowFirstLoadView: false,
                });
            } else {
                this.setState({
                    dataSource: this._getRows(),
                    isRefreshing: false,
                    loadingStatus: (haveNext === true ? STATE_LOADING : STATE_NO_MORE),
                    loadMoreable: haveNext ? haveNext : false,
                    isShowFirstLoadView: false,
                });
            }
        }

        setTimeout(() => { this._setLoading(false) }, 200);

    }

    _renderFooterView(): React.ReactElement {
        let { loadMoreable, loadingStatus } = this.state;
        let { ListFooterComponent } = this.props;
        if (loadingStatus === STATE_LOADING && loadMoreable) {
            return this._getloadingFooterView();
        } else if (loadingStatus === STATE_ERROR && loadMoreable) {
            return this._getErrorFooterView();
        } else if (this._getRows().length === 0) {
            return this._getDefaultEmptyView();
        } else if (loadingStatus === STATE_NO_MORE && !loadMoreable) {
            return this._getNoMoreFooterView();
        } else {
            if (ListFooterComponent) {
                return ListFooterComponent();
            }
            return <View />;
        }
    }

    _toEnd() {
        let loadingStatus = this.state.loadingStatus;
        if (loadingStatus === STATE_LOADING && !this._isLoading()) {
            this._setLoading(true);
            this._loadMore();
        }
    }

    _keyExtractor(item: any, index: number) {
        return '' + index;
    }
    _scrollToIndex(viewPosition: any, index: any) {
        this.flatList.scrollToIndex({ viewPosition: viewPosition, index: index });
    }

    render() {
        const { containerStyle, refreshable, style } = this.props
        const { isShowFirstLoadView, dataSource, isRefreshing } = this.state
        return (
            <View style={containerStyle ? containerStyle : { flex: 1 }}>
                {
                    isShowFirstLoadView ? (
                        <View
                            style={{ alignItems: 'center', flex: 1, justifyContent: 'center', paddingVertical: 20 }}>
                            <ActivityIndicator
                                animating={true}
                                size="large"
                                color="gray"
                            />
                        </View>
                    ) : (
                            <FlatList
                                {...this.props}
                                renderItem={this.props.renderItem.bind(this)}
                                ref={(ref: FlatList) => this.flatList = ref}
                                data={dataSource}
                                showsVerticalScrollIndicator={false}
                                ListFooterComponent={this._renderFooterView.bind(this)}
                                removeClippedSubviews={Platform.OS == 'ios' ? false : true}
                                automaticallyAdjustContentInsets={false}
                                canCancelContentTouches={true}
                                onRefresh={refreshable ? () => {
                                    this.setState({
                                        isRefreshing: true,
                                    })
                                    this._onRefresh()
                                } : null}
                                refreshing={isRefreshing}
                                keyExtractor={this._keyExtractor.bind(this)}
                                onEndReached={this._toEnd.bind(this)}
                                onEndReachedThreshold={0.2}
                                style={[defaultStyles.container, style]}
                            />
                        )
                }
            </View>

        );

    }
}

const defaultStyles = StyleSheet.create({
    container: {
        flex: 1,
    },
    separator: {
        height: 1,
    },
    actionsLabel: {
        fontSize: 14,
        color: '#999',
        marginLeft: 10
    },
    paginationView: {
        height: 50,
        justifyContent: 'center',
        alignItems: 'center',
        flexDirection: 'row'
    },
    defaultView: {
        justifyContent: 'center',
        alignItems: 'center',
        padding: 20,
    },
    defaultViewTitle: {
        fontSize: 15,
        color: '#555',
        fontWeight: 'bold',
        marginBottom: 15,
    },
});


