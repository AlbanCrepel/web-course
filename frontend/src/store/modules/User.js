import axios from "axios";

const state = {
    user: null,
};

const mutations = {
    setUser(state, user) {
        state.user = user;
    },
};

const actions = {
    async loadUser({commit}, params) {
        try {
            const res = await axios.post("/api/users/login_check", {
                email : "test@test.com",
                password : "password"
            });
            console.log(res);
        } catch (e) {
            console.log(e);
        }
    },
};

const getters = {
    getUser: state => state.user
};

export default {
    state,
    getters,
    actions,
    mutations,
};
