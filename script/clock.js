function time(){
    

    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
        if(hours<10)
            {
                hours = '0'+hours;
            }
        if(hours >12)
            {
                hours = hours - 12;
            }
        if(minutes<10)
            {
                minutes = '0'+minutes;
            }
        if(seconds<10)
            {
                seconds = '0'+seconds;
            }   
       document.getElementById('clock').textContent = hours + ':' + minutes + ':' + seconds ;
};
window.onload=function(){
    
    setInterval(time,1000);
}