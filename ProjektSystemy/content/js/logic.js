var tz; //temperaturaZadana;
var to; //temperaturaOtoczenia;
var tw; //temperaturaWnetrze;
var deszcz;
var wiatr;

function updateValues() {
	tz = $('#temperaturaZadana').val();
	to = $('#temperaturaZewnetrzna').val();
	tw = $('#temperaturaWnetrze').val();
	wiatr = $('#myonoffswitchWiatr').is(":checked");
	deszcz = $('#myonoffswitchDeszcz').is(":checked")
}

function updateOutputs() {
	var oknoOtwarte = false;
	updateValues();
	//alert('values updated');
	//alert("tz="+tz+" to="+ to + " tw="+tw + " deszcz="+ deszcz + " wiatr="+ wiatr);
	
	//set okno dachowe state
	if (!wiatr && !deszcz && ( ( to<tz && tz<tw ) || ( to>tz && tz > tw ) ) ){
		$('#OknoDachoweOtwarte').show();
		$('#myonoffswitchOknoDachowe').prop('checked', true);
		oknoOtwarte = true;
		
	} else {
		$('#OknoDachoweOtwarte').hide();
		$('#myonoffswitchOknoDachowe').prop('checked', false);
	}
	
	
	//set okna elewacyjne state
	if (!wiatr && ( ( to<tz && tz<tw ) || ( to>tz && tz > tw ) ) ){
		$('#OknoPraweOtwarte').show();
		$('#OknoLeweOtwarte').show();
		$('#myonoffswitchOknoEwelacyjne').prop('checked', true);
		oknoOtwarte = true;
		
	} else {
		$('#OknoPraweOtwarte').hide();
		$('#OknoLeweOtwarte').hide();
		$('#myonoffswitchOknoEwelacyjne').prop('checked', false);
	}
	
	//set klima state
	if ( !oknoOtwarte && tz<tw ) {
		$('#KlimatyzacjaWlaczona_1').show();
		$('#KlimatyzacjaWlaczona_2').show();
		$('#myonoffswitchKlimatyzacja').prop('checked', true);
	} else {
		$('#KlimatyzacjaWlaczona_1').hide();
		$('#KlimatyzacjaWlaczona_2').hide();
		$('#myonoffswitchKlimatyzacja').prop('checked', false);
	}
	
	//set ogrzewanie state
	if ( !oknoOtwarte && tz>tw ) {
		$('#KaloryferWlaczony_1').show();
		$('#KaloryferWlaczony_2').show();		
		$('#KaloryferWlaczony_3').show();		
		$('#KaloryferWlaczony_4').show();
		$('#myonoffswitchOgrzewanie').prop('checked', true);
	} else {
		$('#KaloryferWlaczony_1').hide();
		$('#KaloryferWlaczony_2').hide();		
		$('#KaloryferWlaczony_3').hide();		
		$('#KaloryferWlaczony_4').hide();
		$('#myonoffswitchOgrzewanie').prop('checked', false);
	}
}
