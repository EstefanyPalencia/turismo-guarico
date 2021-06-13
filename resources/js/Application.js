import React from "react";
import ReactDOM from "react-dom";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import { createGlobalStyle } from "styled-components";
import { AuthProvider } from "./contexts/auth-context";

import Layout from "@/components/Layout/Layout";
import Landing from "./pages/Landing/Landing";
import AboutUs from "./pages/AboutUs/AboutUs";
import Glosary from "./pages/Glosary/Glosary";
import { QueryClient, QueryClientProvider } from "react-query";

const GlobalStyle = createGlobalStyle`
    body {
        margin: 0;
        padding: 0;
        background-color: #efefef;
        color: #213f3e;
        font-family: 'Nunito', sans-serif;
        font-size: 16px;
    }
    @media (min-width: 768px) {
        body {
            font-size: 24px;
        }
    }
`;

const queryClient = new QueryClient();

const Application = () => {
    return (
        <QueryClientProvider client={queryClient}>
            <AuthProvider>
                <GlobalStyle />
                <Router>
                    <Layout>
                        <Switch>
                            <Route exact path="/" component={Landing} />
                            <Route
                                exact
                                path="/sobre-nosotros"
                                component={AboutUs}
                            />
                            <Route exact path="/glosario" component={Glosary} />
                        </Switch>
                    </Layout>
                </Router>
            </AuthProvider>
        </QueryClientProvider>
    );
};

export default Application;

if (document.getElementById("root")) {
    ReactDOM.render(<Application />, document.getElementById("root"));
}
