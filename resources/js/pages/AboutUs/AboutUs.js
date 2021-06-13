import styled from "styled-components";

import EnterpriseValues from "./EnterpriseValues";
import Mision from "./Mision";
import Vision from "./Vision";

const AboutUsContainer = styled.div`
    display: grid;
    grid-template-rows: 0.5fr 0.5fr 1fr;
    row-gap: 0.5rem;
    @media (min-width: 768px) {
        grid-template-rows: repeat(2, 0.8fr) 1.3fr;
        row-gap: 0rem;
    }
`;

const AboutUs = () => {
    return (
        <AboutUsContainer>
            <Mision />
            <Vision />
            <EnterpriseValues />
        </AboutUsContainer>
    );
};

export default AboutUs;
