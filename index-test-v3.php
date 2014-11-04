<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function playmusic()
{
	var soundmain= document.getElementById('background_audio');
	
	if (soundmain.paused)
	{
		soundmain.play();
	}
}
</script>
</head>

<body>
<div>
	<audio id="background_audio" loop="loop">
        <source src="music/main.mp3" />
    </audio>
    <a id="buttonmute_1" style="cursor:pointer;" onclick="playmusic()">Sound A</a>
</div>
</body>
</html>
