


  <!-- Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" 
  aria-labelledby="addModalLabel" aria-hidden="true">
        
<div style="margin:auto;max-width:550px;padding:10;">
    <form action=""  method="POST" id="addproductForm">
        @csrf
        
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addModalLabel">Add product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> 
        <div class="modal-body">
    
            <div class="errMsgContainer mb-3"></div>
       
      <div class="form-group">
        <label for="name">Product Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name" id="name">
      </div>
      <div class="form-group">
        <label for="pwd">Price:</label>
        <input type="text" class="form-control" name="price" placeholder="Enter price" id="price">
      </div>
     
      {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
    

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary add_product" >Save product</button>
        </div>
      </div>
    </div>

</form>
</div>
  </div>




