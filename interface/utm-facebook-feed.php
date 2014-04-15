<?php
$access_token = "CAACEdEose0cBAAxaPghZAaajM535fwIqV38zejkQDjgfZAt1sHjnou2PE4FwjcioIsrs4xVy1er45HO3LawSovlxwkam3JI57kYCifCAP8MI6E3esU1Tet20vNybjJy8Eh3bMXzUNEpf9iQJrvWZApjgUbKrwDTRRln4buBRZACEMGJBqeZCQIPZBnzkuLDRLwE4vmy7NOlAZDZD";
$content = file_get_contents("https://graph.facebook.com/univteknologimalaysia?fields=feed&access_token=".$access_token);
$jsonResult = json_decode($content,true);
