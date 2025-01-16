import * as THREE from 'three';
import WebGL from 'three/addons/capabilities/WebGL.js';


const checkApprox = (num1, num2, epsilon = 0.004) => { 
    return Math.abs(num1 - num2) < epsilon; 
} 
    
function slope(n1,n2){
    return (n2 - n1);
}

document.addEventListener("keydown", onDocumentKeyDown, false);
function onDocumentKeyDown(event){
    let keyCode = event.which;
    if(keyCode == 87){
        player.position.y += 1;
    }
    if(keyCode == 65){
        player.position.x -= 1;
    }
    if(keyCode == 83){
        player.position.y -= 1;
    }
    if(keyCode == 68){
        player.position.x += 1;
    }
};
document.addEventListener("mousedown", onDocumentMouseDown, false);
function onDocumentMouseDown(event){
    
    px = slope(player.position.x, mouse.position.x);
    py = slope(player.position.y, mouse.position.y);
};

const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

const renderer = new THREE.WebGLRenderer();
renderer.setSize( window.innerWidth, window.innerHeight );
renderer.setAnimationLoop( animate );
document.querySelector("main").appendChild( renderer.domElement );

const geometry = new THREE.BoxGeometry( .5, .5, .5 );
const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
const cube = new THREE.Mesh( geometry, material );

const plGeometry = new THREE.BoxGeometry(.2,.2,.2);
const plMaterial = new THREE.MeshBasicMaterial({color: 0xff0000});
const player = new THREE.Mesh(plGeometry, plMaterial);

const lineMaterial = new THREE.LineBasicMaterial( { color: 0x0000ff } );
const points = [];
points.push( new THREE.Vector3( -3, 0, 0 ) );
points.push( new THREE.Vector3( -2, 2, 0 ) );
points.push( new THREE.Vector3( 0, 3, 0 ) );
points.push( new THREE.Vector3( 2, 2, 0 ) );
points.push( new THREE.Vector3( 3, 0, 0 ) );
points.push( new THREE.Vector3( 2, -2, 0 ) );
points.push( new THREE.Vector3( 0, -3, 0 ) );
points.push( new THREE.Vector3( -2, -2, 0 ) );
points.push( new THREE.Vector3( -3, 0, 0 ) );

const lineGeometry = new THREE.BufferGeometry().setFromPoints( points );
const line = new THREE.Line( lineGeometry, lineMaterial );

scene.add( cube );
scene.add( line );
scene.add(player);
camera.position.z = 5;


let width = 1;
let height = 1;
let deph = 1;
let bigger = true;
let destination = 0;
let x;
let y;
let px = 0;
let py = 0;




cube.position.set(points[destination].x, points[destination].y, points[destination].z);

function animate() {

	cube.rotation.x += 0.01;
	cube.rotation.y += 0.01;
    
    if(width > 2) bigger = false;
    if(width < .02) bigger = true;
    if(bigger){
        width += .01;
        height += .01;
        deph += .01;
    }else{
        width -= .01;
        height -= .01;
        deph -= .01;
    }
    
    if(checkApprox(cube.position.x , points[destination].x,.01) && checkApprox(cube.position.y , points[destination].y,.01) && checkApprox(cube.position.y , points[destination].y,.01)){
        console.log("here");
        if (destination > 7){
            destination = 1;
            x = slope(cube.position.x, points[destination].x);
            y = slope(cube.position.y, points[destination].y);
        }
        else{
            destination++;
            x = slope(cube.position.x, points[destination].x);
            y = slope(cube.position.y, points[destination].y);
        }
    }
    else{
        
        cube.position.y += y / 100;
        cube.position.x += x / 100;
    }
    player.position.x += px;
    player.position.y += py;
    //cube.scale.set(width, height, deph);

	renderer.render( scene, camera );

}
if ( WebGL.isWebGL2Available() ) {

	// Initiate function or other initializations here
	renderer.setAnimationLoop( animate );

} else {

	const warning = WebGL.getWebGL2ErrorMessage();
	document.getElementById( 'container' ).appendChild( warning );

}
