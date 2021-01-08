

const brandPrimary = '#FF2C3C';
const brandPrimaryTap = '#FF2C3C';
const Theme = {

  color_text_base: '#000000',                  // 基本
  color_text_base_inverse: '#ffffff',          // 基本 _ 反色
  color_text_secondary: '#666666',          // 辅助色
  color_text_muted: '#999999',              //浅颜色
  color_text_placeholder: '#bbbbbb',           // 文本框提示
  color_text_disabled: '#bbbbbb',              // 失效
  color_text_caption: '#888888',               // 辅助描述
  color_text_paragraph: '#333333',             // 段落
  color_link: brandPrimary,                 // 链接

  // 背景色
  fill_base: '#ffffff',                           // 组件默认背景
  fill_body: '#f6f6f6',                        // 页面背景
  fill_tap: '#dddddd',                            // 组件默认背景 _ 按下
  fill_disabled: '#dddddd',                       // 通用失效背景
  fill_mask: 'rgba(0, 0, 0, .4)',              // 遮罩背景
  color_icon_base: '#cccccc',                     // 许多小图标的背景，比如一些小圆点，加减号
  fill_grey: '#f7f7f7',

  // 透明度
  opacity_disabled: '0.3',   // switch checkbox radio 等组件禁用的透明度

  // 全局/品牌色
  brand_primary: brandPrimary,
  brand_primary_tap: brandPrimaryTap,
  brand_success: '#6abf47',
  brand_warning: '#f4333c',
  brand_error: '#f4333c',
  brand_important: '#ff5b05',  // 用于小红点
  brand_wait: '#108ee9',

  // 边框色
  border_color_base: '#e5e5e5',

  // 字体尺寸
  // ---
  font_size_xxs: 11,
  font_size_xs: 12,
  font_size_sm: 13,
  font_size_base: 14,
  font_size_md: 15,
  font_size_lg: 16,
  font_size_xl: 17,
  font_size_xxl: 18,

  // 圆角
  // ---
  radius_xs: 2,
  radius_sm: 3,
  radius_md: 5,
  radius_lg: 7,
  radius_circel: 30,

  // 边框尺寸
  // ---
  border_width_sm: 0.5,
  border_width_md: 1,
  border_width_lg: 2,

  // 间距
  // ---
  // 水平间距
  h_spacing_sm: 5,
  h_spacing_md: 10,
  h_spacing_lg: 15,

  // 垂直间距
  v_spacing_xs: 3,
  v_spacing_sm: 5,
  v_spacing_md: 10,
  v_spacing_lg: 15,
  v_spacing_xl: 20,

  // 高度
  // ---
  line_height_base: 1,           // 单行行高
  line_height_paragraph: 1.5,    // 多行行高

  // 图标尺寸
  // ---
  icon_size_xxs: 15,
  icon_size_xs: 18,
  icon_size_sm: 21,
  icon_size_md: 22,       // 导航条上的图标
  icon_size_lg: 36,

  // 动画缓动
  // ---
  ease_in_out_quint: 'cubic_bezier(0.86, 0, 0.07, 1)',

  // 组件变量
  // ---

  actionsheet_item_height: 50,
  actionsheet_item_font_size: 18,



  // modal
  modal_font_size_heading: 18,
  modal_button_font_size: 18, // 按钮字号
  modal_button_height: 50, // 按钮高度

  // list
  list_title_height: 30,
  list_item_height_sm: 35,
  list_item_height: 44,

  // input
  input_label_width: 17,       // InputItem、TextareaItem 文字长度基础值
  input_font_size: 17,
  input_color_icon: '#cccccc',
  input_color_icon_tap: brandPrimary,

  // tabs
  tabs_color: brandPrimary,
  tabs_height: 42,
  tabs_font_size_heading: 15,

  // segmented_control
  segmented_control_color: brandPrimary,  // 同时应用于背景、文字颜色、边框色
  segmented_control_height: 27,
  segmented_control_fill_tap: `${brandPrimary}10`,

  // tab_bar
  tab_bar_fill: '#ebeeef',
  tab_bar_height: 40,

  // toast
  toast_fill: 'rgba(0, 0, 0, .6)',

  // search_bar
  search_bar_fill: '#efeff4',
  search_bar_height: 44,
  search_bar_input_height: 28,
  search_bar_font_size: 15,
  search_color_icon: '#bbbbbb', // input search icon 的背景色

  // notice_bar
  notice_bar_fill: '#fffada',
  notice_bar_height: 36,

  // switch
  switch_fill: '#4dd865',

  // tag
  tag_height: 25,
  tag_small_height: 15,

  // picker
  option_height: 42,         // picker 标题的高度
  title_height: 44,
  toast_zindex: 1999,
  action_sheet_zindex: 1000,
  popup_zindex: 999,
  modal_zindex: 999,
  bottom_safe_height: 34,
};
export default Theme