import React from "react";
import styled from "styled-components";

const Container = styled.div`
    color: #f7f9fa;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 5rem;
    background-color: #298f55;
    font-weight: 700;
`;

const Footer = () => {
    return <Container>Copyright TravelUs</Container>;
};

export default Footer;
