import { motion } from "framer-motion";
import styled from "styled-components";

const Button = styled(motion.div)`
    background-color: #298755;
    padding: 0.6rem 0.9rem;
    color: #f7f9fa;
    font-weight: 600;
    border-radius: 0.5rem;
    text-align: center;
    cursor: pointer;
`;

export default function (props) {
    return (
        <Button
            whileHover={{ scale: 1.1 }}
            whileTap={{ scale: 0.9 }}
            {...props}
        />
    );
}
