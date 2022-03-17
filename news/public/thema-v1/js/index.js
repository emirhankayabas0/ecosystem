function news(category = "", country) {
  let pageSize = "100";
  let apiKey = "c5fbfe4c3baa4954b45105807a080f51";
  let url = `https://newsapi.org/v2/top-headlines?country=${country}&category=${category}&pageSize=${pageSize}&apiKey=${apiKey}`;
  fetch(url)
    .then((response) => response.json())
    .then((data) => {
      let news = data.articles;
      news.forEach(function (result) {
        //console.log(result);
        let content = document.querySelector("main .news .content");
        content.innerHTML += `
        <div class="new">
            <a href="${result.url}" class="d-flex" target="_blank">
                <div class="news-content">
                    <div class="news-title">${result.title}</div>
                    <div class="news-description">${result.description}</div>
                    <div class="d-flex align-items-center mt-2" style="gap: 0.6rem;">
                        <div class="news-author">${result.author}</div>
                        <div class="news-time hide-425"><small>${result.publishedAt}</small></div>
                    </div>
                </div>
                <div class="news-image">
                    <img src="${result.urlToImage}" alt="">
                </div>
            </a>
        </div>
        `;
      });
    });
}

let coun = "tr";
$("#update").on("click", function () {
  let langue = $("#select-lan").val();
  coun = langue;
  localStorage.setItem("key", coun);
  location.reload();
});

window.addEventListener("DOMContentLoaded", () => {
  async function localization(language) {
    const response = await fetch(
      `http://localhost/news/public/thema-v1/js/language/${language}.json`
    );
    const data = await response.json();
    Object.keys(data).forEach((key) => {
      document.querySelector(`[data-language="${key}"]`).innerHTML += data[key];
    });
  }
  if (
    typeof localStorage.getItem("key") == "undefined" ||
    localStorage.getItem("key") == null
  ) {
    localization(coun);
  } else {
    localization(localStorage.getItem("key"));
  }
});

function weather(region) {
  const settings = {
    async: true,
    crossDomain: true,
    url: `https://weatherapi-com.p.rapidapi.com/current.json?q=${region}&lang=tr`,
    method: "GET",
    headers: {
      "x-rapidapi-host": "weatherapi-com.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    //console.log(response);
    document.querySelector(".main .news .weather .header .region").innerHTML =
      response.location.region + `(${response.location.country})`;
    document.querySelector(".main .news .weather .main .text").innerHTML =
      response.current.condition.text;
    document.querySelector(".main .news .weather .main .temp").innerHTML =
      response.current.temp_c + "°<span> C</span>";
    document.querySelector(
      ".main .news .weather .main .icon img"
    ).src = `${response.current.condition.icon}`;
  });
}

weather("İstanbul TR");

function forecastWeather(region, days, lang) {
  const settings = {
    async: true,
    crossDomain: true,
    url: `https://weatherapi-com.p.rapidapi.com/forecast.json?q=${region}&days=${days}&lang=${lang}`,
    method: "GET",
    headers: {
      "x-rapidapi-host": "weatherapi-com.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    document.querySelector(".main .news .weather .days .day-1 .icon img").src = `${response.forecast.forecastday[0].day.condition.icon}`;
    document.querySelector(".main .news .weather .days .day-1 .temp-max").innerHTML = response.forecast.forecastday[0].day.maxtemp_c + "°<span> C</span>";
    document.querySelector(".main .news .weather .days .day-1 .temp-min").innerHTML = response.forecast.forecastday[0].day.mintemp_c + "°<span> C</span>";

    document.querySelector(".main .news .weather .days .day-2 .icon img").src = `${response.forecast.forecastday[1].day.condition.icon}`;
    document.querySelector(".main .news .weather .days .day-2 .temp-max").innerHTML = response.forecast.forecastday[1].day.maxtemp_c + "°<span> C</span>";
    document.querySelector(".main .news .weather .days .day-2 .temp-min").innerHTML = response.forecast.forecastday[1].day.mintemp_c + "°<span> C</span>";

    document.querySelector(".main .news .weather .days .day-3 .icon img").src = `${response.forecast.forecastday[2].day.condition.icon}`;
    document.querySelector(".main .news .weather .days .day-3 .temp-max").innerHTML = response.forecast.forecastday[2].day.maxtemp_c + "°<span> C</span>";
    document.querySelector(".main .news .weather .days .day-3 .temp-min").innerHTML = response.forecast.forecastday[2].day.mintemp_c + "°<span> C</span>";
  });
}

forecastWeather("İstanbul", "3", "tr");
