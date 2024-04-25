<table class="table table-striped">
    <thead>
      <tr>
       <th>#</th>
        <th>name</th>
        <th>price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
@php
$x = 1;
@endphp
      @foreach ($products as $key=>$product )
         
   

      <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>
          <a href="#" class="btn btn-primary update_product_form" 
          data-bs-toggle="modal" data-bs-target="#updateModal"
          data-id="{{ $product->id }}"
          data-name="{{ $product->name }}"
          data-price="{{ $product->price }}"><i class="las la-edit"></i>
        </a>


        <a href="#" class="btn btn-danger delete_product"
        data-id="{{ $product->id }}"><i class="las la-times"></i>
        
        </a>
      </td>

      </tr>
     
      @endforeach
    </tbody>
  </table>

  {!! $products->links() !!}