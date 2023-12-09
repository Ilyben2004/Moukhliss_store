function uploadProduct(){


 var myform = document.getElementById("myform");

    
    const formData = new FormData(myform);


    console.log("im in the function ");
   
  console.log("heho ");
  
    fetch(myform.getAttribute('action'), {
            method: 'POST',
            body: formData
        })
        .then(response => {
            // Handle the response as needed
            console.log(`Product  added successfully`);
        

        })
        .catch(error => {
            // Handle any errors that occurred during the fetch
            console.error(`Error modifying product:`, error);
        });
    }