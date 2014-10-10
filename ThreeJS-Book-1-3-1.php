<!DOCTYPE html>
<script src="js/jquery.min.js"></script>
<script src='js/three.min.js'></script>
<script src='js/threex.dynamic.js'></script>
<body style='margin: 0px; background-color: #FFEEFF; overflow: hidden;'>
<script>
var renderer	= new THREE.WebGLRenderer();
renderer.setSize( window.innerWidth, window.innerHeight );
document.body.appendChild( renderer.domElement );

var updateFcts	= [];
var scene	= new THREE.Scene();
var camera	= new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.01, 100 );
camera.position.z = 1                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ;
//  Version 1-2-1
//  -- Added initAll( initStep ) -- Loading script;
//  -- initText, initDynamicTexture, initGeometry, initMesh
//  -- Support for 999+ objects ( still slow ); 
//  Version 1-2
//  // Added multiple geometries to canvas
//////////////////////////////////////////////////////////////////////////////////
// add an object and make it move //
//////////////////////////////////////////////////////////////////////////////////
var NObjects=111;
var CodeText=[];
var BookText="";


    <?php //$NWords=1000;$book=file_get_contents('Wealth-Of-the-Nations-txt.html'); ?>

var dynamicTexture=[];
function initDynamicTexture()
{

    for(var i=0;i<NObjects;i++)
    {
        dynamicTexture.push(new THREEx.DynamicTexture(300+i*4,300+i*4));
        dynamicTexture[i].context.font	= "bolder "+(11+i%66)+"px Verdana";
        dynamicTexture[i].drawTextWordWrap(CodeText[i],0,0,'green',dynamicTexture[i].context.font);
    }
    initStep=20;
}

function initCodeText ()
{
    for (var i=0;i<NObjects;i++)
    {   
        BookText="";
        var AjaxDone=0;
        var AjaxFail=0;
        var AjaxDate=new Date();
        var AjaxTimer=AjaxDate.getTime();
        
        // See JQuery Documentation http://api.jquery.com/jquery.get/        
        $.get( "ThreeJS-Book-GetText.php", function(data) {
     
            //alert ( data) ;
            BookText = data;
            return data;
        })
            .done(function() {
                CodeText.push(BookText);
            })
            .fail(function() {
                AjaxFail++;
            })
            .always(function() {
                AjaxDone++;
                if (AjaxDone===NObjects) {initAll(10);}
            });
        // Jqxhr object see Jquery Documentation http://api.jquery.com/jquery.get/#jqxhr-object
                               
    }
    /*CodeText.push("<?//php $NWords=1000;$bookText=substr($book,rand(0,strlen($book)-$NWords),$NWords);echo $bookText; ?>");*/
    /*if (AjaxDone+AjaxFail<NObjects)
    {
        setTimeout(function(){alert("Text loading")}, 500);
    }
    else
    {
        return true;
    }*/
}   



//////////////////////////////////////////////////////////////////////////////////
// comment //
//////////////////////////////////////////////////////////////////////////////////
var geometry = [];
    // ---- push values ----

function initGeometry()
// Geometry array
{
    for (var i=0;i<NObjects;i++)
    {
        geometry.push( new THREE.CubeGeometry( i%3, (i+1) % 3, (i+2) % 3 ));
    }
        
}

//initGeometry();

    // ---------------------
    // Material array

var material = []; 

function initMaterial()
{
    // ---- push values
    for (var i=0; i<NObjects;i++)
    {
        material.push(    new THREE.MeshBasicMaterial({
            map	: dynamicTexture[i].texture
    }));
    }
}

// initMaterial();

//  Add mesh to scene with random positon
var mesh=[];

function initMesh()
{
    
    for (var i=0; i<geometry.length; i++)
    {
        mesh.push( new THREE.Mesh( geometry[i], material[i] ));
   
        mesh[i].position.x=(-0.5+Math.sin(Math.PI*i/8))*(1+(i/100));//*(1+(i/100));
        mesh[i].position.y=-0.5+0.1*i;
        mesh[i].position.z=(-0.5+Math.cos(Math.PI*i/16))*(1+(i/100));//*(1+(i/100));
        scene.add( mesh[i] );
    }
}




