function uploadProduct(){


 var myform = document.getElementById("myform");

    
    const formData = new FormData(myform);
    console.log("im in the function ");
   

  
//     fetch(this.getAttribute('action'), {
//             method: 'POST',
//             body: formData
//         })
//         .then(response => {
//             // Handle the response as needed
//             console.log(`Product  modified successfully`);
//             const tr = document.getElementById('tr_product_'+productId);
//             console.log(formData.get('image').name);
//             if(formData.get('image').name!=""){
//             if (tr.firstElementChild) {
// tr.firstElementChild.innerHTML = '<img src="../../../product_images/'+formData.get('image').name+'" alt="" height="50px" width="50px">';
// }
// }
// console.log(formData.get('title'));
// tr.children[2].innerHTML= formData.get('title')  ;
// tr.children[3].innerHTML= formData.get('price')  ;
// tr.children[4].innerHTML= formData.get('category')  ;
// tr.children[5].innerHTML= formData.get('quantity')  ;
// if(formData.get('quantity')==0){
// tr.setAttribute("class","red_row");
// }
// else{
// tr.setAttribute("class","");
// }
// alert("your product has ben changed succefully");

//         })
//         .catch(error => {
//             // Handle any errors that occurred during the fetch
//             console.error(`Error modifying product:`, error);
//         });
    }