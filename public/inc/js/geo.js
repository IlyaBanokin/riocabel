window.onload = function () {
    jQuery("#user-city").text(ymaps.geolocation.city);
    jQuery("#user-region").text(ymaps.geolocation.region);
    jQuery("#user-country").text(ymaps.geolocation.country);
}
