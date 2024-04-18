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

@extends('layouts.app')

@section('title', 'Home')
@section('content')

<div class="container mx-auto">
    <div class="flex justify-center">
      <div class="w-3/4">
          <div class="card px-20 py-12 mt-12 shadow">

            <div class="flex justify-between my-3">
                <label class="cursor-pointer px-3 py-2 rounded shadow-sm bg-white border border-gray-300 ml-2 step0">Step One</label>
                <label class="cursor-pointer px-3 py-2 rounded shadow-sm bg-white border border-gray-300 ml-2 step1">Step Two</label>
                <label class="cursor-pointer px-3 py-2 rounded shadow-sm bg-white border border-gray-300 ml-2 step2">Step Three</label>
                <label class="cursor-pointer px-3 py-2 rounded shadow-sm bg-white border border-gray-300 ml-2 step2">Step Fore</label>
            </div>
            


        
              <form action="{{ route('booking/create') }}" method="post" class="employee-form">
               @csrf

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
                        @foreach ($airports as $airport)
                            <option value="{{ $airport->id }}">{{ $airport->name }}</option>
                        @endforeach
                    </select>
               
                </div>

                
                <div class="w-full mb-4">
                    <label for="service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Services</label>
                    <select id="service" name="service_id" class="bg-gray-0 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"required>
                        <option selected disabled>Select service</option>
                        @foreach ($airports as $airport)
                            @foreach ($airport->services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }} ({{ $airport->name }})</option>
                            @endforeach
                        @endforeach
                    </select>
                </div>
              </div>


              <div class="form-section">
                <div class="w-full mb-4">
                    <label for="date" class="block text-gray-600 font-semibold mb-2">Date</label>
                    <input type="date" id="date" name="date" class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"required>
                
                </div>
                <div class="w-full mb-4">
                    <label for="time" class="block text-gray-600 font-semibold mb-2">Time</label>
                    <input type="time" id="time" name="time" class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" required>
            
                </div>
              </div>
              <div class="form-section">
                <div class="w-full mb-4">
                    <label for="number_of_adults" class="block text-gray-600 font-semibold mb-2">Number of Adults</label>
                    <input type="number" id="number_of_adults" name="number_of_adults" class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" required>
                </div>
                
                <div class="w-full mb-4">
                    <label for="number_of_children" class="block text-gray-600 font-semibold mb-2">Number of Children: Ages 2 to 18 years: 50% of Adult Price</label>
                    <input type="number" id="number_of_children" name="number_of_children" class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" placeholder="Number of Children" required>
                </div>
              </div>

              <div class="form-section">
                <div id="input-container" class="mt-4">
                    <!-- This div will hold the dynamically generated inputs -->
                </div>
              </div>

              <div class="form-navigation flex justify-between mt-3">
                <button type="button" class="previous px-4 py-2 rounded bg-blue-500 text-white float-right">&lt; Previous</button>
                <button type="button" class="next px-4 py-2 rounded bg-blue-500 text-white ml-auto">Next &gt;</button>
                <button type="submit" class="px-4 py-2 rounded bg-blue-500 text-white float-left">Submit</button>
            </div>

          </form>
      </div>
          
      </div>
    </div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
  <script>
     $(function(){
        var $sections=$('.form-section');

        function navigateTo(index){

            $sections.removeClass('current').eq(index).addClass('current');

            $('.form-navigation .previous').toggle(index>0);
            var atTheEnd = index >= $sections.length - 1;
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


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get references to the "number of adults" and "number of children" inputs
        const numberOfAdultsInput = document.getElementById('number_of_adults');
        const numberOfChildrenInput = document.getElementById('number_of_children');
        
        // Get a reference to the dynamic inputs container
        const dynamicInputsContainer = document.getElementById('input-container');
        
        // Function to generate inputs based on the number of adults and children
        function generateDynamicInputs() {
            // Clear any existing dynamic inputs
            dynamicInputsContainer.innerHTML = '';
            
            // Get the number of adults and children
            const numberOfAdults = parseInt(numberOfAdultsInput.value);
            const numberOfChildren = parseInt(numberOfChildrenInput.value);
            
            // Generate inputs for each adult
            for (let i = 1; i <= numberOfAdults; i++) {
                const adultDiv = document.createElement('div');
                adultDiv.classList.add('mb-4');
                
                const adultLabel = document.createElement('label');
                adultLabel.textContent = `Adult ${i} Name:`;
                adultLabel.classList.add('block', 'text-gray-600', 'font-semibold', 'mb-2');
                
                const adultInput = document.createElement('input');
                adultInput.type = 'text';
                adultInput.name = `adult_${i}_name`;
                adultInput.classList.add('w-full', 'px-4', 'py-2', 'rounded-lg', 'bg-gray-200', 'border-transparent', 'focus:border-gray-500', 'focus:bg-white', 'focus:ring-0');
                adultInput.placeholder = `Enter adult ${i} name`;
                
                // Append label and input to the adult div
                adultDiv.appendChild(adultLabel);
                adultDiv.appendChild(adultInput);
                
                // Append the adult div to the dynamic inputs container
                dynamicInputsContainer.appendChild(adultDiv);
            }
            
            // Generate inputs for each child
            for (let i = 1; i <= numberOfChildren; i++) {
                const childDiv = document.createElement('div');
                childDiv.classList.add('mb-4');
                
                const childLabel = document.createElement('label');
                childLabel.textContent = `Child ${i} Name:`;
                childLabel.classList.add('block', 'text-gray-600', 'font-semibold', 'mb-2');
                
                const childInput = document.createElement('input');
                childInput.type = 'text';
                childInput.name = `child_${i}_name`;
                childInput.classList.add('w-full', 'px-4', 'py-2', 'rounded-lg', 'bg-gray-200', 'border-transparent', 'focus:border-gray-500', 'focus:bg-white', 'focus:ring-0');
                childInput.placeholder = `Enter child ${i} name`;
                
                // Append label and input to the child div
                childDiv.appendChild(childLabel);
                childDiv.appendChild(childInput);
                
                // Append the child div to the dynamic inputs container
                dynamicInputsContainer.appendChild(childDiv);
            }
        }

        // Add event listeners to generate dynamic inputs when the number of adults or children changes
        numberOfAdultsInput.addEventListener('input', generateDynamicInputs);
        numberOfChildrenInput.addEventListener('input', generateDynamicInputs);
    });
</script>

     <x-footer/>
@endsection

</body>
</html>