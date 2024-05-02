<section class="w-full mx-auto py-10 bg-gray-50 dark:bg-gray-900 dark:text-white">
    <div class="w-fit pb-1 px-2 mx-4 rounded-md text-4xl font-bold border-b-4 border-blue-600 dark:border-b-2  dark:border-yellow-600">Airports</div>

    <div class="xl:w-[80%] sm:w-[85%] xs:w-[90%] mx-auto flex md:flex-row xs:flex-col lg:gap-4 xs:gap-2 justify-center lg:items-stretch md:items-center mt-4">
        <?php $__currentLoopData = $airports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $airport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="lg:w-[50%] xs:w-full">
            <img class="lg:rounded-t-lg sm:rounded-sm xs:rounded-sm" src="<?php echo e(asset('uploads/airports/' . $airport->images)); ?>" alt="Airport image" style="width: 300px; height: 200px; object-fit: cover;" />
            <div class="mt-2 text-center font-bold text-blue-500"><?php echo e($airport->name); ?></div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

  </section>

  <!-- Photo by '@candjstudios' & '@framesforyourheart' on Unsplash --><?php /**PATH /var/www/html/resources/views/components/airportsList.blade.php ENDPATH**/ ?>