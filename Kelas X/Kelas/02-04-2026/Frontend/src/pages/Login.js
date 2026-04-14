import React, { useState } from "react";
import {useNavigate} from "react-router-dom";

function Login() {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const navigate = useNavigate(); 

   const handleLogin = async () => {
    try {
        const response = await
    fetch ("http://127.0.0.1:8000/login", {
        method: "POST",
        headers: {
            "Content-Type": "application/json", 
        }, 
        body: JSON.stringify({
            email: email, 
            password: password, 
        }), 
    });
    console.log("STATUS:", response.status); 

    const data =  await response.json(); 
    console.log("DATA:", data);

    if (response.ok) {
        navigate("/cita");
    } else {
        alert ("Login gagal"); 
    }
} catch (error) {
    console.log("ERROR:", error); 
    alert("Server tidak terhubung"); 
};
   }

    return (
        <div style={{ 
            display: "flex",
            justifyContent: "center",
            alignItems: "center", 
            height: "100vh", 
            background: "#0f172a"
         }}>
            <div style={{ 
                background: "#1e293b",
                padding: "30px",
                borderRadius: "10px",
                color: "white", 
                width: "300px",
                textAlign: "center"
            }}>
                <h2>Admin Login</h2>
                <input
                    type="email"
                    placeholder="Email"
                    onChange={(e) => setEmail(e.target.value)}
                    style={{ width: "100%", padding: "10px", margin: "10px 0" }}
                /> 
                <input
                    type="password"
                    placeholder="Password"
                    onChange={(e) => setPassword(e.target.value)}
                    style={{ width: "100%", padding: "10px", marginBottom: "15px" }}
                /> 
                <button 
                    onClick={handleLogin}
                    style={{ 
                        width: "100%",
                        padding: "10px",
                        background: "#38bdf8",
                        color: "white",
                        border: "none",
                        cursor: "pointer"
                    }}> Login

                </button>
            </div>
        </div>
    );
}

export default Login; 