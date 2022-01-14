<?php $__env->startSection('title'); ?>Scrollable
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/scrollable.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Scrollable</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Advance</li>
        <li class="breadcrumb-item active">Scrollable</li>
    <?php if (isset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0)): ?>
<?php $component = $__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0; ?>
<?php unset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Click and Drag</h5>
                    </div>
                    <div class="card-body">
                        <div class="scroll-bar-wrap">
                            <div class="click-drag-handler scroll-demo p-0"><img src="<?php echo e(asset('assets/images/banner/2.jpg')); ?>" alt="" width="800" height="600" /></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Small Size Scroll</h5>
                    </div>
                    <div class="card-body">
                        <div class="scroll-bar-wrap">
                            <div class="scrollbar-margins large-margin scroll-demo p-0"><img src="<?php echo e(asset('assets/images/banner/3.jpg')); ?>" alt="girl" width="800" height="600" /></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Both Side Scroll</h5>
                    </div>
                    <div class="card-body">
                        <div class="scroll-bar-wrap">
                            <div class="both-side-scroll scroll-demo p-0"><img src="<?php echo e(asset('assets/images/banner/1.jpg')); ?>" alt="girl" width="800" height="600" /></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Horizontal Scroll</h5>
                    </div>
                    <div class="card-body">
                        <div class="scroll-bar-wrap">
                            <div class="horizontal-scroll scroll-demo">
                                <div class="horz-scroll-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                                type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply
                                                dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                            </p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>
                                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                                                Lorem Ipsum.It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.
                                            </p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                                professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words.It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>
                                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                                                distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors.It was popularised in the
                                                1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Always Visible Scroll</h5>
                    </div>
                    <div class="card-body">
                        <div class="scroll-bar-wrap">
                            <div class="visible-scroll always-visible scroll-demo">
                                <div class="horz-scroll-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                                type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                            </p>
                                            <p>
                                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                                                Lorem Ipsum
                                            </p>
                                            <p>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                                professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words
                                            </p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                                professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words
                                            </p>
                                            <p>
                                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                                                distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors.
                                            </p>
                                            <p>
                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                                                provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                            </p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                                type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                            </p>
                                            <p>
                                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                                                Lorem Ipsum
                                            </p>
                                            <p>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                                professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words
                                            </p>
                                        </div>
                                        <div class="col-sm-3">
                                            <p>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                                                professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words
                                            </p>
                                            <p>
                                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                                                distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors.
                                            </p>
                                            <p>
                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                                                provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Vertical Scroll</h5>
                    </div>
                    <div class="card-body">
                        <div class="vertical-scroll scroll-demo">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>
                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                            <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                                Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words
                            </p>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors.
                            </p>
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
                                sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/scrollable/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/scrollable/scrollable-custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sergh\Desktop\theme\resources\views/admin/bonus-ui/scrollable.blade.php ENDPATH**/ ?>