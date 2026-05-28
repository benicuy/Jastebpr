<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Curl | Aln Unchek</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&display=swap" rel="stylesheet">

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Orbitron',sans-serif;
}

body{
  background:#000;
  height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  overflow:hidden;
}

/* PARTICLE */
#particles{
  position:fixed;
  width:100%;
  height:100%;
  z-index:0;
}

/* GLOW BG */
body::before{
  content:"";
  position:absolute;
  width:400px;
  height:400px;
  background:purple;
  filter:blur(120px);
  top:-100px;
  left:-100px;
  opacity:0.3;
}

body::after{
  content:"";
  position:absolute;
  width:400px;
  height:400px;
  background:red;
  filter:blur(120px);
  bottom:-100px;
  right:-100px;
  opacity:0.3;
}

/* CONTAINER */
.container{
  position:relative;
  z-index:2;
  background:rgba(10,10,20,0.85);
  backdrop-filter:blur(20px);
  border-radius:20px;
  padding:30px;
  width:340px;
  box-shadow:
    0 0 20px blue,
    0 0 40px purple,
    0 0 60px red;
  transform:perspective(1000px) rotateX(5deg);
  transition:0.4s;
}

.container:hover{
  transform:perspective(1000px) rotateX(0deg) scale(1.03);
}

/* TITLE */
h1{
  text-align:center;
  color:#fff;
  text-shadow:
    0 0 10px blue,
    0 0 20px purple;
  margin-bottom:25px;
}

/* INPUT */
input{
  color:white !important;
  border-bottom:1px solid blue !important;
}

input:focus{
  border-bottom:1px solid red !important;
  box-shadow:0 0 10px red !important;
}

label{
  color:#aaa !important;
}

/* 3D BUTTON */
button{
  width:100%;
  margin-top:20px;
  border-radius:12px;
  background:linear-gradient(145deg, #1a1a2e, #0f3460);
  color:white;
  font-weight:bold;
  letter-spacing:1px;
  box-shadow:
    0 5px 0 #000,
    0 0 15px blue,
    0 0 25px purple;
  transition:0.2s;
  padding:12px;
}

button:hover{
  transform:translateY(-2px);
  box-shadow:
    0 7px 0 #000,
    0 0 20px red,
    0 0 40px purple;
}

button:active{
  transform:translateY(3px);
  box-shadow:
    0 2px 0 #000,
    0 0 10px blue;
}

/* COPYRIGHT */
.copyright{
  text-align:center;
  margin-top:15px;
  color:#aaa;
}

/* ANIMATION */
.container{
  animation:fadeIn 1s ease;
}

@keyframes fadeIn{
  from{
    opacity:0;
    transform:translateY(40px) scale(0.9);
  }
  to{
    opacity:1;
    transform:translateY(0) scale(1);
  }
}

</style>
</head>

<body>

<canvas id="particles"></canvas>

<div class="container">
  <h1>Add Curl ?Aln jasteb</h1>

  <form id="addCurlForm">
    <div class="input-field">
      <input id="api" type="text" class="validate" required>
      <label for="api">𝗔𝗣𝗜</label>
    </div>

    <button type="submit">
      <i class="fas fa-plug"></i> KONEK PANEL
    </button>
  </form>

  <div class="copyright">
    <p>&copy; Aln Unchek</p>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>

/* PARTICLE MULTI COLOR */
const canvas = document.getElementById("particles");
const ctx = canvas.getContext("2d");

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let colors = ["blue","purple","red","black"];
let particles = [];

for(let i=0;i<120;i++){
  particles.push({
    x:Math.random()*canvas.width,
    y:Math.random()*canvas.height,
    dx:(Math.random()-0.5)*2,
    dy:(Math.random()-0.5)*2,
    color:colors[Math.floor(Math.random()*colors.length)]
  });
}

function animate(){
  ctx.clearRect(0,0,canvas.width,canvas.height);

  particles.forEach(p=>{
    ctx.beginPath();
    ctx.fillStyle=p.color;
    ctx.arc(p.x,p.y,2,0,Math.PI*2);
    ctx.fill();

    p.x+=p.dx;
    p.y+=p.dy;

    if(p.x<0||p.x>canvas.width)p.dx*=-1;
    if(p.y<0||p.y>canvas.height)p.dy*=-1;
  });

  requestAnimationFrame(animate);
}
animate();

/* FORM */
document.getElementById("addCurlForm").addEventListener("submit", function(e){
  e.preventDefault();
  alert("Koneksi API berhasil!");
});

</script>

</body>
</html>