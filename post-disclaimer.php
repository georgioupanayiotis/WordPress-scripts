<?
//Paste the following code in your single.php file, within the loop. Edited the text on line 7 as desired.

$ageunix = get_the_time('U');
$days_old_in_seconds = ((time() - $ageunix));
$days_old = (($days_old_in_seconds/86400));

if ($days_old > 365) {
  echo '<div class="disclaimer">DISCLAIMER: this post is older than one year and may not be up to date with latest WordPress version.</div>'; 
} 
?>
