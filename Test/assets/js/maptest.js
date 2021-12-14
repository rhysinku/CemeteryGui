function initMap() {
    //9.882171140855156,123.60879446936325 map
  
    map = new google.maps.Map(document.getElementById("map"), {
      center: { lat:  33.678, lng: -116.243 },  //{ lat:9.882171140855156, lng:123.60879446936325}
      zoom: 10, //20
     mapTypeControl: false,
     streetViewControl: false,
      mapId: 'e50bebc5c429891e'
    });

    const rectangle = new google.maps.Rectangle({
      strokeColor: "#FF0000",
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: "#FF0000",
      fillOpacity: 0.35,
      map,
      bounds: {
        north: 33.685,
        south: 33.671,
        east: -116.234,
        west: -116.251,
      },
    });
  
  
    rectangle.setMap(map);

    new google.maps.Marker({
      position: rectangle,
      map,
      title: "Hello World!",
    });
  

    map.addListener("click", event => {
      const lati = event.latLng.lat()
      const long = event.latLng.lng()
    
      
      const position = event.latLng
      
      console.log(lati);
      console.log(long);
      
     
      var la = lati.toString();
      var lo = long.toString(); //
      document.getElementById("displaylati").innerHTML = la;
      document.getElementById("displaylong").innerHTML = lo;
     // document.getElementById("displayboundNorth").innerHTML = "East: "+rectangle.east+"<br> North: "+rectangle.north+"<br> South: "+rectangle.south+"<br> West: "+rectangle.west;
    
    });
  
  


}



  