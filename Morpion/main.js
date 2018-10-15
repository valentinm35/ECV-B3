var tourDuJoueur1 = true;
var partieGagnee = false;
var cells = document.querySelectorAll('.cell');

var afficherSymbole = function(cell) {
	// a remplir
	// 1 - verifier case remplie ou pas
	if (cell.textContent === '') {
		// 2 - poser symbole J1 ou j2
		if (tourDuJoueur1) {
			cell.textContent = 'X';
		} else {
			cell.textContent = 'O';
		}
		// 4 - changer le joueur courant
		tourDuJoueur1 = !tourDuJoueur1;
	}
};

var combinaisons = [[0, 1, 2], [3, 4, 5], [6, 7, 8]];

var verifierCombinaisons = function() {
	// a remplir
	// 3 - check combinaison gagnante
	combinaisons.forEach(function(combinaison) {
		if (
			cells[combinaison[0]].textContent === cells[combinaison[1]].textContent &&
			cells[combinaison[1]].textContent === cells[combinaison[2]].textContent &&
			cells[combinaison[0]].textContent !== ''
		) {
			console.log('WIN');
			var currentPlayer;
			if (tourDuJoueur1) {
				currentPlayer = 'joueur 2';
			} else {
				currentPlayer = 'joueur 1';
			}
			alert('Bravo ' + currentPlayer + '!');
			partieGagnee = true;
		}
	});
};

cells.forEach(function(cell) {
	cell.addEventListener('click', function() {
		if (!partieGagnee) {
			afficherSymbole(cell);
			verifierCombinaisons();
		}
	});
});
