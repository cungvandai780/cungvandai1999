<?php
include 'curl.php';
include 'config.php';
$tokenlist = array('EAAAAAYsX7TsBAD9ghljFOdM1VVCblIZC5605GFuN03oZCSgfkaPH34cvgkIQ8DhwlwBrPaLQZB1tN9p6DpZC0cwDRwQgRzYHJpY0bwxyp7lyxy2pWZBG5KImoD9aWb2LJpoXIu2cfWy7Wrg5ti6nJjSM0kNwciGwjhlcA0lHlZCAZDZD','EAAAAAYsX7TsBAImncTHfCgzYiyzcrC14yvT4De9lewx44eD5oXZCKNpUlj7vF2UDcIZA9ios47IV7xplNxj4PB9sEchOKDdET0VX6hQ7Eo3s8ZA5ZADi1K2TZCSUQrIK89ZASLDk07xJYBzd5aaZAZCcwqCD0ob2JbyNUzUY7rS6ZBwZDZD','EAAAAAYsX7TsBAJIzZAc8l52h3XHgVKjQNZBUdsLS5E2k7YZB7ceRvsJv3j95oZA4oXo6yrkHaeoooTvLWZALqroafFcWYSkmaGgxkBde3k06az7sZAYAiNPThnHgbc5nxXs2trYMuHxOAXzeFMTetjRZAaZAd56jP0zTau6RX10pQQZDZD','EAAAAAYsX7TsBAFEcIxifhqRaY5IVFqwL67OScQmjGGuDJElBp0QfAMKxo7yVPhPUrXeyOG1VUwKcmSq6TGR27h0EVxN9To8VjzXikpMsaOgZBzryWvgyrOoh3cZCXaApUhM7KZC5cuiahkrP3jzsFN5gm0EsgoyY37VHtZBJJQZDZD','EAAAAAYsX7TsBAKHZCHXH3qX8oK2ZBOIAmwmchMHbmadyhcvQagqZBQibNeDCA67SgWlIs8QmCSjnN7LAysnIfTtSLg1SONw6PqToVZBoTAZCfyDU59FXQH3pqMKU6Js8IFgzydr1ZB3QEqUGkWkZClktuOVRkQhvwE5ZB6s4LathEwZDZD'); // B1: Get token iphone ở phương bách B2 Dán token Get token page ở http://chuyhiep.net/tokenpage/
$token = $tokenlist[rand(0,count($tokenlist)-1)]; 
$feed=json_decode(file_get_contents('https://graph.fb.me/'.$id_share.'/feed?access_token='.$token.'&limit=1'),true); // giơi han 1 id tus dau tien tren wall
for($i=0;$i<count($feed[data]);$i++){
$id = $feed[data][$i][id];  
$slshare = $feed[data][$i][shares][count]; // dem so luong share
} 
$share = explode("_", $id);
$iduser= $share[0];
$idstt= $share[1];  
if($slshare <= $limitshare){
echo post_data("https://graph.facebook.com/".$idstt."/sharedposts?access_token=".$token."&method=post");
}
?>
