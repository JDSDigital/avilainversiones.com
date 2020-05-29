$(document).ready(function(){
  const id = '#inversion';
  const image = $(id);

  for (let index = 1; index <= 7; index++) {
    let map = $(id.concat(index));
    let coords = map.attr('coords').split(',');
    let newCoords = [];

    coords.forEach(coord => {
      let newCoord;

      if (index % 2 === 0) {
        newCoord = (coord * 100) / image.attr('height');
      } else {
        newCoord = (coord * 100) / image.attr('width');
      }

      newCoords.push(newCoord.toFixed(2).concat('%'));
    });

    map.attr('coords', newCoords);
  }

  image.maphilight();

});