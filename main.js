(function ($) {
  $("#maherhossainDatepicker").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: "DD, MM d yy",
  });
  // Set Today's Date
  $("#maherhossainDatepicker").datepicker("setDate", "DD, MM d yy");

  // Select Date to show the result
  $("#maherhossainDatepicker").bind("change pageload", function (e) {
    const data = {
      14: "#maherhossainCO",
      49: "#maherhossainDS-1",
      84: "#maherhossainDS-2",
      70: "#maherhossainNIPT",
      84: "#maherhossainNT-1",
      96: "#maherhossainNT-2",
      84: "#maherhossainPES-1",
      95: "#maherhossainPES-2",
      84: "#maherhossainSS-1",
      112: "#maherhossainSS-2",
      133: "#maherhossainMS-1",
      140: "#maherhossainMS-2",
      280: "#maherhossainEDD",
      168: "#maherhossainGS",
    };

    // for (const [key, value] of Object.entries(data)) {
    //   getDateFromSelection(value, key);
    // }

    getDateFromSelection("#maherhossainCO", 14);
    getDateFromSelection("#maherhossainDS-1", 49);
    getDateFromSelection("#maherhossainDS-2", 84);

    getDateFromSelection("#maherhossainNIPT", 70);

    getDateFromSelection("#maherhossainNT-1", 84);
    getDateFromSelection("#maherhossainNT-2", 96);

    getDateFromSelection("#maherhossainPES-1", 84);
    getDateFromSelection("#maherhossainPES-2", 95);

    getDateFromSelection("#maherhossainSS-1", 84);
    getDateFromSelection("#maherhossainSS-2", 112);

    getDateFromSelection("#maherhossainMS-1", 133);
    getDateFromSelection("#maherhossainMS-2", 140);

    getDateFromSelection("#maherhossainEDD", 280);

    getDateFromSelection("#maherhossainGS", 168);

    e.preventDefault();
  });
  // Calculate the probable dates
  function getDateFromSelection(field, days) {
    let selectedValue = $("#maherhossainDatepicker").datepicker("getDate");
    // Total pregnancy calculation
    congratulationsText(selectedValue);
    selectedValue.setDate(selectedValue.getDate() + days);

    let formattedDate = dateConstruction(selectedValue);
    updateField(field, formattedDate);
  }
  // Display dates to the Page
  function updateField(field, date) {
    $(field).text(date);
  }

  const dateConstruction = (date) => {
    const monthNames = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ];
    const dayNames = [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ];

    let year = date.getFullYear();
    let month = monthNames[date.getMonth()];
    let day = date.getDate();
    let dayName = dayNames[date.getDay()];

    return `${dayName}, ${day} ${month}  ${year}`;
  };

  function congratulationsText(selectedValue) {
    const oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds
    const today = new Date();
    const selectedDate = selectedValue;

    const diffDays = Math.round((today - selectedDate) / oneDay);
    const weeks = Math.floor(diffDays / 7);
    const days = diffDays - weeks * 7;

    if (weeks >= 0 && days >= 0) {
      $("#mh-current-date").text(dateConstruction(today));
      $("#mh-current-weeks").text(weeks);
      $("#mh-current-days").text(days);
    } else {
      $("#mh-current-weeks").text("");
      $("#mh-current-days").text("");
    }
  }
})(jQuery);
