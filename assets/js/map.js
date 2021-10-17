function initMap() {
    //9.882171140855156,123.60879446936325 map
  
    map = new google.maps.Map(document.getElementById("map"), {
      center: { lat:9.882171140855156, lng:123.60879446936325},
      zoom: 20,
     mapTypeControl: false,
     streetViewControl: false,
      mapId: 'e50bebc5c429891e'
    });
  }