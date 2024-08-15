
layui.define(["jquery", "form"], function (exports) {
    var center,map,marker,geocoder,address = null;
    var obj = {
        init: function (init_lat, init_log) {
            var lat = 39.9088;
            var log = 116.3987;
            if(init_log && init_lat){
                log = init_log;
                lat = init_lat;
            }

            center = new qq.maps.LatLng(lat, log);

            map = new qq.maps.Map("map-container", {
                center: center,     //设置中心位置
                zoom:14,            //设置地图缩放级别
                draggableCursor : 'https://mapapi.qq.com/web/lbs/javascriptV2/demo/img/c1.cur',     //设置鼠标拖拽元素样式
                draggingCursor : 'https://mapapi.qq.com/web/lbs/javascriptV2/demo/img/c2.cur'       //设置鼠标移动样式
            });
            if(init_log && init_lat){
                marker = new qq.maps.Marker({
                    position:center,
                    map:map,
                    animation: qq.maps.MarkerAnimation.BOUNCE,
                    icon:'https://mapapi.qq.com/web/lbs/javascriptGL/demo/img/markerNew.png'
                });
            }
            obj.click_map();
            obj.search_map();
        },
        click_map:function () {
            //地址和经纬度之间进行转换服务
            geocoder = new qq.maps.Geocoder();

            // //添加监听事件  获取鼠标点击事件
            qq.maps.event.addListener(map, 'click', function(event) {
                geocoder.getAddress(event.latLng);
            });
            //解析地址
            geocoder.setComplete(function(result) {
                map.setCenter(result.detail.location);
                var address_detail = '';
                if(result.detail.addressComponents.streetNumber){
                    address_detail = result.detail.addressComponents.streetNumber
                }else{
                    address_detail = result.detail.addressComponents.street
                }
                $("input[name='address']").val(address_detail);
                //设置标记点
                if(!marker) {
                    marker = new qq.maps.Marker({
                        position:result.detail.location,
                        map:map,
                        animation: qq.maps.MarkerAnimation.BOUNCE,
                        icon:'https://mapapi.qq.com/web/lbs/javascriptGL/demo/img/markerNew.png'
                    });
                }else{
                    marker.setPosition(result.detail.location);
                }
                $("input[name='longitude']").val(result.detail.location.lng);
                $("input[name='latitude']").val(result.detail.location.lat);

            });
            //解析失败
            geocoder.setError(function() {
                layui.layer.msg("地址解析错误，请重新选择");
            });
        },
        search_map:function () {
            $(document).on('click', '#search_map', function() {
                var province_id = $("#province");
                var city_id = $("#city");
                var district_id = $("#district");
                var shop_address = $("input[name='address']").val();

                if(province_id.val() == 0 || province_id.val() == null){
                    layer.open({icon:2,time:2000,content:"请先选择省份"});
                    return;
                }
                if(city_id.val() == 0 || city_id.val() == null){
                    layer.open({icon:2,time:2000,content:"请先选择市"});
                    return;
                }
                if(district_id.val() == 0 || district_id.val() == null){
                    layer.open({icon:2,time:2000,content:"请先选择镇/区"});
                    return;
                }
                address = province_id.find("option:selected").text() + city_id.find("option:selected").text() + district_id.find("option:selected").text() + shop_address;
                searchService.search(address);
            })
            var searchService = new qq.maps.SearchService({
                complete : function(results){
                    if(results.type === "CITY_LIST") {
                        searchService.setLocation(results.detail.cities[0].cityName);
                        searchService.search(address);
                        return;
                    }
                    var pois = results.detail.pois;
                    var latlngBounds = new qq.maps.LatLngBounds();
                    for(var i = 0,l = pois.length;i < l; i++){
                        var poi = pois[i];
                        latlngBounds.extend(poi.latLng);
                        var markers = new qq.maps.Marker({
                            map:map,
                            position: poi.latLng,
                            icon:'https://mapapi.qq.com/web/lbs/javascriptGL/demo/img/markerDefault.png'
                        });
                        markers.setTitle(poi.name);
                    }
                    map.fitBounds(latlngBounds);
                }
            });
        }
    };
    exports("txMap", obj);
});