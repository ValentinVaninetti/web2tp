<?php
/* Smarty version 3.1.39, created on 2021-11-25 02:47:25
  from 'D:\xampp\htdocs\web2tp\templates\comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619eeb2d940e41_72759106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8c56daf0a792f673bde5a33f60667aa4b2719bf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2tp\\templates\\comments.tpl',
      1 => 1637804791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619eeb2d940e41_72759106 (Smarty_Internal_Template $_smarty_tpl) {
?>   

       
    
    <div id="app-commentary"  class="card">
    <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Search By</a>
        <div class="row" >
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <form id="formOrder">
                    <div class="col">                
                        <select class="form-control" name="orderBy">
                            <option value="">
                                Order By
                            </option>
                            <option value="date">
                                Order By date
                            </option>
                            <option value="rating">
                                Order By Points
                            </option>
                        </select>
                        <div class="col custom-control custom-switch"> 
                            <div class="row">
                                <label class="col-2">Descendant</label>           
                                <input name="chkx-Asc" type="checkbox" class=" col-2 custom-control-input" id="customSwitch3">
                                <label class="col-2 custom-control-label" for="customSwitch3">Ascendant</label>
                            </div>
                        </div>                      
                    </div>                 
                    <button
                        name="order" class="btn btn-primary ml-2 col-sm" 
                        type="submit"
                        data-toggle="collapse"
                        href="#multiCollapseExample1"
                        aria-controls="multiCollapseExample1"
                        v-on:click="orderBy"
                        id="button_order">Search
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
                            
   
            
                    <?php if ((isset($_SESSION['isAdmin'])) && $_SESSION['isAdmin']) {?>                                
                         
                            <button v-if="comment.comment" v-bind:id="comment.comment_id"
                            class="btn btn-danger deleteCommentButton">
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
