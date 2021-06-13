import styled from "styled-components";
import { useAuth } from "../../contexts/auth-context";
import Button from "../Button/Button";
import MenuDropdown from "../Dropdown/MenuDropdown";

const NavBarContainer = styled.div`
    position: relative;
    z-index: 2;
    width: 100vw;
`;

const NavBarContent = styled.div`
    display: flex;
    background-color: #f7f9fa;
    margin: 0.5rem;
    padding: 0.8rem 1rem;
    border-radius: 0.8rem;
    justify-content: space-between;
    align-items: center;
`;

const LogoTitle = styled.div`
    font-weight: 700;
`;

const DivOptionContainer = styled.div`
    display: grid;
    grid-template-columns: auto auto;
    column-gap: 0.3rem;
`;

const NavBar = () => {
    const dispatch = useAuth(({ dispatch }) => dispatch);
    console.log();
    return (
        <NavBarContainer>
            <NavBarContent>
                <LogoTitle>Travel Us</LogoTitle>
                <DivOptionContainer>
                    <Button onTap={() => dispatch({ type: "AUTH_SHOW_MODAL" })}>
                        Ingresar
                    </Button>
                    <MenuDropdown />
                </DivOptionContainer>
            </NavBarContent>
        </NavBarContainer>
    );
};

export default NavBar;
