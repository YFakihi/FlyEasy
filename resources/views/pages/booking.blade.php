@extends('layouts.app')

@section('title', 'Home')
@section('content')
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



<div class="container-fluid  ">
    <div class="row justify-content-md-center">
      <div class="col-md-9 ">
          <div class="card px-5 py-3 mt-5 shadow">

                      <div class="nav nav-fill my-3">
                        <label class="nav-link shadow-sm step0    border ml-2 ">Step One</label>
                        <label class="nav-link shadow-sm step1   border ml-2 " >Step Two</label>
                        <label class="nav-link shadow-sm step2   border ml-2 " >Step Three</label>
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
                    <select id="airport" name="airport_id" class="bg-gray-0 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected disabled>Select Airport</option>
                        @foreach ($airports as $airport)
                            <option value="{{ $airport->id }}">{{ $airport->name }}</option>
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
                    <label for="number_of_children" class="block text-gray-600 font-semibold mb-2">Number of Children</label>
                    <input type="number" id="number_of_children" name="number_of_children" class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" placeholder="Number of Children" required>
         
                </div>
              </div>
            <div class="form-navigation mt-3">
               <button type="button" class="previous btn btn-primary float-left">&lt; Previous</button>
               <button type="button" class="next btn btn-primary float-right">Next &gt;</button>
               <button type="submit" class="btn btn-success float-right">Submit</button>
            </div>

          </form>
      </div>
          
      </div>
    </div>
  </div>





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


</script>




@endsection
