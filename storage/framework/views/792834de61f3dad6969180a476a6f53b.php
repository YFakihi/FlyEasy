<?php $__env->startSection('title', 'Checkout'); ?>
<?php $__env->startSection('content'); ?>

<div class="font-sans">
    <div class="grid lg:grid-cols-3 gap-12 p-6">
        <div class="lg:col-span-2 bg-white divide-y">
<?php if($bookings->isEmpty()): ?>
<div class="container mx-auto my-8 space-y-10 justify-center py-12 ml-52">


    <div class="max-w-4xl mx-auto px-10 py-4 bg-white rounded-lg shadow-lg">
        <div>
            <span class="bg-green-100 font-mono text-green-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300"> Empty State</span>
        </div>
        <div class="flex flex-col items-center justify-center py-12">
            <img src="https://cdn-icons-png.flaticon.com/128/907/907717.png" alt="Welcome Icon" class="w-24 h-24 mb-4">
            <p class="text-gray-600 text-center text-lg leading-relaxed">Start exploring the amazing features we have to offer:</p>
          
            <a href="<?php echo e(route('booking')); ?>" class="mt-6 px-6 py-2 bg-blue-900 text-white rounded-md shadow-md hover:bg-blue-600">Get Started</a>
        </div>
    </div>
</div>


<?php endif; ?>
            <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex items-start max-sm:flex-col gap-8 py-6 mt-8">
                <div class="h-52 shrink-0">
                    <img src='<?php echo e(asset('images/fast_track_vip_cmn.jpg')); ?>' class="w-full h-full object-contain rounded-md" />
                </div>
                



              
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h1 class="text-lg font-semibold mb-4"><strong>Summary</strong> </h1>
                        <div class="flex justify-between mb-2">
                            <span><strong>Airport :</strong></span>
                            <span><strong class="ml-2"><?php echo e($reservation->airport->name); ?></strong></span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span><strong>Price :</strong></span>
                            <span>$<?php echo e($reservation->service ? $reservation->service->price : 'N/A'); ?></span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span><strong>Time :</strong> </span>
                            <span>  <?php echo e($reservation->time); ?></span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span><strong>Date :</strong> </span>
                            <span><?php echo e($reservation->date); ?></span>
                        </div>
                    
                        <hr class="my-2">
                        <div class="flex justify-between mb-2">
                            <span class="font-semibold"><strong>Total :</strong> </span>
                            <span class="font-semibold">$<?php echo e($reservation->totalPrice); ?></span>
                        </div>

                        <div class="mt-6 flex flex-wrap gap-6">
                            <a href="<?php echo e(route('remove_cart',['id' => $reservation->id])); ?>" class="font-semibold text-red-600 text-sm flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-current inline" viewBox="0 0 24 24">
                                    <path d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z" data-original="#000000"></path>
                                    <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z" data-original="#000000"></path>
                                </svg>
                                Remove
                            </a>
                        </div>

                        <form action="<?php echo e(route('session')); ?>" method="POST" id="checkout-form">
                            <input type="hidden" name="bookingMessages" value="welcome To Our services">
                            <input type="hidden" name="totalPrice" value="<?php echo e($reservation->totalPrice); ?>">
                            <input type="hidden" name="bookingId" value="<?php echo e($reservation->id); ?>">
                            <?php echo csrf_field(); ?>
                        <button class="bg-blue-900 text-white py-2 px-4 rounded-lg mt-4 w-full">Checkout</button>
                       
                    </div>
             
            </div>

            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/pages/pannier.blade.php ENDPATH**/ ?>