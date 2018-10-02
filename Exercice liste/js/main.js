fetch('http://api.citybik.es/v2/networks/bicloo').then(function(res) {
	return res.json().then(function(data) {
		console.log(data);
    var stations = data.network.stations;
		var liste = document.querySelector('div');
    for (var i=0; i < stations.length; i++){
					var currentLi = document.createElement('p');
					var textnode = document.createTextNode(stations[i].name + '//' + stations[i].empty_slots + '//' + stations[i].free_bikes);         // Create a text node
					currentLi.appendChild(textnode);
					liste.appendChild(currentLi);
    }
	});
});
