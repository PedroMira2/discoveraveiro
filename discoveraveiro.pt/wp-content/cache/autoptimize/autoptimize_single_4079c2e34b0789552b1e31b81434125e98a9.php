const prom=new Promise((resolve,reject)=>{const images=document.querySelectorAll("#inner-body img[data-src]");let numberOfImages=images.length;let to;if(images.length===0){resolve("not found");return;}
const checkForDone=()=>{if(numberOfImages===0){resolve("ok");}
clearTimeout(to);to=setTimeout(resolve,30000,"timeout");};images.forEach(img=>(img.onload=event=>{if(event.currentTarget.classList.contains("aux-preloaded")){console.log(event.currentTarget)
numberOfImages--;checkForDone();}}));to=setTimeout(resolve,30000,"timeout");});