var button = document.getElementById("preview-button");

button.addEventListener("click", function(){
	for(var instanceName in CKEDITOR.instances)
    CKEDITOR.instances[instanceName].updateElement();
	document.getElementById("preview_area").innerHTML = document.getElementById("editor").value;
});