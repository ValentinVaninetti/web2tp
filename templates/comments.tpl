   

{literal}
    <div id="app-commentary" class="card">
        <div class="row">
            <select  class="form-control col-sm">
                <option value="">Order Comments</option>                    
                <option value="">Order by ASC date</option>                               
            </select>  
            <button class="btn btn-primary ml-2 col-sm" 
            type="submit"
            id="button_order">Search
            </button>  
        </div>  
        <div v-for="comment in comments" class="card-header">
            <p v-if="comment.comment">{{comment.username}} gave {{comment.rating}} points to this product!</p>            
                <ul>
                    <li v-if="comment.comment">
                        <h5 class="card-title">{{comment.username}} Commented <span>{{comment.date}}</span>: </h5>  
                        <p class="card-text">{{comment.comment}}
                        </p>                    
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
    </div>

    

