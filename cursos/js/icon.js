const icon = document.querySelector('.icon');

icon.addEventListener('click', (e) => {
    const input = e.target.parentElement.children[0];
    if(input.type === 'password'){
        e.target.innerText = 'visibility_off';
        input.type = 'text';
    }else{
        e.target.innerText = 'visibility';
        input.type = 'password';
    };
})