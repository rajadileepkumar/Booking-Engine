<?php 
/*
Plugin Name:Booking Plugin
Author:Raja Dileep Kumar
Version:1.0
Description:Searching hotels and packages based on the user interact search filter detaild description will available	 
*/

include_once 'booking-category.php';



define('BOOKINGSTYLE_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );


add_action('wp_enqueue_scripts','booking_styles');

function booking_styles(){
	wp_register_style('bootstrap-min',BOOKINGSTYLE_PATH.'css/bootstrap.css');
	wp_enqueue_style('bootstrap-min');

	wp_register_style('font-awesome',BOOKINGSTYLE_PATH.'css/font-awesome/css/font-awesome.css');
	wp_enqueue_style('font-awesome');

	wp_register_style('style',BOOKINGSTYLE_PATH.'css/style.css');
	wp_enqueue_style('style');

	wp_register_style('jquery-ui',BOOKINGSTYLE_PATH.'css/jquery-ui.css');
	wp_enqueue_style('jquery-ui');

	wp_register_style('datepicker',BOOKINGSTYLE_PATH.'css/datepicker.css');
	wp_enqueue_style('datepicker');

	wp_register_style('bootstrap-datetimepicker',BOOKINGSTYLE_PATH.'css/bootstrap-datetimepicker.min.css');
	wp_enqueue_style('bootstrap-datetimepicker');

	// wp_register_script( 'custom_jquery', plugins_url('/js/custom-jquery.js', __FILE__), array('jquery'), '2.5.1' );


	wp_register_script('bootstrap-js',plugins_url('/js/bootstrap.min.js',__FILE__),array('jquery'),true,false);
	wp_enqueue_script('bootstrap-js');
	wp_enqueue_script('jquery-ui-datepicker');


	wp_register_script('custom-js',plugins_url('/js/custom-js.js',__FILE__),array(),true,false);
	wp_enqueue_script('custom-js');
	
	wp_register_script('typeahead',plugins_url('/js/typeahead.js',__FILE__),array(),true,false);
	wp_enqueue_script('typeahead');

	wp_register_script('bootstrap-datepicker',plugins_url('/js/bootstrap-datepicker.js',__FILE__),array(),true,false);
	wp_enqueue_script('bootstrap-datepicker');

	wp_register_script('bootstrap-datetimepicker',plugins_url('/js/bootstrap-datetimepicker.js',__FILE__),array(),true,false);
	wp_enqueue_script('bootstrap-datetimepicker');

	wp_register_script('bootstrap-datetimepicker',plugins_url('/js/bootstrap-datetimepicker.fr.js',__FILE__),array(),true,false);
	wp_enqueue_script('bootstrap-datetimepicker');

	//wp_enqueue_script('datepicker.min.js');
}


add_shortcode('booking_widget','booking_widget_engine');

function booking_widget_engine(){
	?>
		<div class="col-md-8">
			<ul id="myTab" class="nav nav-tabs tabs_list">
				<li class="active"><a href="#tours" data-toggle="tab">Tours</a></li>
				<li><a href="#packages" data-toggle="tab">Packages</a></li>
			</ul>	
		</div>
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-8 booking-widget">
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active" id="tours">
							<h4>Book Domestic &amp; Internation Tours</h4>
							<button class="btn btn-success" id="button1">Domestic</button>
							<button class="btn btn-success" id="button2">International</button>
							<div id="domestic">
								<form accept="#" method="post">
									<div class="form-group col-md-12">
										<div class="col-md-6">
											<label>Plese Select Tour Location:</label>	
										</div>
										<div class="col-md-6">
											<select>
												<option value="" placeholder="Please Select Tour Location">Please Select Tour Location</option>
												<option value="Goa">Goa</option>
												<option value="Mysore">Mysore</option>
												<option value="Bangalore">Bangalore</option>
											</select>	
										</div>										
									</div>
									<div class="form-group col-md-12">										
										<div class="col-md-6">
											<label>Check In:</label>
										</div>
										<div class="col-md-6">
											<input type="text" id="dfromdate"/>
										</div>										
									</div>
									<div class="form-group col-md-12">
										<div class="col-md-6">
											<label>Check Out:</label>	
										</div>
										<div class="col-md-6">
											<input type="text" id="dtodate">	
										</div>
									</div>
									<div class="form-group col-md-12">
										<div class="col-md-6">
											<label>Number Of Adults</label>
										</div>
										<div class="col-md-6">
											<button type="button" value="down" class="down" data-min="1">-</button>
											<!-- <input type="button" value="down" class="down" data-min="0"> -->
											<input type="text" class="incdec" value="1">
											<!-- <input type="button" class="up" value="Up" data-max="5"/> -->
											<button type="button" class="up" value="Up" data-max="15">+</button>
										</div>
									</div>
									<div class="form-group col-md-12">
										<div class="col-md-6">
											<label>Number Of Childs</label>
										</div>
										<div class="col-md-6">
											<button type="button" value="down" class="down" data-min="0">-</button>
											<!-- <input type="button" value="down" class="down" data-min="0"> -->
											<input type="text" class="incdec" value="0">
											<!-- <input type="button" class="up" value="Up" data-max="5"/> -->
											<button type="button" class="up" value="Up" data-max="15">+</button>
										</div>
									</div>
									<div class="form-group col-md-12">
										<div class="col-md-6">
											<label>Infant</label>
										</div>
										<div class="col-md-6">
											<button type="button" value="down" class="down" data-min="0">-</button>
											<!-- <input type="button" value="down" class="down" data-min="0"> -->
											<input type="text" class="incdec" value="0">
											<!-- <input type="button" class="up" value="Up" data-max="5"/> -->
											<button type="button" class="up" value="Up" data-max="15">+</button>
										</div>
									</div>
									<div class="form-group col-md-12">
										<input type="submit" value="Search" />
									</div>
								</form>
							</div>
							<div id="international" style="display:none;">
								<form accept="#" method="post">
									<div class="form-group col-md-12">
										<div class="col-md-6">
											<label>Plese Select Tour Location:</label>	
										</div>
										<div class="col-md-6">
											<select>
												<option value="" placeholder="Please Select Tour Location">Please Select Tour Location</option>
												<option value="Goa">US</option>
												<option value="Mysore">UK</option>
												<option value="Bangalore">Bangalore</option>
											</select>	
										</div>										
									</div>
									<div class="form-group col-md-12">										
										<div class="col-md-6">
											<label>Check In:</label>
										</div>
										<div class="col-md-6">
											<input type="text" id="dfromdate"/>
										</div>										
									</div>
									<div class="form-group col-md-12">
										<div class="col-md-6">
											<label>Check Out:</label>	
										</div>
										<div class="col-md-6">
											<input type="text" id="dtodate">	
										</div>
									</div>
									<div class="form-group col-md-12">
										<div class="col-md-6">
											<label>Number Of Adults</label>
										</div>
										<div class="col-md-6">
											<button type="button" value="down" class="down" data-min="1">-</button>
											<!-- <input type="button" value="down" class="down" data-min="0"> -->
											<input type="text" class="incdec" value="1">
											<!-- <input type="button" class="up" value="Up" data-max="5"/> -->
											<button type="button" class="up" value="Up" data-max="15">+</button>
										</div>
									</div>
									<div class="form-group col-md-12">
										<div class="col-md-6">
											<label>Number Of Childs</label>
										</div>
										<div class="col-md-6">
											<button type="button" value="down" class="down" data-min="0">-</button>
											<!-- <input type="button" value="down" class="down" data-min="0"> -->
											<input type="text" class="incdec" value="0">
											<!-- <input type="button" class="up" value="Up" data-max="5"/> -->
											<button type="button" class="up" value="Up" data-max="15">+</button>
										</div>
									</div>
									<div class="form-group col-md-12">
										<div class="col-md-6">
											<label>Infant</label>
										</div>
										<div class="col-md-6">
											<button type="button" value="down" class="down" data-min="0">-</button>
											<!-- <input type="button" value="down" class="down" data-min="0"> -->
											<input type="text" class="incdec" value="0">
											<!-- <input type="button" class="up" value="Up" data-max="5"/> -->
											<button type="button" class="up" value="Up" data-max="15">+</button>
										</div>
									</div>
									<div class="form-group col-md-12">
										<input type="submit" value="Search" />
									</div>
								</form>
							</div>
						</div>
						<div class="tab-pane" id="packages">
							<h4>Book Domestic &amp; Internation Packages</h4>
							<button class="btn btn-success" id="button3">Domestic</button>
							<button class="btn btn-success" id="button4">International</button>
							<div id="domesticpackages">
								<form>
									<label>FName</label>
									<input type="text" />
								</form>
							</div>
							<div id="internationalpackages" style="display:none;">
								<form>
									<label>PLACE</label>
									<input type="text" />
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php 
}


?>