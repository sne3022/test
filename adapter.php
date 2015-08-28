<?
interface MediaPlayer{
	public function play($audioType, $fileName);
}

interface AdvanceMediaPlayer{
	public function playVlc($fileName);
	public function playMp4($fileName);
}

class VlcPlayer implements AdvanceMediaPlayer{

	public function playVlc($fileName)
	{
		echo "Playing vlc file. Name:".$fileName."<br/>";
	}

	public function playMp4($fileName)
	{
		
	}
}

class Mp4Player implements AdvanceMediaPlayer{

	public function playVlc($fileName){
	
	}

	public function playMp4($fileName){
		echo "Playing mp4 file. Name:".$fileName."<br/>";
	}


}

class MediaAdapter implements MediaPlayer
{

	var $advancedMusicPlayer;
	
	public function __construct($audioType){

		if(strtolower($audioType)=="vlc"){
			$this->advancedMusicPlayer = new VlcPlayer();
		}
		else if(strtolower($audioType)=="mp4"){
			$this->advancedMusicPlayer = new Mp4Player();
		}
	}

	public function play($audioType, $fileName)
	{

		if(strtolower($audioType)=="vlc"){
			$this->advancedMmusicPlayer->playVlc($fileName);
		}
		else if(strtolower($audioType)=="mp4"){
			$this->advancedMmusicPlayer->playMp4($fileName);
		}
	}
}

class AudioPlayer implements MediaPlayer{
	var $mediaAdapter;

	public function play($audioType, $fileName)
	{
		if(strtolower($audioType)=="mp3"){
			echo "Playing mp3 file. Name: ". $fileName."<br/>";
		}

		else if(strtolower($audioType)=="vlc" || strtolower($audioType)=="mp4")
		{
			$this->mediaAdapter = new MediaAdapter($audioType);
			$this->mediaAdapter->play($audioType, $fileName);
		}

		else
		{
			echo "Invalid media. " .$audioType. " format not supported <br/>";
		}

	}
}

$audioPlayer =new AudioPlayer();
$audioPlayer->play("mp3", "beyond the horizon.mp3");
$audioPlayer->play("mp4", "alone.mp4");
$audioPlayer->play("vlc", "far far away.vlc");
$audioPlayer->play("avi", "mind me.avi");



