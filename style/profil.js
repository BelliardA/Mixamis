const avatarOptionBtn = document.querySelector('.avatar-opt-btn');
const avatarOptions = document.querySelector('.avatar-option-div-btn');
const avatarOptimg = document.querySelector('.avatar-opt-div img');

avatarOptionBtn.addEventListener('click', () => {
    if (avatarOptions.style.display === "none") {
        avatarOptions.style.display = "block";
        avatarOptionBtn.style.display = "none";
    } else {
        avatarOptions.style.display = "none";
    }
});
avatarOptions.addEventListener('click', () =>{
    if (avatarOptions.style.display ==="block"){
        avatarOptions.style.display = "none";
        avatarOptionBtn.style.display = "flex";
    }
})
avatarOptimg.addEventListener('click', () => {
    
})