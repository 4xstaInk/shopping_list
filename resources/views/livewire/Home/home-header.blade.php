<div>
  <div class="blob-container w-screen h-screen">
	<h1 class="blob-text"><span class="text-blue-500 font-light">4XS†Δ</span><span class="font-extralight text-red-400">!Nk</span></h1>
	<div class="shape-blob"></div>
	<div class="shape-blob one"></div>
	<div class="shape-blob two"></div>
    <div class="shape-blob three"></div>
    <div class="shape-blob four"></div>
   <div>
</div>
<style scoped>
/* @import url('https://fonts.googleapis.com/css?family=Playfair+Display:400,900'); */

body {
	margin: 0;
	padding: 0;
}

.blob-container {
	background: #ffffff;
	/* background-size: contain; */
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: center;
	overflow: hidden;
	position: relative;
}

.shape-blob {
	height: 200px;
	width: 200px;
	border-radius: 30% 50% 20% 40%;
  	animation: 
		transform 20s ease-in-out infinite both alternate,
		movement_one 40s ease-in-out infinite both;
	opacity:.7;
	position: absolute;
	left: 70%;
	top: 50%;
}
.shape-blob.one{
    background:#ED1250;
	height: 500px;
	width: 500px;
	left: -200px;
	top: -150px;
	transform: rotate(-180deg);
	animation: transform 30s ease-in-out infinite both alternate, movement_two 60s ease-in-out infinite both;
}

.shape-blob.two{
    background:#12a8ed;
	height: 350px;
	width: 350px;
	left: 500px;
	top: -150px;
	transform: rotate(-180deg);
	animation: transform 30s ease-in-out infinite both alternate, movement_two 60s ease-in-out infinite both;
}

.shape-blob.three{
    background:#12a8ed;
	height:600px;
	width:1000%;
	left:-200px;
	top: 600px;
    z-index: 5;
	transform: rotate(-180deg);
	animation: transform3 30s ease-in-out infinite both alternate, movement_three 6s ease-in-out infinite both;
}
.shape-blob.four{
    background:#ED1250;
	height:600px;
	width:1000%;
	left:-200px;
	top: 500px;
    z-index: 3;
	transform: rotate(-180deg);
	animation: transform3 30s ease-in-out infinite both alternate, movement_three 6s ease-in-out infinite both;
}

@keyframes transform3
{
   0%,
  100% { border-radius: 33% 67% 70% 30% / 30% 30% 70% 70%; } 
   20% { border-radius: 37% 63% 51% 49% / 37% 65% 35% 63%; } 
   40% { border-radius: 36% 64% 64% 36% / 64% 48% 52% 36%; } 
   60% { border-radius: 37% 63% 51% 49% / 30% 30% 70% 70%; }  
   80% { border-radius: 40% 60% 42% 58% / 41% 51% 49% 59%; } 
}

@keyframes movement_three
{
    0%,
  500% { transform: none; }
   50% { transform: translate(50%, 90%) rotate(0deg) scale(-2);}
}
/* ------------------ */

@keyframes transform
{
    0%,
  100% { border-radius: 33% 67% 70% 30% / 30% 30% 70% 70%; } 
   20% { border-radius: 37% 63% 51% 49% / 37% 65% 35% 63%; } 
   40% { border-radius: 36% 64% 64% 36% / 64% 48% 52% 36%; } 
   60% { border-radius: 37% 63% 51% 49% / 30% 30% 70% 70%; } 
   80% { border-radius: 40% 60% 42% 58% / 41% 51% 49% 59%; } 
}


@keyframes movement_one
{
    0%,
  100% { transform: none; }
   50% { transform: translate(50%, 20%) rotateY(10deg) scale(1.2); }
}

@keyframes movement_two
{
    0%,
  500% { transform: none; }
   50% { transform: translate(50%, 20%) rotate(-200deg) scale(1.2);}
}

h1 {
	/* font-family: 'Playfair Display', serif; */
	font-size:80px;
	letter-spacing: 2px;
    font-weight: 900;
	color: white;
	line-height: .9em;
	position: relative;
	z-index: 4;
	text-shadow: 0px 0px 5px #ffffff;

}
.blob-text{
  background: rgba(255, 255, 255, 0.2);
  box-shadow: 0 1px 12px 0 rgba(31, 38, 135, 0);
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  border-bottom: 2px solid rgba(255, 255, 255, 0.18);

}
</style>
</div>

