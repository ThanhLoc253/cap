mapboxgl.accessToken = 'pk.eyJ1IjoidGhhbmhsb2MyNTMiLCJhIjoiY2tkd3VkeXBxNDJoMDJ0cm92a2gzanJldiJ9.LIw3xYxXDJB2LOSrzkS51g';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
    center: [108.203615, 16.054754], // starting position [lng, lat]
    zoom: 10 // starting zoom
});