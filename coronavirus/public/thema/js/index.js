function turkey() {
  const settings = {
    async: true,
    crossDomain: true,
    url: "https://covid-193.p.rapidapi.com/statistics?country=turkey",
    method: "GET",
    headers: {
      "x-rapidapi-host": "covid-193.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    if (response.response[0].cases.new == null) {
      $(".turkey .cases .value").html("-");
    } else {
      const casesNew = response.response[0].cases.new.split("+");
      $(".turkey .cases .value").html(casesNew[1]);
    }
    if (response.response[0].deaths.new == null) {
      $(".turkey .death .value").html("-");
    } else {
      const casesDeaths = response.response[0].deaths.new.split("+");
      $(".turkey .death .value").html(casesDeaths[1]);
    }

    const time = response.response[0].day.split("-");
    console.log(response);

    $(".turkey .date").html(
      "Tarih: " + time[2] + "/" + time[1] + "/" + time[0]
    );
    $(".turkey .countries").html("Türkiye");
    $(".turkey .total-cases .value").html(response.response[0].cases.total);
    $(".turkey .total-death .value").html(response.response[0].deaths.total);
  });
}
turkey();

function azerbaijan() {
  const settings = {
    async: true,
    crossDomain: true,
    url: "https://covid-193.p.rapidapi.com/statistics?country=azerbaijan",
    method: "GET",
    headers: {
      "x-rapidapi-host": "covid-193.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    if (response.response[0].cases.new == null) {
      $(".azerbaijan .cases .value").html("-");
    } else {
      const casesNew = response.response[0].cases.new.split("+");
      $(".azerbaijan .cases .value").html(casesNew[1]);
    }
    if (response.response[0].deaths.new == null) {
      $(".azerbaijan .death .value").html("-");
    } else {
      const casesDeaths = response.response[0].deaths.new.split("+");
      $(".azerbaijan .death .value").html(casesDeaths[1]);
    }

    const time = response.response[0].day.split("-");
    console.log(response);

    $(".azerbaijan .date").html(
      "Tarih: " + time[2] + "/" + time[1] + "/" + time[0]
    );
    $(".azerbaijan .countries").html("Azerbaycan");
    $(".azerbaijan .total-cases .value").html(response.response[0].cases.total);
    $(".azerbaijan .total-death .value").html(
      response.response[0].deaths.total
    );
  });
}
azerbaijan();

function greece() {
  const settings = {
    async: true,
    crossDomain: true,
    url: "https://covid-193.p.rapidapi.com/statistics?country=greece",
    method: "GET",
    headers: {
      "x-rapidapi-host": "covid-193.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    if (response.response[0].cases.new == null) {
      $(".greece .cases .value").html("-");
    } else {
      const casesNew = response.response[0].cases.new.split("+");
      $(".greece .cases .value").html(casesNew[1]);
    }
    if (response.response[0].deaths.new == null) {
      $(".greece .death .value").html("-");
    } else {
      const casesDeaths = response.response[0].deaths.new.split("+");
      $(".greece .death .value").html(casesDeaths[1]);
    }

    const time = response.response[0].day.split("-");
    console.log(response);

    $(".greece .date").html(
      "Tarih: " + time[2] + "/" + time[1] + "/" + time[0]
    );
    $(".greece .countries").html("Yunanistan");
    $(".greece .total-cases .value").html(response.response[0].cases.total);
    $(".greece .total-death .value").html(response.response[0].deaths.total);
  });
}
greece();

function cyprus() {
  const settings = {
    async: true,
    crossDomain: true,
    url: "https://covid-193.p.rapidapi.com/statistics?country=cyprus",
    method: "GET",
    headers: {
      "x-rapidapi-host": "covid-193.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    if (response.response[0].cases.new == null) {
      $(".cyprus .cases .value").html("-");
    } else {
      const casesNew = response.response[0].cases.new.split("+");
      $(".cyprus .cases .value").html(casesNew[1]);
    }
    if (response.response[0].deaths.new == null) {
      $(".cyprus .death .value").html("-");
    } else {
      const casesDeaths = response.response[0].deaths.new.split("+");
      $(".cyprus .death .value").html(casesDeaths[1]);
    }
    const time = response.response[0].day.split("-");
    console.log(response);

    $(".cyprus .date").html(
      "Tarih: " + time[2] + "/" + time[1] + "/" + time[0]
    );
    $(".cyprus .countries").html("Kıbrıs");
    $(".cyprus .total-cases .value").html(response.response[0].cases.total);
    $(".cyprus .total-death .value").html(response.response[0].deaths.total);
  });
}
cyprus();

