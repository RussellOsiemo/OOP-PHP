<?php
class Song{
    public $songID;
    public $title;

}
$monster = new Song;
$monster ->songID = 1;
$monster ->title = "My Monster";

// var_dump($monster);

class Playlist{
    public $name;
    public $songs = [];

    //add songs to Playlist class
    public function addSongs($song){
      $this->songs[] = $song;

    }

}
$Myplaylist = new Playlist();
 $Myplaylist->name ="MUSICAL!";
 $Myplaylist->addSongs($monster);
 var_dump($Myplaylist->songs); 
 ?>