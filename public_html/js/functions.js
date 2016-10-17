//dateFormat function (formats date)
function dateFormat() {
	//new js date
	var date = new Date();
	//changing the output the date to a string
	var dateString = date.toString();
	//changing the string into an array
	var myDate = dateString.split(" ")
	//pulling the day of the week from the array and sending it to lowercase
	var protoDay = myDate[0].toLowerCase();
	//var for day of the week
	var day;
	//this switch statement changes the day of the week from a short form to a long form
	switch(protoDay) {
		case "sun":
			var day = "Sunday"
			break;
		case "mon":
			var day = "Monday"
			break;
		case "tue":
			var day = "Tuesday"
			break;
		case "wed":
			var day = "Wednesday"
			break;
		case "thu":
			var day = "Thursday"
			break;
		case "fri":
			var day = "Friday"
			break;
		case "sat":
			var day = "Saturday"
			break;
	}
	//pulls the month from the array
	var protoMonth = myDate[1];
	//changes the short form of the month to the long form
	switch(protoMonth.toLowerCase()) {
		case "jan":
			var month = "January"
			break;
		case "feb":
			var month = "February"
			break;
		case "mar":
			var month = "March"
			break;
		case "apr":
			var month = "April"
			break;
		case "may":
			var month = "May"
			break;
		case "jun":
			var month = "June"
			break;
		case "jul":
			var month = "July"
			break;
		case "aug":
			var month = "August"
			break;
		case "sep":
			var month = "September"
			break;
		case "oct":
			var month = "October"
			break;
		case "nov":
			var month = "November"
			break;
		case "dec":
			var month = "December"
			break;
	}
	//pulls the day of the month from the array
	var dayOfMonth = myDate[2];
	//if the last character in the  date is a 1
	if(dayOfMonth.slice(-1) == 1) {
		//if the date is  not the 11th
		if(dayOfMonth != 11) {
			var theDate = dayOfMonth + "st";
		}
		else {
			var theDate = dayOfMonth + "th";
		}
	}
	//if the last character in the date is a 2
	else if(dayOfMonth.slice(-1) == 2) {
		if(dayOfMonth != 12) {
			var theDate = dayOfMonth + "nd";
		}
		else {
			var theDate = dayOfMonth + "th";
		}
	}
	else {
		//if the last character in the date is a 3
		if(dayOfMonth.slice(-1) == 3) {
			if(dayOfMonth != 13) {
				var theDate = dayOfMonth + "rd";
			}
			else {
				var theDate = dayOfMonth + "th";
			}
		}
		else {
			var theDate = dayOfMonth + "th";
		}
	}
	//if the date is single digit (automatically formatted with a leading 0)
	if(theDate.charAt(0) == 0) {
		//returns only the last digit and the date suffix
		var theDate = theDate.slice(-3);
	}
	//pulls the year from the  array
	var year = myDate[3];
	//concatinates the newley formated date
	document.write(day + ", " + month +" "+ theDate +", "+ year);
};

