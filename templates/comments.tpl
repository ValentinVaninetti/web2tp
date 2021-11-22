   

    {literal}
    
        <div id="app-commentary">
            <ul v-for="comment in comments">
                <li v-if="comment.comment">
                    <p> This guy commented: {{comment.username}}</p>
                    <p >{{comment.comment}}
                    </p>
                    <p>{{comment.rating}} points was given to this product</p> 

                    
                {/literal}               
                    {if isset($smarty.session.isAdmin) && $smarty.session.isAdmin}                                
                        {literal} 
                            <button v-if="comment.comment" v-bind:id="comment.comment_id"
                            class="btn btn-danger deleteCommentButton"
                            >
                            Delete
                            </button>                
                        {/literal}                              
                    {/if}  
                </li>  
                <li v-else>
                     <p>No Comment yet!</p>
                </li>                     
            <ul>
        </div>

       

