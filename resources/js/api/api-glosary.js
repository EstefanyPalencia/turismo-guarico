import Api from "./Api";

export const getGlosary = async () => {
    return Api.get("/glosary/letters").then((resp) => {
        return resp.data;
    });
};
