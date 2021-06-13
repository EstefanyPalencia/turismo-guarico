import styled from "styled-components";
import Button from "./Button";

const ButtonIcon = styled(Button)`
    padding: 0.3rem 0.1rem;
    background-color: transparent;
    color: #213f3e;
    display: flex;
`;

export default function (props) {
    return <ButtonIcon {...props} />;
}
