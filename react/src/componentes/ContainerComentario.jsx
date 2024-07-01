import styles from "./Comentario.module.css";
import Accordion from '@mui/material/Accordion';
import AccordionSummary from '@mui/material/AccordionSummary';
import AccordionDetails from '@mui/material/AccordionDetails';
import Typography from '@mui/material/Typography';
import { useState } from "react";
import axios from "axios";
import ComentarioPequeno from "./ComentarioPequeno";
import { useEffect } from "react";
export default function ContainerComentario({abrirComentario,detailsRef}){
const [dados, setDados] = useState([])
  
  useEffect(()=>{
    axios.get("http://localhost:8000/requestComentario").then(
        function(res){
            ////Lembrar de converter o resultado do arquivo em vetor
            console.log(res.data)
           setDados(res.data)
            
        }
    )
    
    
    },[]
    
    )
    return(
        <>
        
          
       
        <Accordion expanded = {abrirComentario} style={{backgroundColor:"#111417"}} >
        <AccordionSummary
          
          
          id="panel1-header"
        >
          
          <Typography color="black" style={{textAlign: "center", width: "100%",fontSize:"25px",color:"aliceblue"}} > Comentários</Typography>
          
        </AccordionSummary>
        <AccordionDetails >
        {
  
  dados.map(function(val){
        return(
           
            <ComentarioPequeno key= {val.id} textoComentario = {val.conteudo} />
         ///Lembrar de atribuir o array com os dados no map, e depois renderizar cada comentario
            
        )
        
    }
    )
    
}
        
        <div id = "rootComentario"ref={detailsRef}></div>
        </AccordionDetails>
      </Accordion>
        </>
    )
}