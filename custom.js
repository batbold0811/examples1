var x=1;

$(document).on('click', '#btn_Add', function() {
  	if(x<=10){
		var Ratioval = $('#fin_ratio').val();
		var Itemval = $('#item_code').val();

		var tr = $('<tr>');
		tr.append($('<td>' + Ratioval + '</td>'));
		tr.append($('<td>' + Itemval + '</td>'));
		tr.append($('<td class="text-center"><a class="btn btn-info btn-xs" id="btn_Edit" >Edit</a></td>'));
		$('table tbody').append(tr);

		$('#fin_ratio').val('');
		$('#item_code').val('');

		x=x+1;
	}
});

$(document).on('click', '#btn_Edit', function() {
  var currentTr = $(this).closest('tr');
  var indx = $(currentTr).prop('index');
  var RatioVal = $(currentTr).find('td').eq(0).attr('val');
  var ItemVal = $(currentTr).find('td').eq(1).attr('val');
  $('#fin_ratio').val(RatioVal);
  $('#item_code').val(ItemVal);
  currentTr.remove();
  x=x-1;
});



$( function() {

 // Single Select
 $( "#fin_ratio" ).autocomplete({
  source: function( request, response ) {
   // Fetch data
   $.ajax({
    url: "fetch_data.php",
    type: 'post',
    dataType: "json",
    data: {
     action: 0,
     search: request.term
    },
    success: function( data ) {
     response( data );
    }
   });
  },
  select: function (event, ui) {
   // Set selection
   $('#fin_ratio').val(ui.item.value+"."+ui.item.label);  // display the selected text
   return false;
  }
 });


});
