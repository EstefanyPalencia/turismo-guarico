import { motion } from "framer-motion";
import styled from "styled-components";

import Colaboracion from "../../images/valores/colaboracion.png";

const values = [
    { name: "Colaboración", image: Colaboracion },
    { name: "Diversidad", image: Colaboracion },
    { name: "Innovación", image: Colaboracion },
    { name: "Enfoque", image: Colaboracion },
    { name: "Impacto social", image: Colaboracion },
    { name: "Compromiso", image: Colaboracion },
    { name: "Empatía", image: Colaboracion },
    { name: "Compromiso ambiental", image: Colaboracion },
];

const EnterpriseValuesContainer = styled.div`
    padding: 1rem;
`;

const TitleComponent = styled.h2`
    margin-top: 0.5rem;
    color: #213f3e;
`;

const CardList = styled.div`
    width: calc(100vw - 2rem);
    overflow-x: scroll;
    display: grid;
    grid-template-columns: repeat(8, 1fr);
    column-gap: 1rem;
    @media (min-width: 768px) {
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(2, auto);
        column-gap: 2rem;
        row-gap: 2rem;
        overflow-x: auto;
    }
`;

const Card = styled(motion.div)`
    padding: 1rem;
    background-color: #f7f9fa;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 1rem;
    text-align: center;
`;

const Image = styled.img`
    width: 6rem;
`;

const EnterpriseValues = () => {
    return (
        <EnterpriseValuesContainer>
            <TitleComponent>Valores</TitleComponent>
            <CardList>
                {values.map((value, index) => (
                    <Card key={`enterprise-value-${index}`}>
                        <Image src={value.image} />
                        {value.name}
                    </Card>
                ))}
            </CardList>
        </EnterpriseValuesContainer>
    );
};

export default EnterpriseValues;
