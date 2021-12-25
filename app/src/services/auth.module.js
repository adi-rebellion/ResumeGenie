/*
* Atuh module for VueX store.
*/
const API = require('../services/api')
export default {
    state: {
        hasAuth: false,
        token: null,
        user: null
    },
    getters: {
        hasAuth: state => {
            return state.hasAuth
        }
    },
    mutations: {
        updateToken(state, token) {
            state.token = token;
        },
        setAuthUser(state, user) {
            state.hasAuth = true;
            state.user = user;
        },
        logout(state) {
            state.hasAuth = false;
            state.auth = null;
        }
    },
    actions: {
        async login({ commit }, credentials) {
            let status;

            await API.login(credentials).then((res) => {
                if(res.data.command == 'success')
                {
                    status = { 'status': 'success' }
                }
                else
                {
                    status = { 'status': 'error' }
                }
                // const token = res.data.data.token
                
            })
            return status
        },
      
        async getUser({ commit }) {
            await API.getUser().then((res) => {
                const user = res.data.data.user
                console.log({
                    getUser: user
                })
                commit("setAuthUser", user)
            })
        },
        logout({ commit }) {
            API.logout().then(() => {
                commit("logout")
                alert("Successfully Logged Out.");
            })
        }
    }
}