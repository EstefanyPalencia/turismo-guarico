import styled from "styled-components";

const MisionContainer = styled.div`
    padding: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
`;

const TitleComponent = styled.h2`
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
`;

const Mision = () => {
    return (
        <MisionContainer>
            <TitleComponent>Misión</TitleComponent>
            <p>
                Permitir a los turistas o viajeros del mundo obtener información
                de las rutas de ac- ceso a distintos puntos turísticos del
                estado Guárico mediante los medios de transporte posibles a
                través de una plataforma web y aplicación móvil
            </p>
        </MisionContainer>
    );
};

export default Mision;
