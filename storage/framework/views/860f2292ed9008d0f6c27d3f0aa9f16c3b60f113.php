
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
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <tr>
                 <td><?php echo e($product->id); ?></td>
                 <td><img src="<?php echo e(asset('assets/images/products')); ?>/<?php echo e($product->image); ?>" width="60" /></td>
                 <td><?php echo e($product->name); ?></td>
                 <td><?php echo e($product->regular_price); ?> Taka</td>
                 <td><?php echo e($product->created_at); ?></td>
                 <td></td>
             </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
</table>
</div>




<?php /**PATH C:\xampp\htdocs\Online_Grocery_Shop\resources\views/livewire/admin/admin-product-component.blade.php ENDPATH**/ ?>