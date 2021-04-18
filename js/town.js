let scene, camera//, render


function init() {
    canvas = document.getElementById('canvas');
    renderer = new THREE.WebGLRenderer({canvas});
    

    const fov = 75;
    const aspect = 2;
    const near = 0.1;
    const far = 5;
    const camera = new THREE.PerspectiveCamera(fov, aspect, near, far);
    /*camera.position.x = 0;
    camera.position.z = 80;
    camera.position.y = 70;
    camera.rotation.y = 45/180*Math.PI;*/
    camera.position.z = 2;
    
    scene = new THREE.Scene()
    //scene.background = new THREE.Color(0x98F8F3)
    const color = 0xFFFFFF;
    const intensity = 1;
    const light = new THREE.DirectionalLight(color, intensity);
    light.position.set(-1, 2, 4);
    scene.add(light);

    const boxWidth = 1;
    const boxHeight = 1;
    const boxDepth = 1;

    const geometry = new THREE.BoxGeometry(boxWidth, boxHeight, boxDepth);

    const cubes = [
        makeInstance(geometry, 0x44aa88, 0),
        makeInstance(geometry, 0x8844aa, -2),
        makeInstance(geometry, 0xaa8844, 2),
    ];
    scene.add(cubes);

    renderer.render(scene, camera);

    /*hlight = new THREE.AmbientLight(0x727272, 1)
    scene.add(hlight)

    directionalLight = new THREE.DirectionalLight(0xffffff, 1)
    directionalLight.position.set(0,1,0)
    directionalLight.castShadow = true
    scene.add(directionalLight)*/

 /*   light = new THREE.PointLight(0xc4c4cc4, 10)
    light.position.set(0, 300, 500)
    scene.add(light)

    light2 = new THREE.PointLight(0xc4c4cc4, 10)
    light.position.set(500, 100, 0)
    scene.add(light2)

    light3 = new THREE.PointLight(0xc4c4cc4, 10)
    light.position.set(0, 100, -500)
    scene.add(light3)

    light4 = new THREE.PointLight(0xc4c4cc4, 10)
    light.position.set(-5000, 300, 0)
    scene.add(light4)
*/

    //renderer = new THREE.WebGLRenderer({antialias: true})
    //container = document.getElementById('container');
   // renderer.setSize($(container).width(), $(container).height());
    //container.appendChild(renderer.domElement);
 /*   
    controls = new THREE.OrbitControls(camera, renderer.domElement);


    let loader = new THREE.GLTFLoader()
    loader.load('scene.gltf', function(gltf){
        car = gltf.scene.children[0]
        car.scale.set(2, 2, 2)
        scene.add(gltf.scene)
        animate();
    })*/
    function render(time){
        time *= 0.001; // конверт времени в секунды
        
        if(resizeRendererToDisplaySize(renderer)){
            const canvas = renderer.domElement;
            camera.aspect = canvas.clientWidth / canvas.clientHeight;
            camera.updateProjectionMatrix();
        }
        

        cubes.forEach((cube, ndx)=>{
            const speed = 1 + ndx * .1;
            const rot = time * speed;
            cube.rotation.x = rot;
            cube.rotation.y = rot;
        });
    
        renderer.render(scene, camera);
    
        requestAnimationFrame(render);
    }
    requestAnimationFrame(render);  //запрос к браузеру для отрисовки
}

function makeInstance(geometry, color, x){      
    const material = new THREE.MeshPhongMaterial({color});

    const cube = new THREE.Mesh(geometry, material);
    scene.add(cube);

    cube.position.x = x;

    return cube;
}   // создание материала для объекта

function resizeRendererToDisplaySize(renderer){     
    const canvas = renderer.domElement;
    const width = canvas.clientWidth;
    const height = canvas.clientHeight;
    const needResize = canvas.width !== width || canvas.height !== height;

    if(needResize){
        renderer.setSize(width, height, false);
    }
    return needResize;
} // проверка надобности изменения размера окна рендера

function animate() {
    renderer.render(scene,camera);
    requestAnimationFrame(animate);
  }
init()