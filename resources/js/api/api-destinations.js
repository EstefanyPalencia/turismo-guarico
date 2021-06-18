import Api from "./Api";

export const getDestinations = async () => {
    return Api.get("/destinations").then((resp) => {
        return resp.data.data;
    });
};
