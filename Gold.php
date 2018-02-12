 <?php
    $x = 0; 
    while(1) {
	$string =  file_get_contents('http://airdrop.sosmedpanel.com/srd/?code=koderefflu');
        echo $string."\n";
		$hasil = json_decode($string);
        $myFile = "gold.txt";
        $fh = fopen($myFile, 'a') or die ("can't open file");
        fwrite($fh, "/" .$hasil->inviteCode. "\r\n");
        fclose($fh);
}
?>
