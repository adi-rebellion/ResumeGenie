
const axios = require("axios").default;
const VUE_APP_API_URL_PREFIX = process.env.VUE_APP_API_URL

axios.defaults.withCredentials = true;

// Add a response interceptor
axios.interceptors.response.use(function (response) {
    // Do something with response data
    return response;
}, function (error) {
    // Do something with response error
    // console.log({
    //     apiError: error,
    // })
    // return Promise.resolve();
});

const apiConfig = {
    'AUTH': {
        'LOGIN': {
            "METHOD": "post",
            "URL": "/api/auth/login",
            validateParams() {
                return true
            }
        },
        'GET_USER': {
            "METHOD": "post",
            "URL": "/api/auth/user",
            validateParams() {
                return true
            }
        },
        'LOGOUT': {
            "METHOD": "post",
            "URL": "/api/auth/logout",
            validateParams() {
                return true
            }
        },
        'REGISTER': {
            "METHOD": "post",
            "URL": "/api/auth/register",
            validateParams() {
                return true
            }
        },
    },

    'GENIE': {
        'BASIC': {
            "METHOD": "post",
            "URL": "/api/insert/genie/basic",
            validateParams() {
                return true
            }
        },
    }
}

module.exports = {
    getApi: (type, name, params = null) => {
        console.log({ VUE_APP_API_URL_PREFIX })
        console.log({
            type, name, params,
            z:apiConfig[type][name]
        })
        const { METHOD: apiMethod, URL: apiUrl } = apiConfig[type][name]

        console.log(params);
        return axios[apiMethod](VUE_APP_API_URL_PREFIX + apiUrl, params)
    }
}