function germany() {
  const settings = {
    async: true,
    crossDomain: true,
    url: "https://covid-193.p.rapidapi.com/statistics?country=germany",
    method: "GET",
    headers: {
      "x-rapidapi-host": "covid-193.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    if (response.response[0].cases.new == null) {
      $(".germany .cases .value").html("-");
    } else {
      const casesNew = response.response[0].cases.new.split("+");
      $(".germany .cases .value").html(casesNew[1]);
    }
    if (response.response[0].deaths.new == null) {
      $(".germany .death .value").html("-");
    } else {
      const casesDeaths = response.response[0].deaths.new.split("+");
      $(".germany .death .value").html(casesDeaths[1]);
    }
    const time = response.response[0].day.split("-");
    console.log(response);

    $(".germany .date").html(
      "Tarih: " + time[2] + "/" + time[1] + "/" + time[0]
    );
    $(".germany .countries").html("Almanya");
    $(".germany .total-cases .value").html(response.response[0].cases.total);
    $(".germany .total-death .value").html(response.response[0].deaths.total);
  });
}
germany();

function italy() {
  const settings = {
    async: true,
    crossDomain: true,
    url: "https://covid-193.p.rapidapi.com/statistics?country=italy",
    method: "GET",
    headers: {
      "x-rapidapi-host": "covid-193.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    if (response.response[0].cases.new == null) {
      $(".italy .cases .value").html("-");
    } else {
      const casesNew = response.response[0].cases.new.split("+");
      $(".italy .cases .value").html(casesNew[1]);
    }
    if (response.response[0].deaths.new == null) {
      $(".italy .death .value").html("-");
    } else {
      const casesDeaths = response.response[0].deaths.new.split("+");
      $(".italy .death .value").html(casesDeaths[1]);
    }
    const time = response.response[0].day.split("-");
    console.log(response);

    $(".italy .date").html(
      "Tarih: " + time[2] + "/" + time[1] + "/" + time[0]
    );
    $(".italy .countries").html("İtalya");
    $(".italy .total-cases .value").html(response.response[0].cases.total);
    $(".italy .total-death .value").html(response.response[0].deaths.total);
  });
}
italy();

function france() {
  const settings = {
    async: true,
    crossDomain: true,
    url: "https://covid-193.p.rapidapi.com/statistics?country=france",
    method: "GET",
    headers: {
      "x-rapidapi-host": "covid-193.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    if (response.response[0].cases.new == null) {
      $(".france .cases .value").html("-");
    } else {
      const casesNew = response.response[0].cases.new.split("+");
      $(".france .cases .value").html(casesNew[1]);
    }
    if (response.response[0].deaths.new == null) {
      $(".france .death .value").html("-");
    } else {
      const casesDeaths = response.response[0].deaths.new.split("+");
      $(".france .death .value").html(casesDeaths[1]);
    }
    const time = response.response[0].day.split("-");
    console.log(response);

    $(".france .date").html(
      "Tarih: " + time[2] + "/" + time[1] + "/" + time[0]
    );
    $(".france .countries").html("Fransa");
    $(".france .total-cases .value").html(response.response[0].cases.total);
    $(".france .total-death .value").html(response.response[0].deaths.total);
  });
}
france();

function uk() {
  const settings = {
    async: true,
    crossDomain: true,
    url: "https://covid-193.p.rapidapi.com/statistics?country=uk",
    method: "GET",
    headers: {
      "x-rapidapi-host": "covid-193.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    if (response.response[0].cases.new == null) {
      $(".uk .cases .value").html("-");
    } else {
      const casesNew = response.response[0].cases.new.split("+");
      $(".uk .cases .value").html(casesNew[1]);
    }
    if (response.response[0].deaths.new == null) {
      $(".uk .death .value").html("-");
    } else {
      const casesDeaths = response.response[0].deaths.new.split("+");
      $(".uk .death .value").html(casesDeaths[1]);
    }
    const time = response.response[0].day.split("-");
    console.log(response);

    $(".uk .date").html(
      "Tarih: " + time[2] + "/" + time[1] + "/" + time[0]
    );
    $(".uk .countries").html("İngiltere");
    $(".uk .total-cases .value").html(response.response[0].cases.total);
    $(".uk .total-death .value").html(response.response[0].deaths.total);
  });
}
uk();

