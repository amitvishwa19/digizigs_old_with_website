$(document).ready(function(){

	
	window.setTimeout(function() {;
	    $("#successMessage").fadeTo(500, 0).slideUp(500, function(){
	        $(this).remove(); 
	    });
	}, 2000);



	//New post image upload
	
	/* AUTOCOMPLETE */
	init_autocomplete();

		function init_autocomplete() {
			console.log('init_autocomplete');
			//if( typeof ($.fn.autocomplete) === 'undefined'){ return; }
			console.log('init_autocomplete');
			
			var countries = { AD:"Andorra",A2:"Andorra Test",AE:"United Arab Emirates",AF:"Afghanistan",AG:"Antigua and Barbuda",AI:"Anguilla",AL:"Albania",AM:"Armenia",AN:"Netherlands Antilles",AO:"Angola",AQ:"Antarctica",AR:"Argentina",AS:"American Samoa",AT:"Austria",AU:"Australia",AW:"Aruba",AX:"Åland Islands",AZ:"Azerbaijan",BA:"Bosnia and Herzegovina",BB:"Barbados",BD:"Bangladesh",BE:"Belgium",BF:"Burkina Faso",BG:"Bulgaria",BH:"Bahrain",BI:"Burundi",BJ:"Benin",BL:"Saint Barthélemy",BM:"Bermuda",BN:"Brunei",BO:"Bolivia",BQ:"British Antarctic Territory",BR:"Brazil",BS:"Bahamas",BT:"Bhutan",BV:"Bouvet Island",BW:"Botswana",BY:"Belarus",BZ:"Belize",CA:"Canada",CC:"Cocos [Keeling] Islands",CD:"Congo - Kinshasa",CF:"Central African Republic",CG:"Congo - Brazzaville",CH:"Switzerland",CI:"Côte d’Ivoire",CK:"Cook Islands",CL:"Chile",CM:"Cameroon",CN:"China",CO:"Colombia",CR:"Costa Rica",CS:"Serbia and Montenegro",CT:"Canton and Enderbury Islands",CU:"Cuba",CV:"Cape Verde",CX:"Christmas Island",CY:"Cyprus",CZ:"Czech Republic",DD:"East Germany",DE:"Germany",DJ:"Djibouti",DK:"Denmark",DM:"Dominica",DO:"Dominican Republic",DZ:"Algeria",EC:"Ecuador",EE:"Estonia",EG:"Egypt",EH:"Western Sahara",ER:"Eritrea",ES:"Spain",ET:"Ethiopia",FI:"Finland",FJ:"Fiji",FK:"Falkland Islands",FM:"Micronesia",FO:"Faroe Islands",FQ:"French Southern and Antarctic Territories",FR:"France",FX:"Metropolitan France",GA:"Gabon",GB:"United Kingdom",GD:"Grenada",GE:"Georgia",GF:"French Guiana",GG:"Guernsey",GH:"Ghana",GI:"Gibraltar",GL:"Greenland",GM:"Gambia",GN:"Guinea",GP:"Guadeloupe",GQ:"Equatorial Guinea",GR:"Greece",GS:"South Georgia and the South Sandwich Islands",GT:"Guatemala",GU:"Guam",GW:"Guinea-Bissau",GY:"Guyana",HK:"Hong Kong SAR China",HM:"Heard Island and McDonald Islands",HN:"Honduras",HR:"Croatia",HT:"Haiti",HU:"Hungary",ID:"Indonesia",IE:"Ireland",IL:"Israel",IM:"Isle of Man",IN:"India",IO:"British Indian Ocean Territory",IQ:"Iraq",IR:"Iran",IS:"Iceland",IT:"Italy",JE:"Jersey",JM:"Jamaica",JO:"Jordan",JP:"Japan",JT:"Johnston Island",KE:"Kenya",KG:"Kyrgyzstan",KH:"Cambodia",KI:"Kiribati",KM:"Comoros",KN:"Saint Kitts and Nevis",KP:"North Korea",KR:"South Korea",KW:"Kuwait",KY:"Cayman Islands",KZ:"Kazakhstan",LA:"Laos",LB:"Lebanon",LC:"Saint Lucia",LI:"Liechtenstein",LK:"Sri Lanka",LR:"Liberia",LS:"Lesotho",LT:"Lithuania",LU:"Luxembourg",LV:"Latvia",LY:"Libya",MA:"Morocco",MC:"Monaco",MD:"Moldova",ME:"Montenegro",MF:"Saint Martin",MG:"Madagascar",MH:"Marshall Islands",MI:"Midway Islands",MK:"Macedonia",ML:"Mali",MM:"Myanmar [Burma]",MN:"Mongolia",MO:"Macau SAR China",MP:"Northern Mariana Islands",MQ:"Martinique",MR:"Mauritania",MS:"Montserrat",MT:"Malta",MU:"Mauritius",MV:"Maldives",MW:"Malawi",MX:"Mexico",MY:"Malaysia",MZ:"Mozambique",NA:"Namibia",NC:"New Caledonia",NE:"Niger",NF:"Norfolk Island",NG:"Nigeria",NI:"Nicaragua",NL:"Netherlands",NO:"Norway",NP:"Nepal",NQ:"Dronning Maud Land",NR:"Nauru",NT:"Neutral Zone",NU:"Niue",NZ:"New Zealand",OM:"Oman",PA:"Panama",PC:"Pacific Islands Trust Territory",PE:"Peru",PF:"French Polynesia",PG:"Papua New Guinea",PH:"Philippines",PK:"Pakistan",PL:"Poland",PM:"Saint Pierre and Miquelon",PN:"Pitcairn Islands",PR:"Puerto Rico",PS:"Palestinian Territories",PT:"Portugal",PU:"U.S. Miscellaneous Pacific Islands",PW:"Palau",PY:"Paraguay",PZ:"Panama Canal Zone",QA:"Qatar",RE:"Réunion",RO:"Romania",RS:"Serbia",RU:"Russia",RW:"Rwanda",SA:"Saudi Arabia",SB:"Solomon Islands",SC:"Seychelles",SD:"Sudan",SE:"Sweden",SG:"Singapore",SH:"Saint Helena",SI:"Slovenia",SJ:"Svalbard and Jan Mayen",SK:"Slovakia",SL:"Sierra Leone",SM:"San Marino",SN:"Senegal",SO:"Somalia",SR:"Suriname",ST:"São Tomé and Príncipe",SU:"Union of Soviet Socialist Republics",SV:"El Salvador",SY:"Syria",SZ:"Swaziland",TC:"Turks and Caicos Islands",TD:"Chad",TF:"French Southern Territories",TG:"Togo",TH:"Thailand",TJ:"Tajikistan",TK:"Tokelau",TL:"Timor-Leste",TM:"Turkmenistan",TN:"Tunisia",TO:"Tonga",TR:"Turkey",TT:"Trinidad and Tobago",TV:"Tuvalu",TW:"Taiwan",TZ:"Tanzania",UA:"Ukraine",UG:"Uganda",UM:"U.S. Minor Outlying Islands",US:"United States",UY:"Uruguay",UZ:"Uzbekistan",VA:"Vatican City",VC:"Saint Vincent and the Grenadines",VD:"North Vietnam",VE:"Venezuela",VG:"British Virgin Islands",VI:"U.S. Virgin Islands",VN:"Vietnam",VU:"Vanuatu",WF:"Wallis and Futuna",WK:"Wake Island",WS:"Samoa",YD:"People's Democratic Republic of Yemen",YE:"Yemen",YT:"Mayotte",ZA:"South Africa",ZM:"Zambia",ZW:"Zimbabwe",ZZ:"Unknown or Invalid Region" };

			var countriesArray = $.map(countries, function(value, key) {
			  return {
				value: value,
				data: key
			  };
			});

			// initialize autocomplete with custom appendTo
			$('#autocomplete-custom-append').autocomplete({
			  lookup: countriesArray
			});
			
		};


	$("#imageUpload").change(function() {

	   if (this.files && this.files[0]) {
	   		var reader = new FileReader();

	   		reader.onload = function(e) {
	            $('.avatar-preview').css('background-image', 'url('+e.target.result +')');
	            $('.avatar-preview').hide();
	            $('.avatar-preview').fadeIn(650);
	        }
	        reader.readAsDataURL(this.files[0]);
	   }
	});

	$('.del').click(function(){
		alert('Delete clicked');
	});
    /*$(document).on("change",".uploadFile", function()
    {

    	var uploadFile = $(this);
        var files = !!this.files ? this.files : [];

        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader

            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
                alert(uploadFile.closest(".upimage").find('.imagePreview').length);
				uploadFile.closest(".imgUp").find('#imagePreview').css("background-image", "url("+this.result+")");
            }
        }
      
    });*/

});