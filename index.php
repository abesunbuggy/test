<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8" />

 <meta http-equiv="X-UA-Compatible" content="IE=edge" />

 <meta name="viewport" content="width=device-width, initial-scale=1.0" />

 <title>Group Event Pricing</title>
 <link rel="stylesheet" type="text/css" href="tcal.css" />
 <script type="text/javascript" src="tcal.js"></script>
 <link rel="stylesheet" href="style.css" />

 <style>
 input[type="text"],
 select,
 textarea {
 width: 100%;
 padding: 12px;
 border: 1px solid #ccc;
 border-radius: 4px;
 box-sizing: border-box;
 resize: vertical;
 }
 h2,
 h3,
 h4,
 h5,
 h6 {
 color: rgb(254, 104, 0);
 }

 /* Style the label to display next to the inputs */
 label {
 padding: 12px 12px 12px 0;
 display: inline-block;
 }

 /* Style the submit button */
 input[type="submit"] {
 background-color: rgb(254, 104, 0);
 color: white;
 padding: 12px 20px;
 border: none;
 border-radius: 4px;
 cursor: pointer;
 float: right;
 }

 /* Style the container */
 #container {
 border-radius: 5px;
 background-color: #f2f2f2;
 padding: 20px;
 width: 60%;
 }
 /* style the body */
 body {
 display: flex;
 align-items: center;
 justify-content: center;
 }

 /* Floating column for labels: 25% width */
 .col-25 {
 float: left;
 width: 25%;
 margin-top: 6px;
 }

 /* Floating column for inputs: 75% width */
 .col-75 {
 float: left;
 width: 75%;
 margin-top: 6px;
 }

 /* Clear floats after the columns */
 .row:after {
 content: "";
 display: table;
 clear: both;
 }

 /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
 @media screen and (max-width: 600px) {
 .col-25,
 .col-75,
 input[type="submit"] {
 width: 100%;
 margin-top: 0;
 }
 }
 </style>
 </head>
 <body>
 <div id="container">
 <!-- _______________________________________________ -->
 <div id="section_1">
 <div id="pricing_container">
 <h2>Pricing</h2>
 <button>Edit Pricing</button>
 </div>
 <!-- _______________________________________________ -->

 <div id="quotes_container">
 <h2 id="quote_no">Quote Number</h2>

 <div id="generate">
 <button>Generate</button>

 <div>/*Here goes the generated content*/</div>
 </div>

 <div id="search_container">
 <span>Search</span>
 <input type="text" />
 <button onclick="/*find something*/">Go</button>
 </div>
 </div>
 <!-- _______________________________________________ -->

 <!-- _______________________________________________ -->
 </div>
 <form action="">
 <div id="section_2">
 <div id="customer_info_container">
 <h2>Customer Info</h2>
 <div class="row">
 <div class="col-25">
 <label>Organization name </label>
 </div>
 <div class="col-75">
 <input type="text" />
 </div>
 </div>

 <div class="row">
 <div class="col-25">
 <label for="">group size </label>
 </div>
 <div class="col-75">
 <input type="text" />
 </div>
 </div>

 <div class="row">
 <div class="col-25">
 <label for="">contact name</label>
 </div>
 <div class="col-75">
 <input type="text" />
 </div>
 </div>

 <div>
 <div class="row">
 <div class="col-25">
 <label>note for partner </label>
 </div>
 <div class="col-75">
 <textarea name="" cols="15" rows="3"></textarea>
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">stop hello & attn lines</label>
 </div>
 <div class="col-75">
 <input type="checkbox" name="" id="" />
 </div>
 </div>
 </div>

 <div class="row">
 <div class="col-25">
 <label>Concierge </label>
 </div>
 <div class="col-75">
 <input type="text" />
 </div>
 </div>

 <div class="row">
 <div class="col-25">
 <label>Partner</label>
 </div>
 <div class="col-75">
 <select name="" id=""></select>
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">stop hello & attn lines </label>
 </div>
 <div class="col-75">
 <input type="checkbox" name="" id="" />
 </div>
 </div>
 </div>

 <!-- _______________________________________________ -->
 <div id="time_and_date_container">
 <h2>Time and Date</h2>

 <div id="event_date"></div>

 <div id="start_time">edit start time</div>

 <div id="end_time">edit end time</div>
 </div>

 <!-- _______________________________________________ -->

 <div id="transportation_container">
 <h2>Transportation</h2>
 <div class="row">
 <div class="col-25">
 <label for="">Transportation By</label>
 </div>
 <div class="col-75">
 <input type="text" />
 </div>
 </div>

 <div class="row">
 <div class="col-25">
 <label>Pick up location</label>
 </div>
 <div class="col-75">
 <select name="" id=""></select>
 </div>
 </div>

 <div class="row">
 <div class="col-25">
 <label for="">room number</label>
 </div>
 <div class="col-75">
 <input type="text" />
 </div>
 </div>

 <div class="text_area" id="note_in_transportation_area">
 <div class="row">
 <div class="col-25">
 <label for="">Notes for transportation </label>
 </div>
 <div class="col-75">
 <textarea name="" id="" cols="15" rows="3"></textarea>
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">stop pickup and transportation lines</label>
 </div>
 <div class="col-75">
 <input type="checkbox" name="" id="" />
 </div>
 </div>
 </div>
 </div>
 <!-- _______________________________________________ -->
 </div>

 <div id="section_3">
 <div id="food_container">
 <h2>Food</h2>
 <div class="row">
 <div class="col-25">
 <label for="">add food</label>
 </div>
 <div class="col-75">
 <input type="checkbox" name="" id="" />
 </div>
 </div>

 <div id="food_choice_container">
 <h5>Choose</h5>
 <div class="row">
 <div class="col-25">
 <label for="">deli</label>
 </div>
 <div class="col-75">
 <input type="checkbox" name="" id="" />
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">snacks</label>
 </div>
 <div class="col-75">
 <input type="checkbox" name="" id="" />
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">Pizza</label>
 </div>
 <div class="col-75">
 <input type="checkbox" name="" id="" />
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">BBQ</label>
 </div>
 <div class="col-75">
 <input type="checkbox" name="" id="" />
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">other </label>
 </div>
 <div class="col-75">
 <input type="text" />
 </div>
 <input type="checkbox" name="" id="" />
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">provided by </label>
 </div>
 <div class="col-75">
 <input type="text" />
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">note in food area </label>
 </div>
 <div class="col-75">
 <textarea name="" id="" cols="15" rows="3"></textarea>
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">stop other food lines</label>
 </div>
 <div class="col-75">
 <input type="checkbox" name="" id="" />
 </div>
 </div>
 </div>
 <!-- _______________________________________________ -->

 <div id="t_shirts_container">
 <h2>T-shirts</h2>
 <div class="row">
 <div class="col-25">
 <label for="">Logo on T-shirts</label>
 </div>
 <div class="col-75">
 <input type="checkbox" name="" id="" />
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">Logo on buggies</label>
 </div>
 <div class="col-75">
 <input type="checkbox" name="" id="" />
 <select name="" id=""></select>
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">Notes for t-shirts </label>
 </div>
 <div class="col-75">
 <textarea name="" id="" cols="15" rows="3"></textarea>
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">use this note only </label>
 </div>
 <div class="col-75">
 <input type="checkbox" value="" />
 </div>
 </div>
 </div>
 <!-- _______________________________________________ -->
 </div>

 <div id="section_4">
 <div id="results">
 <h2>Results</h2>

 <div class="row">
 <div class="col-25">
 <label for="">Retail pricing per person </label>
 </div>
 <div class="col-75">
 <input type="text" />
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">Retail pricing per group</label>
 </div>
 <div class="col-75">
 <input type="text" />
 </div>
 </div>

 <div id="discount">
 <div class="row">
 <div class="col-25">
 <label for="">discount </label>
 </div>
 <div class="col-75">
 <input type="text" />
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">% </label>
 </div>
 <div class="col-75">
 <input type="radio" name="" id="" />
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">$ </label>
 </div>
 <div class="col-75">
 <input type="radio" name="" id="" />
 </div>
 </div>
 </div>

 <div id="total_cost">
 <h2>Total cost</h2>
 <div class="row">
 <div class="col-25">
 <label for="">individual</label>
 </div>
 <div class="col-75">
 <input type="text" />
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">group</label>
 </div>
 <div class="col-75">
 <input type="text" />
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">cost with logo</label>
 </div>
 <div class="col-75">
 <input type="text" />
 </div>
 </div>
 </div>
 </div>

 <div id="time_results">
 <h2>Time results</h2>
 <div class="row">
 <div class="col-25">
 <label for="">start time</label>
 </div>
 <div class="col-75">
 <input type="text" />
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">duration</label>
 </div>
 <div class="col-75">
 <input type="text" />
 </div>
 </div>

 <h4>check in info</h4>
 <div class="row">
 <div class="col-25">
 <label for="">shop </label>
 </div>
 <div class="col-75">
 <input type="radio" name="" id="" />
 </div>
 </div>
 <div class="row">
 <div class="col-25">
 <label for="">dune </label>
 </div>
 <div class="col-75">
 <input type="radio" name="" id="" />
 </div>
 </div>

 <div class="row">
 <div class="col-25">
 <label for="">Notes that dont show on proposal </label>
 </div>
 <div class="col-75">
 <textarea name="" id="" cols="15" rows="3"></textarea>
 </div>
 </div>
 </div>

 <div id="submit">
 <div class="row" style="margin-bottom: 20px">
 <div class="col-25">
 <label for="">Email </label>
 </div>
 <div class="col-75">
 <input type="email" />
 </div>
 </div>
 <div class="row">
 <input type="submit" value="Submit" />
 </div>
 </div>
 </div>
 </form>

 <!-- _______________________________________________ -->
 </div>
 </body>
</html>