<?php 
$query = @mysql_query("SELECT * FROM photos WHERE txtname<>'' ORDER BY auto_id");

if(@mysql_num_rows($query)>0) {
	while($item = @mysql_fetch_array($query)) {
		$gallery[] = $item;
	}
}

$itemString = "";
$script1String = "";
$script2String = "";
$script3String = "";
$script4String = "";

if(is_array($gallery)) {
	$gallerySize = sizeof($gallery);
	for($i=0; $i<$gallerySize; $i++) {
		$itemInnerString = "";
		$script1Inner = "";
		$script2Inner = "";
		$script3Inner = "";
		$script4Inner = "";
		
		$itemInnerString .= '<div class="dino-audio-box script-dino-'.$i.'">';
		$itemInnerString .= '<div class="red-box">';
		if($i%3==0) {
			$itemInnerString .= '<img src="css/img/symbol-drum.png" alt="Christmas Drums">';
		} elseif($i%3==1) {
			$itemInnerString .= '<img src="css/img/symbol-bell.png" alt="Christmas Bells">';
		} else {
			$itemInnerString .= '<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">';
		}
		
		$itemInnerString .= '<p class="dino-name">'.$gallery[$i]['txtname'].'</p>';
		
		$itemInnerString .= '</div>';
		
		$itemInnerString .= '<div class="dino-photo" style="background-image: url(photo/'.$gallery[$i]['photo'].');"></div>';
		
		$itemInnerString .= '<audio id="audio_'.($i+57).'" loop="loop" muted>';
		
		$itemInnerString .= '<source src="music/loop'.$gallery[$i]['audioTrack'].'.mp3" />';
		
		$itemInnerString .= '</audio>';
		
		$itemInnerString .= ' <a id="buttonmute_'.($i+57).'" onclick="playmusic(),mute_'.($i+57).'()"></a>';
		
		$itemInnerString .= '</div>';
		
		//assign to collective html
		$itemString .= $itemInnerString;
		
		$script1Inner .= "var sdb".$i." = $('.script-dino-".$i."');";
		$script1Inner .="\n";
		$script1Inner .= "var sdb".$i."pic = $('.script-dino-".$i." .dino-photo');";
		$script1Inner .="\n";
		$script1Inner .= "var sdb".$i."red = $('.script-dino-".$i." .red-box');";
		$script1Inner .="\n";
		$script1Inner .= "$(sdb".$i.").on('click', function(){";
		$script1Inner .="\n";
		$script1Inner .= "sdb".$i."pic.toggleClass('dino-photo-click');";
		$script1Inner .="\n";
		$script1Inner .= "sdb".$i."red.toggleClass('invisible');";
		$script1Inner .="\n";
		$script1Inner .= "});";
		$script1Inner .="\n";
		
		//assign to 1st part of js
		$script1String .= $script1Inner;
		
		$script2Inner .= "var sounds".$i."= document.getElementById('audio_".($i+57)."');";
		$script2Inner .="\n";
		
		//assign to 2nd part of js		
		$script2String .= $script2Inner;
		
		$script3Inner .= "sounds".$i.".play();";
		$script3Inner .="\n";
		
		//assign to 3rd part of js
		$script3String .= $script3Inner;
		
		$script4Inner.="function mute_".($i+57)."()";
		$script4Inner.="\n";
		$script4Inner.="{";
		$script4Inner.="\n";
		$script4Inner.="if(document.getElementById('audio_".($i+57)."').muted == true)";
		$script4Inner.="\n";
		$script4Inner.="{";
		$script4Inner.="\n";	
		$script4Inner.="document.getElementById('audio_".($i+57)."').muted = false;";
		$script4Inner.="\n";
		$script4Inner.="}";
		$script4Inner.="\n";	
		$script4Inner.="else";
		$script4Inner.="\n";	
		$script4Inner.="{";
		$script4Inner.="\n";	
		$script4Inner.="document.getElementById('audio_".($i+57)."').muted = true;";
		$script4Inner.="\n";
		$script4Inner.="}";
		$script4Inner.="\n";
		$script4Inner.="}";
		$script4Inner.="\n\n";		
		
		//assign to 4th part of js
		$script4String .= $script4Inner;		
		
	}
}


/*
function mute_56()
{
	if(document.getElementById('audio_56').muted == true)
	{
		document.getElementById('audio_56').muted = false;
	}
	else
	{
		document.getElementById('audio_56').muted = true;
	}
}
*/
?>