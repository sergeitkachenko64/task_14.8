function CountdownTimer(elm,tl,mes){
  this.initialize.apply(this,arguments);
}
CountdownTimer.prototype={
initialize:function(elm,tl,mes) {
  this.elem = document.getElementById(elm);
  this.tl = tl;
  this.mes = mes;
},countDown:function(){
  var timer='';
  var today=new Date();
  var day=Math.floor((this.tl-today)/(24*60*60*1000));
  var hour=Math.floor(((this.tl-today)%(24*60*60*1000))/(60*60*1000));
  var min=Math.floor(((this.tl-today)%(24*60*60*1000))/(60*1000))%60;
  var sec=Math.floor(((this.tl-today)%(24*60*60*1000))/1000)%60%60;
  var me=this;
if( ( this.tl - today ) > 0 ){
  timer += '<span>'+day+' д :</span><span> '+hour+' ч :</span><span> '+this.addZero(min)+' мин :</span><span> '+this.addZero(sec)+' сек</span>';
  this.elem.innerHTML = timer;
  tid = setTimeout( function(){me.countDown();},10 );
}else{
  this.elem.innerHTML = this.mes;
  return;
}
},addZero:function(num){ return ('0'+num).slice(-2); }
}
function CDT(){

// Установка предельной даты
  var tl = new Date('2022/12/31 23:00:00');

// Оповещение об окончании времени
  var timer = new CountdownTimer('CDT',tl,'<span><div></div><span>Время закончилось!</span></span>');
  timer.countDown();
}
window.onload=function(){
  CDT();
}