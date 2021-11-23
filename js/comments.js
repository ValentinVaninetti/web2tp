"use strict"
document.addEventListener("DOMContentLoaded",iniciarPagina);
    function iniciarPagina() { 
       

    const URL = "api/comments";
    
    let app = new Vue({
        el: '#app-commentary',
        data: {
            comments: [                
            
            ]
        }/*,
        methods: {
            orderBy:orderBy,
        }*/
    })
  
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
    async function fetchComments(event) {  
        let id_product = getCommentsId(event); 
        console.log(id_product)       
        let button_comments = document.querySelector("#button_submit_comment"); 
            if (button_comments != null){                
                button_comments.setAttribute('data-objetcId', id_product); 
            }
       try{
        let response = await fetch(URL + "/" + id_product);   
        console.log(response);              
        let productComment = await response.json(); 
        console.log("AA",productComment);                     
        app.comments = productComment;  
       }
         catch(error){
             console.log("MUERTE")
         }
        
    }
    
    async function waitFetch(event){
        
        event.preventDefault();       
        try{ 
            await fetchComments(event);        
            addDeleteButton();
        }catch(error){
            console.log("nope")
        }
    }

    let button_comments = document.querySelector("#button_submit_comment");   
    if(button_comments !=null){        
        button_comments.addEventListener("click", addComment);
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
            let Post = await fetch(URL,{
            'method' : 'POST',
            'headers': {'Content-Type' : 'application/json'},
            'body' : JSON.stringify(newComment)
            });
            if (Post.ok) {
                app.comments.push(newComment);
                
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
        let response = await fetch(URL+"/"+id_comment,{
            'method' : 'DELETE'
        });
            if (response.ok) {
                let comment = app.comments;
                for(let i = 0; i < comment.length; i++){
                    if(comment[i].comment_id == id_comment){
                        comment.splice(i,1);
                    }
                }   
            
            }
        }catch(error){
            console.log(error.message);
        }
        
    }    
    
    async function orderBy(event){
        event.preventDefault();      
        let product_id = document.querySelector(".card-header").id;                
        app.comments =[] ;         
        let orderForm = new FormData(formOrder);
        let order  = orderForm.get("orderBy");
        let criteria = document.querySelector("#customSwitch3");  
       
        if(criteria.checked){
            criteria = "ASC";
        }
        else{
            criteria = "DESC";
        }
        try{            
            let response = await fetch(URL + "/" +product_id+ "?order=" + `${order}` + "&sort=" + `${criteria}`);
             
            let orderedComment = await response.json();                  
            app.comments = orderedComment;  
        }catch(error){
            console.log("GIL")
        }     
        
       
    }

   
       
        
    
  
}