<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>image preview</title>
    <style media="screen">
    input[name="p_image"] {
  opacity: 0;
  height: 100%;
  width: 100%;
  cursor: pointer;
}
#imageUpload{
  position: relative;
  height: 200px;
  width: 200px;
  cursor: pointer;
}
.image_upload {
  position: absolute;
  left: 0;
  top: 0;
  width: 200px;
  height: 200px;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 6px;
  border: 3px dashed;
  backdrop-filter: blur(10px);
  pointer-events: none;
}
.image_upload img {
  position: absolute;
  width: 100px;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}
    </style>
  </head>
  <body>

    <div class="row" id="imageUpload">
        <input type="file" name="p_image" class="productImage" placeholder="Product Image">
        <div class="image_upload"><img src="./icon/upload.png" alt=""></div>
    </div>

    <script type="text/javascript">
      const productImage = document.querySelector('.productImage');
      const image_upload = document.querySelector('.image_upload img');

      productImage.addEventListener("change", function(){
        const file = this.files[0];
        if(file){
          const reader = new FileReader();
          reader.onload = function(e){
            image_upload.src = e.target.result;
            image_upload.style.width = "190px";
            image_upload.style.height = "190px";
            image_upload.style.objectFit = "cover";
          }
          reader.readAsDataURL(file);
        }
      });
    </script>

  </body>
</html>
