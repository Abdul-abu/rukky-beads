<?php
/* AJAX Comments - Saves to comments.json */
header('Content-Type: text/html; charset=utf-8');
$file = __DIR__.'/comments.json';

// Handle AJAX POST
if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['ajax'])){
  $comments = file_exists($file) ? json_decode(file_get_contents($file),true) : [];
  $new = [
    'name'=>htmlspecialchars($_POST['name']),
    'msg'=>htmlspecialchars($_POST['msg']),
    'time'=>date('Y-m-d H:i')
  ];
  array_unshift($comments,$new);
  $comments = array_slice($comments,0,50); // Keep last 50
  file_put_contents($file,json_encode($comments));
  echo json_encode(['success'=>true]);
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Reviews - Luna Beads</title>
<style>
:root{--pink1:#ff9a9e;--pink2:#fecfe8;--pink3:#fad0c4}
*{margin:0;padding:0;box-sizing:border-box}
body{
  font-family:'Segoe UI',sans-serif;
  background:linear-gradient(135deg,var(--pink1),var(--pink2),var(--pink3));
  min-height:100vh;
  color:#4a2c2a;
}
.glass{
  background:rgba(255,255,255,0.25);
  backdrop-filter:blur(12px);
  border:1px solid rgba(255,255,255,0.3);
  border-radius:20px;
  box-shadow:0 8px 32px rgba(0,0,0,0.1);
}
nav{padding:20px;margin:20px;display:flex;justify-content:space-between;align-items:center}
nav h1{font-size:28px;font-weight:700}
nav a{margin:0 15px;text-decoration:none;color:#4a2c2a;font-weight:600}
nav a:hover{color:#d63384}
.container{max-width:800px;margin:auto;padding:20px}
.form{padding:30px;margin-bottom:30px}
input,textarea{
  width:100%;
  padding:12px;
  margin:10px 0;
  border:none;
  border-radius:10px;
  background:rgba(255,255,255,0.5);
  font-family:inherit;
}
button{
  padding:12px 30px;
  background:linear-gradient(135deg,#ff6b9d,#ff8fab);
  color:white;
  border:none;
  border-radius:50px;
  cursor:pointer;
  font-weight:700;
}
.comment{padding:20px;margin-bottom:15px}
.comment .meta{font-size:12px;color:#666;margin-top:5px}
</style>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="shortcut icon" href="/favicon.ico">
</head>
<body>
<nav class="glass">
  <h1>💎Luna Beads</h1>
  <div>
    <a href="index.php">Home</a>
    <a href="gallery.php">Gallery</a>
    <a href="comments.php">Reviews</a>
  </div>
</nav>

<div class="container">
<h2 style="text-align:center;margin-bottom:30px;font-size:36px">Customer Reviews</h2>

<div class="form glass">
  <h3>Leave a Review</h3>
  <input type="text" id="name" placeholder="Your name" required>
  <textarea id="msg" placeholder="What did you think?" rows="4" required></textarea>
  <button onclick="submitComment()">Post Review</button>
  <p id="status"></p>
</div>

<div id="comments">
<?php
$comments = file_exists($file) ? json_decode(file_get_contents($file),true) : [];
foreach($comments as $c){
  echo "<div class='comment glass'><strong>{$c['name']}</strong><p>{$c['msg']}</p><div class='meta'>{$c['time']}</div></div>";
}
?>
</div>
</div>

<script>
async function submitComment(){
  const name = document.getElementById('name').value;
  const msg = document.getElementById('msg').value;
  if(!name || !msg) return alert('Fill both fields');
  
  const form = new FormData();
  form.append('ajax',1);
  form.append('name',name);
  form.append('msg',msg);
  
  const res = await fetch('comments.php',{method:'POST',body:form});
  const data = await res.json();
  
  if(data.success){
    document.getElementById('status').textContent='Review posted!';
    document.getElementById('name').value='';
    document.getElementById('msg').value='';
    setTimeout(()=>location.reload(),500);
  }
}
</script>
</body>
</html>