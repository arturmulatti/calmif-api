
function postagem(props){
  
 


var idConteudo = "conteudo"+ props.idConteudo
var idTitulo = "titulo" + props.idConteudo

    return(
      
      <div className="divPost" >
    <div className="divAdicionar" style={{height:props.alturaDiv1}}>
     <div className='divAdicionar2'style={{height:props.alturaDiv2}}>
       <div className=""></div>
       <textarea  id={idTitulo} cols="213" rows="2" className='campoTexto'  value={props.titulo} readOnly ></textarea>
       <textarea   id={idConteudo} cols="200" rows={props.alturaTextArea} className='campoTexto2'  value={props.texto}  readOnly   ></textarea>
     
      </div>

    </div>   

    </div>
    
    )
}
export default postagem