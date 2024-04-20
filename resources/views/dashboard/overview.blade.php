@extends('dashboard.home')
@section('content')

<div class="grid gap-4 lg:gap-8 md:grid-cols-3 p-8 pt-20">
    <div class="relative p-6 rounded-2xl bg-white shadow dark:bg-gray-800">
        <div class="space-y-2">
            <div
                class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 dark:text-gray-400">
                <span>Revenue</span>
            </div>

            <div class="text-3xl dark:text-gray-100">
                $192.1k
            </div>

            <div class="flex items-center space-x-1 rtl:space-x-reverse text-sm font-medium text-green-600">

                <span>32k increase</span>

                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="relative p-6 rounded-2xl bg-white shadow dark:bg-gray-800">
        <div class="space-y-2">
            <div
                class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 dark:text-gray-400">
                <span>New customers</span>
            </div>

            <div class="text-3xl dark:text-gray-100">
                1340
            </div>

            <div class="flex items-center space-x-1 rtl:space-x-reverse text-sm font-medium text-red-600">

                <span>3% decrease</span>

                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12 13a1 1 0 100 2h5a1 1 0 001-1V9a1 1 0 10-2 0v2.586l-4.293-4.293a1 1 0 00-1.414 0L8 9.586 3.707 5.293a1 1 0 00-1.414 1.414l5 5a1 1 0 001.414 0L11 9.414 14.586 13H12z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>

    </div>

    <div class="relative p-6 rounded-2xl bg-white shadow dark:bg-gray-800">
        <div class="space-y-2">
            <div
                class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 dark:text-gray-400">

                <span>New orders</span>
            </div>

            <div class="text-3xl dark:text-gray-100">
                3543
            </div>

            <div class="flex items-center space-x-1 rtl:space-x-reverse text-sm font-medium text-green-600">

                <span>7% increase</span>

                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>
    </div>
</div>

</div>

<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<style>
	body {
		font-family: 'IBM Plex Mono', sans-serif;
	}
    [x-cloak] {
        display: none;
    }
    .line {
        background: repeating-linear-gradient(
            to bottom,
            #eee,
            #eee 1px,
            #fff 1px,
            #fff 8%
        );
    }
	.tick {
        background: repeating-linear-gradient(
            to right,
            #eee,
            #eee 1px,
            #fff 1px,
            #fff 5%
        );
    }
</style>
<body class="antialiased sans-serif bg-gray-200">
  <div x-data="app()" x-cloak class="px-4">
    <div class="max-w-lg mx-auto py-24">
      <div class="shadow p-6 rounded-lg bg-white">
        <div class="md:flex md:justify-between md:items-center">
          <div>
            <h2 class="text-xl text-gray-800 font-bold leading-tight">Product Sales</h2>
            <p class="mb-2 text-gray-600 text-sm">Monthly Average</p>
          </div>

          <!-- Legends -->
          <div class="mb-4">
            <div class="flex items-center">
              <div class="w-2 h-2 bg-blue-600 mr-2 rounded-full"></div>
              <div class="text-sm text-gray-700">Sales</div>
            </div>
          </div>
        </div>

        <div class="line my-8 relative">
          <!-- Tooltip -->
          <template x-if="tooltipOpen == true">
            <div x-ref="tooltipContainer" class="p-0 m-0 z-10 shadow-lg rounded-lg absolute h-auto block" :style="`bottom: ${tooltipY}px; left: ${tooltipX}px`">
              <div class="shadow-xs rounded-lg bg-white p-2">
                <div class="flex items-center justify-between text-sm">
                  <div>Sales:</div>
                  <div class="font-bold ml-2">
                    <span x-html="tooltipContent"></span>
                  </div>
                </div>
              </div>
            </div>
          </template>


          <!-- Bar Chart -->
          <div class="flex -mx-2 items-end mb-2">
            <template x-for="data in chartData">

              <div class="px-2 w-1/6">
                <div :style="`height: ${data}px`" class="transition ease-in duration-200 bg-blue-600 hover:bg-blue-400 relative" @mouseenter="showTooltip($event); tooltipOpen = true" @mouseleave="hideTooltip($event)">
                  <div x-text="data" class="text-center absolute top-0 left-0 right-0 -mt-6 text-gray-800 text-sm"></div>
                </div>
              </div>

            </template>
          </div>

          <!-- Labels -->
          <div class="border-t border-gray-400 mx-auto" :style="`height: 1px; width: ${ 100 - 1/chartData.length*100 + 3}%`"></div>
          <div class="flex -mx-2 items-end">
            <template x-for="data in labels">
              <div class="px-2 w-1/6">
                <div class="bg-red-600 relative">
                  <div class="text-center absolute top-0 left-0 right-0 h-2 -mt-px bg-gray-400 mx-auto" style="width: 1px"></div>
                  <div x-text="data" class="text-center absolute top-0 left-0 right-0 mt-3 text-gray-700 text-sm"></div>
                </div>
              </div>
            </template>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script>
    function app() {
      return {
        chartData: [112, 10, 225, 134, 101, 80, 50, 100, 200],
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        tooltipContent: '',
        tooltipOpen: false,
        tooltipX: 0,
        tooltipY: 0,
        showTooltip(e) {
          console.log(e);
          this.tooltipContent = e.target.textContent
          this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
          this.tooltipY = e.target.clientHeight + e.target.clientWidth;
        },
        hideTooltip(e) {
          this.tooltipContent = '';
          this.tooltipOpen = false;
          this.tooltipX = 0;
          this.tooltipY = 0;
        }
      }
    }
  </script>
</body>

@endsection