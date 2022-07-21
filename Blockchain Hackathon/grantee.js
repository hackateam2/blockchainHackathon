let navbar = document.querySelector('.header .navbar');
let accountBox = document.querySelector('.header .account-box');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   accountBox.classList.remove('active');
}

document.querySelector('#user-btn').onclick = () =>{
   accountBox.classList.toggle('active');
   navbar.classList.remove('active');
}

window.onscroll = () =>{
   navbar.classList.remove('active');
   accountBox.classList.remove('active');
}

document.querySelector('#close-update').onclick = () =>{
   document.querySelector('.edit-product-form').style.display ="none";
   window.location.href = 'grantee_page.php';
}

/*
function previewImages(){

    var preview = document.querySelector('#preview');
    
    if (this.files) {
      [].forEach.call(this.files, readAndPreview);
    }
  
    function readAndPreview(file) {
  
      // Make sure `file.name` matches our extensions criteria
      if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
        return alert(file.name + " is not an image");
      } // else...
      
      var reader = new FileReader();
      
      reader.addEventListener("load", function() {
        var image = new Image();
        image.height = 100;
        image.title  = file.name;
        image.src    = this.result;
        preview.appendChild(image);
      });
      
      reader.readAsDataURL(file);
      
    }
  
  }
  document.querySelector('#file-input').addEventListener("change", previewImages);
  */