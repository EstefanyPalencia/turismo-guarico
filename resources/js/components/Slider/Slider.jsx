import { useState } from "react";
import { motion, AnimatePresence } from "framer-motion";
import { wrap } from "popmotion";
import "./slider.css";
import styled from "styled-components";
import { CaretLeft32, CaretRight32 } from "@carbon/icons-react";

const DivContainerSlider = styled.div`
    position: relative;
    overflow-x: hidden;
`;

const SlideImage = styled.div`
    display: flex;
    justify-content: center;
    align-items: center;
`;

const MotionImage = styled(motion.img)`
    max-height: 16rem;
    border-radius: 0.5rem;
    margin: 0rem 0.6rem;
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;

    ::before {
        content: "";
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: 1;
        height: 16rem;
    }

    @media (min-width: 768px) {
        max-height: 35rem;
    }
`;

const SlideImageText = styled.div`
    position: absolute;
    z-index: 1;
    color: white;
    font-weight: 700;
`;

const variants = {
    enter: (direction) => {
        return {
            x: direction > 0 ? 1000 : -1000,
            opacity: 0,
        };
    },
    center: {
        zIndex: 1,
        x: 0,
        opacity: 1,
    },
    exit: (direction) => {
        return {
            zIndex: 0,
            x: direction < 0 ? 1000 : -1000,
            opacity: 0,
        };
    },
};

const swipeConfidenceThreshold = 10000;
const swipePower = (offset, velocity) => {
    return Math.abs(offset) * velocity;
};

const Slider = ({ images }) => {
    const [[page, direction], setPage] = useState([0, 0]);
    const imageIndex = wrap(0, images.length, page);
    const paginate = (newDirection) => {
        setPage([page + newDirection, newDirection]);
    };
    return (
        <DivContainerSlider>
            <AnimatePresence initial={false} custom={direction}>
                <SlideImage>
                    <MotionImage
                        key={page}
                        src={images[imageIndex].image}
                        custom={direction}
                        variants={variants}
                        initial="enter"
                        animate="center"
                        exit="exit"
                        transition={{
                            x: { type: "spring", stiffness: 300, damping: 30 },
                            opacity: { duration: 0.2 },
                        }}
                        drag="x"
                        dragConstraints={{ left: 0, right: 0 }}
                        dragElastic={1}
                        onDragEnd={(e, { offset, velocity }) => {
                            const swipe = swipePower(offset.x, velocity.x);

                            if (swipe < -swipeConfidenceThreshold) {
                                paginate(1);
                            } else if (swipe > swipeConfidenceThreshold) {
                                paginate(-1);
                            }
                        }}
                    />
                    <SlideImageText>{images[imageIndex].title}</SlideImageText>
                </SlideImage>
            </AnimatePresence>
            <div className="next" onClick={() => paginate(1)}>
                <CaretRight32 />
            </div>
            <div className="prev" onClick={() => paginate(-1)}>
                <CaretLeft32 className="icon" />
            </div>
        </DivContainerSlider>
    );
};

export default Slider;
