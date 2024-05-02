<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content'); ?>

    <section
        class="ezy__epprofile1 light py-14 md:py-24 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white relative overflow-hidden z-10">
        <div class="container px-4 mx-auto">
            <div class="flex flex-col md:flex-row gap-6">
                <!-- sidebar -->
                <div class="w-full md:w-1/3">
                    <div class="bg-white dark:bg-slate-800 shadow-xl py-6">
                        <h5 class="text-xl font-bold mx-4 mb-4">Account</h5>

                        <ul class="flex flex-wrap flex-col">
                            <li
                                class="px-4 py-2 opacity-80 border-l-4 border-blue-600 hover:text-blue-600 bg-gray-200 dark:bg-slate-900">
                                <a href="#!">Overview</a>
                            </li>
                            <li
                                class="px-4 py-2 opacity-80 hover:text-blue-600 hover:bg-gray-200 dark:hover:bg-slate-900 duration-500 cursor-pointer">
                                <a href="#!">Orders</a>
                            </li>
                            <li
                                class="px-4 py-2 opacity-80 hover:text-blue-600 hover:bg-gray-200 dark:hover:bg-slate-900 duration-500 cursor-pointer">
                                <a href="#!">Payment</a>
                            </li>

                            <li
                                class="px-4 py-2 opacity-80 hover:text-blue-600 hover:bg-gray-200 dark:hover:bg-slate-900 duration-500 cursor-pointer">
                                <a href="#!">Setting</a>
                            </li>

                            <hr class="my-2 mx-4 opacity-60 dark:opacity-10" />



                        </ul>
                    </div>


                </div>

                <!-- profile -->
                <div class="w-full md:w-2/3">
                  <div class="bg-white dark:bg-slate-800 shadow-xl p-6">
                      <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                          </svg>
                                                    <h6 class="text-[22px] font-bold ml-4"><?php echo e(auth()->user()->name); ?></h6>
                      </div>
              
                      <div class="bg-white dark:bg-slate-800 shadow-xl p-6 mt-4">
                          <div class="lg:grid-cols-1 gap-8">
                              <h6 class="text-[22px] font-bold ml-4">Mes Reservation</h6>
              
                              <div class="grid grid-cols-1 gap-8 mt-4">
                                  <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <div class="flex items-start max-sm:flex-col gap-8 py-6">
                                      <div class="flex items-start gap-6 max-md:flex-col w-full">
                                        
                                          <div class="overflow-y-auto max-h-[400px]">
                                              <div class="h-52 shrink-0">
          

                                                  <h6 class="text-md text-gray-500">Airport: <strong class="ml-2"><?php echo e($reservation->airport->name); ?></strong></h6>
                                                  <h6 class="text-md text-gray-500 mt-2">Prix: <strong class="ml-2"><?php echo e($reservation->service ? $reservation->service->price : 'N/A'); ?></strong></h6>
                                                  <h6 class="text-md text-gray-500 mt-2">Time:<strong class="ml-2"><?php echo e($reservation->time); ?></strong></h6>
                                                  <h6 class="text-md text-gray-500 mt-2">date:<strong class="ml-2"><?php echo e($reservation->date); ?></strong></h6>
                                                  <h6 class="text-md text-gray-500 mt-2">Total Price:<strong class="ml-2">$<?php echo e($reservation->totalPrice); ?></strong></h6>
                                              </div>
                                              <div class="mt-6 flex flex-wrap gap-6">
                                                <a href="<?php echo e(route('student.pdf', $reservation->id)); ?>" class="inline-flex items-center justify-center px-5 py-1  text-base font-normal text-center text-white rounded-lg bg-blue-900 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">Download Now</a>
                                                
                                                    
                                                  </a>
                                            
                                                </div>
                                          </div>
                                      </div>
                                  </div>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/pages/profile.blade.php ENDPATH**/ ?>