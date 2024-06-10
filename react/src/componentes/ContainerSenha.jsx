import styles from "./login.module.css"
import { TextField } from "@mui/material"
import { Link } from "react-router-dom"
import { useState } from "react"
import axios from "axios"
import { useEffect } from "react"
function ContainerSenha(){
      const http = axios.create({
            baseURL: "http://localhost:8000/api/",
            headers: {
              "content-type": "application/json",
            },
          });
    const [dados,setDados] = useState({
      email:"",
      senha:""
    })
    const setEmail = (event) => {
      setDados({ ...dados, email: event.target.value });
    };
  
    const setSenha = (event) => {
      setDados({ ...dados, senha: event.target.value });
    };
 const logar = ()=>{
      
    
  http.post('LoginEmail', { email: dados.email, password: dados.senha })
  .then(res => console.log(res))
  .catch(err => console.error(err));
  }
  
  
    
    
    
    
 
    return(
 <div className={styles.containerInput}>


<p style={{ marginTop: "40px", marginLeft: "345px", fontSize: "40px",marginBottom:"5px" }}>Login</p>
      <TextField id="campoEmail" label="Email" variant="outlined" 
      className="ContainerSenha" 
      sx={{ input: { color: 'white' ,backgroundColor:"#111417", border:"solid #111417 1px" }, InputLabelProps:{focused:{border:"white"}}}}
      InputLabelProps={{style: { color: 'white' } }}
      style={{top:"40px",left:"50%"}}
      onChange={setEmail}
      
      />
          
      <p className={styles.textoAviso}></p>    

      <TextField id="campoSenha" label="Senha" variant="outlined" type="password"
      className="ContainerSenha" 
      sx={{ input: { color: 'white' ,backgroundColor:"#111417", border:"solid #111417 1px" }, InputLabelProps:{focused:{border:"white"}}}}
      InputLabelProps={{style: { color: 'white' } }}
      style={{top:"40px",left:"50%"}}
      onChange={setSenha}
      
      />
      <div style={{position:"absolute", top:"255px"}}>

<p style={{marginLeft:"160px",fontSize:"13px"}}>Esqeuceu a senha?</p>

<button className={styles.botaoCriar} onClick={logar}><p style={{ fontSize: "15px" }}>Login</p></button>
<p style={{marginLeft:"365px ",fontSize:"13px"}}>Cadastre-se</p>


      
      </div>
      </div>

    )
}
export default ContainerSenha