<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="row">
          <div class="col-md-6 col-sm-12">
             <div class="row" style="height:100px;">
             </div>
         
               	<h1>Estimate What Your Lemon Tree Could be Worth</h1><br>
				How Many Lemons Does Your Tree Produce?
                <div class="worth">$0</div>
                <style>
				    .worth{
						 width:60px;
						 height:30px;
						 color: #FFFFFF !important;
						 font-weight: 600;
						 background-color: #92D050;
						 border: 1px solid #FFFFFF;
						 padding-left:5px;
						 padding-right:5px;
						 padding-top:5px;
						 float:right;
						 text-align:center;
					 }
				</style>
            
            
            <br><br><br>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

            <div class="range">
              <input type="range" min="1" max="7" steps="1" value="1">
            </div>
            
            <ul class="range-labels">
              <li class="active selected">10</li>
              <li>50</li>
              <li>100</li>
              <li>150</li>
              <li>200</li>
              <li>250</li>
              <li>300</li>
            </ul>
          <style>
		  
		    body {
				  padding: 100px;
				}
				
				.range {
				  position: relative;
				  width: 550px;
				  height: 5px;
				}
				
				.range input {
				  width: 100%;
				  position: absolute;
				  top: 2px;
				  height: 0;
				  -webkit-appearance: none;
				}
				.range input::-webkit-slider-thumb {
				  -webkit-appearance: none;
				  width: 18px;
				  height: 18px;
				  margin: -8px 0  0;
				  border-radius: 50%;
				  background: #37adbf;
				  cursor: pointer;
				  border: 0 !important;
				}
				.range input::-moz-range-thumb {
				  width: 18px;
				  height: 18px;
				  margin: -8px 0  0;
				  border-radius: 50%;
				  background: #37adbf;
				  cursor: pointer;
				  border: 0 !important;
				}
				.range input::-ms-thumb {
				  width: 18px;
				  height: 18px;
				  margin: -8px 0  0;
				  border-radius: 50%;
				  background: #37adbf;
				  cursor: pointer;
				  border: 0 !important;
				}
				.range input::-webkit-slider-runnable-track {
				  width: 100%;
				  height: 2px;
				  cursor: pointer;
				  background: #b2b2b2;
				}
				.range input::-moz-range-track {
				  width: 100%;
				  height: 2px;
				  cursor: pointer;
				  background: #b2b2b2;
				}
				.range input::-ms-track {
				  width: 100%;
				  height: 2px;
				  cursor: pointer;
				  background: #b2b2b2;
				}
				.range input:focus {
				  background: none;
				  outline: none;
				}
				.range input::-ms-track {
				  width: 100%;
				  cursor: pointer;
				  background: transparent;
				  border-color: transparent;
				  color: transparent;
				}
				
				.range-labels {
				  margin: 18px -41px 0;
				  padding: 0;
				  list-style: none;
				}
				.range-labels li {
				  position: relative;
				  float: left;
				  width: 90.25px;
				  text-align: center;
				  color: #b2b2b2;
				  font-size: 14px;
				  cursor: pointer;
				}
				.range-labels li::before {
				  position: absolute;
				  top: -25px;
				  right: 0;
				  left: 0;
				  content: "";
				  margin: 0 auto;
				  width: 9px;
				  height: 9px;
				  background: #b2b2b2;
				  border-radius: 50%;
				}
				.range-labels .active {
				  color: #37adbf;
				}
				.range-labels .selected::before {
				  background: #37adbf;
				}
				.range-labels .active.selected::before {
				  display: none;
                }		    
               </style>

			<script language="javascript">
                 $(".worth").html("$8");

			
			      var sheet = document.createElement('style'),  
				  $rangeInput = $('.range input'),
				  prefs = ['webkit-slider-runnable-track', 'moz-range-track', 'ms-track'];
				
				document.body.appendChild(sheet);
				
				var getTrackStyle = function (el) {  
				
				  var curVal = el.value,
					  val = (curVal - 1) * 16.666666667,
					  style = '';
					  
					  setValue(curVal-1);

				  // Set active label
				  $('.range-labels li').removeClass('active selected');
				  
				  var curLabel = $('.range-labels').find('li:nth-child(' + curVal + ')');
				  
				  curLabel.addClass('active selected');
				  curLabel.prevAll().addClass('selected');
				  
				  // Change background gradient
				  for (var i = 0; i < prefs.length; i++) {
					style += '.range {background: linear-gradient(to right, #37adbf 0%, #37adbf ' + val + '%, #fff ' + val + '%, #fff 100%)}';
					style += '.range input::-' + prefs[i] + '{background: linear-gradient(to right, #37adbf 0%, #37adbf ' + val + '%, #b2b2b2 ' + val + '%, #b2b2b2 100%)}';
				  }
				
				  return style;
				}
				
				$rangeInput.on('input', function () {
				  sheet.textContent = getTrackStyle(this);
				});
				
				// Change input value on label click
				$('.range-labels li').on('click', function () {
				  var index = $(this).index();

				  $rangeInput.val(index + 1).trigger('input');
				  
				  setValue(index);
                  
				  
				});
				
				function setValue(index)
				{
					if(index==0)
					{	
						price = 8;
					}
					else if(index==1)
					{	
						price = 38;
					}
					else if(index==2)
					{	
						price = 56;
					}
					else if(index==3)
					{	
						price = 75;
					}
					else if(index==4)
					{	
						price = 113;
					}
					else if(index==5)
					{	
						price = 150;
					}
					else if(index==6)
					{	
						price = 188;
					}
					
					$(".worth").html("$"+price);
				}
				
            </script>   
			             
          </div> 
          <div class="col-md-6 col-sm-12">
             <img src="images/lemon.jpg"  style="width:350px;" class="img-responsive">
          </div>
       </div>