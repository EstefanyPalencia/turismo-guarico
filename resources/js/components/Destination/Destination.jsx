import styled from "styled-components";
import Badge from "../Badge/Badge";
import { User32, Group32, Events32, EventsAlt32 } from "@carbon/icons-react";

const CardContainer = styled.div`
    background-color: #f7f9fa;
    margin: 0.6rem;
    border-radius: 1rem;
`;

const CardHeader = styled.div`
    padding: 0.8rem 0.7rem 0rem;
    @media (min-width: 768px) {
        padding: 1rem 0.9rem 0.2rem;
    }
`;

const CardImage = styled.div`
    position: relative;
    width: 100%;
    height: 15rem;
    border-radius: 0.5rem;
    background: linear-gradient(
            to top,
            #000 -5%,
            transparent 50%,
            transparent 80%
        ),
        url(${(props) => props.src});
    background-size: cover;
    @media (min-width: 768px) {
        height: 25rem;
    }
`;

const CardTitle = styled.h2`
    position: absolute;
    color: #f7f9fa;
    margin-left: 0.8rem;
    bottom: 0;
`;

const CardBody = styled.div`
    padding: 0.5rem 1rem;
    @media (min-width: 768px) {
        padding: 0.8rem 1.3rem;
    }
`;

const iconPrices = {
    1: <User32 />,
    2: <Group32 />,
    3: <Events32 />,
    4: <EventsAlt32 />,
};

const Destination = ({ destination }) => {
    return (
        <CardContainer>
            <CardHeader>
                <CardImage src={destination.image_url}>
                    <CardTitle>{destination.name}</CardTitle>
                </CardImage>
            </CardHeader>
            <CardBody>
                {destination.prices.map((price) => (
                    <Badge
                        key={`destination-item-${destination.id}-price-badge-${price.id}`}
                        title={`${price.amount}$`}
                        icon={iconPrices[price.people]}
                    />
                ))}
            </CardBody>
        </CardContainer>
    );
};

export default Destination;
