## TODO

- expose parameters to tune
  - store them in threex.DynamicText2DObject.parameters
  - DONE remove the (text) arguments
- which parameter to tune ?
  - why am i blocked on this
- expose in .parameters
  - all parameters from dynamicTexture.drawTextCooked
  - if the function arguments aren't good enougth, fix it there
- some parameters are in ```<select>```
  - some parameters are in numeric values
  - some parameters are in color
    - css values are ok
    - do i need a special angular stuff for that
- Find proper naming
  - issue with the save capability in studio designer
  - not sure why. ask tonight
  - or on hipchat


## DONE
- DONE port it to three.js current version
  - DONE check it works well in three.js r67
  - DONE check it with current three.js version


--

- rename DynamicText2D into DynamicText2DObject
- remove example for drawImage.html ?
- remove example for drawTextCooked.html ?
- What about having a Sprite ? it seems usefull.

# implement a THREEX.DynamicText2D
- It inherit from THREE.Mesh
- the geometry is a THREE.PlaneGeometry
- the material is a phong by default
- the texture of the material from THREEx.DynamicTexture

# Misc
- what is the proper API for THREEx.DynamicText2D ?
  - can i change the font ? the color ?
  - can i change the geometry size ?
  - can i change the text
  - all that should be dynamic
