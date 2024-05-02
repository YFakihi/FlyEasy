<?php $__env->startSection('content'); ?>

<div class="grid gap-4 lg:gap-8 md:grid-cols-3 p-8 pt-0">
    <div class="relative p-6 rounded-2xl bg-slate-300 shadow dark:bg-gray-800">
        <div class="space-y-2">
            <div
                class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 dark:text-gray-400">
                <span>Revenue</span>
            </div>
            <div class="text-3xl dark:text-gray-100">
              <?php echo e($totalRevenue); ?>

          </div>
        </div>
    </div>

    <div class="relative p-6 rounded-2xl bg-slate-300 shadow dark:bg-gray-800">
        <div class="space-y-2">
            <div
                class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 dark:text-gray-400">
                <span>New customers</span>
            </div>

            <div class="text-3xl dark:text-gray-100">
                <?php echo e($users); ?>

            </div>
        </div>

    </div>

    <div class="relative p-6 rounded-2xl bg-slate-300 shadow dark:bg-gray-800">
        <div class="space-y-2">
            <div
                class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 dark:text-gray-400">

                <span>Admins</span>
            </div>

            <div class="text-3xl dark:text-gray-100">
               <?php echo e($admin); ?>

            </div>
        </div>
    </div>
</div>


<div class="grid gap-4 lg:gap-8 md:grid-cols-3 p-8 pt-20">
  <div class="relative p-6 rounded-2xl bg-slate-300 shadow dark:bg-gray-800">
      <div class="space-y-2">
          <div
              class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 dark:text-gray-400">
              <span>Airports</span>
          </div>

          <div class="text-3xl dark:text-gray-100">
             <?php echo e($airports); ?>

          </div>
      </div>
  </div>

  <div class="relative p-6 rounded-2xl bg-slate-300 shadow dark:bg-gray-800">
      <div class="space-y-2">
          <div
              class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 dark:text-gray-400">
              <span>Services</span>
          </div>

          <div class="text-3xl dark:text-gray-100">
              <?php echo e($services); ?>

          </div>

   
      </div>

  </div>

  <div class="relative p-6 rounded-2xl bg-slate-300 shadow dark:bg-gray-800">
      <div class="space-y-1">
          <div
              class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 dark:text-gray-400">

              <span>Booking</span>
          </div>

          <div class="text-3xl dark:text-gray-100">
             <?php echo e($booking); ?>

          </div>
      </div>
  </div>
</div>


</div>

<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/dashboard/overview.blade.php ENDPATH**/ ?>