import React from "react";
import { useNavigate } from "react-router-dom";

function Home() {
    const navigate = useNavigate(); 

    return (
        <div style={{ 
            height: "100vh", 
            display: "flex",
            flexDirection: "column",
            justifyContent: "center",
            alignItems: "center",
            background: "linear-gradient(135deg, #0f172a, #1e293b)",
            color: "white",
            textAlign: "center", 
            padding: "20px"
         }}>

            <h1 style={{ fontSize: "48px", marginBottom: "10px" }}>
                Build. Create. Innovate. 
            </h1>

            <h2 style={{ color: "#38bdf8" }}>
                Web Developer & Problem Solver 
            </h2>

            <p style={{ 
                maxWidth: "500px", 
                marginTop: "20px",
                lineHeight: "1.6"
            }}>
                Turning ideas into interactive digital experiences. Focused on clean design, performance, and simplicity. 
            </p>

            <div style={{ marginTop: "30px" }}>
                <button 
                    onClick={() => { 
document.getElementById("contact").scrollIntoView({ behavior: "smooth"}); 
                    }}
                    style={{ 
                        padding: "10px 20px", 
                        marginRight: "10px", 
                        background: "#38bdf8",
                        border: "none",
                        borderRadius: "5px",
                        color: "white",
                        cursor: "pointer"
                    }}>
                        Contact Me
                    </button>

                    <button 
                        onClick={() => navigate("/login")}
                        style={{ 
                            padding: "10px 20px", 
                            background: "transparent",
                            border: "1px solid #38bdf8",
                            borderRadius: "5px",
                            color: "#38bdf8", 
                            cursor: "pointer"
                        }}>
                            Admin
                        </button>
            </div>
                <div id="contact" style={{ marginTop: "200px" }}>
                    <h2>What I Do</h2>
                    <p>
                        Designing and developing modern web applications with clean and efficient code.
                    </p>
                </div>
        </div>
    );
}

export default Home; 