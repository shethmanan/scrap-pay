<?php
	$name = $_GET['q'];
	$con = new Mysqli('localhost','root','','scrappay');

	$productResult = $con->query("SELECT * from `waste` where `name` = '{$name}';");

	$product = $productResult->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Scrap Pay</title>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

	<style type="text/css">
		@font-face{
			font-family: 'Anders';
			src: url('fonts/Anders.ttf');
		}
		@font-face{
			font-family: 'Track';
			src: url('fonts/Track.ttf');
		}
		#head-background{
			background-color: #4caf50;
		    position: fixed;
		    z-index: 1000;
			width: 100%;
			    
		}
		body{
			/*background: #11998e;
			background: -moz-linear-gradient(top, #11998e 0%, #38ef7d 100%);
			background: -webkit-linear-gradient(top, #11998e 0%,#38ef7d 100%);
			background: linear-gradient(to bottom, #11998e 0%,#38ef7d 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#11998e', endColorstr='#38ef7d',GradientType=0 );

			*/
			background-size: contain;
			min-height: 100vh;
		}
		.logo{
			/*font-family:'Track';*/
		}
		.valign-wrapper{
			min-height: 100vh;
		}
		.search-box{
			background-color: #fff;
			border: none;
			border-radius: 3px;
			font-size: 1.3rem;
			/*padding:5px 10px;*/
			color: #424242;
		}
		.full-width {
		    width: 100% !important;
		}
		.search-icon,.submit-icon{
		    height: 3rem;
		    line-height: 2.2rem;
		    float: left;
		    font-size: 1.3rem;
			padding: 5px 10px;
		    
		}
		.result-container{
			position: relative;
			top: 143px;
		}
		.no-left-margin{
			margin-left: 0px;
		}
		.no-right-margin{
			margin-right: 0px;
		}
		.no-left-padding{
			padding-left: 0px !important;
		}
		.no-right-padding{
			padding-right: 0px !important;
		}
		.submit-icon{
			float: right;
			cursor: pointer;
		}
		.text-style1{
		    font-size: larger;
    		/*font-family: cursive;*/
    		font-weight: 400;
    		padding-left: 5px;
    		padding-right: 5px;
		}
		.name-display{
		    background: white;
		    color: #4caf50;
		}
		#search-field,#search-field:focus{
			border:none;
			border-bottom: none;
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			box-shadow: none;
		}
		#search-field{
			width: calc(100% - 80px);
			margin-bottom: 0;
		}
		.seamless-icons{
			background: url('img/seamless-icons.png');
			width: 100%;
			height: 100%;
			position: absolute;
			bottom: 0;
			height: 30vh;
		}
		#search-div{
		    margin-top: 11px;
		    right: 2px;
		    float: right;
		    width: 93%;
		}
		#back-icon{
			padding-top:8px;
		}
		.card-properties{
			background: #4caf50;
			margin-left: 0px;
			margin-right: 0px;
		}
		.card-content{
			padding-left: 10px !important;
			padding-right: 10px !important;
		}
		.bold-text{
			font-weight: 300;
		}
	</style>
	</head>
	<body>
		<div id="head-background" class="z-depth-3">
			
		
			<div id="search-div">
				<div class="container no-left-margin no-right-margin">
					<div class="row no-left-margin no-right-margin">
						<div id="back-button" class="col s2 no-left-margin no-right-margin">
							<i class="material-icons white-text" id="back-icon">arrow_back</i>
						</div>
						<div id="asd" class="col s10 no-left-margin no-right-margin">

							<div class="search-box">
								<i class="material-icons search-icon">search</i>
								<input list="suggestions" type="text" id="search-field" placeholder="Search for scrap.." value="<?=$name;?>">
								<i class="material-icons submit-icon waves-effect" style="display: none;">arrow_forward</i>
								<datalist style="color:red" id="suggestions">
									<option value="Tea bags">
									<option value="Left-over food">
									<option value="Vegetables">
									<option value="Fruit">
									<option value="Fruit skins">
									<option value="Apple">
									<option value="Orange">
									<option value="Mango">
									<option value="Grape">
									<option value="Peaches">
									<option value="Strawberry">
									<option value="Banana">
									<option value="Chikoo">
									<option value="Guava">
									<option value="Berries">
									<option value="Kiwi">
									<option value="Watermelon">
									<option value="Melons">
									<option value="Coconut">
									<option value="Papaya">
									<option value="Pineapple">
									<option value="Vegetables">
									<option value="Capcicum">
									<option value="Potato">
									<option value="Tomato">
									<option value="Cucumber">
									<option value="Cabbage">
									<option value="Brinjal">
									<option value="Beans">
									<option value="Broccoli">
									<option value="Lady finger">
									<option value="Rotten Eggs">
									<option value="Egg Shells">
									<option value="Used Flowers">						
									<option value="Plastic">
									<option value="Plastic">
									<option value="Plastic Chair">
									<option value="Plastic Table">
									<option value="Plastic Dustbin">
									<option value="Plastic Tiffin">
									<option value="Plastic Box">
									<option value="Rubber Bands">
									<option value="Plastic Bowls">
									<option value="Plastic Trays">
									<option value="Leaves">
									<option value="Newspapers">
									<option value="Photo papers">
									<option value="Tissue Paper">	
									<option value="Paper">
									<option value="Cards">
									<option value="Books">
									<option value="Cardboard">
									<option value="Tetrapaks">
									<option value="Metal">
									<option value="Screws">
									<option value="Pins">
									<option value="Nails">
									<option value="Tin boxes">
									<option value="Cans">
									<option value="Spoons">
									<option value="Forks">
									<option value="knife">
									<option value="Utensils">
									<option value="Glass">
									<option value="Mirror">
									<option value="Flower Pots">
									<option value="Glass Utensils">
									<option value="Vases">
								</datalist>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="row white-text text-style1">
					<div class="chip col s5 name-display">
						<span>Name: </span>
						<span><?=$product['name'];?></span>
					</div>
					<div class="chip col s6 name-display">
						<span>Category: </span>
						<span><?=$product['category'];?></span>
					</div>
						
				</div>
			</div>
		</div>
		<div class="result-container">
			<div class="disposal">
				<span>Composting Techniques</span>
				<?php if(strpos($product['disposal_method'],'1') !== false):?>
					<div class="disposal-techniques-1">
						<div class="row">
		       				 <div class="col s12 no-left-padding no-right-padding">
						        <div class="card darken-2 card-properties">
						            <div class="card-content white-text">
						              <span class="card-title">POT COMPOSTING</span>
						              <p>
						              	<ol>
						              	<li>Segregate your household waste into dry and wet—right in your kitchen. Fruit peels, teabags and leftovers of food are wet waste, while paper, plastic and packaging are dry waste.</li>
										<li>Put the wet and dry waste in two different containers in the kitchen.</li>
										<li>Once the wet waste container is full, put its contents into the first compost pot.</li>
										<li>Add dried leaves of the same quantity as the waste.</li>
										<li>Add semi-composted material, buttermilk or cow dung to start off the decomposition process.</li>
										<li>Turn the pile around every other day.</li>
										<li>The pile has to be kept at the right level of dampness. If it is too wet, add dried leaves and stir. If it is too dry, add water and stir.</li>
										<li>Once full, leave the pot open for 30–45 days for the composting to happen.</li>
										<li>Once the container is full, move the semi-composted matter into a larger container or bin.</li>
										<li>After two months, the waste will turn into rich compost that can be used or sold as manure.</li>
						              	</ol>
						              	<span class="bold-text">
						             	 	Note: Do not add cooked food, meat and dairy products, at least in the beginning, to avoid a stench.
						              	</span>
						              </p>
						            </div>
						            
					         	</div>
					        </div>
					    </div>
					</div>
				<?php endif;?>
				<?php if(strpos($product['disposal_method'],'2') !== false):?>
					<div class="disposal-techniques-2">
						<div class="row">
		       				 <div class="col s12 no-left-padding no-right-padding">
						        <div class="card darken-2 card-properties">
						            <div class="card-content white-text">
						              <span class="card-title">VERMICOMPOSTING</span>
						              <p>
						              	In vermicomposting, earthworms (a farmer's best friend) or composting worms are the main players. These worms need air, water, food and warmth to live and breed. By adding these worms to containers full of organic waste matter, you can produce vermicompost, which is nothing but the worms' droppings created after consuming the organic waste.
										<br/><br/>
										Start vermicomposting only if you have already been composting regularly, not if you are experimenting for the first time.

										<ol>
											<li>To start with, get a large plastic tub.</li>
											<li>Gather the following: shredded newspaper, shredded cardboard, coconut fibres and dry cow dung cakes.</li>
											<li>Soak these in water, squeeze out the excess water (like you would with a sponge) and place these materials at the bottom of the worm bin.</li>
											<li>Buy some earthworms with the soil they live in. (You can get this from a nursery.)</li>
											<li>Add half-done compost to this as it has enough microorganisms to get the worms started.</li>
											<li>Add kitchen waste to this once in two or three days, not every day. (Don't use the worm bin as a site for dumping your daily kitchen waste.)</li>
											<li>Don't feed it meat, dairy or fatty food.</li>
											<li>Limit the use of citrus fruits and peel in your vermicompost bin.</li>
											<li>Don't use anything acidic, just stick to fruit and vegetable peel, eggshells, coffee grounds, tea bags and tea leaves.</li>
						              	</ol>
						              </p>
						            </div>
						            
					         	</div>
					        </div>
					    </div>
					</div>
				<?php endif;?>
				<?php if(strpos($product['disposal_method'],'3') !== false):?>
					<div class="disposal-techniques-3">
						<div class="row">
		       				 <div class="col s12 no-left-padding no-right-padding">
						        <div class="card darken-2 card-properties">
						            <div class="card-content white-text">
						              <span class="card-title">THE BOKASHI METHOD</span>
						              <p>
						              	'Bokashi' means 'fermented organic matter' in Japanese. The Bokashi composting method uses a select group of microorganisms to anaerobically ferment organic waste. It is a two-stage process:
										<br><br>
										<span class="bold-text">Stage 1:</span>
										You will need a large airtight drum for fermentation. The process does not break down the contents as there is no oxygen.
										<br>
										<span class="bold-text">Stage 2:</span>
										Decomposition that takes place when the fermented material is added to soil or compost. The fermentation also conditions food waste so that it will break down more rapidly at the decomposition stage.

										<ol>
				
											<li>Add daily kitchen waste to this drum. Cooked food, meat and dairy products—everything goes in.</li>
											<li>Don't panic if you see maggots the next day around the rim. This is expected.</li>
											<li>Add the Bokashi powder. To learn how to make Bokashi powder, visit this site.</li>
											<li>Ensure that the drum has a tap which can drain a small amount of the liquid generated from time to time. This liquid will smell like molasses, bran and vinegar.</li>
											<li>By around the 17th day, some white fungus will have grown in the drum; this shows fermentation. The white mould is a beneficial fungus which helps suppress pathogens. If you have white mould, it means that your fermentation is going well.</li>
											<li>Collect kitchen waste in the Bokashi drum for a month and then let it sit for 18 days.</li>
											<li>Mix some of the drum's contents with semi-done compost and put this mixture in a tub.</li>
											<li>Dig a trench and then put the fermenting wet waste in it. Cover it up.</li>
											<li>After three weeks you have beautiful black compost.</li>
						             	</ol>
						              </p>
						            </div>
						            
					         	</div>
					        </div>
					    </div>
					</div>
				<?php endif;?>
			</div>
			<div class="sell">
				<span>Sell you waste: </span>
				<?php if(strpos($product['shop'],'1') !== false):?>
					<div class="sell-shop-1">
						<div class="row">
		       				 <div class="col s12 no-left-padding no-right-padding">
						        <div class="card darken-2 card-properties">
						            <div class="card-content white-text">
						              <span class="card-title">Sanjay's Shop</span>
						              <p>
						              	<div class="row">
						              		<div class="col s12">
								              	<span class="col s4">
								              		Owner:
								              	</span>
								              	<span class="col s8">
								              		Mr Sanjay Gupta
								              	</span>
						              		</div>
						              		<div class="col s12">
								              	<span class="col s4">
								              		Address:
								              	</span>
								              	<span class="col s8">
								              		2, Alpha Compound, Stn Rd, Nr Masoom/opp Api Co., Bhandup (west)
								              	</span>
						              		</div>
						              		<div class="col s12">
								              	<span class="col s4">
								              		Phone No:
								              	</span>
								              	<span class="col s8">
								              		02225947265
								              	</span>
						              		</div>
						              	</div>
						              </p>
						            </div>
						            
					         	</div>
					        </div>
					    </div>
					</div>
				<?php endif;?>
				<?php if(strpos($product['shop'],'2') !== false):?>
					<div class="sell-shop-2">
						<div class="row">
		       				 <div class="col s12 no-left-padding no-right-padding">
						        <div class="card darken-2 card-properties">
						            <div class="card-content white-text">
						              <span class="card-title">Soni and Son's</span>
						              <p>
						              	<div class="row">
						              		<div class="col s12">
								              	<span class="col s4">
								              		Owner:
								              	</span>
								              	<span class="col s8">
								              		Mrs Vema  Soni
								              	</span>
						              		</div>
						              		<div class="col s12">
								              	<span class="col s4">
								              		Address:
								              	</span>
								              	<span class="col s8">
								              		Shop No 2, Marvel Apartments, Marve Road, Beside St Joseph High School,orlem, Malad (west)
								              	</span>
						              		</div>
						              		<div class="col s12">
								              	<span class="col s4">
								              		Phone No:
								              	</span>
								              	<span class="col s8">
								              		222881033, 222881025
								              	</span>
						              		</div>
						              	</div>
						              </p>
						            </div>
						            
					         	</div>
					        </div>
					    </div>
					</div>
				<?php endif;?>
				<?php if(strpos($product['shop'],'3') !== false):?>
					<div class="sell-shop-3">
						<div class="row">
		       				 <div class="col s12 no-left-padding no-right-padding">
						        <div class="card darken-2 card-properties">
						            <div class="card-content white-text">
						              <span class="card-title">Your shop</span>
						              <p>
						              	<div class="row">
						              		<div class="col s12">
								              	<span class="col s4">
								              		Owner:
								              	</span>
								              	<span class="col s8">
								              		Mr Ahalya  Penkar
								              	</span>
						              		</div>
						              		<div class="col s12">
								              	<span class="col s4">
								              		Address:
								              	</span>
								              	<span class="col s8">
								              		Karkhanis, Subhash Rd, Jamblinaka, Thane (west)
								              	</span>
						              		</div>
						              		<div class="col s12">
								              	<span class="col s4">
								              		Phone No:
								              	</span>
								              	<span class="col s8">
								              		222534469
								              	</span>
						              		</div>
						              	</div>
						              </p>
						            </div>
						            
					         	</div>
					        </div>
					    </div>
					</div>
				<?php endif;?>
				<?php if(strpos($product['shop'],'4') !== false):?>
					<div class="sell-shop-4">
						<div class="row">
		       				 <div class="col s12 no-left-padding no-right-padding">
						        <div class="card darken-2 card-properties">
						            <div class="card-content white-text">
						              <span class="card-title">Pinga's kabadi</span>
						              <p>
						              	<div class="row">
						              		<div class="col s12">
								              	<span class="col s4">
								              		Owner:
								              	</span>
								              	<span class="col s8">
								              		Mrs Pinga  Pathak
								              	</span>
						              		</div>
						              		<div class="col s12">
								              	<span class="col s4">
								              		Address:
								              	</span>
								              	<span class="col s8">
								              		Mahu Palace, Kannamwar Ngr No 2, Vikhroli(e)
								              	</span>
						              		</div>
						              		<div class="col s12">
								              	<span class="col s4">
								              		Phone No:
								              	</span>
								              	<span class="col s8">
								              		02225776215
								              	</span>
						              		</div>
						              	</div>
						              </p>
						            </div>
						            
					         	</div>
					        </div>
					    </div>
					</div>
				<?php endif;?>
				<?php if(strpos($product['shop'],'5') !== false):?>
					<div class="sell-shop-5">
						<div class="row">
		       				 <div class="col s12 no-left-padding no-right-padding">
						        <div class="card darken-2 card-properties">
						            <div class="card-content white-text">
						              <span class="card-title">Kanan and son's</span>
						              <p>
						              	<div class="row">
						              		<div class="col s12">
								              	<span class="col s4">
								              		Owner:
								              	</span>
								              	<span class="col s8">
								              		Mr Kanan  Taneja
								              	</span>
						              		</div>
						              		<div class="col s12">
								              	<span class="col s4">
								              		Address:
								              	</span>
								              	<span class="col s8">
								              		1st Floor, Sahni Niwas, 5 3rd Road, Khar
								              	</span>
						              		</div>
						              		<div class="col s12">
								              	<span class="col s4">
								              		Phone No:
								              	</span>
								              	<span class="col s8">
								              		02225947265
								              	</span>
						              		</div>
						              	</div>
						              </p>
						            </div>
						            
					         	</div>
					        </div>
					    </div>
					</div>
				<?php endif;?>
				<?php if(strpos($product['shop'],'6') !== false):?>
					<div class="sell-shop-6">
						<div class="row">
		       				 <div class="col s12 no-left-padding no-right-padding">
						        <div class="card darken-2 card-properties">
						            <div class="card-content white-text">
						              <span class="card-title">Kirtana Paper Mart</span>
						              <p>
						              	<div class="row">
						              		<div class="col s12">
								              	<span class="col s4">
								              		Owner:
								              	</span>
								              	<span class="col s8">
								              		Mrs Kirtana  Dayal
								              	</span>
						              		</div>
						              		<div class="col s12">
								              	<span class="col s4">
								              		Address:
								              	</span>
								              	<span class="col s8">
								              		2, Alpha Compound, Stn Rd, Nr Masoom/opp Api Co., Bhandup (west)
								              	</span>
						              		</div>
						              		<div class="col s12">
								              	<span class="col s4">
								              		Phone No:
								              	</span>
								              	<span class="col s8">
								              		02222611762
								              	</span>
						              		</div>
						              	</div>
						              </p>
						            </div>
						            
					         	</div>
					        </div>
					    </div>
					</div>
				<?php endif;?>
				<?php if(strpos($product['shop'],'7') !== false):?>
					<div class="sell-shop-7">
						<div class="row">
		       				 <div class="col s12 no-left-padding no-right-padding">
						        <div class="card darken-2 card-properties">
						            <div class="card-content white-text">
						              <span class="card-title">	Makkaddam Store</span>
						              <p>
						              	<div class="row">
						              		<div class="col s12">
								              	<span class="col s4">
								              		Owner:
								              	</span>
								              	<span class="col s8">
								              		Mrs Ananta  Mukaddam
								              	</span>
						              		</div>
						              		<div class="col s12">
								              	<span class="col s4">
								              		Address:
								              	</span>
								              	<span class="col s8">
								              		105-a Mittal Tower, 10 Th Flr, Yogakshema (nariman Point)
								              	</span>
						              		</div>
						              		<div class="col s12">
								              	<span class="col s4">
								              		Phone No:
								              	</span>
								              	<span class="col s8">
								              		022-25947265, 022-22872218
								              	</span>
						              		</div>
						              	</div>
						              </p>
						            </div>
						            
					         	</div>
					        </div>
					    </div>
					</div>
				<?php endif;?>
				<?php if(strpos($product['shop'],'8') !== false):?>
					<div class="sell-shop-8">
						<div class="row">
		       				 <div class="col s12 no-left-padding no-right-padding">
						        <div class="card darken-2 card-properties">
						            <div class="card-content white-text">
						              <span class="card-title">Janta</span>
						              <p>
						              	<div class="row">
						              		<div class="col s12">
								              	<span class="col s4">
								              		Owner:
								              	</span>
								              	<span class="col s8">
								              		Mr Madhava Persad
								              	</span>
						              		</div>
						              		<div class="col s12">
								              	<span class="col s4">
								              		Address:
								              	</span>
								              	<span class="col s8">
								              		1st Flr Bhatti Pada Khot Road, Neha Annexe Bldg, Bhandup
								              	</span>
						              		</div>
						              		<div class="col s12">
								              	<span class="col s4">
								              		Phone No:
								              	</span>
								              	<span class="col s8">
								              		02225933661, 02225947265
								              	</span>
						              		</div>
						              	</div>
						              </p>
						            </div>
						            
					         	</div>
					        </div>
					    </div>
					</div>
				<?php endif;?>
			</div>
		</div>

		
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>

		<script type="text/javascript">
			$('#search-field').on('keyup',function(e){
				if($(this).val().length == 0){
					$('.submit-icon').fadeOut(250);
					return;
				}
				if($(this).val().length - 1 == 0){
					$('.submit-icon').fadeIn(250);
				}
				if(e.keyCode == 13){
					$('.submit-icon').trigger('click');
				}
			});
			$('#search-field').focus(function(){
				$('#back-button').hide();
				$('#asd').addClass('full-width');
			});
			$('#search-field').focusout(function(){
				$('#back-button').fadeIn();
				$('#asd').removeClass('full-width');
			});
			$('.submit-icon').click(function(){
				window.location.href = '/scrappay/list.php?q='+$('#search-field').val();
			});
		</script>
	</body>
</html>