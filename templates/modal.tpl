
<div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comments</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body overflow-auto" style="max-height:200px;">
        {include file="./comments.tpl"}
      </div>
      <div class="modal-footer">       
        {if isset($smarty.session.islogged)}
         
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
                                             <h5>
                                                Rate this Product!
                                              </h5>                                        
                                            <input id="ratingRange"type="range"
                                             value="0"
                                              max="5"
                                              oninput="numRange.value = this.value">
                                            <output id="numRange">0</output>                                            
                                          </div>                                          
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="input-group mb-2">
                                          <div class="input-group-prepend">
                                              <div class="input-group-text">
                                                  <i class="fa fa-envelope text-secondary">
                                                  </i>
                                                </div>
                                          </div>
                                          <textarea class="form-control"
                                           id="exampleFormControlTextarea1"
                                            rows="3">
                                            {$smarty.session.email}
                                          </textarea>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="input-group mb-2">
                                          <div class="input-group-prepend">
                                              <div class="input-group-text">
                                                <i class="fa fa-comment text-secondary">
                                                </i>
                                              </div>
                                          </div>
                                          <textarea method="post" 
                                          id="body_commentary" 
                                          class="form-control" 
                                          placeholder="Comment here!" 
                                          required name="message">
                                          </textarea>
                                      </div>
                                  </div>
                              </div>
                          </div>                          
                      </form>
                  </div>
              </div>
          </div>
      </div>
          <button type="button"
           data-objetcId=""
            class="btn btn-primary"
            id="button_submit_comment" 
            data-dismiss="modal">
              Send Comment
          </button>  
          <button type="button"
            data-dismiss="modal" 
            class="btn btn-danger">
            Close
           </button>         
          <input type="hidden" id="id_user" value="{$smarty.session.id}">          
        {/if}        
      </div>
    </div>
  </div>
</div>


