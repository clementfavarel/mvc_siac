import * as THREE from "https://cdn.skypack.dev/three@0.160.1/build/three.module.js";
import { GLTFLoader } from "https://cdn.skypack.dev/three@0.160.1/examples/jsm/loaders/GLTFLoader.js";

// Create the Three.js scene
const scene = new THREE.Scene();

// Create a renderer and add it to the DOM
const renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth, window.innerHeight);
document.body.appendChild(renderer.domElement);

// Create a camera
const camera = new THREE.PerspectiveCamera(
    45,
    window.innerWidth / window.innerHeight,
    1,
    500
);

// Add lights to the scene
const ambientLight = new THREE.AmbientLight(0xffffff);
scene.add(ambientLight);

const directionalLight = new THREE.DirectionalLight(0xffffff);
directionalLight.position.set(10, 10, 20).normalize();
scene.add(directionalLight);

const pointLight = new THREE.PointLight(0xffffff, 5, 1);
pointLight.position.set(10, 10, 20); // Set the position of the light
scene.add(pointLight);

camera.position.z = 4;

// Instantiate the GLTFLoader
const loader = new GLTFLoader();

// Load the glTF file
loader.load("assets/models/map.glb", function (gltf) {
    // Add the loaded scene to the Three.js scene
    scene.add(gltf.scene);
});
