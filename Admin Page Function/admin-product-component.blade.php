
<div class="container" style="padding-top:30px;">
<table style="width:100%">
         <tr>
                 <th>Id</th>
                 <th>Image</th>
                 <th>Name</th>
                 <th>Price</th>
                 <th>Date</th>
                <th>Action</th>
        </tr>
       <tbody>
            @foreach($products as $product)
             <tr>
                 <td>{{$product->id}}</td>
                 <td><img src="{{asset('assets/images/products')}}/{{$product->image}}" width="60" /></td>
                 <td>{{$product->name}}</td>
                 <td>{{$product->regular_price}} Taka</td>
                 <td>{{$product->created_at}}</td>
                 <td></td>
             </tr>
            @endforeach
        </tbody>
</table>
</div>




