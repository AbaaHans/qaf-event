/* popup*/

let open = document.getElementById('open');
let modal_container = document.getElementById('modal_container');
let close = document.getElementById('close');

open.addEventListener('click', () => {
    modal_container.classList.add('show');
})

close.addEventListener('click', () => {
    modal_container.classList.remove('show');
})


/*formulaire*/

let alert = document.querySelector(".alert");
let input = document.querySelectorAll(".Input");
alert.className = "alert-danger d-none";
function verifier() {
  for (let i = 0; i < input.length; i++) {
    const e = input[i];
    if (e.value.trim() == "") {
      alert.className = "alert-danger block";
      alert.innerHTML = "Veillez remplir les champs";
      alert.style.color = "#ffff";
      alert.style.background = "red ";
    } else {
      alert.className = "alert-danger d-none";
    }
  }
}


function valider() {
  verifier();
  if (alert.value == "") {
    document.querySelectorAll("form").submit();
  }
}

// Video

let video_btn = document.getElementById('video')
let modalVideo = document.getElementById('window')
let close_video = document.querySelector('#window span')


video_btn.addEventListener('click', function (e) {
    modalVideo.style.display = 'flex'
})

close_video.addEventListener('click', function (e) {
    modalVideo.style.display = 'none'
})

// Popup reponse
let mail_modal = document.querySelector('.mail-modal')
console.log(mail_modal)
let close_mail = document.querySelector('#close_mail')
console.log(close_mail)

close_mail.addEventListener('click', ()=>{
  mail_modal.style.display = 'none'
})