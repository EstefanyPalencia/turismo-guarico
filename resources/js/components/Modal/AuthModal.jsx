import { AnimatePresence, motion } from "framer-motion";
import { useRef } from "react";
import styled from "styled-components";
import { useAuth } from "@/contexts/auth-context";
import Button from "@/components/Button/Button";

const ModalBackdrop = styled(motion.div)`
    position: absolute;
    top: 0;
    z-index: 6;
    background-color: rgba(255, 255, 255, 0.5);
    width: 100vw;
    height: 100vh;
    backdrop-filter: blur(1rem);
    display: flex;
    justify-content: center;
    align-items: center;
`;

const Modal = styled(motion.div)`
    padding: 1rem;
    background-color: rgba(255, 255, 255, 1);
    border-radius: 0.8rem;
`;

const ModalTitle = styled.h4`
    margin-top: 0.5rem;
    text-align: center;
`;

const ModalBody = styled.div`
    form:nth-last-child {
        margin-top: 1rem;
    }
`;

const FormGroup = styled.div`
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 0.5rem;

    label {
        font-size: 0.8rem;
        margin-bottom: 0.1rem;
    }

    input {
        border-color: rgba(0, 0, 0, 0.1);
        border-width: 0.1rem;
        border-radius: 0.5rem;
        padding: 0.5rem;
    }
`;

const AuthModal = () => {
    const { showModal, dispatch } = useAuth(
        ({ state: { showModal }, dispatch }) => ({
            showModal,
            dispatch,
        })
    );

    const modalBackdropRef = useRef();

    const handleInModalClick = (e) => {
        if (e.target === modalBackdropRef.current) {
            dispatch({ type: "AUTH_NOT_SHOW_MODAL" });
        }
    };

    return (
        <AnimatePresence>
            {showModal && (
                <ModalBackdrop
                    ref={modalBackdropRef}
                    onTap={handleInModalClick}
                    initial={{ opacity: 0 }}
                    animate={{ opacity: 1 }}
                    exit={{ opacity: 0 }}
                >
                    <Modal
                        initial={{ opacity: 0, scale: 0.75 }}
                        animate={{ opacity: 1, scale: 1 }}
                        exit={{ opacity: 0, scale: 0 }}
                    >
                        <ModalTitle>Iniciar sesión</ModalTitle>
                        <ModalBody>
                            <form>
                                <FormGroup>
                                    <label>Correo electrónico:</label>
                                    <input type="email" name="email" />
                                </FormGroup>
                                <FormGroup>
                                    <label>Contraseña:</label>
                                    <input type="password" name="password" />
                                </FormGroup>
                                <FormGroup style={{}}>
                                    <Button>Iniciar sesión</Button>
                                </FormGroup>
                            </form>
                        </ModalBody>
                    </Modal>
                </ModalBackdrop>
            )}
        </AnimatePresence>
    );
};

export default AuthModal;