function initAll(initStep)
{
    switch(initStep)
        {
        case 0: 
            initCodeText (); 
            break;
        case 10 :
            initDynamicTexture();
            initAll(20);
            break;
        case 20:
            initGeometry();
            initAll(30);
            break;
        case 30:    
            initMaterial();
            initAll(40);
            break;
        case 40:
            initMesh();
            initAll(50);
            break;
        default:
            //alert(initStep);
        }
    // Ena za ziher
   var RedCubeGeometry = new THREE.CubeGeometry( 1, 1, 1 ); 
   var RedCubeDynamicTexture= new THREEx.DynamicTexture(777,777);
   RedCubeDynamicTexture.context.font	= "bold 33px Arial";
   var RedCubeText=
"( https://github.com/Zekom/three.js )-->>>> About..."
+"https://www.facebook.com/ZekomTributeMagazine..."
+"...Zekom - Tribute Magazine..."
+"...Community Page about All your base are belong to us..."
+"...· http://en.wikipedia.org/wiki/All_your_base_are_belong_to_us ·..."
+"...Description..."
+"...· ZekomZ - Zekom Tribute Magazine - G+ is a community portal, dedicated to digital agenda, modern science, space exploration and activism. ·..."
+""
+"...https://plus.google.com/102962854949157079552 ·..."
+"...https://sites.google.com/site/zekomtributemagazine/ · https://www.indiegogo.com/individuals/782594 ·..."
+"...(*)..."
+"...Identification of an Unexplained phenomenon in the International Aerospace of Slovenia...."
+""
+"...(CC) 2012, Zekom Tribute Magazine..."
+""
+"ZekomZ - Zekom Tribute Magazine - G+ is a community portal, dedicated to digital agenda, modern science, space exploration and activism on Google+"
+""
+"Themes: · 10 EUROPEAN COMMUNITIES, 16 ECONOMICS, 20 TRADE, 2006 trade policy, 2031 marketing, 24 FINANCE, 2411 monetary economics, 2421 free movement of capital, 2451 prices, 28 SOCIAL QUESTIONS, 2821 social framework, 2841 health, 3226 communications, 4406 employment, 4411 labour market, 52 ENVIRONMENT, 5211 natural environment, 6416 intelectual property · ·"
+"· · ·"
+"· ·"
+"·"
+"· http://en.wikipedia.org/wiki/All_your_base_are_belong_to_us ·"
+"·"
+"· ·"
+"· · ·"
+"· http://en.wikipedia.org/wiki/File:All_Your_Base_-22-10-10%29.ogg ·";
   RedCubeDynamicTexture.drawTextWordWrap(RedCubeText,0,0,'red',RedCubeDynamicTexture.context.font);
  
   var RedCubeMaterial = new THREE.MeshBasicMaterial({
            map	: RedCubeDynamicTexture.texture
    });
        
   scene.add(new THREE.Mesh( RedCubeGeometry, RedCubeMaterial ));
   
    
}

initAll(0);
// Rendering

updateFcts.push(function(delta, now){
    // build the text which contains the time
    var present	= new Date()
    var text	= pad(present.getHours(), 2, '0')
    + ':' + pad(present.getMinutes(), 2, '0')
    + ':' + pad(present.getSeconds(), 2, '0')
    + '\\n ' + CodeText[1];
    function pad(n, width, z) {
        z = z || '0';
        n = n + '';
    return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
    }
}
// update the text
//dynamicTexture.clear('blue')
//.drawText(text, undefined, 256, 'red')
);



//////////////////////////////////////////////////////////////////////////////////
// Camera Controls //
//////////////////////////////////////////////////////////////////////////////////
var mouse	= {x : 0, y : 0}
document.addEventListener('mousemove', function(event){
mouse.x	= (event.clientX / window.innerWidth ) - 0.5
mouse.y	= (event.clientY / window.innerHeight) - 0.5
}, false)
updateFcts.push(function(delta, now){
camera.position.x += (mouse.x*100 - camera.position.x) * (delta*2)
camera.position.y += (mouse.y*100 - camera.position.y) * (delta*2)
camera.lookAt( scene.position )
});


//////////////////////////////////////////////////////////////////////////////////
// render the scene //
//////////////////////////////////////////////////////////////////////////////////
updateFcts.push(function(){
renderer.render( scene, camera );
});

//////////////////////////////////////////////////////////////////////////////////
// loop runner //
//////////////////////////////////////////////////////////////////////////////////
var lastTimeMsec= null
requestAnimationFrame(function animate(nowMsec){
// keep looping
requestAnimationFrame( animate );
// measure time
lastTimeMsec	= lastTimeMsec || nowMsec-1000/60
var deltaMsec	= Math.min(200, nowMsec - lastTimeMsec)
lastTimeMsec	= nowMsec
// call each update function
updateFcts.forEach(function(updateFn){
updateFn(deltaMsec/1000, nowMsec/1000)
})
})
</script></body>
