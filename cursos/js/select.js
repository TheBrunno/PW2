function checkSelection() {
    const selectBox = document.getElementById("course");
    const selectedValue = selectBox.options[selectBox.selectedIndex].value;

    if(selectedValue != ''){
        selectBox.className = 'marked';
    }
}
  
function checkField(element){
    if(element.value != '') element.className = 'valid';
    else element.className = '';
}