function netherlands() {
  const settings = {
    async: true,
    crossDomain: true,
    url: "https://covid-193.p.rapidapi.com/statistics?country=netherlands",
    method: "GET",
    headers: {
      "x-rapidapi-host": "covid-193.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    if (response.response[0].cases.new == null) {
      $(".netherlands .cases .value").html("-");
    } else {
      const casesNew = response.response[0].cases.new.split("+");
      $(".netherlands .cases .value").html(casesNew[1]);
    }
    if (response.response[0].deaths.new == null) {
      $(".netherlands .death .value").html("-");
    } else {
      const casesDeaths = response.response[0].deaths.new.split("+");
      $(".netherlands .death .value").html(casesDeaths[1]);
    }
    const time = response.response[0].day.split("-");
    console.log(response);

    $(".netherlands .date").html(
      "Tarih: " + time[2] + "/" + time[1] + "/" + time[0]
    );
    $(".netherlands .countries").html("Hollanda");
    $(".netherlands .total-cases .value").html(response.response[0].cases.total);
    $(".netherlands .total-death .value").html(response.response[0].deaths.total);
  });
}
netherlands();

function belgium() {
  const settings = {
    async: true,
    crossDomain: true,
    url: "https://covid-193.p.rapidapi.com/statistics?country=belgium",
    method: "GET",
    headers: {
      "x-rapidapi-host": "covid-193.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    if (response.response[0].cases.new == null) {
      $(".belgium .cases .value").html("-");
    } else {
      const casesNew = response.response[0].cases.new.split("+");
      $(".belgium .cases .value").html(casesNew[1]);
    }
    if (response.response[0].deaths.new == null) {
      $(".belgium .death .value").html("-");
    } else {
      const casesDeaths = response.response[0].deaths.new.split("+");
      $(".belgium .death .value").html(casesDeaths[1]);
    }
    const time = response.response[0].day.split("-");
    console.log(response);

    $(".belgium .date").html(
      "Tarih: " + time[2] + "/" + time[1] + "/" + time[0]
    );
    $(".belgium .countries").html("Belçika");
    $(".belgium .total-cases .value").html(response.response[0].cases.total);
    $(".belgium .total-death .value").html(response.response[0].deaths.total);
  });
}
belgium();

function spain() {
  const settings = {
    async: true,
    crossDomain: true,
    url: "https://covid-193.p.rapidapi.com/statistics?country=spain",
    method: "GET",
    headers: {
      "x-rapidapi-host": "covid-193.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    if (response.response[0].cases.new == null) {
      $(".spain .cases .value").html("-");
    } else {
      const casesNew = response.response[0].cases.new.split("+");
      $(".spain .cases .value").html(casesNew[1]);
    }
    if (response.response[0].deaths.new == null) {
      $(".spain .death .value").html("-");
    } else {
      const casesDeaths = response.response[0].deaths.new.split("+");
      $(".spain .death .value").html(casesDeaths[1]);
    }
    const time = response.response[0].day.split("-");
    console.log(response);

    $(".spain .date").html(
      "Tarih: " + time[2] + "/" + time[1] + "/" + time[0]
    );
    $(".spain .countries").html("İspanya");
    $(".spain .total-cases .value").html(response.response[0].cases.total);
    $(".spain .total-death .value").html(response.response[0].deaths.total);
  });
}
spain();

function portugal() {
  const settings = {
    async: true,
    crossDomain: true,
    url: "https://covid-193.p.rapidapi.com/statistics?country=portugal",
    method: "GET",
    headers: {
      "x-rapidapi-host": "covid-193.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    if (response.response[0].cases.new == null) {
      $(".portugal .cases .value").html("-");
    } else {
      const casesNew = response.response[0].cases.new.split("+");
      $(".portugal .cases .value").html(casesNew[1]);
    }
    if (response.response[0].deaths.new == null) {
      $(".portugal .death .value").html("-");
    } else {
      const casesDeaths = response.response[0].deaths.new.split("+");
      $(".portugal .death .value").html(casesDeaths[1]);
    }
    const time = response.response[0].day.split("-");
    console.log(response);

    $(".spain .date").html(
      "Tarih: " + time[2] + "/" + time[1] + "/" + time[0]
    );
    $(".portugal .countries").html("Portekiz");
    $(".portugal .total-cases .value").html(response.response[0].cases.total);
    $(".portugal .total-death .value").html(response.response[0].deaths.total);
  });
}
portugal();

