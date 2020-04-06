document.body.onload = () => {
    // console.log('loaded');

    let showFormBtn = document.getElementById("editUser");
    let editUserForm = document.getElementById("userModal");
    let closeBtn = document.getElementById("closeUserModal");

    editUserForm.style.display = 'none';

    showFormBtn.onclick = () => {
        console.log('clicked');
        if(editUserForm.style.display == 'none') {
            editUserForm.style.display = 'block';
        }else {
            editUserForm.style.display = 'none';
        }
        
    }

    closeBtn.onclick = () => {
        editUserForm.style.display = 'none';
    }
}