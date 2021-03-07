// getting all required elements
const searchwrapper = document.querySelector(".boxContainer");
const inputBox = searchwrapper.querySelector("input");
const suggBox = searchwrapper.querySelector(".autocom-box");

// if user press any key and release
inputBox.onkeyup = (e) =>{
	let userdata = e.target.value; //user entered data
	let emptyArray = [];
	if(userdata){
		emptyArray = suggestions.filter((data) =>{
			/// filtering array value and user char to lower case and return only those 
			//word/sentc which are starts with user entered word
			return data.toLocaleLowerCase().startsWith(userdata.toLocaleLowerCase());
			});
		emptyArray = emptyArray.map((data)=>{
           return data = '<li>'+ data +'</li>';
		});
		console.log(emptyArray);
		searchwrapper.classList.add("active"); //show autocomplete Box
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        for (let i =0; i < allList.length; i++) {
        	//adding onClick atribute in all li tag
        	allList[i].setAttribute("onclick", "select(this)");
        }
	}else{
        searchwrapper.classList.remove("active");//Hide autocomplete Box
	}
}


function select(element){
   let selectUserData = element.textContent;
   inputBox.value = selectUserData;//passing the user selected list item data in textfield
   searchwrapper.classList.remove("active");//Hide autocomplete Box
}



function showSuggestions(list){
	let listData;
	if(!list.length){
          userValue = inputBox.value;
          listData = '<li>'+ userValue + '</li>';
	}else {
		listData = list.join('')
	}
	suggBox.innerHTML = listData;

}