$(document).on('change', '#select-weekly-special', function(e) {
    var day = this.options[e.target.selectedIndex].text;
    console.log(day);
    //put switch here when everything else is figured out
    if (day == 'Tuesday'){
        console.log("It is Tuesday");
         $('#weekly-special-text').html("<b>Thisis</b> Tuesday");
    }
    else {
        $('#weekly-special-text').html("<b>Thisis</b> BANANANAS");
    }
    
});