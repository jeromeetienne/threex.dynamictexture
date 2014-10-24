threex.dynamictexture
=====================

threex.dynamictexture is a [threex game extension for three.js](http://www.threejsgames.com/extensions/). It provides an easy way to handle dynamically generated texture.
Inspiration came from
the excelent [babylon.js](http://www.babylonjs.com)
which got 
[BABYLON.DynamicTexture](https://github.com/BabylonJS/Babylon.js/blob/master/Babylon/Materials/textures/babylon.dynamicTexture.js).
It is mainly used to write text in texture. Say you got a character which says something, you may want to put that in a texture and display that above your character. threex.dynamictexture will make it easy for you.

Show Don't Tell
===============
* [examples/basic.html](http://jeromeetienne.github.io/threex.dynamictexture/examples/basic.html)
\[[view source](https://github.com/jeromeetienne/threex.dynamictexture/blob/master/examples/basic.html)\] :
It shows this feature, and that one which is coded like that.
* [examples/drawTextCooked.html](http://jeromeetienne.github.io/threex.dynamictexture/examples/drawTextCooked.html)
\[[view source](https://github.com/jeromeetienne/threex.dynamictexture/blob/master/examples/drawTextCooked.html)\] :
It shows ```.drawTextCooked``` function
* [examples/drawImage.html](http://jeromeetienne.github.io/threex.dynamictexture/examples/drawImage.html)
\[[view source](https://github.com/jeromeetienne/threex.dynamictexture/blob/master/examples/drawImage.html)\] :
It shows ```.drawImage``` function



A Screenshot
============
[![screenshot](https://raw.githubusercontent.com/jeromeetienne/threex.dynamictexture/master/examples/images/screenshot-threex-dynamictexture-512x512.jpg)](http://jeromeetienne.github.io/threex.dynamictexture/examples/basic.html)

How To Install It
=================

You can install it manually or with
[bower](http://bower.io/).
for the manual version, first include ```threex.dynamictexture.js``` with the usual

```html
<script src='threex.dynamictexture.js'></script>
```

or with
[bower](http://bower.io/) 
you type the following to install the package.

```bash
bower install threex.dynamictexture
```

then you add that in your html

```html
<script src="bower_components/threex.dynamictexture/threex.dynamictexture.js"></script>
```

How To Use It ? 
===============

You instanciate the texture, say it is 512 pixel width, and 512 pixel high.
```
var dynamicTexture	= new THREEx.DynamicTexture(512,512)
```

* ```dynamicTexture.canvas``` the underlying canvas
* ```dynamicTexture.context``` the context of the underlying canvas
* ```dynamicTexture.texture``` the ```THREE.Texture``` created


To use the texture on a ```THREE.Material```

```javascript
var geometry	= new THREE.CubeGeometry( 1, 1, 1);
var material	= new THREE.MeshBasicMaterial({
	map	: dynamicTexture.texture
})
var mesh	= new THREE.Mesh( geometry, material );
scene.add( mesh );
```

When you update a texture be sure to do

```javascript
dynamicTexture.texture.needsUpdate	= true
```

## Helpers Functions
Some helpers functions are provided to draw in this canvas.

**To clear the underlying canvas**

```
dynamicTexture.clear();
```

**To Draw a Text**
to draw a text

```
dynamicTexture.drawText('Hello', 32, 256, 'red')
```	
**To Draw a Image**
to draw an image, build an Image element and call this function. the arguments
are the same as the official function

```
var image  = document.createElement('img')
image.src  = 'image.jpg'
dynamicTexture.drawBackground(image, 0, 0)
``` 
    