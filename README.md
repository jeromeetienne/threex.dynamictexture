threex.dynamictexture
=====================
this is a three.js extension to handle dynamically generated texture.
Good if you want to write text in a texture for example.
It is similar to
[babylon.js](http://www.babylonjs.com)
which got 
[BABYLON.DynamicTexture](https://github.com/BabylonJS/Babylon.js/blob/master/Babylon/Materials/textures/babylon.dynamicTexture.js).

Here is a [basic example](http://jeromeetienne.github.io/threex.dynamictexture/examples/basic.html) and its [source](https://github.com/jeromeetienne/threex.dynamictexture/blob/master/examples/basic.html)

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
	