<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery/jquery-2.1.1.js"></script>
<script src="js/jquery/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">



<script>
$(function() {
function log( message ) {
$( "<div>" ).text( message ).prependTo( "#destiny" );
$( "#destiny" ).scrollTop( 0 );
}
$( "#destiny" ).autocomplete({
source: "search.php",
minLength: 2,
select: function( event, ui ) {
log( ui.item ?
"Selected: " + ui.item.value + " aka " + ui.item.id :
"Nothing selected, input was " + this.value );
}
});
});
</script>
<div class="search " title="">

<form name="searchForm" method="get" action="searchresult.php" class="" id="searchForm" novalidate="novalidate">


<fieldset><div class="ui-widget">
<label for="destiny" class="autoWidth hrs_relative">Destination<br/>
<input type="text" name="location" maxlength="200" autocomplete="off" value="" class="text destiny noEvent" id="destiny"/>
</label></div>
</fieldset>
<fieldset>
<label for="start_stayPeriod" class="cal left">
Arrival<br/>
<input type="text" name="startdate" placeholder="dd/mm/yyyy"  class="dateInput text"  id="datepicker1"/>
</label>
<label for="end_stayPeriod" class="cal left2">
Departure<br/>
<input type="text" name="enddate"  placeholder="dd/mm/yyyy"  class="dateInput text"  id="datepicker2"/>
</label>
<div class="clearFix"></div>
<label for="singleRooms" class="left small">Rooms<br/>
<input type="number" name="singleRooms" value=""  class="text" id="singleRooms"/>
</label>

<div class="clearFix"></div>
<label for="adults" class="left small clearFix">Adults<br/>
<input type="number" name="adults" value="" onkeydown="validateInputNumber(event);" class="text" id="adults"/>
</label>
<label for="children" class="left small">
Children<br/>
<select name="children" class="" id="children">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
</select>
<input type="submit" name="submitChildren" class="jsFreeSubmit"/>
</label>
<div class="clearFix"></div>
<div id="childrenWrap">

</div>
</fieldset>

<a id="showHideNext" class="hide  closed false toggleWithTracking toggler">Other search criteria</a>
<div class="separator"></div>
<fieldset>
<input class="button" name="submit" type="submit" value="Search for hotel"/>
</fieldset>
</form>
</div>


 <script>
$(function() {
$( "#datepicker1" ).datepicker({
defaultDate: "+1D",

changeMonth: true,
numberOfMonths: 2,
maxDate: "+10M +10D",
onClose: function( selectedDate ) {
$( "#datepicker2" ).datepicker( "option", "minDate", selectedDate );
}
});
$( "#datepicker2" ).datepicker({
defaultDate: "+2D",
changeMonth: true,
numberOfMonths: 2,
minDate: "+10M +10D",
onClose: function( selectedDate ) {
$( "#datepicker1" ).datepicker( "option", "maxDate", selectedDate );
}
});
});
</script>
 <style type="text/css">
.ui-datepicker {
   background: #fff;
   border: 1px solid #555;
   color: #EEE;
 }
</style>
