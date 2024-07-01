import styles from "./Comentario.module.css";
export default function ComentarioPequeno(props){
    return(
        <>
        <hr style={{margin:"20px"}} />
        <div className={styles.divAdicionar}>{props.textoComentario}</div>
        <hr style={{margin:"20px"}} />
        
        </>
    )
}