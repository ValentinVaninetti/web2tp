<?php
/* Smarty version 3.1.39, created on 2021-11-23 04:35:45
  from '/opt/lampp/htdocs/web2tp/templates/comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c6191d510c7_36510351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aee99294cf574569fdaedf3386d0cc34da3bf0b5' => 
    array (
      0 => '/opt/lampp/htdocs/web2tp/templates/comments.tpl',
      1 => 1637638520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619c6191d510c7_36510351 (Smarty_Internal_Template $_smarty_tpl) {
?>   


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
                                   
                        <?php if ((isset($_SESSION['isAdmin'])) && $_SESSION['isAdmin']) {?>                                
                             
                                <button v-if="comment.comment" v-bind:id="comment.comment_id"
                                class="btn btn-danger deleteCommentButton"
                                >
                                Delete
                                </button>                
                                                          
                        <?php }?>  
                    </li>  
                    <li v-else>
                        <p>No Comment yet!</p>
                    </li>                     
                <ul>
        </div>
    </div>

    

<?php }
}
