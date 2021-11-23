<?php
/* Smarty version 3.1.39, created on 2021-11-22 23:36:31
  from '/opt/lampp/htdocs/web2tp/templates/modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c1b6f58c404_10587861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fbb6ed85010e9272f038351c5e02094738f45e3' => 
    array (
      0 => '/opt/lampp/htdocs/web2tp/templates/modal.tpl',
      1 => 1637609822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comments.tpl' => 1,
  ),
),false)) {
function content_619c1b6f58c404_10587861 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comments</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body overflow-auto " style="max-height:200px ;">
        <?php $_smarty_tpl->_subTemplateRender("file:./comments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      <div class="modal-footer">       
        <?php if ((isset($_SESSION['islogged']))) {?>
         
          <div class="container" >
          <div class="container" id="contact_container">
              <div class="row">
                  <div>
                      <form>
                          <div class="card border-secondary rounded-0">
                              <div class="card-header p-0">
                                  <div class="bg-secondary text-white text-center py-2">
                                      <p class="m-0">Leave a comment for this product!</p>
                                  </div>
                              </div>
                              <div class="card-body p-3">
                                  <div class="form-group">
                                      <div class="input-group mb-2 justify-content-center">
                                          <div class="rating">                                           
                                            <input id="ratingRange"type="range" value="0" max="5" oninput="numRange.value = this.value">
                                            <output id="numRange">0</output>
                                          </div>                                          
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="input-group mb-2">
                                          <div class="input-group-prepend">
                                              <div class="input-group-text"><i class="fa fa-envelope text-secondary"></i></div>
                                          </div>
                                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $_SESSION['email'];?>
</textarea>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="input-group mb-2">
                                          <div class="input-group-prepend">
                                              <div class="input-group-text"><i class="fa fa-comment text-secondary"></i></div>
                                          </div>
                                          <textarea method="post" id="body_commentary" class="form-control" placeholder="Comment here!" required name="message"></textarea>
                                      </div>
                                  </div>
                              </div>
                          </div>                          
                      </form>
                  </div>
              </div>
          </div>
      </div>
          <button type="button" data-objetcId="" class="btn btn-primary" id="button_submit_comment">Send Comment</button>  
          <button type="button" data-dismiss="modal" class="btn btn-danger" >Close</button>         
          <input type="hidden" id="id_user" value="<?php echo $_SESSION['id'];?>
">
          
        <?php }?>
        
      </div>
    </div>
  </div>
</div>


<?php }
}
