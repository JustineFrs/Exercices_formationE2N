window.onload = function()
{
    var canvas = document.getElementById('canvas');
        if(!canvas)
        {
            alert("Impossible de récupérer le canvas");
            return;
        }

    var context = canvas.getContext('2d');
        if(!context)
        {
            alert("Impossible de récupérer le context du canvas");
            return;
        }

        context.beginPath();
        context.moveTo(250,0);
        context.lineTo(150,200);
        context.lineTo(250,180);
        context.lineTo(350,200);
        context.lineTo(250,0);
        context.stroke();
        context.closePath();

        context.beginPath();
        context.moveTo(350,200);
        context.lineTo(450,40);
        context.lineTo(320,150);
        context.stroke();
        context.closePath();

        context.beginPath();
        context.moveTo(10,100);
        context.lineTo(100,60);
        context.lineTo(80,90);
        context.lineTo(10,100);
        context.stroke();
        context.closePath();

        context.beginPath();
        context.moveTo(100,60);
        context.lineTo(180,150);
        context.stroke();
        context.closePath();

        context.beginPath();
        context.moveTo(80,90);
        context.lineTo(150,200);
        context.stroke();
        context.closePath();
}
