const cookieparser = process.server ? require("cookieparser") : undefined;
import Cookies from "js-cookie";
export const state = () => ({
  token: "",
  category: [],
  publicData: {},
  config: {}
});

export const mutations = {
  setToken(state, token) {
    state.token = token;
  },
  logout() {
    state.token = "";
    Cookies.remove("token");
  },
  setCategory(state, data) {
    state.category = data;
  },
  setPublic(state, data) {
    state.publicData = data;
  },
  setConfig(state, data) {
    state.config = data;
  }
};

export const getters = {
  isLogin: state => !!state.token,
  headTitle: state => state.config.name,
  favicon: state => state.config.web_favicon,
  getSiteStatistics: state => state.config.site_statistic || {}
};

export const actions = {
  async nuxtServerInit({ dispatch, commit }, { req, app }) {
    let cookie = req.headers.cookie;
    if (cookie) {
      const parsed = cookieparser.parse(cookie);
      commit("setToken", parsed.token || "");
    }
    await dispatch("getCategory");
    await dispatch("getPublicData");
  },
  async getCategory({ commit }) {
    const { data, code } = await this.$get("goods_category/lists", {
      params: { client: 2 }
    });
    if (code == 1) {
      commit("setCategory", data);
    }
  },
  async getPublicData({ commit }) {
    const { data, code } = await this.$get("pc/commonData");
    if (code == 1) {
      commit("setPublic", data);
    }
  },
  async getConfig({ commit }) {
    const { data, code } = await this.$get("index/config");
    if (code == 1) {
      commit("setConfig", data);
    }
  }
};
