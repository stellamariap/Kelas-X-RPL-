import React, { use } from "react";
import { useNavigate } from "react-router-dom";

function CitaCita() {
    const navigate = useNavigate(); 
    return (
        <div style={{ 
            height: "100vh", 
            display: "flex",
            justifyContent: "center", 
            alignItems: "center", 
            flexDirection: "column"
            }}>
            <h1>Welcome</h1>
            <p>You have successfully logged in.</p>
            
            <button onClick={() => navigate("/")}>
                Logout
            </button>
        </div>
    ); 
}

export default CitaCita; 