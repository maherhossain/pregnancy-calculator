(function ($) {
  // Initialization
  $("#maherhossainDatepicker").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: "DD, MM d yy",
  });
  $("#maherhossainDatepicker").datepicker("setDate", "DD, MM d yy");

  // Fields ids and associated dates
  const data = [
    ["#maherhossainCO", 14],
    ["#maherhossainDS-1", 49],
    ["#maherhossainDS-2", 84],
    ["#maherhossainNIPT", 70],
    ["#maherhossainNT-1", 84],
    ["#maherhossainNT-2", 96],
    ["#maherhossainPES-1", 84],
    ["#maherhossainPES-2", 95],
    ["#maherhossainSS-1", 84],
    ["#maherhossainSS-2", 112],
    ["#maherhossainMS-1", 133],
    ["#maherhossainMS-2", 140],
    ["#maherhossainEDD", 280],
    ["#maherhossainGS", 168],
  ];
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
  // Making the date to display
  const dateConstruction = (date) => {
    let year = date.getFullYear();
    let month = monthNames[date.getMonth()];
    let day = date.getDate();
    let dayName = dayNames[date.getDay()];

    return `${dayName}, ${day} ${month}  ${year}`;
  };

  // Calculate the probable dates
  function getDateFromDefaultSelection(field, days) {
    let selectedValue = $("#maherhossainDatepicker").datepicker("getDate");
    // Total pregnancy calculation
    congratulationsText(selectedValue);
    selectedValue.setDate(selectedValue.getDate() + days);

    let formattedDate = dateConstruction(selectedValue);
    updateField(field, formattedDate);
  }
  data.forEach(([key, value]) => {
    getDateFromDefaultSelection(key, value);
  });

  // Select Date to show the result
  $("#maherhossainDatepicker").on("change", function (e) {
    data.forEach(([key, value]) => {
      getDateFromSelection(key, value);
    });
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

  function congratulationsText(selectedValue) {
    const oneDay = 24 * 60 * 60 * 1000;
    const today = new Date();
    const selectedDate = selectedValue;

    const diffDays = Math.round((today - selectedDate) / oneDay);
    const weeks = Math.floor(diffDays / 7);
    const days = diffDays - weeks * 7;

    if (weeks >= 0 && days >= 0 && weeks <= 42) {
      $("#mh-current-date").text(dateConstruction(today));
      $("#mh-current-weeks").text(weeks);
      $("#mh-current-days").text(days);
    } else if (weeks > 42) {
      $(".mhpc-text-center").html(
        "<b>Seems your bundle of joy has already arrived! Congratulations on your newest addition to the family.</b>"
      );
    } else {
      $(".mhpc-text-center").html(
        "<p><b>Anticipation awaits! Your journey into parenthood is yet to begin. Embrace the beautiful moments that lie ahead.</b></p>"
      );
    }
  }
})(jQuery);
