document.body.onload = () => {
    // console.log('loaded');

    let showFormBtn = document.getElementById("show-new-user-form");
    let newUserForm = document.getElementById("new-user-form");

    newUserForm.style.display = 'none';

    showFormBtn.onclick = () => {
        console.log('clicked');
        if(newUserForm.style.display == 'none') {
            newUserForm.style.display = 'block';
        }else {
            newUserForm.style.display = 'none';
        }
        
    }
}