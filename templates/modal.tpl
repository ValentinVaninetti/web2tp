
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comments</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {include file="./comments.tpl"}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {if isset($smarty.session.islogged)}
         
          <div class="container">
          <div class="container" id="contact_container">
              <div class="row justify-content-center">
                  <div class="col-12 col-md-8 col-lg-8 pb-5">
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
                                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{$smarty.session.email}</textarea>
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
          <button type="button" data-objetcId="" id="button_submit_comment" data-dismiss="modal">Send Comment</button>          
          <input type="hidden" id="id_user" value="{$smarty.session.id}">
          
        {/if}
        
      </div>
    </div>
  </div>
</div>


