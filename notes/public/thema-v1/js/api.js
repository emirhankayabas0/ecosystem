$("#searchInput").on("keyup", function () {
  let value = $(this).val();
  const data = {
    value: value,
    searchSubmit: 1,
  };

  $.ajax({
    type: "POST",
    url: api,
    data: data,
    success: function (data) {
      $("#result").html(data);
    },
  });
});

// Not pin
$(".pin").on("click", function () {
  let id = $(this).data("id");
  let pin = $(this).data("pin");

  const data = {
    id: id,
    pin: pin,
    pinSubmit: 1,
  };

  $.post(api, data, function (response) {
    location.reload();
  });
});

// Not arşiv
$(".archiveNote").on("click", function () {
  let id = $(this).data("id");
  let archive = $(this).data("archive");

  const data = {
    id: id,
    archive: archive,
    archiveSubmit: 1,
  };

  $.post(api, data, function (response) {
    location.reload();
  });
});

// Not sil
$(".removeNote").on("click", function () {
  let id = $(this).data("id");

  const data = {
    id: id,
    removeSubmit: 1,
  };

  $.post(api, data, function (response) {
    location.reload();
  });
});

// Not geri yükle
$(".restoreNote").on("click", function () {
  let id = $(this).data("id");

  const data = {
    id: id,
    restoreSubmit: 1,
  };

  $.post(api, data, function (response) {
    location.reload();
  });
});
