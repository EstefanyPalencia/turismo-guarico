import { createContext, useContext, useReducer } from "react";

const AuthContext = createContext();

function authReducer(state, action) {
    switch (action.type) {
        case "AUTH_SHOW_MODAL": {
            return { ...state, showModal: true };
        }
        case "AUTH_NOT_SHOW_MODAL": {
            return { ...state, showModal: false };
        }
        default: {
            throw new Error(`Unhandled action type: ${action.type}`);
        }
    }
}

function AuthProvider({ children }) {
    const [state, dispatch] = useReducer(authReducer, {
        showModal: false,
    });
    // NOTE: you *might* need to memoize this value
    // Learn more in http://kcd.im/optimize-context
    const value = { state, dispatch };
    return (
        <AuthContext.Provider value={value}>{children}</AuthContext.Provider>
    );
}

function useAuth(fn) {
    const context = useContext(AuthContext);
    if (context === undefined) {
        throw new Error("useAuth must be used within a AuthContext");
    }
    return fn(context);
}

export { AuthProvider, useAuth };
