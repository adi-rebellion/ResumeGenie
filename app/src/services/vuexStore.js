/*
* Has store object for VueX store.
*/
import Vuex from 'vuex'
import Vue from 'vue'

import authModule from './auth.module';

const axios = require("axios").default;
axios.defaults.withCredentials = true;

Vue.use(Vuex);

const storeData = {
    state: {
        // Dont remove this,
        // It helps in debugging.
        count: 0,
    },
    mutations: {
        incrementCount(state) {
            state.count++
        },
    },
    actions: {
    },
    modules: {
        auth: authModule
    }
}

const store = new Vuex.Store(storeData)

export default store