
const eyeIcon = document.getElementById('eye_password');
   const passwordInput = document.getElementById
   ('password');
   const eyeIcon2 = document.getElementById('eye_password2');
   const passwordInput2 = document.getElementById('password2');



   // document.getElementById('eye_password').addEventListener('click', () => {
   //        passwordVisibility (passwordInput, document.getElementById('eye_password'))
   //       })

   // document.getElementById('eye_password2').addEventListener('click', ()=> {
   //    passwordVisibility (passwordInput2, document.getElementById('eye_password2'))
   // })


   if (eyeIcon &&  eyeIcon2) {
      eyeIcon.addEventListener('click', () => {
         passwordVisibility (passwordInput, eyeIcon)
      })
      
      eyeIcon2.addEventListener('click', () => {
         passwordVisibility (passwordInput2, eyeIcon2)
      })

   }else {
      eyeIcon.addEventListener('click', () => {
         passwordVisibility (passwordInput, eyeIcon)
      })
   }

   function passwordVisibility (input, icon) {
      if(input.type === 'password') {
         input.type = 'text';
         icon.classList.remove('fa-eye');
         icon.classList.add ('fa-eye-slash')
      } else {input.type = 'password' ;   
         icon.classList.remove ('fa-eye-slash');
         icon.classList.add('fa-eye');
      }
   }
