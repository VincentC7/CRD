window.addEventListener('load', function() {
	let sortSelector = document.getElementById('sortSelector');
	let searchBar = document.getElementById('searchBar');
	let selfHider = document.getElementById('selfHider');

	searchBar.addEventListener('keyup', function(event) {
		let items = document.getElementsByClassName('searchItem');
		let newItems = [];
		for(let item of items) {
			if(item.getAttribute('owner') && selfHider.getAttribute('userID') && item.getAttribute('owner') === selfHider.getAttribute('userID') && selfHider.checked) {
				item.style.display = 'none';
			} else if((typeof item.getAttribute('categorie') === 'string' && item.getAttribute('categorie').includes(searchBar.value))) {
				item.style.display = 'block';
				newItems.push(item);
			} else {
				item.style.display = 'none';
			}
		}
	});
	selfHider.addEventListener('click', function(event) {
		let items = document.getElementsByClassName('searchItem');
		let newItems = [];
		for(let item of items) {
			if(item.getAttribute('owner') && selfHider.getAttribute('userID') && item.getAttribute('owner') === selfHider.getAttribute('userID') && selfHider.checked) {
				item.style.display = 'none';
			} else {
				item.style.display = 'block';
			}
		}
	});
});