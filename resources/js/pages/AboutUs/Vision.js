import styled from "styled-components";

const VisionContainer = styled.div`
    padding: 1rem;
    background-color: #213f3e;
    color: #f7f9fa;
    display: flex;
    flex-direction: column;
    justify-content: center;
    @media (min-width: 768px) {
        justify-content: start;
    }
`;

const TitleComponent = styled.h2`
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    @media (min-width: 768px) {
        margin-top: 2.5rem;
    }
`;

const Vision = () => {
    return (
        <VisionContainer>
            <TitleComponent>Visión</TitleComponent>
            <p>
                Ser la principal plataforma de búsqueda de rutas turísticas del
                estado Guárico a ni- vel mundial
            </p>
        </VisionContainer>
    );
};

export default Vision;
