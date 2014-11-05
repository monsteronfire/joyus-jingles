<?php 
include 'conn.php';
include 'gallery.php';
include 'header.php';
?>

	<div class="dino-wrapper">
		<div class="intro main-intro">		
			<h3 class="mobileHide">
				At VLT, we do love a party! Turn up the volume and click on any of us.<br />
				Even better &ndash; add your photo and join the fun!
			</h3>
			<h3 class="mobileShow">Dang! Our jingles are so awesome, your mobile device may explode! Don't miss the fun and view Joyus Jingles on your desktop.</h3>
		</div><!--.intro-->

		<a id="mute" style="display:none;"></a>

		<div class="btn-refresh-box">
 			<div class="btn-refresh" id="btn-refresh"></div><!--.btn-refresh-->
 		</div>

		<div class="dino-audio-wrapper cf">
			<div class="btn-join">
				<a href="#"></a>
			</div>

			<div class="audio-bg">
				<audio id="background_audio" loop="loop">
					<source src="music/main.mp3" />
			        <source src="music/main.ogg" />
			    </audio>
			</div>

			<div class="dino-audio-box green-dino-1">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Pak Yang</p>
				</div>

				<div class="dino-photo"></div>

			    <audio id="audio_1" loop="loop" muted>
			    	<source src="music/loop1.mp3" />
			        <source src="music/loop1.ogg" />
			    </audio>
			    <a id="buttonmute_1" onclick="playmusic(),mute_1()"></a>
			</div><!--.green-dino-1-->

			<div class="dino-audio-box black-dino-1">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Adeline</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_2" loop="loop" muted>
			        <source src="music/loop2.mp3" />
			    </audio>
			    <a id="buttonmute_2" onclick="playmusic(),mute_2()"></a>
			</div><!--black-dino-1-->

			<div class="dino-audio-box red-dino-1">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Adrian</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_3" loop="loop" muted>
			        <source src="music/loop3.mp3" />
			    </audio>
			    <a id="buttonmute_3" onclick="playmusic(),mute_3()"></a>
			</div><!--.red-dino-1-->

			<div class="dino-audio-box green-dino-2">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="">
					<p class="dino-name">Yuen</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_4" loop="loop" muted>
			        <source src="music/loop4.mp3" />
			    </audio>
			    <a id="buttonmute_4" onclick="playmusic(),mute_4()"></a>
			</div><!--.green-dino-2-->

			<div class="dino-audio-box black-dino-2">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="">
					<p class="dino-name">Aske</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_5" loop="loop" muted>
			        <source src="music/loop5.mp3" />
			    </audio>
			    <a id="buttonmute_5" onclick="playmusic(),mute_5()"></a>
			</div><!--.black-dino-2-->

			<div class="dino-audio-box red-dino-2">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Adrian</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_6" loop="loop" muted>
			        <source src="music/loop6.mp3" />
			    </audio>
			    <a id="buttonmute_6" onclick="playmusic(),mute_6()"></a>
			</div><!--.red-dino-2-->

			<div class="dino-audio-box green-dino-3">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Beatrice</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_7" loop="loop" muted>
			        <source src="music/loop7.mp3" />
			    </audio>
			    <a id="buttonmute_7" onclick="playmusic(),mute_7()"></a>
			</div><!--.green-dino-3-->

			<div class="dino-audio-box black-dino-3">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Boon</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_8" loop="loop" muted>
			        <source src="music/loop8.mp3" />
			    </audio>
			    <a id="buttonmute_8" onclick="playmusic(),mute_8()"></a>
			</div><!--.black-dino-3-->

			<div class="dino-audio-box red-dino-3">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Andrew</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_9" loop="loop" muted>
			        <source src="music/loop9.mp3" />
			    </audio>
			    <a id="buttonmute_9" onclick="playmusic(),mute_9()"></a>
			</div><!--.red-dino-3-->

			<div class="dino-audio-box green-dino-4">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Rebekah</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_10" loop="loop" muted>
			        <source src="music/loop10.mp3" />
			    </audio>
			    <a id="buttonmute_10" onclick="playmusic(),mute_10()"></a>
			</div><!--.green-dino-4-->

			<div class="dino-audio-box black-dino-4">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Chien Chien</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_11" loop="loop" muted>
			        <source src="music/loop11.mp3" />
			    </audio>
			    <a id="buttonmute_11" onclick="playmusic(),mute_11()"></a>
			</div><!--black-dino-4-->

			<div class="dino-audio-box red-dino-4">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Christine</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_12" loop="loop" muted>
			        <source src="music/loop12.mp3" />
			    </audio>
			    <a id="buttonmute_12" onclick="playmusic(),mute_12()"></a>
			</div><!--.red-dino-4-->

			<div class="dino-audio-box green-dino-5">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Celine</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_13" loop="loop" muted>
			        <source src="music/loop13.mp3" />
			    </audio>
				<a id="buttonmute_13" onclick="playmusic(),mute_13()"></a>
			</div><!--.green-dino-5-->

			<div class="dino-audio-box black-dino-5">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Daniel</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_14" loop="loop" muted>
			        <source src="music/loop14.mp3" />
			    </audio>
				<a id="buttonmute_14" onclick="playmusic(),mute_14()"></a>
			</div><!--black-dino-5-->

			<div class="dino-audio-box red-dino-5">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Dawn</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_15" loop="loop" muted>
			        <source src="music/loop15.mp3" />
			    </audio>
				<a id="buttonmute_15" onclick="playmusic(),mute_15()"></a>
			</div><!--.red-dino-5-->

			<div class="dino-audio-box green-dino-6">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Christopher</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_16" loop="loop" muted>
			        <source src="music/loop16.mp3" />
			    </audio>
				<a id="buttonmute_16" onclick="playmusic(),mute_16()"></a>
			</div><!--green-dino-6-->

			<div class="dino-audio-box black-dino-6">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Diana</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_17" loop="loop" muted>
			        <source src="music/loop17.mp3" />
			    </audio>
				<a id="buttonmute_17" onclick="playmusic(),mute_17()"></a>
			</div><!--black-dino-6-->

			<div class="dino-audio-box red-dino-6">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Eugene</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_18" loop="loop" muted>
			        <source src="music/loop18.mp3" />
			    </audio>
				<a id="buttonmute_18" onclick="playmusic(),mute_18()"></a>
			</div><!--red-dino-6-->

			<div class="dino-audio-box green-dino-7">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Erin</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_19" loop="loop" muted>
			        <source src="music/loop1.mp3" />
			    </audio>
				<a id="buttonmute_19" onclick="playmusic(),mute_19()"></a>
			</div><!--green-dino-7-->

			<div class="dino-audio-box black-dino-7">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Emily</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_20" loop="loop" muted>
			        <source src="music/loop2.mp3" />
			    </audio>
				<a id="buttonmute_20" onclick="playmusic(),mute_20()"></a>
			</div><!--black-dino-7-->

			<div class="dino-audio-box red-dino-7">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Eugenia</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_21" loop="loop" muted>
			        <source src="music/loop3.mp3" />
			    </audio>
				<a id="buttonmute_21" onclick="playmusic(),mute_21()"></a>
			</div><!--red-dino-7-->

			<div class="dino-audio-box green-dino-8">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Izwan</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_22" loop="loop" muted>
			        <source src="music/loop4.mp3" />
			    </audio>
				<a id="buttonmute_22" onclick="playmusic(),mute_22()"></a>
			</div><!--green-dino-8-->

			<div class="dino-audio-box black-dino-8">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Jacqueline</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_23" loop="loop" muted>
			        <source src="music/loop5.mp3" />
			    </audio>
				<a id="buttonmute_23" onclick="playmusic(),mute_23()"></a>
			</div><!--black-dino-8-->

			<div class="dino-audio-box red-dino-8">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Jason</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_24" loop="loop" muted>
			        <source src="music/loop6.mp3" />
			    </audio>
				<a id="buttonmute_24" onclick="playmusic(),mute_24()"></a>
			</div><!--red-dino-8-->

			<div class="dino-audio-box green-dino-9">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Joanna</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_25" loop="loop" muted>
			        <source src="music/loop7.mp3" />
			    </audio>
				<a id="buttonmute_25" onclick="playmusic(),mute_25()"></a>
			</div><!--green-dino-9-->

			<div class="dino-audio-box black-dino-9">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Julie</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_26" loop="loop" muted>
			        <source src="music/loop8.mp3" />
			    </audio>
				<a id="buttonmute_26" onclick="playmusic(),mute_26()"></a>
			</div><!--black-dino-9-->

			<div class="dino-audio-box red-dino-9">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Joey</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_27" loop="loop" muted>
			        <source src="music/loop9.mp3" />
			    </audio>
				<a id="buttonmute_27" onclick="playmusic(),mute_27()"></a>
			</div><!--red-dino-9-->

			<div class="dino-audio-box green-dino-10">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Lianne</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_28" loop="loop" muted>
			        <source src="music/loop10.mp3" />
			    </audio>
				<a id="buttonmute_28" onclick="playmusic(),mute_28()"></a>
			</div><!--green-dino-10-->

			<div class="dino-audio-box black-dino-10">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Lynne</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_29" loop="loop" muted>
			        <source src="music/loop11.mp3" />
			    </audio>
				<a id="buttonmute_29" onclick="playmusic(),mute_29()"></a>
			</div><!--black-dino-10-->

			<div class="dino-audio-box red-dino-10">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Karen</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_30" loop="loop" muted>
			        <source src="music/loop13.mp3" />
			    </audio>
				<a id="buttonmute_30" onclick="playmusic(),mute_30()"></a>
			</div><!--red-dino-10-->

			<div class="dino-audio-box green-dino-11">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Magdalene</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_31" loop="loop" muted>
			        <source src="music/loop13.mp3" />
			    </audio>
				<a id="buttonmute_31" onclick="playmusic(),mute_31()"></a>
			</div><!--green-dino-11-->

			<div class="dino-audio-box black-dino-11">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Martin</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_32" loop="loop" muted>
			        <source src="music/loop14.mp3" />
			    </audio>
				<a id="buttonmute_32" onclick="playmusic(),mute_32()"></a>
			</div><!--black-dino-11-->

			<div class="dino-audio-box red-dino-11">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Paul</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_33" loop="loop" muted>
			        <source src="music/loop15.mp3" />
			    </audio>
				<a id="buttonmute_33" onclick="playmusic(),mute_33()"></a>
			</div><!--red-dino-11-->

			<div class="dino-audio-box green-dino-12">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">OP</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_34" loop="loop" muted>
			        <source src="music/loop16.mp3" />
			    </audio>
				<a id="buttonmute_34" onclick="playmusic(),mute_34()"></a>
			</div><!--green-dino-12-->

			<div class="dino-audio-box black-dino-12">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Matthew</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_35" loop="loop" muted>
			        <source src="music/loop17.mp3" />
			    </audio>
				<a id="buttonmute_35" onclick="playmusic(),mute_35()"></a>
			</div><!--black-dino-12-->

			<div class="dino-audio-box red-dino-12">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Serene</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_36" loop="loop" muted>
			        <source src="music/loop18.mp3" />
			    </audio>
				<a id="buttonmute_36" onclick="playmusic(),mute_36()"></a>
			</div><!--red-dino-12-->

			<div class="dino-audio-box green-dino-13">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Pamela</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_37" loop="loop" muted>
			        <source src="music/loop1.mp3" />
			    </audio>
				<a id="buttonmute_37" onclick="playmusic(),mute_37()"></a>
			</div><!--green-dino-13-->

			<div class="dino-audio-box black-dino-13">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Neal</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_38" loop="loop" muted>
			        <source src="music/loop2.mp3" />
			    </audio>
				<a id="buttonmute_38" onclick="playmusic(),mute_38()"></a>
			</div><!--black-dino-13-->

			<div class="dino-audio-box red-dino-13">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Sue Lin</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_39" loop="loop" muted>
			        <source src="music/loop3.mp3" />
			    </audio>
				<a id="buttonmute_39" onclick="playmusic(),mute_39()"></a>
			</div><!--red-dino-13-->

			<div class="dino-audio-box green-dino-14">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Pei Lin</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_40" loop="loop" muted>
			        <source src="music/loop4.mp3" />
			    </audio>
				<a id="buttonmute_40" onclick="playmusic(),mute_40()"></a>
			</div><!--green-dino-14-->

			<div class="dino-audio-box black-dino-14">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Razi</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_41" loop="loop" muted>
			        <source src="music/loop5.mp3" />
			    </audio>
				<a id="buttonmute_41" onclick="playmusic(),mute_41()"></a>
			</div><!--black-dino-14-->

			<div class="dino-audio-box red-dino-14">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Warren</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_42" loop="loop" muted>
			        <source src="music/loop6.mp3" />
			    </audio>
				<a id="buttonmute_42" onclick="playmusic(),mute_42()"></a>
			</div><!--red-dino-14-->

			<div class="dino-audio-box green-dino-15">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Poi Luan</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_43" loop="loop" muted>
			        <source src="music/loop7.mp3" />
			    </audio>
				<a id="buttonmute_43" onclick="playmusic(),mute_43()"></a>
			</div><!--green-dino-15-->

			<div class="dino-audio-box black-dino-15">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Yoke Ling</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_44" loop="loop" muted>
			        <source src="music/loop8.mp3" />
			    </audio>
				<a id="buttonmute_44" onclick="playmusic(),mute_44()"></a>
			</div><!--black-dino-15-->

			<div class="dino-audio-box red-dino-15">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Yuliady</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_45" loop="loop" muted>
			        <source src="music/loop9.mp3" />
			    </audio>
				<a id="buttonmute_45" onclick="playmusic(),mute_45()"></a>
			</div><!--red-dino-15-->

			<div class="dino-audio-box green-dino-16">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Sandra</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_46" loop="loop" muted>
			        <source src="music/loop10.mp3" />
			    </audio>
				<a id="buttonmute_46" onclick="playmusic(),mute_46()"></a>
			</div><!--green-dino-16-->

			<div class="dino-audio-box black-dino-16">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Yuhan</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_47" loop="loop" muted>
			        <source src="music/loop11.mp3" />
			    </audio>
				<a id="buttonmute_47" onclick="playmusic(),mute_47()"></a>
			</div><!--black-dino-16-->

			<div class="dino-audio-box green-dino-17">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Sarah</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_48" loop="loop" muted>
			        <source src="music/loop12.mp3" />
			    </audio>
				<a id="buttonmute_48" onclick="playmusic(),mute_48()"></a>
			</div><!---->

			<div class="dino-audio-box black-dino-17">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Zahir</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_49" loop="loop" muted>
			        <source src="music/loop13.mp3" />
			    </audio>
				<a id="buttonmute_49" onclick="playmusic(),mute_49()"></a>
			</div><!--green-dino-17-->

			<div class="dino-audio-box green-dino-18">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Shaii</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_50" loop="loop" muted>
			        <source src="music/loop14.mp3" />
			    </audio>
				<a id="buttonmute_50" onclick="playmusic(),mute_50()"></a>
			</div><!--black-dino-18-->

			<div class="dino-audio-box black-dino-18">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Zaki</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_51" loop="loop" muted>
			        <source src="music/loop15.mp3" />
			    </audio>
				<a id="buttonmute_51" onclick="playmusic(),mute_51()"></a>
			</div><!--black-dino-18-->

			<div class="dino-audio-box green-dino-19">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Siew Min</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_52" loop="loop" muted>
			        <source src="music/loop16.mp3" />
			    </audio>
				<a id="buttonmute_52" onclick="playmusic(),mute_52()"></a>
			</div><!--green-dino-19-->

			<div class="dino-audio-box black-dino-19">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Ser Young</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_53" loop="loop" muted>
			        <source src="music/loop17.mp3" />
			    </audio>
				<a id="buttonmute_53" onclick="playmusic(),mute_53()"></a>
			</div><!--black-dino-19-->

			<div class="dino-audio-box green-dino-20">
				<div class="red-box">
					<img src="css/img/symbol-wreath.png" alt="Christmas Wreath">
					<p class="dino-name">Annie</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_54" loop="loop" muted>
			        <source src="music/loop18.mp3" />
			    </audio>
				<a id="buttonmute_54" onclick="playmusic(),mute_54()"></a>
			</div><!--green-dino-20-->

			<div class="dino-audio-box black-dino-20">
				<div class="red-box">
					<img src="css/img/symbol-drum.png" alt="Christmas Drums">
					<p class="dino-name">Edmund</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_55" loop="loop" muted>
			        <source src="music/loop1.mp3" />
			    </audio>
				<a id="buttonmute_55" onclick="playmusic(),mute_55()"></a>
			</div><!--black-dino-20-->

			<div class="dino-audio-box green-dino-21">
				<div class="red-box">
					<img src="css/img/symbol-bell.png" alt="Christmas Bells">
					<p class="dino-name">Farhan</p>
				</div>

				<div class="dino-photo"></div>

				<audio id="audio_56" loop="loop" muted>
			        <source src="music/loop2.mp3" />
			    </audio>
				<a id="buttonmute_56" onclick="playmusic(),mute_56()"></a>
			</div><!--green-dino-21-->
			
			<?php echo $itemString; ?>
		</div><!--.dino-audio-wrapper-->

		<div class="btn-go-top-box">
			<a class="btn-go-top" id="btn-go-top"></a><!--.btn-go-top-->
		</div>

	</div><!--.dino-wrapper-->

<?php include 'footer.php';?>