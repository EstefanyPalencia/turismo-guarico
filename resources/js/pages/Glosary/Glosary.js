import { useQuery } from "react-query";
import styled from "styled-components";
import { getGlosary } from "../../api/api-glosary";

const LetterContainer = styled.div`
    padding: 0rem 2rem;
`;

const TitleLetter = styled.h3`
    margin-top: 0rem;
    margin-bottom: 0rem;
`;

const Glosary = () => {
    const { data, isSuccess } = useQuery("glosary", getGlosary);
    return (
        <>
            <LetterContainer>
                <h1 style={{ marginBottom: "0rem" }}>Glosario</h1>
                {isSuccess &&
                    data.data.map((item, index) => (
                        <div key={`glosary-letter-${index}`}>
                            <TitleLetter>{item.letter}</TitleLetter>

                            <ul
                                style={{
                                    marginTop: "0.5rem",
                                }}
                            >
                                {item.words.map((word, i) => (
                                    <li
                                        key={`glosary-letter-${index}-word-${i}`}
                                    >
                                        <h4
                                            style={{
                                                marginBottom: "0.2rem",
                                                marginTop: "0rem",
                                            }}
                                        >
                                            {word.word}:
                                        </h4>
                                        <p
                                            style={{
                                                marginTop: "0rem",
                                            }}
                                            dangerouslySetInnerHTML={{
                                                __html: word.body,
                                            }}
                                        ></p>
                                    </li>
                                ))}
                            </ul>
                        </div>
                    ))}
            </LetterContainer>
        </>
    );
};

export default Glosary;
