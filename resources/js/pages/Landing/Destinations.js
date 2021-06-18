import { useQuery } from "react-query";
import styled from "styled-components";
import { getDestinations } from "@/api/api-destinations";
import Destination from "@/components/Destination/Destination";

const DivContainer = styled.div`
    display: grid;
    grid-template-rows: 2.5rem repeat(${(props) => props.quantity}, 1fr);

    @media (min-width: 768px) {
        grid-template-rows: 5rem auto;
        grid-template-columns: 1fr 1fr;
        margin-left: 2rem;
        margin-right: 2rem;
        margin-bottom: 2rem;
    }
`;

const Title = styled.h2`
    align-self: end;
    margin: 0rem;
    margin-left: 0.6rem;
    @media (min-width: 768px) {
        grid-column-start: 1;
        grid-column-end: 3;
        margin-left: 2rem;
    }
`;

const Destinations = () => {
    const { data, isLoading, isError } = useQuery(
        "destinations",
        getDestinations
    );

    if (isLoading) return <div>Loading...</div>;

    if (isError) return <div>error...</div>;

    return (
        <DivContainer quantity={data.length}>
            <Title>Destinos</Title>
            {data.map((destination) => (
                <Destination
                    destination={destination}
                    key={`detination-item-${destination.id}`}
                />
            ))}
        </DivContainer>
    );
};

export default Destinations;
