
// SELECT ALL ELEMENTS
const country_name_element = document.querySelector(".country .name");
const total_cases_element = document.querySelector(".total-cases .value");
const new_cases_element = document.querySelector(".total-cases .new-value");
const recovered_element = document.querySelector(".recovered .value");
const new_recovered_element = document.querySelector(".recovered .new-value");
const deaths_element = document.querySelector(".deaths .value");
const new_deaths_element = document.querySelector(".deaths .new-value");

const ctx = document.getElementById("axes_line_chart").getContext("2d");

// APP VARIABLES
let app_data = [],
  cases_list = [],
  recovered_list = [],
  deaths_list = [],
  deaths = [],
  formatedDates = [];

// GET USERS COUNTRY CODE
let country_code = geoplugin_countryCode();
let user_country;
country_list.forEach((country) => {
  if (country.code == country_code) {
    user_country = country.name;
  }
});

/* ---------------------------------------------- */
/*                     FETCH API                  */
/* ---------------------------------------------- */
function fetchData(country) {
  user_country = country;
  country_name_element.innerHTML = "Loading...";

  (cases_list = []),
    (recovered_list = []),
    (deaths_list = []),
    (dates = []),
    (formatedDates = []);

    // (todaycases_list = []),
    // (todayrecovered_list = []),
    // (todaydeaths_list = []);

  var requestOptions = {
    method: "GET",
    redirect: "follow",
  };


// ----------------------------------------remake------------------------------------------ 
  // const api_fetch = async (country) => {
  //   await fetch(
  //     "https://corona.lmao.ninja/v2/countries/" + country,
  //     requestOptions
  //   )
  //     .then((res) => {
  //       return res.json();
  //     })
  //     .then((data) => {
  //       console.log(data);

  //       cases_list.push(data.cases);
  //       recovered_list.push(data.recovered);
  //       deaths_list.push(data.deaths);
        
  //       todaycases_list.push(data.todayCases);
  //       todayrecovered_list.push(data.todayRecovered);
  //       todaydeaths_list.push(data.todayDeaths);

  //     });

    
  // ----------------------------------------remake------------------------------------------ 

  const api_fetch = async (country) => {
    await fetch(
      "https://api.covid19api.com/total/country/" +
        country +
        "/status/confirmed",
      requestOptions
    )
      .then((res) => {
        return res.json();
      })
      .then((data) => {
        data.forEach((entry) => {
          dates.push(entry.Date);
          cases_list.push(entry.Cases);
        });
      });

    await fetch(
      "https://api.covid19api.com/total/country/" +
        country +
        "/status/recovered",
      requestOptions
    )
      .then((res) => {
        return res.json();
      })
      .then((data) => {
        data.forEach((entry) => {
          recovered_list.push(entry.Cases);
        });
      });

    await fetch(
      "https://api.covid19api.com/total/country/" + country + "/status/deaths",
      requestOptions
    )
      .then((res) => {
        return res.json();
      })
      .then((data) => {
        data.forEach((entry) => {
          deaths_list.push(entry.Cases);
        });
      });

    updateUI();
  };

  api_fetch(country);
}

fetchData(user_country);

// UPDATE UI FUNCTION--------------------------------------------------------------------------------------------------------
function updateUI() {
  updateStats();
  axesLinearChart();
}

function updateStats() {
  // cho fix --------------------------------------------------------------------------------------------------------------------
  const total_cases = cases_list[cases_list.length - 1];
  const new_confirmed_cases = total_cases - cases_list[cases_list.length - 2];

  const total_recovered = recovered_list[recovered_list.length - 1];
  const new_recovered_cases =
    total_recovered - recovered_list[recovered_list.length - 2];

  const total_deaths = deaths_list[deaths_list.length - 1];
  const new_deaths_cases = total_deaths - deaths_list[deaths_list.length - 2];

  country_name_element.innerHTML = user_country;
  total_cases_element.innerHTML = total_cases;
  new_cases_element.innerHTML = `+${new_confirmed_cases}`;
  recovered_element.innerHTML = total_recovered;
  new_recovered_element.innerHTML = `+${new_recovered_cases}`;
  deaths_element.innerHTML = total_deaths;
  new_deaths_element.innerHTML = `+${new_deaths_cases}`;
  // cho fix ---------------------------------------------------------------------------------------------------------------------- 

  // const total_cases = cases_list;

  // const total_recovered = recovered_list;

  // const total_deaths = deaths_list;
  // country_name_element.innerHTML = user_country;
  // total_cases_element.innerHTML = total_cases;
  // new_cases_element.innerHTML = `+${todaycases_list}`;
  // recovered_element.innerHTML = total_recovered;
  // new_recovered_element.innerHTML = `+${todayrecovered_list}`;
  // deaths_element.innerHTML = total_deaths;
  // new_deaths_element.innerHTML = `+${todaydeaths_list}`;

  // format dates
  dates.forEach((date) => {
    formatedDates.push(formatDate(date));
  });
}

// UPDATE CHART
let my_chart;
function axesLinearChart() {
  if (my_chart) {
    my_chart.destroy();
  }

  my_chart = new Chart(ctx, {
    type: "line",
    data: {
      datasets: [
        {
          label: "Tổng",
          data: cases_list,
          fill: false,
          // borderColor: "#FFF",
          // backgroundColor: "#FFF",
          borderColor: "#1D2534",
          backgroundColor: "#1D2534",
          borderWidth: 1,
        },
        {
          label: "Phục hồi",
          data: recovered_list,
          fill: false,
          borderColor: "#009688",
          backgroundColor: "#009688",
          borderWidth: 1,
        },
        {
          label: "Tử vong",
          data: deaths_list,
          fill: false,
          borderColor: "#f44336",
          backgroundColor: "#f44336",
          borderWidth: 1,
        },
      ],
      labels: formatedDates,
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
    },
  });
}

// FORMAT DATES
const monthsNames = [
  "Jan",
  "Feb",
  "Mar",
  "Apr",
  "May",
  "Jun",
  "Aug",
  "Sep",
  "Oct",
  "Nov",
  "Dec",
];

function formatDate(dateString) {
  let date = new Date(dateString);

  return `${date.getDate()} ${monthsNames[date.getMonth() - 1]}`;
}
