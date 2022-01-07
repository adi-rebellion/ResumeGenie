
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
        'GET_BASIC':
        {
            "METHOD": "get",
            "URL": "/api/get/genie/basic",
            validateParams() {
                return true
            }
        },
        'WORK_EXP': {
            "METHOD": "post",
            "URL": "/api/insert/genie/work",
            validateParams() {
                return true
            }
        },
        'UPDATE_WORK_EXP': {
            "METHOD": "post",
            "URL": "/api/update/genie/work",
            validateParams() {
                return true
            }
        },
        'TOGGLE_WORK_EXP':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/work",
            validateParams() {
                return true
            }
        },
        'EDUCATION': {
            "METHOD": "post",
            "URL": "/api/insert/genie/education",
            validateParams() {
                return true
            }
        },
        'TOGGLE_WORK_EDUCATION':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/education",
            validateParams() {
                return true
            }
        },
        'UPDATE_EDUCATION': {
            "METHOD": "post",
            "URL": "/api/update/genie/education",
            validateParams() {
                return true
            }
        },
        'GET_ALL_WORK_EXP':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/work",
            validateParams() {
                return true
            }
        },
        'GET_ALL_EDUCATION':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/education",
            validateParams() {
                return true
            }
        },
        'GET_ALL_AWARD':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/award",
            validateParams() {
                return true
            }
        },
        'AWARD':
        {
            "METHOD": "post",
            "URL": "/api/insert/genie/award",
            validateParams() {
                return true
            }
        },
        'TOGGLE_AWARD':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/award",
            validateParams() {
                return true
            }
        },
        'UPDATE_AWARD': {
            "METHOD": "post",
            "URL": "/api/update/genie/award",
            validateParams() {
                return true
            }
        },
        'GET_ALL_PROJECT':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/project",
            validateParams() {
                return true
            }
        },
        'PROJECT':
        {
            "METHOD": "post",
            "URL": "/api/insert/genie/project",
            validateParams() {
                return true
            }
        },
        'TOGGLE_PROJECT':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/project",
            validateParams() {
                return true
            }
        },
        'UPDATE_PROJECT': {
            "METHOD": "post",
            "URL": "/api/update/genie/project",
            validateParams() {
                return true
            }
        },
        'GET_ALL_SKILL':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/skill",
            validateParams() {
                return true
            }
        },
        'SKILL':
        {
            "METHOD": "post",
            "URL": "/api/insert/genie/skill",
            validateParams() {
                return true
            }
        },
        'TOGGLE_SKILL':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/skill",
            validateParams() {
                return true
            }
        },
        'UPDATE_SKILL': {
            "METHOD": "post",
            "URL": "/api/update/genie/skill",
            validateParams() {
                return true
            }
        },
        'GET_ALL_CONTACT':
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/contact",
            validateParams() {
                return true
            }
        },
        'CONTACT':
        {
            "METHOD": "post",
            "URL": "/api/insert/genie/contact",
            validateParams() {
                return true
            }
        },
        'ALL_ACTIVE_COMPO' :
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/active",
            validateParams() {
                return true
            }
        },
        'GENIE_SKILL_SELECT' :
        {
            "METHOD": "post",
            "URL": "/api/get/all/genie/skill",
            validateParams() {
                return true
            }
        },
        'GENIE_CONNECT' :
        {
            "METHOD": "get",
            "URL": "/api/get/all/genie/connect",
            validateParams() {
                return true
            }
        },
        // 'GET_ALL_SOCIAL':
        // {
        //     "METHOD": "get",
        //     "URL": "/api/get/all/genie/social",
        //     validateParams() {
        //         return true
        //     }
        // },
        'GET_ALL_SOCIAL':
        {
            "METHOD" : "get",
            "URL" : "/api/get/all/genie/social",
            validateParams()
            {
                return true
            }
        },
        'SOCIAL':
        {
            "METHOD": "post",
            "URL": "/api/insert/genie/social",
            validateParams() {
                return true
            }
        },
        'TOGGLE_SOCIAL':{
            "METHOD": "post",
            "URL": "/api/toggle/genie/social",
            validateParams() {
                return true
            }
        },
        'UPDATE_SOCIAL': {
            "METHOD": "post",
            "URL": "/api/update/genie/social",
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