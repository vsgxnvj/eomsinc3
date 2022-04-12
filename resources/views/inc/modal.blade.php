
<?php




function universalModal($datatarget, $modaltitle, $modalbodyid, $bodycontent, $btnId){


    $output2 = '
    
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="'. $datatarget .'">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">'. $modaltitle .'</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="'. $modalbodyid .'">
            '. $bodycontent .'
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="'. $btnId .'">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    
    ';

return $output2;
}





?>