function usa() {
  const settings = {
    async: true,
    crossDomain: true,
    url: "https://covid-193.p.rapidapi.com/statistics?country=usa",
    method: "GET",
    headers: {
      "x-rapidapi-host": "covid-193.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    if (response.response[0].cases.new == null) {
      $(".usa .cases .value").html("-");
    } else {
      const casesNew = response.response[0].cases.new.split("+");
      $(".usa .cases .value").html(casesNew[1]);
    }
    if (response.response[0].deaths.new == null) {
      $(".usa .death .value").html("-");
    } else {
      const casesDeaths = response.response[0].deaths.new.split("+");
      $(".usa .death .value").html(casesDeaths[1]);
    }
    const time = response.response[0].day.split("-");
    console.log(response);

    $(".usa .date").html(
      "Tarih: " + time[2] + "/" + time[1] + "/" + time[0]
    );
    $(".usa .countries").html("Amerika");
    $(".usa .total-cases .value").html(response.response[0].cases.total);
    $(".usa .total-death .value").html(response.response[0].deaths.total);
  });
}
usa();

function russia() {
  const settings = {
    async: true,
    crossDomain: true,
    url: "https://covid-193.p.rapidapi.com/statistics?country=russia",
    method: "GET",
    headers: {
      "x-rapidapi-host": "covid-193.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    if (response.response[0].cases.new == null) {
      $(".russia .cases .value").html("-");
    } else {
      const casesNew = response.response[0].cases.new.split("+");
      $(".russia .cases .value").html(casesNew[1]);
    }
    if (response.response[0].deaths.new == null) {
      $(".russia .death .value").html("-");
    } else {
      const casesDeaths = response.response[0].deaths.new.split("+");
      $(".russia .death .value").html(casesDeaths[1]);
    }
    const time = response.response[0].day.split("-");
    console.log(response);

    $(".russia .date").html(
      "Tarih: " + time[2] + "/" + time[1] + "/" + time[0]
    );
    $(".russia .countries").html("Rusya");
    $(".russia .total-cases .value").html(response.response[0].cases.total);
    $(".russia .total-death .value").html(response.response[0].deaths.total);
  });
}
russia();

function canada() {
  const settings = {
    async: true,
    crossDomain: true,
    url: "https://covid-193.p.rapidapi.com/statistics?country=canada",
    method: "GET",
    headers: {
      "x-rapidapi-host": "covid-193.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    if (response.response[0].cases.new == null) {
      $(".canada .cases .value").html("-");
    } else {
      const casesNew = response.response[0].cases.new.split("+");
      $(".canada .cases .value").html(casesNew[1]);
    }
    if (response.response[0].deaths.new == null) {
      $(".canada .death .value").html("-");
    } else {
      const casesDeaths = response.response[0].deaths.new.split("+");
      $(".canada .death .value").html(casesDeaths[1]);
    }
    const time = response.response[0].day.split("-");
    console.log(response);

    $(".canada .date").html(
      "Tarih: " + time[2] + "/" + time[1] + "/" + time[0]
    );
    $(".canada .countries").html("Kanada");
    $(".canada .total-cases .value").html(response.response[0].cases.total);
    $(".canada .total-death .value").html(response.response[0].deaths.total);
  });
}
canada();

function mexico() {
  const settings = {
    async: true,
    crossDomain: true,
    url: "https://covid-193.p.rapidapi.com/statistics?country=mexico",
    method: "GET",
    headers: {
      "x-rapidapi-host": "covid-193.p.rapidapi.com",
      "x-rapidapi-key": "9f19c7576bmsh1cc610a8b801ef3p18bdb9jsne19d5b2ccbea",
    },
  };

  $.ajax(settings).done(function (response) {
    if (response.response[0].cases.new == null) {
      $(".mexico .cases .value").html("-");
    } else {
      const casesNew = response.response[0].cases.new.split("+");
      $(".mexico .cases .value").html(casesNew[1]);
    }
    if (response.response[0].deaths.new == null) {
      $(".mexico .death .value").html("-");
    } else {
      const casesDeaths = response.response[0].deaths.new.split("+");
      $(".mexico .death .value").html(casesDeaths[1]);
    }
    const time = response.response[0].day.split("-");
    console.log(response);

    $(".mexico .date").html(
      "Tarih: " + time[2] + "/" + time[1] + "/" + time[0]
    );
    $(".mexico .countries").html("Meksika");
    $(".mexico .total-cases .value").html(response.response[0].cases.total);
    $(".mexico .total-death .value").html(response.response[0].deaths.total);
  });
}
mexico();