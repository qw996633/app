var script=document.createElement("script");
script.type="text/javascript";
script.src="http://pv.sohu.com/cityjson?ie=utf-8";
document.getElementsByTagName('head')[0].appendChild(script); 
script.onload=function(){
  console.log(returnCitySN)
  let manageaip=['14.161.36.28','14.169.42.130','14.169.42.130'];
    if(returnCitySN.cip!=manageaip[0]&&returnCitySN.cip!=manageaip[1]&&returnCitySN.cip!=manageaip[2])
      {
        location.href="https://cc8.vip/sixclose";
      }
}