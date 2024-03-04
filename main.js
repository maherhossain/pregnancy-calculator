(function($){

  // $( "#maherhossainDatepicker" ).datepicker({ dateFormat: 'DD, MM d yy'});
  $( "#maherhossainDatepicker" ).datepicker();

  // Set Today's Date
  $( "#maherhossainDatepicker" ).datepicker( "setDate", 'DD, MM d yy' );

  $("#maherhossainDatepicker").on("change", function(){
    let selectedValue = $( "#maherhossainDatepicker" ).datepicker({ dateFormat: 'DD, MM d yy' }).val();

    console.log(selectedValue);
    getdate();
  });



  function getdate() {
    var tt = document.getElementById('maherhossainDatepicker').value;

    var date = new Date(tt);
    var newdate = new Date(date);

    newdate.setDate(newdate.getDate() + 3);
    
    var currentday = newdate.getDate();
    var dd = newdate.getDate();
    var mm = newdate.getMonth() + 1;
    var yy = newdate.getFullYear();

    var someFormattedDate = currentday+ ',' +mm + '' + dd + ',' + yy;
    document.getElementById('maherhossainPDC').innerText = someFormattedDate;
  }
  





})(jQuery);



// var date2 = $('#maherhossainDatepicker').datepicker('getDate');
//             date2.setDate(date2.getDate()+3)


  
