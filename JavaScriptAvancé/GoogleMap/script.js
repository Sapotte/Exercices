function initMap() {
  const cefii = { lat: 47.46538061746398, lng: -0.5590594265865906};
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 15,
    center: cefii,
  });
  const marker = new google.maps.Marker({
    position: cefii,
    map: map,
  });
}
