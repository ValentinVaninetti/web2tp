"use strict"
document.addEventListener("DOMContentLoaded",iniciarPagina);
    function iniciarPagina() { 
       

    const url = "api/comments";
    
    let app = new Vue({
        el: '#app-commentary',
        data: {
            comments: [                
            
            ]
        }
    });
  
   

    function getTargetedButton(){
        let button_comments = document.querySelectorAll(".button_comments");
        button_comments.forEach(element => {
            
            element.addEventListener("click", waitFetch);           
        
        });
    }    
   
    getTargetedButton();  

    function getCommentsId(event) {        
        let id_product = event.target.id;        
        return id_product;       
        
    }

    let button_comments = document.querySelector("#button_submit_comment");   
    if(button_comments !=null){        
        button_comments.addEventListener("click", addComment);
    }

    async function fetchComments(event) {  
        let id_product = getCommentsId(event); 
        let button_comments = document.querySelector("#button_submit_comment"); 
            if (button_comments != null){                
                button_comments.setAttribute('data-objetcId', id_product); 
            }
       
        let response = await fetch(url+"/"+id_product);                 
        let productComment = await response.json();               
        app.comments = productComment;  
        
    }
    
    async function waitFetch(event){
        event.preventDefault();        
        await fetchComments(event);        
        addDeleteButton();
    }
    

    async function addComment(event) {
        event.preventDefault();        
        let id_product = event.currentTarget.getAttribute('data-objetcId');              
        let newComment = {
            comment: document.querySelector("#body_commentary").value,
            user_id: document.querySelector("#id_user").value,
            rating : getRating(),
            product_id : id_product
        }
        console.log(newComment);
        try {
            let Post = await fetch(url,{
            'method' : 'POST',
            'headers': {'Content-Type' : 'application/json'},
            'body' : JSON.stringify(newComment)
            });
                if (Post.ok) {
                console.log(r);
            }
        }catch(error){
            console.log(error.message);    
        } 
        
            

    }   
    function getRating(){        
        let rating = document.querySelector("#numRange").value;
        return rating;
    }   
    
    async function addDeleteButton(){             
        let buttonDeleteComment = document.querySelectorAll(".deleteCommentButton");
        console.log(buttonDeleteComment);
        for(let i = 0; i < buttonDeleteComment.length; i++){
            buttonDeleteComment[i].addEventListener("click", deleteComment);
        }
        
    }  

    async function deleteComment(event) {        
        event.preventDefault();        
        let id_comment = event.target.id;
        console.log(id_comment);
        try{
        let response = await fetch(url+"/"+id_comment,{
            'method' : 'DELETE'
        });
        if (response.ok) {
            
            console.log("Eliminado");
        
        }
        }catch(error){
            console.log(error.message);
        }
        
    }

   
       
        
    
  
}