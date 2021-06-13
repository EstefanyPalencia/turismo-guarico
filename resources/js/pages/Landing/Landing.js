import styled from "styled-components";

import Slider from "@/components/Slider/Slider";

import ArcoDelLlano from "@/images/arco-del-llano.jpg";
import Morritos from "@/images/morritos.jpg";
import VillaOlimpica from "@/images/villa-olimpica.jpg";
import CartelMonumentoAristidesRojas from "@/images/cartel-monumento-aristides-rojas.jpg";

const images = [
    { image: ArcoDelLlano, title: "Puerta del Llano" },
    { image: Morritos, title: "Morritos" },
    { image: VillaOlimpica, title: "Villa Olímpica" },
    {
        image: CartelMonumentoAristidesRojas,
        title: "Monumento Aristides Rojas",
    },
];

const LandingContainer = styled.div`
    display: grid;
    grid-template-rows: repeat(2, 1fr) 0.5fr 1fr;
    row-gap: 0.5rem;
    @media (min-width: 768px) {
        grid-template-rows: 1.5fr 0.8fr 1.3fr;
        grid-template-columns: repeat(2, 1fr);
        grid-template-areas:
            "slider slider"
            "mision vision"
            "valuable valuable";
        row-gap: 0rem;
    }
`;

const Landing = () => {
    return (
        <LandingContainer>
            <Slider images={images} />
        </LandingContainer>
    );
};

export default Landing;
