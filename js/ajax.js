function ajaxRequest(url, createFunction){

	var objXhr = new XMLHttpRequest();
	objXhr.onreadystatechange = function() {
		if(objXhr.readyState == 4 && objXhr.status == 200) {
			createFunction(this);
		}
	}
	objXhr.open("GET", url, true);
	objXhr.send(null);

}

function showSuggestion(objXhr) {
	var parent_shoes = objXhr.responseXML.getElementsByTagName('shoes')[0];
	var all_child		 = parent_shoes.getElementsByTagName('shoeName');
	var namesArry 	 = [];
	
	var searchTextBox = document.getElementById('searchText');
	var searchText			= document.getElementById('searchText').value.toLowerCase();
	var tracker = 0;

	for(var i=0; i<all_child.length; i++) {
		namesArry[i] = all_child[i].firstChild.data.toLowerCase();
	}

	var display_suggestion = document.getElementById('display_suggestion');
	while(display_suggestion.childNodes.length != 0) {
		display_suggestion.removeChild(display_suggestion.firstChild);
	}

	var divpop;
	for(var i=0; i<namesArry.length; i++) {
		if(namesArry[i].indexOf(searchText)==0){
			tracker = 1;
			divpop = document.createElement('div');
			divpop.setAttribute('class', 'divpop');
			divpop.setAttribute('class', 'showSuggestions');
			divpop.onclick = function(){

				// create here your function where displa all items

				searchTextBox.value = this.innerHTML;
				searchTextBox.focus();
				while(display_suggestion.childNodes.length != 0){
					display_suggestion.removeChild(display_suggestion.firstChild);
				}
			}
			divpop.innerHTML = namesArry[i];
			if(document.getElementById('searchText').value.length) {
				display_suggestion.appendChild(divpop);
			}
		}
	}

	searchTextBox.onblur = function() {
		if(tracker == 0) {
			searchTextBox.setAttribute('class', 'error');
		}
	}
}

