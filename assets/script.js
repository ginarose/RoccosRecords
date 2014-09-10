var dayofweek = new Date().getDay();
var day = "today";

$(document).ready(function()
{
    console.log(dayofweek);

    switch (dayofweek) {
    case 0:
        day = "Sunday";
        console.log(day);
        break;
    case 1:
        day = "Monday";
        console.log(day);
        break;
    case 2:
        day = "Tuesday";
        console.log(day);
        break;
    case 3:
        day = "Wednesday";
        console.log(day);
        
        $('#weekly-special-text').html("<b>Friends Day Wednesday:</b> Bring a friend in, get 10% off both of your purchases.");
        
        break;
    case 4:
        day = "Thursday";
        console.log(day);
        break;
    case 5:
        day = "Friday";
        console.log(day);
        break;
    case 6:
        day = "Saturday";
        console.log(day);
        break;
    }

    $('#select-weekly-special').val('Wednesday');

}
)

$(document).on('change', '#select-weekly-special', function(e) {
    
    //get day of the week and set select to that
    var currentday = new Date().getDay();
    

    day = this.options[e.target.selectedIndex].text;

    switch (day) {
    case "Sunday":
        console.log(day);
        $('#weekly-special-text').html("<b>SUNDAY FUNDAYS</b> Bring a friend and recieve 10% off your total purchase.");
        $('#weekly-special-day a').text("Sunday Specials");
        break;
    case "Monday":
        console.log(day);
        $('#weekly-special-text').html("<b>Bad Case of the Mondays: </b> Monday blues got ya down? Feel better with 25% off albums in the Blues section.");
        $('#weekly-special-day a').text("Monday Specials");
        break;
    case "Tuesday":
        console.log(day);
        $('#weekly-special-text').html("<b>Check-in Special:</b> Check in to Rocco's Records on facebook and get 25% off!");
        $('#weekly-special-day a').text("Tuesday Specials");
        break;
    case "Wednesday":
        console.log(day);
        $('#weekly-special-text').html("<b>Friends Day Wednesday:</b> Bring a friend in, get 10% off both of your purchases.");
        $('#weekly-special-day a').text("Wednesday Specials");
        break;
    case "Thursday":
        console.log(day);
        $('#weekly-special-text').html("<b>Thirsty Thursday:</b> Thirsty? Have a drink! Buy a record or CD and recieve a beverage from our cooler for free!");
        $('#weekly-special-day a').text("Thursday Specials");
        break;
    case "Friday":
        console.log(day);
        $('#weekly-special-text').html("<b>It's Friday...</b> I'm in love! Bring your sweetheart and enjoy 10% off your purchases.");
        $('#weekly-special-day a').text("Friday Specials");
        break;
    case "Saturday":
        console.log(day);
        $('#weekly-special-text').html("<b>Saturday Night Fever:</b> say the words 'John Travolta' when checking out to recieve 25% off your purchase. ");
        $('#weekly-special-day a').text("Saturday Specials");
        break;
    }
});