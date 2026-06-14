<?php require_once 'install.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Gallery - Beads by Ruky</title>
<style>
:root{
  --pink1:#ff9a9e;--pink2:#fecfe8;--pink3:#fad0c4;
  --glass:rgba(255,255,255,0.25);--text:#4a2c2a
}
*{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',sans-serif}
body{
  background:linear-gradient(135deg,var(--pink1),var(--pink2),var(--pink3));
  min-height:100vh;color:var(--text);padding:30px 15px
}

.header{
  max-width:1000px;margin:0 auto 30px;padding:25px;text-align:center;
  background:var(--glass);backdrop-filter:blur(15px);
  border:1px solid rgba(255,255,255,0.4);border-radius:25px;
  box-shadow:0 8px 32px rgba(0,0,0,0.12)
}
.header h1{font-size:36px;margin-bottom:15px}
.header h1 a{color:var(--text);text-decoration:none}

.nav{
  display:flex;gap:25px;justify-content:center;flex-wrap:wrap;margin-top:10px
}
.nav a{
  color:var(--text);text-decoration:none;font-weight:700;font-size:18px;
  padding:8px 16px;border-radius:12px;transition:0.2s;
  background:rgba(255,255,255,0.2)
}
.nav a:hover{
  background:rgba(255,255,255,0.4);transform:translateY(-2px)
}
.nav a.active{
  background:linear-gradient(135deg,#ff6b9d,#ff8fab);color:#fff
}

.section-title{
  max-width:1000px;margin:60px auto 30px;text-align:center;
  font-size:46px;font-weight:800;letter-spacing:3px;
  text-transform:uppercase;color:#4a2c2a;
  text-shadow:0 4px 12px rgba(255,255,255,0.7)
}

.images-grid{
  max-width:1000px;margin:0 auto 70px;
  display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));
  gap:22px;
}
.img-item{
  padding:16px;text-align:center;transition:0.3s;cursor:pointer;
  background:var(--glass);backdrop-filter:blur(12px);
  border:1px solid rgba(255,255,255,0.3);
  border-radius:20px;box-shadow:0 8px 32px rgba(0,0,0,0.1)
}
.img-item:hover{transform:translateY(-6px) scale(1.03)}
.img-item img{
  width:100%;height:260px;object-fit:cover;border-radius:15px;margin-bottom:12px
}
h4{margin-bottom:6px;font-weight:700;font-size:18px}

.hero{
  max-width:520px;margin:0 auto 45px;
  background:#000;border-radius:25px;overflow:hidden;
  border:3px solid rgba(255,255,255,0.5);
  box-shadow:0 8px 32px rgba(0,0,0,0.15);
  aspect-ratio:9/16
}
.hero video{
  width:100%;height:100%;
  object-fit:cover;display:block
}

.grid{
  max-width:1000px;margin:0 auto;
  display:grid;grid-template-columns:repeat(3,1fr);gap:16px
}
.item{
  aspect-ratio:1;position:relative;overflow:hidden;
  background:var(--glass);backdrop-filter:blur(15px);
  border:1px solid rgba(255,255,255,0.4);border-radius:18px;
  box-shadow:0 6px 25px rgba(0,0,0,0.1)
}
.item video{
  width:100%;height:100%;object-fit:cover;border-radius:15px
}

@media(max-width:768px){
  .grid{gap:6px;grid-template-columns:repeat(2,1fr)}
  .images-grid{grid-template-columns:repeat(2,1fr);gap:16px}
  .section-title{font-size:34px;margin:45px auto 22px}
  .nav{gap:12px}
  .nav a{font-size:16px;padding:6px 12px}
</style>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="shortcut icon" href="/favicon.ico">
</head>
<body>

<div class="header">
  <h1><a href="index.php">💎 Beads by Ruky</a></h1>
  <nav class="nav">
    <a href="index.php">Home</a>
    <a href="comments.php">Reviews</a>
    <a href="gallery.php" class="active">Gallery</a>
  </nav>
</div>

<h2 class="section-title">IMAGES</h2>
<div class="images-grid">
  <div class="img-item">
    <img src="img1.png" alt="Rose Quartz Anklet" loading="lazy" />
    <h4>Rose Quartz Anklet</h4>
  </div>
  <div class="img-item">
    <img src="img2.png" alt="Beaded Quartz Anklet" loading="lazy" />
    <h4>Beaded Quartz Anklet</h4>
  </div>
  <div class="img-item">
    <img src="img3.jpg" alt="Beaded bracelet" loading="lazy" />
    <h4>Beaded bracelet</h4>
  </div>
  <div class="img-item">
    <img src="img4.jpeg" alt="Beaded Anklet" loading="lazy" />
    <h4>Beaded Anklet</h4>
  </div>
    <div class="img-item">
    <img src="img5.jpg" alt="Beaded Anklet" loading="lazy" />
    <h4>Beaded Anklet</h4>
  </div>
<div class="img-item">
    <img src="img6.jpg" alt="Beaded Anklet" loading="lazy" />
    <h4>Beaded Anklet</h4>
  </div>
<div class="img-item">
    <img src="img7.jpg" alt="Beaded Anklet" loading="lazy" />
    <h4>Beaded Anklet</h4>
  </div>
</div>

<h2 class="section-title">VIDEOS</h2>

<div class="hero">
  <video src="videos/hero.mp4" controls muted playsinline loop></video>
</div>

<div class="grid">
<?php
$videos = glob('videos/vid*.mp4');
natsort($videos);
foreach($videos as $file){
  echo '<div class="item">';
  echo '<video src="'.$file.'" controls muted playsinline preload="metadata"></video>';
  echo '</div>';
}
?>
</div>

</body>
</html>