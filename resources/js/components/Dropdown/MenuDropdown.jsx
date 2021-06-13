import { OverflowMenuVertical32 } from "@carbon/icons-react";
import ButtonIcon from "@/components/Button/ButtonIcon";
import styled from "styled-components";
import { AnimatePresence, motion } from "framer-motion";
import { useState } from "react";
import { NavLink } from "react-router-dom";

const NavContainer = styled(motion.nav)`
    background-color: white;
    position: absolute;
    top: calc(100%);
    right: calc(0% + 0.5rem);
    border-radius: 0.5rem;

    ul.navbar__container {
        list-style: none;
        padding: 0rem;
    }
    li.navbar__item {
        padding: 0.8rem 2rem;
        text-align: left;
        a {
            text-decoration: none;
            color: #213f3e;
        }
    }
`;

const MenuDropdown = () => {
    const [showMenu, setShowMenu] = useState(false);
    return (
        <>
            <ButtonIcon onTap={() => setShowMenu((state) => !state)}>
                <OverflowMenuVertical32 />
            </ButtonIcon>
            <AnimatePresence>
                {showMenu && (
                    <NavContainer
                        initial={{ opacity: 0, scale: 0.75 }}
                        animate={{ opacity: 1, scale: 1 }}
                        exit={{ opacity: 0 }}
                    >
                        <ul className="navbar__container">
                            <li className="navbar__item">
                                <NavLink to="/">Inicio</NavLink>
                            </li>
                            <li className="navbar__item">
                                <NavLink to="/sobre-nosotros">
                                    Sobre nosotros
                                </NavLink>
                            </li>
                            <li className="navbar__item">
                                <NavLink to="/glosario">Glosario</NavLink>
                            </li>
                            <li className="navbar__item">
                                Teoría del Aprendizaje
                            </li>
                        </ul>
                    </NavContainer>
                )}
            </AnimatePresence>
        </>
    );
};

export default MenuDropdown;
