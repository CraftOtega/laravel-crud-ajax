


  <!-- Modal -->
  <div class="modal fade" id="updateModal" tabindex="-1" 
  aria-labelledby="updateModalLabel" aria-hidden="true">
        
<div style="margin:auto;max-width:550px;padding:10;">
    <form action=""  method="POST" id="updateproductForm">
        @csrf
        
        <input type="hidden" name="up_id" class="form-control" id="up_id">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="updateModalLabel">Update product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
    
            <div class="errMsgContainer mb-3"></div>
       
      <div class="form-group">
        <label for="name">Product Name:</label>
        <input type="text" class="form-control" name="up_name" placeholder="Enter name" id="up_name">
      </div>

      <div class="form-group">
        <label for="pwd">Price:</label>
        <input type="text" class="form-control" name="up_price" placeholder="Enter price" id="up_price">
      </div>
     
      {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
    

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary update_product" >Update product</button>
        </div>
      </div>
    </div>

</form>
</div>
  </div>




