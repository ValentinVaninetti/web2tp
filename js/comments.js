"use strict"
document.addEventListener("DOMContentLoaded",iniciarPagina);
    function iniciarPagina() { 
       

    const url = "api/comments";
    
    let app = new Vue({
        el: "#app",
        data: {
            titulo: "comments",
            comments: []
        }/*,
        methods:{
            eliminarComentario:eliminarComentario
        }*/
    })

    
    console.log("AAAAAAAAAAAAAA");

    function getTargetedButton(){
        let button_comments = document.querySelectorAll(".button_comments");
        button_comments.forEach(element => {
            console.log(element);
            element.addEventListener("click", getComments);
        });
    }
   
    getTargetedButton();  

    async function getComments(event) {
        
        event.preventDefault();        
        let id_product = event.target.id;               
        let response = await fetch(url+"/"+id_product);    
        let comments = await response.json();
        app.comments = comments;
        
    }

   
}