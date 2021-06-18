import styled from "styled-components";

const BadgeContainer = styled.span`
    background-color: rgba(44, 195, 115, 0.8);
    display: inline-flex;
    justify-content: center;
    align-items: center;
    padding: 0.1rem 0.6rem;
    border-radius: 0.4rem;
    margin-right: 0.2rem;

    svg {
        width: 1.1rem;
    }

    span {
        padding-left: 0.3rem;
    }
`;

const Badge = ({ icon, title }) => {
    return (
        <BadgeContainer>
            {icon} <span>{title}</span>
        </BadgeContainer>
    );
};

export default Badge;
