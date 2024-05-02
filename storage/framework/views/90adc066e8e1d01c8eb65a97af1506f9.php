<!DOCTYPE html>
<html lang="en">
<head>
    <!-- head content -->
    <style>
        .form-section{
            display: none;
        }
        .form-section.current{
            display: inline;
        }
        .parsley-errors-list{
            color:red;
        }
    </style>
</head>
<body>
    
    <!-- body content -->



<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content'); ?>

<div class="container mx-auto">
    <div class="flex justify-center">
      <div class="w-3/4">
          <div class="card px-20 py-12 mt-12 shadow">

            <div class="flex justify-between my-3">
                <label class="cursor-pointer  px-3 py-2 rounded shadow-sm bg-white border border-gray-300 ml-2 step0">Services</label>
                <label class="cursor-pointer px-3 py-2 rounded shadow-sm bg-white border border-gray-300 ml-2 step1">Flight info</label>
                <label class="cursor-pointer px-3 py-2 rounded shadow-sm bg-white border border-gray-300 ml-2 step2">Details </label>
                
            </div>
            


        
              <form action="<?php echo e(route('booking/create')); ?>"  method="post"  class="employee-form" onsubmit="return validateData();">
               <?php echo csrf_field(); ?>
              <div class="form-section">
                <div class="w-full mb-4">
                    <label class="block text-gray-600 font-semibold mb-2">Airport Services</label>
                    <div>
                        <label for="service_type_arrival" class="inline-flex items-center">
                            <input type="radio" id="service_type_arrival" name="service_type" value="arrival_fast_track" class="form-radio">
                            <span class="ml-2">Fast track Arrivée</span>
                        </label>
                        <label for="service_type_departure" class="inline-flex items-center ml-6">
                            <input type="radio" id="service_type_departure" name="service_type" value="departure_fast_track" class="form-radio">
                            <span class="ml-2">Fast track Départ</span>
                        </label>
                    </div>
           
                </div>
            
                <div class="w-full mb-4">
                    <label for="airport" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Airports</label>
                    <select id="airport" name="airport_id" class="bg-gray-0 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                        <option selected disabled>Select Airport</option>
                        <?php $__currentLoopData = $airports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $airport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($airport->id); ?>"><?php echo e($airport->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
               
                </div>

                
                <div class="w-full mb-4">
                    <label for="service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Services</label>
                    <select id="service" name="service_id" class="bg-gray-0 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"required>
                        <option selected disabled>Select service</option>
                        <?php $__currentLoopData = $airports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $airport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $airport->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($service->id); ?>"><?php echo e($service->name); ?> (<?php echo e($airport->name); ?>)</option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
              </div>


              <div class="form-section">

                <div class="w-full mb-4">
                    <label for="date" class="block text-gray-600 font-semibold mb-2">Date</label>
                    <input type="date" id="date" name="date" class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" required>
                    <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-500"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <div class="w-full mb-4">
                    <label for="time" class="block text-gray-600 font-semibold mb-2">Time</label>
                    <input type="time" id="time" name="time" class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" required>
                </div> 

              </div>
              <div class="form-section">
                <div class="w-full mb-4">
                    <label for="number_of_adults" class="block text-gray-600 font-semibold mb-2">Number of Adults</label>
                    <input type="number" id="number_of_adults" name="number_of_adults" class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" required placeholder="Number Of Adults">
                </div>
                
                <div class="w-full mb-4">
                    <label for="number_of_children" class="block text-gray-600 font-semibold mb-2">Number of Children: Ages 2 to 18 years: 50% of Adult Price</label>
                    <input type="number" id="number_of_children" name="number_of_children" class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" placeholder="Number of Children" required>
                </div>

                
                <div class="w-full mb-4">
                    <label for="fname" class="block text-gray-600 font-semibold mb-2">First Name</label>
                    <input type="text" id="fname" name="first_name" class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"required placeholder="First Name">
                </div>
                <div class="w-full mb-4">
                    <label for="lname" class="block text-gray-600 font-semibold mb-2">Last Name</label>
                    <input type="text" id="lname" name="last_name" class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" required placeholder="Last Name">
                </div> 
              </div>

              <div class="form-navigation flex justify-between mt-3">
                <button type="button" class="previous px-4 py-2 rounded bg-blue-900 text-white float-right">&lt; Previous</button>
                <button type="button" class="next px-4 py-2 rounded bg-blue-900 text-white ml-auto">Next &gt;</button>
                <button type="submit" class="px-4 py-2 rounded bg-blue-900 text-white float-left">Submit</button>
            </div>

          </form>
      </div>
          
      </div>
    </div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>


  <script>
 function validateData() {
        var date = document.getElementById('date').value;
        var currentDate = new Date().toISOString().slice(0, 10); 
       
        if (date < currentDate) {
            alert('Please select a date that is today or in the future.');
            return false;
        }

        return true;
    }

  
    document.querySelector('.submit-button').addEventListener('click', function() {
        if (!validateData()) {
            return false;
        }
    });
    
</script>




  <script>
     $(function(){
        var $sections=$('.form-section');

        function navigateTo(index){

            $sections.removeClass('current').eq(index).addClass('current');

            $('.form-navigation .previous').toggle(index>0);
            var atTheEnd = index >= $sections.length - 1;
          
            if(index == 2){
                validateData()
               
            }
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [Type=submit]').toggle(atTheEnd);

     
            const step= document.querySelector('.step'+index);
            step.style.backgroundColor="#17a2b8";
            step.style.color="white";

        }

        function curIndex(){

            return $sections.index($sections.filter('.current'));
        }

        $('.form-navigation .previous').click(function(){
            navigateTo(curIndex() - 1);
        });

        $('.form-navigation .next').click(function(){
           $('.employee-form').parsley().whenValidate({
                group:'block-'+curIndex()
            }).done(function(){
                navigateTo(curIndex()+1);
            });

        });

        $sections.each(function(index,section){
            $(section).find(':input').attr('data-parsley-group','block-'+index);
        });


        navigateTo(0);
    });

   

    


// the script is an AJAX request that is triggered when the selected value of the '#airport' dropdown changes.

  </script>

  <script>
    $(document).ready(function() {
      $('#airport').change(function() {
          var airportId = $(this).val();
  
          // Make an AJAX request to a route that returns the services for the selected airport
          $.get('/get-services/' + airportId, function(data) {
              var select = $('#service');
  
              // Clear the select
              select.empty();
  
              // Add new options to the select
              $.each(data, function(index, value) {
                  select.append('<option value="' + value.id + '">' + value.name + '</option>');
              });
          });
      });
  });


  </script>



     <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

</body>
</html>



















<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/pages/booking.blade.php ENDPATH**/ ?>