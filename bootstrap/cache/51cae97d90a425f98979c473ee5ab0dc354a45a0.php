<?php $__env->startSection('title','Category Create'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container my-5">
        <h1 class="text-primary text-center">Create Category</h1>
        <div class="col-md-8 offset-md-2">
            
            <form action="/E-commerce/public/admin/category/create" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">File</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>
                <div class="row justify-content-end no-gutters">
                    <button type="submit" class="btn btn-primary btn-sm">Create</button>
                </div>
            </form>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>