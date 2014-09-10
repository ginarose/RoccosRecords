console.log("this is workin");
console.log($('#select-weekly-special'));
$('#select-weekly-special').change(function() {
    var selected = $(this).val(); 
    console.log(selected);
});


// $('select[name=select-weekly-special]').val()