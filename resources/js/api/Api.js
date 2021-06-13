import Axios from "axios";

const Api = Axios.create({
    baseURL: `${window.location.origin}/api`,
});

Api.defaults.withCredentials = true;

export default Api;
