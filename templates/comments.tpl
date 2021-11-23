   

{literal}       
    
    <div id="app-commentary"  class="card">
        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
            <div class="row" >
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <form id="formOrder">
                    <div class="row">                
                        <select name="orderBy">
                            <option value="">
                                Order By
                            </option>
                            <option value="date">
                                Order By date
                            </option>
                            <option value="points">
                                Order By Points
                            </option>
                        </select>
                        <div class=" custom-control custom-switch">                        
                            <input name="chkx-Asc" type="checkbox" class=" custom-control-input" id="customSwitch3">
                            <label class=" custom-control-label" for="customSwitch3">ASC</label>
                        </div>                      
                    </div>                 
                    <button
                    name="order" class="btn btn-primary ml-2 col-sm" 
                    type="submit"
                    v-on:click="orderBy"
                    id="button_order"            
                    >Search
                    </button>  
                </form>
                
            </div>
        
            </div>  
            <div v-for="comment in comments" v-bind:id="comment.product_id" class="card-header">
            <p v-if="comment.comment">{{comment.username}} gave {{comment.rating}} points to this product!</p>
                        
                <ul>
                    <li v-if="comment.comment">
                        <h5 class="card-title">
                        {{comment.username}}
                        Commented 
                        <span>{{comment.date}}
                        </span>: 
                        </h5>  
                        <p class="card-text">
                        {{comment.comment}}
                        </p>     
                                
    {/literal}   
                
                        {if isset($smarty.session.isAdmin) && $smarty.session.isAdmin}                                
                            {literal} 
                                <button v-if="comment.comment" v-bind:id="comment.comment_id"
                                class="btn btn-danger deleteCommentButton">
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



