function nexte(sens){
  var sen1=2*sens;
  var sen2=sen1-1;
  var sen3=sens+1;
  if(sens==0 || sens==3){
    document.querySelector('form').style.transform='translateX('+ -20*sens +'%)'; 
    if(sens!=1){
      document.querySelector('.bullet'+sen3).classList.replace('bullet'+sen3,'bullet1');
      document.querySelectorAll('.bullet1')[sen3].classList.replace('bullet1','bullet0');
    }else{
      document.querySelector('.bullet'+sen3).classList.replace('bullet'+sen3,'bullet1');
    }
  }else{
    if(document.querySelector('.inpt'+sen1).value.length>2 && document.querySelector('.inpt'+sen2).value.length>2 ){
      document.querySelector('form').style.transform='translateX('+ -20*sens +'%)';
      // document.querySelector('.bullet2'.before).style.transform='scaleX(0)';
      // document.querySelector('.bullet2'.before).style.bacgroundColor='red';
      // document.querySelector('.bullet2'.before).style.animation='animbullet1 linear 1s forwards'; 
      
var classe='bullet'+sen3;
// if(document.querySelector('.bullet'+sen1).className.charAt(6)!=1){
  if(sens!=1){
  document.querySelector('.bullet'+sen3).classList.replace('bullet'+sen3,'bullet1');
  document.querySelectorAll('.bullet1')[sen3
  ].classList.replace('bullet1','bullet0');
}else{
  document.querySelector('.bullet'+sen3).classList.replace('bullet'+sen3,'bullet1');
}
};
 
    };
  };
