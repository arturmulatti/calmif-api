import { FaComment } from "react-icons/fa";
import { FaRegComment } from "react-icons/fa";

function postagem(props){
  
 


var idConteudo = "conteudo"+ props.idConteudo
var idTitulo = "titulo" + props.idConteudo

    return(
      
      <div className="divPost" >
    <div className="divAdicionar" style={{height:props.alturaDiv1}}>
     <div className='col-md-3 divAdicionar2'style={{height:props.alturaDiv2}}>
       <div className=""></div>
       <textarea  id={idTitulo} cols="213" rows="2" className='campoTexto'  value={props.titulo} readOnly ></textarea>
       <textarea   id={idConteudo} cols="200" rows={props.alturaTextArea} className='campoTexto2'  value={props.texto}  readOnly   ></textarea>
      
      </div>
      <div>
        <button className="botaoComentario">
      <FaRegComment className="iconeComentario"/>
      </button>
      </div>
    </div>   

    </div>
    
    )
}
export default postagem