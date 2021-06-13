import React from "react";
import NavBar from "@/components/NavBar/NavBar";
import AuthModal from "@/components/Modal/AuthModal";
import styled from "styled-components";
import Footer from "../Footer/Footer";

const WrapperComponent = styled.div`
    min-height: 100vh;
    display: flex;
    flex-direction: column;
`;

const ContentComponent = styled.div`
    flex-grow: 1;
`;

const Layout = ({ children }) => {
    return (
        <>
            <AuthModal />

            <WrapperComponent>
                <NavBar />
                <ContentComponent>{children}</ContentComponent>
                <Footer />
            </WrapperComponent>
        </>
    );
};

export default Layout;
