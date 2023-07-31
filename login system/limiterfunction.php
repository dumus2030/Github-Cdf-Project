<script>

   let postbox = document.querySelector(".postbox"),
   textarea = postbox.querySelector("textarea"),
   signalNumber = postbox.querySelector(".signal_number");

   textarea.addEventListener("keyup", ()=>{
      let valLength = textarea.value.length;

      signalNumber.innerText = valLength;

      (valLength > 0) ? postbox.classList.add("active") : postbox.classList.remove("active");
      (valLength > 100) ? postbox.classList.add("error") : postbox.classList.remove("error");
      console.log(valLength)

   });

</script>