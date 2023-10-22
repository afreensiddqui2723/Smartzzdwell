<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.counter {
    background-color:#f5f5f5;
    padding: 20px 0;
    border-radius: 5px;
}

.count-title {
    font-size: 40px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.count-text {
    font-size: 12px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.fa-2x {
    margin: 0 auto;
    float: none;
    display: table;
    color: #156e2d;
}
.timer count-title count-number{
	font-size: 12px;
}

@media (min-width: 200px) and (max-width: 700px) {
	.counter {
              width: 45vh;
			  align-items: center;

              }
	.count-titlet{
	font-size: 14px;
}
body, ul, li, p, a, label, input, div, h1, h2, h3, h4, h5, h6, p, a {
    font-family: 'Playpen Sans', cursive !important;
  }
                }
                /* @media (min-width: 700px) and (max-width: 2000px) {
                  .resp{
                  display: none;
                } */
</style>

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="container">
	<div class="row">
	    <br/>
	   <div class="col text-center">
		<h2>Our valuable stats</h2>
		<p>Progress by honesty and rememberable services</p>
		</div>
		
             
		
	</div>
		<div class="row text-center">
	        <div class="col">
	        <div class="counter">
      <i class="fa fa-users fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
       <p class="count-text ">Our happy guests</p>
    </div>
	        </div>
              <div class="col">
               <div class="counter">
      <i class="fa fa-home fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="10" data-speed="1500"></h2>
      <p class="count-text ">Registered Homes</p>
    </div>
              </div>
              <div class="col">
                  <div class="counter">
      <i class="fa fa-map-marker fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="22" data-speed="1500"></h2>
      <p class="count-text ">Locations on we are</p>
    </div></div>
              <div class="col">
              <div class="counter">
      <i class="fa fa-rupee fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
      <p class="count-text ">Savings made here</p>
    </div>
              </div>
         </div>
</div>
<script>

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
</script>