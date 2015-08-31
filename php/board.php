<?
interface Board
{
	public function getlist();	

	public function read($idx);

	public function write();
}

abstract class generaBoard implements Board
{
	var $pageCount = 10;
} 

abstract class ImageBoard implements Board
{
	var $pageCount = 6;
	var $ImageList = array();

	public function ImageCopy()
	{
		foreach($this->ImageList as $Image)
		{
			echo $Image." 이미지 복사 완료";
		}
	}

	public function addImage($image)
	{
		array_push($this->ImageList, $image);
	}

}

class noticeBoard extends generaBoard
{
	public function getlist()
	{
		return "noticeBoard list";
	}

	public function read($idx)
	{
		return "noticeBoard ".$idx." read";
	}

	public function write()
	{
		return "noticeBoard write";
	}
}

class imageGallery extends imageBoard
{
	public function getlist()
	{
		return "imageGallery list";
	}

	public function read($idx)
	{
		return "imageGallery ".$idx." read";
	}

	public function write()
	{
		return "imageGallery write";
	}
}


class boardManager
{
	var $boardList = array();
	
	public function addBoard(Board $board, $idx)
	{
		$this->boardList[$idx] = $board;
	}

	public function getlist($idx)
	{
		return $this->boardList[$idx]->getlist();
	}

	public function read($idx, $read_idx)
	{
		return $this->boardList[$idx]->read($read_idx);
	}

	public function write($idx)
	{
		return $this->boardList[$idx]->write();
	}

}

class boardBuilder
{

	public function BoardType1()
	{
		$boardManager = new boardManager();
		$boardManager->addBoard(new noticeBoard(), "notice");
		$boardManager->addBoard(new imageGallery(), "image");
		return $boardManager;
	}

	public function BoardType2()
	{
		$boardManager = new boardManager();
		$boardManager->addBoard(new imageGallery(), "gallery");
		$boardManager->addBoard(new noticeBoard(), "board");
		return $boardManager;
	}
}

	$boardBuilder = new boardBuilder();

	$boardType1 = $boardBuilder->BoardType1();
	$boardType2 = $boardBuilder->BoardType2();

	echo $boardType1->getlist("notice");
	echo "<br/>";
	echo $boardType1->read("image", 1);
    echo "<br/>";
	echo $boardType2->read("gallery", 2);
	echo "<br/>";
	echo $boardType2->write("board");
	echo "<br/>";

?>