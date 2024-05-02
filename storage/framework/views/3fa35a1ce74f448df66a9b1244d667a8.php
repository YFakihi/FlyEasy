<?php $__env->startSection('content'); ?>

<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-4"> user_name </th>
                    <th scope="col" class="px-4 py-4"> airport</th>
                    <th scope="col" class="px-4 py-4"> date</th>
                    <th scope="col" class="px-4 py-4"> time</th>
                    <th scope="col" class="px-4 py-4"> Payment</th>
                    <th scope="col" class="px-4 py-4"> service_type </th>
                    <th scope="col" class="px-4 py-4"> number_of_adults </th>
                    <th scope="col" class="px-4 py-4"> number_of_children</th> 
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="border-b dark:border-gray-700">
                    <td class="px-4 py-3"><?php echo e(($reservation->first_name) ." ". ($reservation->last_name)); ?></td>
                    <td class="px-4 py-3"><?php echo e($reservation->airport->name); ?></td>
                    <td class="px-4 py-3"><?php echo e($reservation->date); ?></td>
                    <td class="px-4 py-3"><?php echo e($reservation->time); ?></td> 
                    <td class="px-4 py-3"><?php echo e($reservation->payment_status); ?></td>              
                  <td class="px-4 py-3"><?php echo e($reservation->service_type); ?></td>
                    <td class="px-4 py-3"><?php echo e($reservation->number_of_adults); ?></td>
                    <td class="px-4 py-3"><?php echo e($reservation->number_of_children); ?></td>
                </tr>  
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </tbody>
        </table>
        
    </div>



        <?php echo e($booking->links()); ?>


</section>    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/dashboard/booking.blade.php ENDPATH**/ ?>